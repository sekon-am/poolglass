<?php get_header(); ?>
	
	<div id="error-container" class="page_tpl">
		<div class="page_tpl-title"></div>
		<div class="page_tpl-content">
			<div class="page_tpl-content-markup">
				<div class="page_tpl-content-markup-inner">
					<div id="error_msg_container">
						<div id="error_msg"><?php echo str_by_lang('Cтраница не найдена, воспользуйтесь другими ссылками.', 'Page not found, use the other links.'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('bottom_menu'); ?>
	<?php get_template_part('calculator'); ?>

<?php get_footer(); ?>