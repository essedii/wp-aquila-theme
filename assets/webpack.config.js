const path = require("path");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const cssnano = require("cssnano");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const { default: dist } = require("copy-webpack-plugin/dist");

const JS_DIR = path.resolve(__dirname, "src/js");
const IMG_DIR = path.resolve(__dirname, "src/img");
const BUILD_DIR = path.resolve(__dirname, "build");
const LIB_DIR = path.resolve(__dirname, "src/library");

const entry = {
  main: JS_DIR + "/main.js",
  single: JS_DIR + "/single.js",
};
const output = {
  path: BUILD_DIR,
  filename: "js/[name].js",
};

// const rules = [
//   {
//     test: /\.js$/,
//     include: [JS_DIR],
//     exclude: /node_modules/,
//     use: "babel-loader",
//   },
//   {
//     test: /\.scss$/,
//     exclude: /node_modules/,
//     use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
//   },
//   {
//     test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
//     use: {
//       loader: "file-loader",
//       options: {
//         name: "[path][name].[ext]",
//         publicPath: "production" === process.env.NODE_ENV ? "../" : "../../",
//       },
//     },
//   },
//   {
//     test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
//     type: "javascript/auto",
//     use: [
//       {
//         loader: "file-loader",
//         options: {
//           name: "[name].[ext]",
//           outputPath: "library",
//           publicPath: "fonts",
//         },
//       },
//     ],
//   },
//   {
//     test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
//     type: "asset/resource",
//     use: [
//       {
//         loader: "file-loader",
//         options: {
//           name: "[name].[ext]",
//           outputPath: "src",
//           publicPath: "img",
//         },
//       },
//     ],
//   },
// ];

const plugins = (argv) => [
  new CleanWebpackPlugin({
    cleanAfterEveryBuildPatterns: ["dist"],
  }),
  new MiniCssExtractPlugin({
    filename: "css/[name].css",
  }),
];

module.exports = (env, argv) => ({
  entry: entry,
  output: output,
  devtool: "source-map",
  module: {
    rules: [
      {
        test: /\.js$/,
        include: [JS_DIR],
        exclude: /node_modules/,
        use: "babel-loader",
      },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
        type: "javascript/auto",
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'library/fonts/',
            publicPath: '../fonts/'
          }
        }]
    },
    {
      test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
      exclude: [/fonts/],
      use: [{
        loader: 'file-loader',
        options: {
          name: '[name].[ext]',
          outputPath: 'library/img/',
          publicPath: '../img/'
        }
      }]
  }
      // {
      //   test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
      //   type: "javascript/auto",
      //   use: [
      //     {
      //       loader: "file-loader",
      //       options: {
      //         name: "[name].[ext]",
      //         outputPath: "library",
      //         publicPath: "../fonts",
      //       },
      //     },
      //   ],
      // },
    ],
  },

  plugins: plugins(argv),
  externals: "jQuery",
});
