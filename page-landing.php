<?php
/*
 Template Name: Landing Page
 */

get_header();

?>
<body>
      <div class="landing_main_wrapper">
         <div class="landing_header">
            <div class="landing_wrapper">
               <a href="<?php echo get_site_url(); ?>" class="landing_mobile_menu_icon js_show_mobile_menu"></a>
               <a class="landing_logo" href="<?php echo get_site_url(); ?>">
               Parttime.vn
               </a>
               <ul class="landing_menu">
                  <li class="landing_menu_element">
                     <a class="landing_menu_link" href="<?php echo get_site_url(); ?>/areas-of-activity">Mẫu vị trí tuyển dụng</a>
                  </li>
                  <li class="landing_menu_element">
                     <a class="landing_menu_link with_dropdown js_contact_link" href="<?php echo get_site_url(); ?>">Liên lạc</a>
                     <div class="contact_popup js_contact_popup">
                        <div class="contact_popup_item">
                           <span class="contact_popup_item_heading">
                           Email:
                           </span>
                           <span class="contact_popup_item_content">
                           <a href="mailto:support@parttime.vn">support@parttime.vn</a>
                           </span>
                        </div>
                        <div class="contact_popup_item">
                           <span class="contact_popup_item_heading">
                           Phone:
                           </span>
                           <span class="contact_popup_item_content">
                           <a href="tel:02871099168">
                           02871099168
                           </a>
                           </span>
                        </div>
			<div class="contact_popup_item">
                           <span class="contact_popup_item_heading">
                           Hỗ trợ:
                           </span>
                           <span class="contact_popup_item_content">
                           <a target="_blank" href="http://support.parttime.vn">
                           Trung tâm trợ giúp
                           </a>
                           </span>
                        </div>
                     </div>
                  </li>
                  <li class="landing_menu_element">
                     <a class="landing_menu_link" target="_blank" href="//parttime.vn">Tôi muốn tìm việc</a>
                  </li>
	          <li class="landing_menu_element">
                     <a target="_blank" class="landing_menu_link" href="//blog.parttime.vn">Blog</a>
                  </li>
                  <li class="landing_menu_element">
                     <a class="landing_menu_link" href="http://go.parttime.vn/create-job-request">Đăng tuyển</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="landing_header for_scrolling js_landing_hidden_header">
            <div class="landing_wrapper">
               <a href="<?php echo get_site_url(); ?>" class="landing_mobile_menu_icon js_show_mobile_menu"></a>
               <a class="landing_logo" href="<?php echo get_site_url(); ?>">
               Parttime.vn
               </a>
               <ul class="landing_menu">
                  <li class="landing_menu_element">
                     <a class="landing_menu_link" href="<?php echo get_site_url(); ?>/areas-of-activity">Mẫu vị trí tuyển dụng</a>
                  </li>
                  <li class="landing_menu_element">
                     <a class="landing_menu_link with_dropdown js_contact_link" href="<?php echo get_site_url(); ?>">Liên lạc</a>
                     <div class="contact_popup js_contact_popup">
                        <div class="contact_popup_item">
                           <span class="contact_popup_item_heading">
                           Email:
                           </span>
                           <span class="contact_popup_item_content">
                           <a href="">support@parttime.vn</a>
                           </span>
                        </div>
                        <div class="contact_popup_item">
                           <span class="contact_popup_item_heading">
                           Phone:
                           </span>
                           <span class="contact_popup_item_content">
                           <a href="tel:02871099168">
                           02871099168
                           </a>
                           </span>
                        </div>
			<div class="contact_popup_item">
                           <span class="contact_popup_item_heading">
                           Hỗ trợ:
                           </span>
                           <span class="contact_popup_item_content">
                           <a target="_blank" href="http://support.parttime.vn">
                           Trung tâm trợ giúp
                           </a>
                           </span>
                        </div>
                     </div>
                  </li>
				  <?php /*
                  <li class="landing_menu_element">
                     <a href="<?php echo get_site_url(); ?>#" class="landing_menu_link">
                     <a class="landing_menu_link" href="//parttime.vn">Tôi muốn tìm việc</a>
                     </a>
                  </li> */
				  ?>
                  <li class="landing_menu_element">
                     <a target="_blank" class="landing_menu_link" href="//blog.parttime.vn">Blog</a>
                  </li>
                  <li class="landing_menu_element">
                     <a class="landing_menu_link_button" href="http://go.parttime.vn/create-job-request">Đăng tuyển</a>
                  </li>
               </ul>
            </div>
         </div>
         <section class="landing_top_section ">
            <div class="landing_wrapper">
               <h1 class="landing_top_section_title">
                  Bạn cần tuyển nhân sự parttime?
               </h1>
               <ul class="landing_top_section_list">
                  <li class="landing_top_section_list_element">
                     <span class="sprite sprite_check_blue"></span>
                     Chọn các mẫu vị trí tuyển dụng & Gởi yêu cầu
                  </li>
                  <li class="landing_top_section_list_element">
                     <span class="sprite sprite_check_blue"></span>
                     Chúng tôi giúp bạn phỏng vấn, hợp đồng và các thủ tục hành chính
                  </li>
                  <li class="landing_top_section_list_element">
                     <span class="sprite sprite_check_blue"></span>
                     Chúng tôi là "bộ phận nhân sự" đáng tin cậy của bạn
                  </li>
               </ul>
               <a class="landing_top_section_cta" href="http://go.parttime.vn/create-job-request">Đăng tuyển</a>
               <div class="sprite sprite_companies_banner_uk"></div>
            </div>
         </section>
         <section class="landing_tilted_section for_areas_of_activity">
            <div class="landing_tilted_content">
               <div class="landing_wrapper">
                  <h2 class="landing_heading centered">
                     Các vị trí công việc
                  </h2>
                  <p class="landing_paragraph centered">
                     Hãy chọn vị trí mà bạn đang tuyển theo nhóm công việc bên dưới, chúng tôi hỗ trợ bạn tuyển dụng nhanh chóng. Chúng tôi là chuyên gia trong lĩnh vực việc làm parttime.
                  </p>
                  <?php
                        $categories = get_terms( array(
                                'orderby' => 'ID',
                                'taxonomy' => 'jobtemplate_category',
                                'order'   => 'ASC',
                                'hide_empty' => 0 
                              ) );
                  ?>
                  <div class="landing_areas_of_activity_wrapper">
                     <ul class="landing_areas_of_activity js_areas_wrapper second_areas">
                                <?php
                                foreach($categories as $key => $category) {
                                    if($category->name === 'Uncategorized')
                                        continue;
                                $color_start = get_field('color_start', $category);
                                $icon = get_field('icon', $category);
                                $args = array(
                                        'posts_per_page'   => 5,
                                        'offset'           => 0,
                                        'tax_query' => array(
                                          array(
                                            'taxonomy' => 'jobtemplate_category',
                                            'field' => 'term_id',
                                            'terms' => $category->term_id, // Where term_id of Term 1 is "1".
                                            'include_children' => false
                                          )
                                          ),
                                        'post_type'        => 'job_template',
                                        'post_mime_type'   => '',
                                        'post_parent'      => '',
                                        'author'	   => '',
                                        'author_name'	   => '',
                                        'orderby' => 'ID',
                                'order'   => 'ASC',
                                        'post_status'      => 'publish',
                                        'suppress_filters' => true 
                                      );
                                      $posts_array = get_posts( $args );
                                ?>
                              <li class="landing_area_of_activity">
                              <span class="landing_area_of_activity_badge sprite <?php echo $icon; ?>"></span>
                              <h3 class="landing_area_of_activity_title">
                                 <?php echo $category->name; ?>
                              </h3>
                              <ul class="landing_area_of_activity_employments_list">
                              <?php 
                              foreach($posts_array as $post) {
                                ?>
                                <li class="landing_area_of_activity_employments_list_element">
                                    <span class="landing_area_of_activity_check logistics"></span>
                                    <?php echo $post->post_title; ?>
                                 </li>
                                <?php
                              }
                              ?>
                                 
                              </ul>
                              <a class="landing_area_of_activity_link" href="<?php echo get_site_url(); ?>/areas-of-activity#<?php echo $category->slug; ?>">Xem thêm</a>
                           </li>
                              
                              <?php 
                                }
                               ?>
                        
                     </ul>
                  </div>
                  <ul class="landing_areas_of_activity_buttons for_desktop">
                     <li data-show="first_areas" class="landing_areas_of_activity_button js_loop_areas"></li>
                     <li data-show="second_areas" class="landing_areas_of_activity_button js_loop_areas selected"></li>
                     <li data-show="third_areas" class="landing_areas_of_activity_button js_loop_areas"></li>
                  </ul>
                  <ul class="landing_areas_of_activity_buttons for_mobile">
                     <li class="landing_areas_of_activity_button js_loop_mobile_areas selected"></li>
                     <li class="landing_areas_of_activity_button js_loop_mobile_areas "></li>
                     <li class="landing_areas_of_activity_button js_loop_mobile_areas "></li>
                     <li class="landing_areas_of_activity_button js_loop_mobile_areas "></li>
                     <li class="landing_areas_of_activity_button js_loop_mobile_areas "></li>
                     <li class="landing_areas_of_activity_button js_loop_mobile_areas "></li>
                  </ul>
               </div>
            </div>
         </section>
         <section class="landing_qualified_employees landing_tilted_section for_qualified_employees">
            <div class="landing_tilted_content">
               <div class="landing_wrapper">
                  <div class="landing_text_block">
                     <h2 class="landing_heading">
                        Tuyển dụng đáng tin cậy
                     </h2>
                     <p class="landing_paragraph">
                        Tuyển dụng trực quan với hồ sơ, video ứng viên rõ ràng và những nhận xét từ đồng nghiệp cũ của họ giúp cho bạn có nguồn thông tin đáng tin cậy.
                        <a class="landing_start_link" href="http://go.parttime.vn/create-job-request/">Đăng tuyển ngay &#8250;</a>
                     </p>
                  </div>
                  <img class="landing_qualified_employees_image" src="<?php echo get_template_directory_uri(); ?>/assets/landing/qualified_employees.png" alt="Ứng tiên năng động, tiềm năng" />
               </div>
            </div>
         </section>
         <section class="landing_wrapper landing_services">
            <ul class="landing_services_list">
               <li class="landing_service">
                  <div class="landing_service_icon_wrapper">
                     <span class="sprite sprite_icon_interviews"></span>
                  </div>
                  <span class="landing_service_text">
                  Trả lời phỏng vấn bằng video
                  </span>
               </li>
               <li class="landing_service">
                  <div class="landing_service_icon_wrapper">
                     <span class="sprite sprite_icon_tests"></span>
                  </div>
                  <span class="landing_service_text">
                  Đánh giá các kỹ năng dễ dàng
                  </span>
               </li>
               <li class="landing_service">
                  <div class="landing_service_icon_wrapper">
                     <span class="sprite sprite_icon_id_verification"></span>
                  </div>
                  <span class="landing_service_text">
                  Xác thực hồ sơ
                  </span>
               </li>
               <li class="landing_service">
                  <div class="landing_service_icon_wrapper">
                     <span class="sprite sprite_icon_training"></span>
                  </div>
                  <span class="landing_service_text">
                  Hỗ trợ huấn luyện & Đào tạo
                  </span>
               </li>
            </ul>
            <div class="landing_text_block right_sided">
               <h2 class="landing_heading">
                  Tuyển chọn nhanh chóng
               </h2>
               <p class="landing_paragraph">
		  Chúng tôi có đội ngũ chuyên gia đa lĩnh vực, đảm bảo mang đến cho bạn giải pháp toàn diện cho việc tuyển dụng nhân sự parttime.
                  <a class="landing_start_link" href="http://go.parttime.vn/create-job-request">Đăng tuyển &#8250;</a>
               </p>
            </div>
         </section>
         <section class="landing_digitalized_process landing_tilted_section for_digitalized_process">
            <div class="landing_tilted_content">
               <div class="landing_wrapper">
                  <div class="landing_text_block">
                     <h2 class="landing_heading">
                        Ứng dụng công nghệ
                     </h2>
                     <p class="landing_paragraph">
                        Chúng tôi đảm nhiệm hợp đồng lao động, trả lương, các phụ phí và xuất hóa đơn cho bạn với mọi thông tin rõ ràng và minh bạch. Bạn có thể xem, quản lý từ xa để thấy rõ được mọi thông tin về nguồn lực thuê parttime.
                        <a class="landing_start_link" href="http://go.parttime.vn/create-job-request">Đăng tuyển &#8250;</a>
                     </p>
                  </div>
                  <img class="landing_digitalized_process_image for_uk" src="<?php echo get_template_directory_uri(); ?>/assets/landing/site_screenshot_vn.png" alt="Hệ thống quản lý nhân sự parttime" />
               </div>
            </div>
         </section>
		 <?php /*
         <section class="landing_rates">
            <div class="landing_wrapper">
               <h2 class="landing_heading centered light">
                  Chúng tôi cung cấp dịch vụ
               </h2>
               <p class="landing_paragraph centered light">
                  Save up to 32% on total labor expenses.
               </p>
            </div>
            <div class="landing_rates_list_wrapper">
               <ul class="landing_rates_list">
                  <li class="landing_rate recommended">
                     <h3 class="landing_rate_title for_ett">
                        STAFFING
                     </h3>
                     <p class="landing_rate_explanation">
                        We will hire the workers for you and will take care of the payroll.
                     </p>
                     <a class="landing_rate_button" href="http://go.parttime.vn/create-job-request">Đặt tuyển</a>
                  </li>
                  <li class="landing_rate ">
                     <h3 class="landing_rate_title for_freelance">
                        CONTRACTOR
                     </h3>
                     <p class="landing_rate_explanation">
                        We will hire the workers for you and will take care of the payroll.
                     </p>
                     <a class="landing_rate_button" href="http://go.parttime.vn/create-job-request">Đặt tuyển</a>
                  </li>
               </ul>
            </div>
         </section>
         <section class="landing_tilted_section for_success_stories">
            <div class="landing_tilted_content for_success_stories">
               <div class="landing_success_stories landing_wrapper">
                  <h2 class="landing_heading centered">
                     Success stories
                  </h2>
               </div>
               <div class="landing_success_stories_list_wrapper">
                  <ul class="landing_success_stories_list js_stories_wrapper">
                     <li class="landing_success_story">
                        <a href="success_stories/starlite.html" class="landing_success_story_link">
                           <img class="landing_success_story_image" src="assets/landing/success_story_starlite.png" alt="Success story starlite" />
                           <div class="landing_success_story_text_wrapper">
                              <span class="landing_success_story_label">
                              Success story
                              </span>
                              <h3 class="landing_success_story_title">
                                 Starlite
                              </h3>
                              <p class="landing_success_story_explanation">
                                 Increase brand awareness at a great public event.
                              </p>
                           </div>
                        </a>
                     </li>
                     <li class="landing_success_story">
                        <a href="success_stories/uniplaces.html" class="landing_success_story_link">
                           <img class="landing_success_story_image" src="assets/landing/success_story_uniplaces.png" alt="Success story uniplaces" />
                           <div class="landing_success_story_text_wrapper">
                              <span class="landing_success_story_label">
                              Success story
                              </span>
                              <h3 class="landing_success_story_title">
                                 Uniplaces
                              </h3>
                              <p class="landing_success_story_explanation">
                                 How to meet the demand of a growing company.
                              </p>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
               <ul class="landing_success_stories_buttons">
                  <li data-show="first_story" class="landing_success_stories_button selected js_loop_mobile_stories"></li>
                  <li data-show="second_story" class="landing_success_stories_button js_loop_mobile_stories"></li>
               </ul>
            </div>
         </section>
         <section class="landing_working_with_us">
            <div class="landing_wrapper">
               <div class="landing_text_block narrow">
                  <h2 class="landing_heading light">
                     Responsible hiring
                  </h2>
                  <p class="landing_paragraph light">
                     Happy workers make for happy businesses. After successfully handling more than 15.000 jobs, we maintain the belief of just and responsible hiring.
                     <a class="landing_start_link light" href="http://go.parttime.vn/create-job-request">Get started &#8250;</a>
                  </p>
               </div>
               <img class="landing_working_with_us_image" src="assets/landing/companies_working_with_us_uk.png" alt="Companies working with us uk" />
            </div>
         </section>
         <section class="landing_tilted_section for_trusted_by">
            <div class="landing_tilted_content for_trusted_by">
               <div class="landing_trusted_by landing_wrapper">
                  <h2 class="landing_heading centered">
                     Trusted by the most prominent names
                  </h2>
                  <ul class="landing_trusted_by_list">
                     <li class="landing_trusted_by_company">
                        <div class="landing_trusted_by_icon_wrapper">
                           <span class="sprite sprite_logo_business_insider"></span>
                        </div>
                        <p class="landing_trusted_by_paragraph">
                           parttime has recently begun offering a comprehensive staff management service that will forever change the way SMEs recruit.
                        </p>
                     </li>
                     <li class="landing_trusted_by_company">
                        <div class="landing_trusted_by_icon_wrapper">
                           <span class="sprite sprite_logo_cnbc"></span>
                        </div>
                        <p class="landing_trusted_by_paragraph">
                           parttime, a job matching app raises $42 million, backed by Skype founder fund.
                        </p>
                     </li>
                     <li class="landing_trusted_by_company">
                        <div class="landing_trusted_by_icon_wrapper">
                           <span class="sprite sprite_logo_techcrunch"></span>
                        </div>
                        <p class="landing_trusted_by_paragraph">
                           We see parttime, in some years, as the major provider of employment. The biggest employment company in the world.
                        </p>
                     </li>
                     <li class="landing_trusted_by_company">
                        <div class="landing_trusted_by_icon_wrapper">
                           <span class="sprite sprite_logo_financial_times"></span>
                        </div>
                        <p class="landing_trusted_by_paragraph">
                           A unique feature is that recruiters can not only browse profiles of people actively seeking jobs, they can also hire candidates and manage their payroll through the app.
                        </p>
                     </li>
                  </ul>
               </div>
            </div>
         </section> */
		?>
	 <div class="landing_footer_top">
	  <h2 class="landing_heading centered light narrow">
	    Chúng tôi đồng hành cùng bạn trong việc phát triển nguồn lực nhân sự
	  </h2>
	  <a class="landing_footer_top_button" href="http://go.parttime.vn/create-job-request">Đăng tuyển</a>
	</div>
<?php get_footer(); ?>
	      <script>
    if(window.screen.width > 770)
      var LandingView = modulejs.require('LandingView');
    else
      var LandingView = modulejs.require('MobileLandingView');

    new LandingView();

</script>
