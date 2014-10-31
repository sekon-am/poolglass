<div id="frontpage">
	
	<div id="pool_animation">
		
		<div class="pa_img" id="pa_img-1"></div>
		<div class="pa_img" id="pa_img-2"></div>
		
		<div id="pool_detail_list">
			<div class="pool_detail" id="pd_item-1"></div>
			<div class="pool_detail" id="pd_item-2"></div>
			<div class="pool_detail" id="pd_item-3"></div>
		</div>
		
	</div>
	
	<div id="column1" class="fp_column">
	<?php query_posts("page_id=59"); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1>
			<?php the_title(); ?>
			<?php if ( (current_user_can('editor')) || (current_user_can('administrator')) ) : ?>
				<a href="<?php echo get_edit_post_link(); ?>" target="_blank"><div class="fp_edit edit_icon"><div class="hover"></div></div></a>
			<?php endif; ?>
		</h1>
		<?php the_content(); ?>
	<?php endwhile; ?>
	</div>
	<div id="fp_vline"><div id="fp_vline_top" class="fp_vline_sprite"></div><div id="fp_vline_center" class="fp_vline_sprite"></div><div id="fp_vline_bottom" class="fp_vline_sprite"></div></div>
	<div id="column2" class="fp_column">
		<ul id="fp_content2">
		    
			<li>
				<a href="<?php echo str_by_lang('/category/posts-and-ideas-ru', '/category/posts-and-ideas-en/?lang=en'); ?>">
					<div class="fpc_img fpc_icon1"><div class="hover"></div></div>
					<div class="fpc_content">
						<h4 class="fpc_title"><?php echo str_by_lang('Статьи и Идеи', 'Articles and Ideas'); ?></h4><div class="title_arrow"></div>
						<p class="fpc_text"><?php echo str_by_lang('О прозрачном бассейне и перспективах остекления', 'When it comes to glass pools and glazing process'); ?>
					</div>
				</a>
			</li>
			
            <li>
                <a id="open-calculator" href="#calculator">
                    <div class="fpc_img fpc_icon4"><div class="hover"></div></div>
                    <div class="fpc_content">
                        <h4 class="fpc_title"><?php echo str_by_lang('Калькулятор', 'Calculator'); ?></h4><div class="title_arrow"></div>
                        <p class="fpc_text"><?php echo str_by_lang('Расчет стоимости остекления', 'Cost calculation'); ?></p>
                    </div>
                </a>
            </li>
            
            <li>
                <a href="<?php echo str_by_lang('/category/our-works-ru', '/category/our-works-en/?lang=en'); ?>">
                    <div class="fpc_img fpc_icon3"><div class="hover"></div></div>
                    <div class="fpc_content">
                        <h4 class="fpc_title"><?php echo str_by_lang('Наши работы', 'Our works'); ?></h4>
                        <p class="fpc_text"><?php echo str_by_lang('Реализованные проекты с остеклением', 'Completed projects with glazing'); ?></p>
                    </div>
                </a>
            </li>

            <li>
                <a href="<?php echo str_by_lang('/contacs', '/contacts/?lang=en'); ?>">
                    <div class="fpc_img fpc_icon2"><div class="hover"></div></div>
                    <div class="fpc_content">
                        <h4 class="fpc_title"><?php echo str_by_lang('Контакты', 'Contact information'); ?></h4><div class="title_arrow"></div>
                        <p class="fpc_text"><?php echo str_by_lang('Как найти нас и наших партнеров', 'Contact details of our partners and ours'); ?></p>
                    </div>
                </a>
            </li>
            
            <li>
                <a href="<?php echo str_by_lang('/category/pricing-ru', '/category/pricing-en/?lang=en'); ?>">
                    <div class="fpc_img fpc_icon5"><div class="hover"></div></div>
                    <div class="fpc_content">
                        <h4 class="fpc_title"><?php echo str_by_lang('Цены и Акции', 'Pricing'); ?></h4><div class="title_arrow"></div>
                        <p class="fpc_text"><?php echo str_by_lang('Прайс-листы на наши услуги и продукцию', 'Our prices and promotion actions'); ?></p>
                    </div>
                </a>
            </li>

		</ul>
	</div>
</div>
<?php get_template_part('calculator'); ?>