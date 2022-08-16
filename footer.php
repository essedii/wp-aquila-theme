<?php

/**
 * Footer template
 *
 * @package Aquila
 */
?>


<footer id="site-footer" class="bg-light p-4">
	<div class="container color-gray">
		<div class="row">

			<section class="col-lg-4 col-md-6 col-sm-12">
				<?php if (is_active_sidebar('sidebar-2')) { ?>
					<aside>
						<?php dynamic_sidebar('sidebar-2'); ?>
					</aside>
				<?php } ?>
			</section>
			<section class="col-lg-4 col-md-6 col-sm-12">
				<ul class="d-flex">
					<li class="list-unstyled mx-2">
						<a href="https://www.instagram.com/" title="instagram">
							<svg width="24">
								<use href="#icon-instagram"></use>
							</svg>
						</a>
					</li>
					<li class="list-unstyled mx-2">
						<a href="https://www.twitter.com/" title="twitter">
							<svg width="24">
								<use href="#icon-twitter"></use>
							</svg>
						</a>
					</li>
					<li class="list-unstyled mx-2">
						<a href="https://linkedin.com/" title="linkedin">
							<svg width="24">
								<use href="#icon-linkedin"></use>
							</svg>
						</a>
					</li>
				</ul>
			</section>
		</div>
	</div>
</footer>
</div>
</div>
<?php
get_template_part('template-parts/content', 'svgs');
wp_footer();
?>
</body>

</html>