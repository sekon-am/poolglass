<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<?php
wp_head();
if (!is_user_logged_in()) : ?>
<script type="text/javascript">var message="";function clickIE(){if(document.all){(message);return false}}function clickNS(e){if(document.layers||(document.getElementById&&!document.all)){if(e.which==2){(message);return false}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE}document.oncontextmenu=new Function("return false")</script>
<?php endif; ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="description" content="<?php

    $description = str_by_lang('Изготовление прозрачных бассейнов, подводных окон, иллюминаторов и остекление бассейнов', '---');
    
    $keywords = str_by_lang(
        'акpилoвыe вoдныe гopки, акpилoвыe гopки, бapнaя cтoйкa в бacceйнe, бacceйн нa кpышe, вoдныe гopки, гидpoизoляция бacceйнa, жeлeзoбeтoнныe чaши, иллюминaтop в бacceйнe, интepьep бacceйнa, кaтep co cтeклянным днoм, мoбильный бacceйн, нaпopнoe ocтeклeниe, окнo в бacceйнe, окнo пoд вoдoй, оcтeклeниe бacceйнa, офopмлeниe бacceйнa, пoдвoднoe oкнo, пoдвoдныe шoy, пoдъeмнoe днo в бacceйнe, пoлимepбeтoнныe дeкopaции, пpoзpaчнaя пepeгopoдкa в бacceйнe, пpoзpaчныe вoдныe гopки, пpoзpaчныe гopки, пpoзpaчный бacceйн, стeкляннaя кyпeль, стeкляннoe джaкyзи, стeклянный бacceйн, стeклянный бacceйн нa кaтepax, стeклянный бacceйн нa яxтax, уxoд зa aкpилoвым ocтeклeниeм, уxoд зa ocтeклeниeм, уxoд зa aкpилoм',
        '---'
    );
 
	if (is_page()) {
		if (get_field('meta-description', $post->ID) != ''){
			the_field('meta-description', $post->ID); 
		} else {
			echo $description;
		}
	} else if(is_single()){
		foreach (get_the_category() as $category);
		if (get_field('meta-description', $post->ID) != ''){
			the_field('meta-description', $post->ID); 
		} else if ($category->category_description != ''){
			echo $category->category_description; 
		} else {
			echo $description;
		}
	} else if(is_category()){
		if (category_description() != ''){
			echo category_description(); 
		} else {
			echo $description; 
		}
	} else { echo $description; }
?>" /> 
<meta name="keywords" content="<?php
	if (is_single() || is_page()){
		if (get_field('meta-keywords', $post->ID) != ''){
			the_field('meta-keywords', $post->ID); 
		} else {
			echo $keywords;
		}
	} else { echo $keywords; }
?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/png"/>
<meta name="google-site-verification" content="qcc_qsnEDIKHSREbezser-TGdkRNfNN3z2mLj0LzOLY" />
<!--Sepyra--><script type="text/javascript">var Grapery1=window.Grapery1||{sCode:13389};(function($){var d=document,w=window,e="addEventListener",a=d.createElement("script");$.r=!1;a.type="text/javascript";a.async=!0;a.charset="UTF-8";a.src="//storage.sepyra.com/gg1.js";d.getElementsByTagName("head")[0].appendChild(a);d[e]&&d[e]("DOMContentLoaded",function(){if($.r){return;}$.r=!0;w.__gG&&__gG(w);},!1);})(Grapery1);</script>
</head>
<body>
<!-- © <?php echo (date("Y")); ?> poolglass.ru Все права защищены. Запрещено использование материалов сайта без согласия его авторов и обратной ссылки. -->
<div id="<?php if (is_home() || is_front_page()){ echo 'main_bg_full'; } else { echo 'main_bg_short'; } ?>">
	
	<?php if (is_home() || is_front_page()){ ?>
		<div id="fp-bgs">
			<div id="mbgf-1" class="fp_bgimg"></div>
			<div id="mbgf-2" class="fp_bgimg"></div>
		</div>
		<div id="mcontent">
	<?php } ?>
		
		<a href="<?php bloginfo('url'); ?>" id="logo"><div class="hover"></div></a>
		<ul id="contacts_header">
			<li><?php echo str_by_lang('Тел', 'Tell'); ?>: <span class="ch_font_large c_green">+7 (495) 777-65-90</span></li>
			<li><?php echo str_by_lang('E-mail', 'E-mail'); ?>: <a href="mailto:info@poolglass.ru" target="_blank" class="ch_font_large c_blue">info@poolglass.ru</a></li>
		</ul>
		
		<?php languages_list(); ?>
	
		<ul id="fixed_menu">
			
			
			<li id="fm_item_1">
				<a href="<?php echo str_by_lang('/osteklenie-sten-basseyna', '/osteklenie-sten-basseyna/?lang=en'); ?>" class="fm_item">
					<div id="fm_1" class="fm_img"><div class="hover"></div></div>
					<p class="fm_title">
					    <?php echo str_by_lang('Остекление стен в бассейне', 'Pool walls glazing'); ?>
					</p>
				</a>
				<div class="fm_title_content">
					<div class="fmtc_top">
					    <h2 class="fmtc_title">
					       <?php echo str_by_lang('Остекление стен в бассейне', 'Pool walls glazing'); ?>
					    </h2>
				    </div>
					<div class="fmtc_middle">
						<div class="fmtc_middle_content">
						    <p><?php echo hyphen_words(
                                str_by_lang(
                                    'Благодаря прочностным характеристикам акрила, мы можем использовать его как часть конструктива бассейна, в данном случае, опирание на бетон осуществляется на три стороны. Данный прием придает неповторимость вашего бассейна, обзор заметно увеличивается и возникает ощущение, что вода просто стоит в пространстве безовсяких преград', 
                                    'We offer pool walls glazing – a new product in the world market of swimming pool construction. Due to high strength properties of acrylic, our experts use it as a structural element of the pool. It is rested on concrete pool basin on three sides with the help of pressure-tight joints. The upper edge remains free'
                                )
                            ); ?>&hellip;</p>
							<div style="margin-top: 15px;">
								<img src="<?php bloginfo('template_url'); ?>/images/mm_post1_01.jpg" width="137" height="91" style="margin-right: 6px; float: left;">
								<img src="<?php bloginfo('template_url'); ?>/images/mm_post1_02.jpg" width="137" height="91" style="float: left;">
							</div>
							</div>
					</div>
					<div class="fmtc_bottom">
					    <a href="<?php echo str_by_lang('/osteklenie-sten-basseyna', '/osteklenie-sten-basseyna/?lang=en'); ?>" class="fmtc_readmore_conteiner">
    					    <span class="fmtc_readmore"><?php echo str_by_lang('Читать подробнее', 'Read more'); ?></span>
    					    <div class="fmtc_rm_arrow"></div>
					    </a>
				    </div>
				</div>
			</li>
			
			
			<li id="fm_item_2">
				<a href="<?php echo str_by_lang('/illuminator-v-basseyne', '/illuminator-v-basseyne/?lang=en'); ?>" class="fm_item">
					<div id="fm_2" class="fm_img"><div class="hover"></div></div><p class="fm_title">
					    <?php echo str_by_lang('Иллюминатор в бассейне', 'A swimming pool porthole'); ?>
					</p>
				</a>
				<div class="fm_title_content">
					<div class="fmtc_top">
					    <h2 class="fmtc_title">
					        <?php echo str_by_lang('Иллюминатор в бассейне', 'A swimming pool porthole'); ?>
					    </h2>
					</div>
					<div class="fmtc_middle">
						<div class="fmtc_middle_content">
							<p><?php echo hyphen_words(
                                str_by_lang(
                                    'Иллюминатор ОДИН метр в диаметре!?  Пожалуй, это единственное, что можно было предложить Вам 5 лет назад. Сейчас мы готовы реализовать любую Вашу идею в области эксклюзивного бассейностроения, с применением акриловых элементов', 
                                    'A swimming pool porthole one meter in diameter? Perhaps, that’s the only alternative that could be offered five years ago. Nowadays we are ready to implement any of your ideas concerning exclusive pool construction with the help'
                                )
                            ); ?>&hellip;</p>
							<div style="margin-top: 15px;">
								<img src="<?php bloginfo('template_url'); ?>/images/mm_post2_01.jpg" width="137" height="91" style="margin-right: 6px; float: left;">
								<img src="<?php bloginfo('template_url'); ?>/images/mm_post2_02.jpg" width="137" height="91" style="float: left;">
							</div>
						</div>
					</div>
					<div class="fmtc_bottom">
					    <a href="<?php echo str_by_lang('/illuminator-v-basseyne', '/illuminator-v-basseyne/?lang=en'); ?>" class="fmtc_readmore_conteiner">
                            <span class="fmtc_readmore"><?php echo str_by_lang('Читать подробнее', 'Read more'); ?></span>
                            <div class="fmtc_rm_arrow"></div>
					    </a>
					    </div>
				</div>
			</li>
			
			
            <li id="fm_item_3">
                <a href="<?php echo str_by_lang('/osteklenie-dna-basseyna', '/osteklenie-dna-basseyna/?lang=en'); ?>" class="fm_item">
                    <div id="fm_3" class="fm_img"><div class="hover"></div></div><p class="fm_title">
                        <?php echo str_by_lang('Остекление дна в бассейне', 'Pool bottom glazing'); ?>
                    </p>
                </a>
                <div class="fm_title_content">
                    <div class="fmtc_top">
                        <h2 class="fmtc_title">
                            <?php echo str_by_lang('Остекление дна в бассейне', 'Pool bottom glazing'); ?>
                        </h2>
                    </div>
                    <div class="fmtc_middle">
                        <div class="fmtc_middle_content">
                            <p><?php echo hyphen_words(
                                str_by_lang(
                                    'Максимально эфектным видом акрилового остекления, - это остекление дна бассейна. Вид плывущего человека в толще воды над Вашей головой ошеломляющий. Сразу возникает вопрос: возможно ли такое... Да возможно, ведь мы работаем с акрилом, - уникальным материалом, легким как пух и прочным как сталь', 
                                    'If you decided to bring some unique touch to your house, restaurant, hotel or a day spa, then it is safe to say that acrylic glazing is what you need. The most spectacular and impressive kind of acrylic surface is acrylic pool bottom. The view of a man swimming in the water above your head is amazing'
                                )
                            ); ?>&hellip;</p>
                            <div style="margin-top: 15px;">
                                <img src="<?php bloginfo('template_url'); ?>/images/mm_post3_01.jpg" width="137" height="91" style="margin-right: 6px; float: left;">
                                <img src="<?php bloginfo('template_url'); ?>/images/mm_post3_02.jpg" width="137" height="91" style="float: left;">
                            </div>
                        </div>
                    </div>
                    <div class="fmtc_bottom">
                        <a href="<?php echo str_by_lang('/osteklenie-dna-basseyna', '/osteklenie-dna-basseyna/?lang=en'); ?>" class="fmtc_readmore_conteiner">
                            <span class="fmtc_readmore"><?php echo str_by_lang('Читать подробнее', 'Read more'); ?></span>
                            <div class="fmtc_rm_arrow"></div>
                        </a>
                        </div>
                </div>
            </li>
			
			
		</ul>

		<div id="content">