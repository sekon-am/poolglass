<?php get_header(); ?>
		<?php
			// КОНТАКТЫ, ПАРТНЕРЫ *************************************************************************
			if( is_page(str_by_lang(52, 1145)) ){
			?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="contacts" class="page_tpl">
						<div class="page_tpl-title">
							<div class="fpc_icon2 page_tpl-title-icon"></div>
							<p class="page_tpl-title-text"><?php the_title(); ?></p>
						</div>
						<div class="page_tpl-content">
							<div class="page_tpl-content-markup">
								<div class="page_tpl-content-markup-inner">
						            <?php the_content(); ?>
								<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
					
					<div id="contacts" class="page_tpl">
						<div class="page_tpl-title">
							<div class="fpc_icon8 page_tpl-title-icon"></div>
							<p class="page_tpl-title-text"><?php echo str_by_lang('Наши партнеры', 'Our partners'); ?></p>
						</div>
						<div class="page_tpl-content">
							<div class="page_tpl-content-markup">
								<div class="page_tpl-content-markup-inner">
								<?php query_posts('cat='.str_by_lang(19, 23).'&orderby=date&order=ASC'); ?>
								<?php
									$partner_counter = 1; 
									while ( have_posts() ) : the_post();
									if ($partner_counter == 1){
										$first_partner_style = ' style="background: none !important; margin-top -40px !important;"';
									} else { $first_partner_style = ''; }
									$partner_counter = 0; 
								?>
									<ul class="partner_container"<?php echo $first_partner_style; ?>>
										<li class="pc-item partner_location"><div><?php the_field('partner_town'); ?></div></li>
										<li class="pc-item partner_logo" <?php $get_logo = get_field('partner_logo'); if ($get_logo != ''){ ?>style="background-image: url(<?php echo $get_logo; ?>);"<?php } ?>></li>
										<li class="pc-item partner_short-info">
											<li class="psi_item-left"><div class="psi_middle"><strong><?php the_title(); ?></strong></div></li>
											<li class="psi_item-center">
												<div class="psi_middle"><?php the_field('partner_tell'); ?>
												<?php $get_mail = get_field('partner_mail'); if ($get_mail != ''){ ?><a href="mailto:<?php echo $get_mail; ?>" target="_blank"><?php echo $get_mail; ?></a><?php } ?>
												</div>
											</li>
											<li class="psi_item-right"><div class="psi_middle"><a href="<?php the_field('partner_url'); ?>" target="_blank" rel="nofollow"><?php the_field('partner_url_text'); ?></a></div></li>
										</li>
										<li class="pc-item partner_text"><div class="pt-marckup"><?php the_field('partner_description'); ?></div></li>
									</ul>
								<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
					
					<?php get_template_part('bottom_menu'); ?>
					<?php get_template_part('calculator'); ?>
			<?php
			} else { 
			?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="page_tpl">
						<div class="page_tpl-title">
							<?php 
								if ( is_page( array( str_by_lang(4, 1147), 
													 str_by_lang(14, 1144), 
													 str_by_lang(18, 1146)
													)) ){
									$cur_post_id = get_the_ID();
									$icon_selector = null;
									if ( $cur_post_id == str_by_lang(4, 1147) ){
										$icon_selector = ' id="fm_icon_1"';
									} 
									else if ( $cur_post_id == str_by_lang(14, 1144) ){
										$icon_selector = ' id="fm_icon_2"';
									}
									else if ( $cur_post_id == str_by_lang(18, 1146) ){
										$icon_selector = ' id="fm_icon_3"';
									}
								}
							?>
							<div<?php if ($icon_selector != null){ echo $icon_selector; } ?> class="page_tpl-title-icon"></div>
							<p class="page_tpl-title-text"><?php the_title(); ?></p>
						</div>
						<div class="page_tpl-content">
							<div class="page_tpl-content-markup">
								<div class="page_tpl-content-markup-inner">
									<?php if ( (current_user_can('editor')) || (current_user_can('administrator')) ) : ?>
										<a href="<?php echo get_edit_post_link(); ?>" target="_blank"><div class="post_static_edit edit_icon"><div class="hover"></div></div></a>
									<?php endif; ?>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
					<?php get_template_part('bottom_menu'); ?>
					<?php get_template_part('calculator'); ?>
				<?php endwhile; ?>
				<?php }	?>
<?php get_footer(); ?>