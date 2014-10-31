<div id="calculator" class="page_tpl">
	<form id="calc_form" action="calc_mail.php" method="post">
		<div class="page_tpl-title"></div>
		<div id="calc_markup_fix" class="page_tpl-content">
			<div class="page_tpl-content-markup">
				<div id="calc_title">
					<div class="fpc_img fpc_icon4"></div>
					<p class="page_tpl-title-text"><?php echo str_by_lang('Калькулятор', 'Calculator'); ?></p>
					<p id="close_calc"><?php echo str_by_lang('Свернуть калькулятор', 'Hide calculator'); ?></p>
				</div>
				
				<div id="calc-main-line">
					<div id="calc_wd" class="calc_line_title"><div class="clt-text"><p><?php echo str_by_lang('Что делаем?', 'What do?'); ?></p></div></div>
					<div id="aq_type">
						<div class="aq_type_item">
							<div id="calc_type_icon_1" class="fm_img calc_wd_icon"><div class="calc_icon_hover"></div></div>
							<p class="calc_wd_title"><?php echo str_by_lang('Остекление стен', 'Glazed walls'); ?></p>
							<div id="aq_type_1" class="yes-no-btn yes-no-btn_wd"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div>
						<div class="aq_type_item">
							<div id="calc_type_icon_2" class="fm_img calc_wd_icon"><div class="calc_icon_hover"></div></div>
							<p class="calc_wd_title"><?php echo str_by_lang('Илюминатор', 'Porthole'); ?></p>
							<div id="aq_type_2" class="yes-no-btn yes-no-btn_wd"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div>
						<div class="aq_type_item">
							<div id="calc_type_icon_3" class="fm_img calc_wd_icon"><div class="calc_icon_hover"></div></div>
							<p class="calc_wd_title"><?php echo str_by_lang('Остекление дна', 'Glazing bottom'); ?></p>
							<div id="aq_type_3" class="yes-no-btn yes-no-btn_wd"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div>
					</div>
				</div>
				
				<div id="calc_form-ost" class="calc_line">
					<div id="calc_type-l2" class="calc_line_title calc_title_markup"><div class="clt-text"><p><?php echo str_by_lang('Форма остекления', 'Form glazing'); ?></p></div></div>
					<!-- CALC FORMS SET #1 -->
					<div id="calc-forms-set-1" class="forms_set">
						<div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Прямое остекление', 'Direct glazing'); ?></p>
							<div id="calc-forms-set_1-1" class="aq_types_small div_center"></div>
							<div id="aq_type_1-1" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div><div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Угловое остекление', 'Angular glazing'); ?></p>
							<div id="calc-forms-set_1-2" class="aq_types_small div_center"></div>
							<div id="aq_type_1-2" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div><div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Тройное остекление', 'Triple glazing'); ?></p>
							<div id="calc-forms-set_1-3" class="aq_types_small div_center"></div>
							<div id="aq_type_1-3" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div><div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Круглый иллюминатор', 'Round porthole'); ?></p>
							<div id="calc-forms-set_1-4" class="aq_types_small div_center"></div>
							<div id="aq_type_1-4" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div>	
					</div>
					<!-- CALC FORMS SET #2 -->
					<div id="calc-forms-set-2" class="forms_set">
						<div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Прямое остекление', 'Direct glazing'); ?></p>
							<div id="calc-forms-set_2-1" class="aq_types_small div_center"></div>
							<div id="aq_type_2-1" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div><div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Круглый иллюминатор', 'Round porthole'); ?></p>
							<div id="calc-forms-set_2-3" class="aq_types_small div_center"></div>
							<div id="aq_type_2-2" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div>	
					</div>
					<!-- CALC FORMS SET #3 -->
					<div id="calc-forms-set-3" class="forms_set">
						<div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Прямое остекление', 'Direct glazing'); ?></p>
							<div id="calc-forms-set_3-1" class="aq_types_small div_center"></div>
							<div id="aq_type_3-1" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div><div class="forms_set_item">
							<p class="calc_forms_title"><?php echo str_by_lang('Закругленные углы стекла', 'Rounded corners of glass'); ?></p>
							<div id="calc-forms-set_3-2" class="aq_types_small div_center"></div>
							<div id="aq_type_3-2" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
						</div>	
					</div>
	
				</div>
				
				<div id="calc_params" class="calc_line">
					
					<div id="calc_form_title" class="calc_line_title calc_title_markup"><div class="clt-text"><p><?php echo str_by_lang('Параметры бассейна', 'Parameters pool'); ?></p></div></div>
					
					<!-- CALC PARAMS SET #1 -->
					<div id="calc_params_set-1" class="calc_params_set">
					
						<div id="aq_shcheme_large-1-1" class="aq_shcheme_large"></div>
	
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-4"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Уровень воды по стеклу', 'Water level on the glass'); ?></p></div>
								<input class="aq_water_lv aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
						</ul>
						
					</div>
					
					<!-- CALC PARAMS SET #2 -->
					<div id="calc_params_set-2" class="calc_params_set">
						
						<div id="aq_shcheme_large-1-2" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-4"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Уровень воды по стеклу', 'Water level on the glass'); ?></p></div>
								<input class="aq_water_lv aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_form_joint aq_list_item aqlisti-large">
								<div class="circle-number circle-number-5"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Форма швов', 'Form seams'); ?></p></div>
								<ul class="aq_variants">
									<li class="aqv_item">
										<div class="aqvi-icon"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Угловая склейка', 'Corner bonding'); ?></p>
										<div id="aq_type_1-2-1" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
									<li class="aqv_item">
										<div class="aqvi-icon aqvi-v2"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Закругленный шов', 'Rounded seam'); ?></p>
										<div id="aq_type_1-2-2" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
									<li class="aqv_item">
										<div class="aqvi-icon aqvi-v3"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Опирание на бетон', 'Bearing on concrete'); ?></p>
										<div id="aq_type_1-2-3" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
								</ul>
							</li>
						</ul>
						
					</div>
					
					<!-- CALC PARAMS SET #3 -->
					<div id="calc_params_set-3" class="calc_params_set">
						
						<div id="aq_shcheme_large-1-3" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-4"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Уровень воды по стеклу', 'Water level on the glass'); ?></p></div>
								<input class="aq_water_lv aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_form_joint aq_list_item aqlisti-large">
								<div class="circle-number circle-number-5"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Форма швов', 'Form seams'); ?></p></div>
								<ul class="aq_variants">
									<li class="aqv_item">
										<div class="aqvi-icon"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Угловая склейка', 'Corner bonding'); ?></p>
										<div id="aq_type_1-3-1" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
									<li class="aqv_item">
										<div class="aqvi-icon aqvi-v2"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Закругленный шов', 'Rounded seam'); ?></p>
										<div id="aq_type_1-3-2" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
									<li class="aqv_item">
										<div class="aqvi-icon aqvi-v3"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Опирание на бетон', 'Bearing on concrete'); ?></p>
										<div id="aq_type_1-3-3" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
								</ul>
							</li>
						</ul>
	
					</div>
					
					<!-- CALC PARAMS SET #4 -->
					<div id="calc_params_set-4" class="calc_params_set">
						
						<div id="aq_shcheme_large-1-4" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-4"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Уровень воды по стеклу', 'Water level on the glass'); ?></p></div>
								<input class="aq_water_lv aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_form_joint aq_list_item aqlisti-large">
								<div class="circle-number circle-number-5"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Форма швов', 'Form seams'); ?></p></div>
								<ul class="aq_variants">
									<li class="aqv_item">
										<div class="aqvi-icon"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Угловая склейка', 'Corner bonding'); ?></p>
										<div id="aq_type_1-4-1" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
									<li class="aqv_item">
										<div class="aqvi-icon aqvi-v2"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Закругленный шов', 'Rounded seam'); ?></p>
										<div id="aq_type_1-4-2" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
									<li class="aqv_item">
										<div class="aqvi-icon aqvi-v3"></div>
										<p class="aqvi-title"><?php echo str_by_lang('Опирание на бетон', 'Bearing on concrete'); ?></p>
										<div id="aq_type_1-4-3" class="yes-no-btn div_center"><div class="ynb-slide"></div><div class="ynb-yes"><div class="ynb-no"></div></div></div>
									</li>
								</ul>
							</li>
						</ul>
						
					</div>
					
					<!-- CALC PARAMS SET #5 -->
					<div id="calc_params_set-5" class="calc_params_set">
						
						<div id="aq_shcheme_large-2-1" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-4"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Уровень воды по стеклу', 'Water level on the glass'); ?></p></div>
								<input class="aq_water_lv aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
						</ul>
						
					</div>
					
					<!-- CALC PARAMS SET #6 -->
					<div id="calc_params_set-6" class="calc_params_set">
						
						<div id="aq_shcheme_large-2-2" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-4"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
						</ul>
						
					</div>
					
					<!-- CALC PARAMS SET #7 -->
					<div id="calc_params_set-7" class="calc_params_set">
						
						<div id="aq_shcheme_large-3-1" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
						</ul>					
						
					</div>
					
					<!-- CALC PARAMS SET #8 -->
					<div id="calc_params_set-8" class="calc_params_set">
						
						<div id="aq_shcheme_large-3-2" class="aq_shcheme_large"></div>
						
						<ul class="aq_shcheme_params">
							<li class="aq_list_item">
								<div class="circle-number"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Длинна остекления', 'Length glazing'); ?></p></div>
								<input class="aq_length aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-2"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Высота остекления', 'Height glazing'); ?></p></div>
								<input class="aq_height aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
							<li class="aq_list_item">
								<div class="circle-number circle-number-3"></div><div class="aqli_title_conteiner"><p class="aqli_title"><?php echo str_by_lang('Ширина остекления', 'Width glazing'); ?></p></div>
								<input class="aq_width aqs_editbox aqs_editbox_markup" type="text" value="0" />
								<div class="aqli_val-type_container"><p class="aqli_val-type"><?php echo str_by_lang('см', 'cm'); ?></p></div>
							</li>
						</ul>				
						
					</div>
	
				</div>
				
				<div id="calc_send_msg" class="calc_line calc_markup_fix">
					<div id="calc_contacts" class="calc_line_title calc_title_markup"><div class="clt-text"><p><?php echo str_by_lang('Контакты', 'Contacts'); ?></p></div></div>
					
					<div id="calc_contacts_form">
						<div class="csm_item">
							<p class="csm_title"><?php echo str_by_lang('Ваш E-mail:', 'Your E-mail:'); ?></p>
							<input class="csm_editbox" type="text" id="calc_mail"/>
						</div>
						<div class="csm_item">
							<p class="csm_title"><?php echo str_by_lang('Контактное лицо:', 'Contact person:'); ?></p>
							<input class="csm_editbox" type="text" id="calc_name"/>
						</div>
						<div class="csm_item">
							<p class="csm_title"><?php echo str_by_lang('Ваш телефон:', 'Your phone:'); ?></p>
							<input class="csm_editbox" type="text" id="calc_tell"/>
						</div>
						
						<div id="calc_send_mail_btn" class="lbtn" onClick="CalcSendMail(); return false;" type="submit">
							<div class="lbtn_left"></div>
							<div class="lbtn_middle"><p class="lbtn_text"><?php echo str_by_lang('Отправить заявку', 'Submit a ticket'); ?></p></div>
							<div class="lbtn_right"></div>
						</div>
						
					</div>
					
				</div>
				
			</div>
		</div>
	</form>
</div>
<div id="msg_fadescreen"></div>
<div id="mail-msg-container">
	<div id="msg_type"></div>
	<div id="msg_info"><p></p></div>
	<div id="msg_text"><p id="msg_state"></p></div>
	<div id="confirm_mail_msg" class="lbtn"><div class="lbtn_left"></div><div class="lbtn_middle"><p class="lbtn_text"><?php echo str_by_lang('Закрыть', 'Close'); ?></p></div><div class="lbtn_right"></div></div>
</div>