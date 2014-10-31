		</div>
		<div id="footer">
			<div id="footer_container">
				<a href="http://planetaneptuna.ru/" target="_blank" id="footer_logo"></a>
				<div id="footer_content">
					<ul id="contacts_footer">
						<li><?php echo str_by_lang('Тел', 'Tell'); ?>: <span class="c_green">+7 (495) 783-66-07</span></li>
						<li>E-mail: <a href="mailto:info@poolglass.ru" target="_blank" class="c_blue">info@poolglass.ru</a></li>
					</ul>
					<noindex><div id="metrics">
						
						<!-- METRIKA BEGIN -->
			
							<!-- Rating@Mail.ru counter -->				
							<div>
								
								<a href="http://yandex.ru/cy?base=0&amp;host=poolglass.ru" rel="nofollow"><img alt="Яндекс цитирования" border="0" height="31" src="http://www.yandex.ru/cycounter?poolglass.ru" width="88" /></a>&nbsp;
								
								<a href="http://top.mail.ru/jump?from=2215073"><img alt="Рейтинг@Mail.ru" height="18" src="http://dc.cc.b1.a2.top.mail.ru/counter?id=2215073;t=83" style="border:0;" width="88" /></a>
								
							<!-- begin of Top100 code -->
							
							<script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2729787"></script>
								<noscript><a href="http://top100.rambler.ru/navi/2729787/" rel="nofollow"><img src="http://counter.rambler.ru/top100.cnt?2729787" alt="Rambler's Top100" border="0" /></a></noscript>
							<!-- end of Top100 code -->
							
							<!--LiveInternet counter--><script type="text/javascript"><!--
							document.write("<a href='http://www.liveinternet.ru/click' "+
							"target=_blank><img src='//counter.yadro.ru/hit?t44.1;r"+
							escape(document.referrer)+((typeof(screen)=="undefined")?"":
							";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
							screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
							";"+Math.random()+
							"' alt='' title='LiveInternet' "+
							"border='0' width='31' height='31'><\/a>")
							//--></script><!--/LiveInternet-->
							
							</div>
							
							<!-- Yandex.Metrika counter -->
							<div style="display:none;"><script type="text/javascript">(function(w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter13009795 = new Ya.Metrika({id:13009795, enableAll: true, webvisor:true}); } catch(e) { } }); })(window, "yandex_metrika_callbacks");</script></div>
							<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
							<noscript><div><img src="//mc.yandex.ru/watch/13009795" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
							
							<!-- /Yandex.Metrika counter -->
							<script type="text/javascript">
							  var _gaq = _gaq || [];
							  _gaq.push(['_setAccount', 'UA-29787538-1']);
							  _gaq.push(['_trackPageview']);
							
							  (function() {
							    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
							    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
							  })();
							</script>
							
						<!-- METRIKA END -->
						
					</div>
				</div>
				<p id="copyr_info">&copy; <?php echo (date("Y")); ?> <a href="<?php bloginfo('url'); ?>" target="_self">poolglass.ru</a>. <?php echo str_by_lang('Все права защищены. Запрещено использование материалов сайта без согласия его авторов и обратной ссылки.', 'Website assets usage without permission of authors and references to source is forbidden.'); ?></p>
				<p id="dev_info"><a href="<?php bloginfo('url'); ?>/sitemap.xml" target="_blank"><?php echo str_by_lang('Карта сайта', 'Site map'); ?></a>&emsp;|&emsp;<?php echo str_by_lang('Разработано', 'Developed by'); ?> <a href="http://www.digithive.ru/" target="_blank">DigitHIVE</a></p></noindex>
			</div>
		</div>

	<?php if (is_home() || is_front_page()){ ?>
	</div>
	<?php } ?>

</div>
<?php wp_footer();?>
<!-- © <?php echo (date("Y")); ?> poolglass.ru Все права защищены. Запрещено использование материалов сайта без согласия его авторов и обратной ссылки. -->
</body>
</html>