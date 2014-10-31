<?php get_header(); ?>

<?php
	$current_cat_array = get_the_category();
	$current_cat = $current_cat_array[0]->cat_ID;

	// Статьи и Идеи, Наши работы
	if ( ($current_cat == str_by_lang(2, 24)) || ($current_cat == str_by_lang(4, 22)) ){
?>
	<div class="page_tpl">
		<div class="page_tpl-title">
			<div id="main_cat_icon" class="cat_tpl-title-icon"></div>
			<p class="page_tpl-title-text"><?php single_cat_title( $prefix = '', $display = true );  ?></p>
		</div>
		<div class="page_tpl-content">
			<div class="page_tpl-content-markup">
				<div class="page_tpl-content-markup-inner">
					<div class="cat_description"><?php echo category_description(); ?></div>
					<?php while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<ul class="cat_item_container">
								<li class="cat_thumb" style="background-image: url(<?php the_field("cat_thumb"); ?>);"></li>
								<li class="cat_item_shadow"><div class="cat_shadow_hover"></div></li>
								<li class="post-in-cat_title"><?php the_title(); ?></li>
							</ul>
						</a>
					<?php endwhile; ?>
				</div>
				<div class="cat-bottom-info">
				    <p><?php echo str_by_lang(
				    'Решения за рамками обычного, - именно этот девиз компании «Планета Нептуна» определил дальнейшие условия нашего развития и возможность участия в уникальных и инновационных  проектах.', 
				    'Beyond the ordinary ideas – for Planeta Neptuna Company this motto determined the preconditions for development and the ability to participate in unique and innovative projects.'); 
				    ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('bottom_menu'); ?>
	<?php get_template_part('calculator'); ?>
<?php
	// Цены и Акции
	} else if (
    ($current_cat == str_by_lang(20, 25)) ||
    ($current_cat == str_by_lang(18, 27)) ||
    ($current_cat == str_by_lang(17, 26))
){
?>
    <div class="page_tpl">
        <div class="page_tpl-title">
            <div class="fpc_icon6 page_tpl-title-icon"></div>
            <p class="page_tpl-title-text"><?php echo str_by_lang('Акции', 'Promotions'); ?></p>
        </div>
        <div class="page_tpl-content">
            <div class="page_tpl-content-markup">
                <div class="page_tpl-content-markup-inner">
                    <?php query_posts('cat='.str_by_lang(17, 26).'&orderby=date&order=DESC'); ?>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <ul class="cat_item_container">
                                <li class="cat_thumb" style="background-image: url(<?php the_field("cat_thumb"); ?>);"></li>
                                <li class="cat_item_shadow"><div class="cat_shadow_hover"></div></li>
                                <li class="post-in-cat_title"><?php the_title(); ?></li>
                            </ul>
                        </a>
                    <?php endwhile; ?>
                    <div class="page_inner_content">
                        <?php if ( (current_user_can('editor')) || (current_user_can('administrator')) ) : ?>
                            <a href="<?php echo get_edit_post_link(str_by_lang(207, 1149)); ?>" target="_blank"><div class="post_akcii edit_icon"><div class="hover"></div></div></a>
                        <?php endif; ?>
                        <?php the_field("content_stock", str_by_lang(207, 1149)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_tpl">
        <div class="page_tpl-title">
            <div class="fpc_icon7 page_tpl-title-icon"></div>
            <p class="page_tpl-title-text"><?php echo str_by_lang('Цены', 'Prices'); ?></p>
        </div>
        <div class="page_tpl-content">
            <div class="page_tpl-content-markup">
                <div class="page_tpl-content-markup-inner">
                    <div class="page_inner_content">
                    <?php if ( (current_user_can('editor')) || (current_user_can('administrator')) ) : ?>
                        <a href="<?php echo get_edit_post_link(); ?>" target="_blank"><div class="post_price edit_icon"><div class="hover"></div></div></a>
                    <?php endif; ?>
                    <?php the_field("content_price", str_by_lang(207, 1149)); ?></div>
                </div>
                <?php query_posts('cat='.str_by_lang(18, 27).'&orderby=date&order=DESC'); $counter_price = 0; ?>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            if ($counter_price == 0){ ?><div class="sdt_firstline"></div><?php $counter_price++; }
                            $get_icon_price = get_field('price_icon');
                            if ( ($get_icon_price == '') || ($get_icon_price == null) ){
                                $get_icon_price = get_template_directory_uri().'/images/standart-icon-price.png';
                            }
                        ?>
                        <div class="slidedown_title"><div class="icon_price" style="background-image: url(<?php echo $get_icon_price; ?>);"></div><p class="sdt_text"><?php the_title(); ?></p></div>
                    </a>
                <?php endwhile; ?>
                <div class="cat-bottom-info"><p><?php echo str_by_lang(
                "В случае отсутствия в прайс листе необходимых размеров остекления, воспользуйтесь калькулятором для вычисления стоимости изготовления прозрачного бассейна, или свяжитесь с нашими менеджерами то телефону: +7 (495) 783-66-07",
                "In case the price list doesn't contain the glazing sizes you want, use the calculator in order to figure up the manufacturing cost of a transparent pool, or contact our managers for more details: +7 (495) 783-66-07"
                ); ?></p></div>
            </div>
        </div>
    </div>
    <?php get_template_part('bottom_menu'); ?>
    <?php get_template_part('calculator'); ?>
<?php } ?>

<?php get_footer(); ?>