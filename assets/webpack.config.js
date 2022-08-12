const path = require("path");
const CopyPlugin = require("copy-webpack-plugin"); // https://webpack.js.org/plugins/copy-webpack-plugin/

const { CleanWebpackPlugin } = require("clean-webpack-plugin");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const { default: dist } = require("copy-webpack-plugin/dist");
const JS_DIR = path.resolve(__dirname, "src/js");
const IMG_DIR = path.resolve(__dirname, "src/img");
const BUILD_DIR = path.resolve(__dirname, "build");
const LIB_DIR = path.resolve(__dirname, "src/library");
const SRC_DIR = path.resolve(__dirname, "src");

const entry = {
  main: JS_DIR + "/main.js",
  single: JS_DIR + "/single.js",
  frontpage: JS_DIR + "/frontpage.js",
  editor: JS_DIR + "/editor.js",
};
const output = {
  path: BUILD_DIR,
  filename: "js/[name].js",
  clean: true,
};

const plugins = (argv) => [
  new CleanWebpackPlugin({
    cleanStaleWebpackAssets: "production" === argv.mode, // Automatically remove all unused webpack assets on rebuild, when set to true in production. ( https://www.npmjs.com/package/clean-webpack-plugin#options-and-defaults-optional )
  }),

  new MiniCssExtractPlugin({
    filename: "css/[name].css",
  }),

  new CopyPlugin({
    patterns: [{ from: LIB_DIR, to: BUILD_DIR + "/library" }, {from: SRC_DIR + "/img", to: BUILD_DIR + "/src/img" }],
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
        test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
        exclude: /library/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[path][name].[ext]',
            publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
          }
        }
      },
      {
        test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,

        type: "javascript/auto",
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "library/fonts/",
              publicPath: "../fonts/",
            },
          },
        ],
      },

      // {
      //   test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
      //   exclude: [/fonts/],
      //   use: [
      //     {
      //       loader: "file-loader",
      //       options: {
      //         name: "[name].[ext]",
      //         outputPath: "src/img/",
      //         publicPath: "../img/",
      //       },
      //     },
      //   ],
      // },
    ],
  },
  plugins: plugins(argv),
});
