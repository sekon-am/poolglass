        <div class="page_tpl-title">
            <div class="fpc_icon6 page_tpl-title-icon"></div>
            <p class="page_tpl-title-text"><?php echo str_by_lang('Акции', 'Promotions'); ?></p>
        </div>
		<div class="action-description">
			<div class="action-descr">Скидка на каждое уникальное изделие – 100 000 руб.!!!</div>
			<div class="action-title">Зимнее предложение от PoolGlass</div>
			<div class="action-terms">(действует до 28.02.2015)</div>
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
                                <li class="post-in-cat_title a-bit-bigger"><?php the_title(); ?></li>
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
