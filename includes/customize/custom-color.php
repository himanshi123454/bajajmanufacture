<?php
function indutri_custom_color_theme(){
   $theme_color = indutri_get_option('color_theme', '');
   if( !empty($theme_color) ){ 
      ob_start();

   /* ----- Style Color Theme ----- */
?>

<?php if( !empty($theme_color) ){ ?>

a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.page-links > a, .page-links > span:not(.page-links-title){
   background: <?php echo esc_attr($theme_color); ?>;
}
ul.feature-list > li:after, ul.list-style-1 > li:after{
   color: <?php echo esc_attr($theme_color); ?>;
}
 ul.list-style-2 > li{
   color: <?php echo esc_attr($theme_color); ?>;
}
.pager .paginations a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
   border-color: <?php echo esc_attr($theme_color); ?>;
}
.pager .paginations a.active{
   background: <?php echo esc_attr($theme_color); ?>;
   border-color: <?php echo esc_attr($theme_color); ?>;
}
.bg-theme{
   background: <?php echo esc_attr($theme_color); ?> !important;
}
.bg-theme-2{
   background: <?php echo esc_attr($theme_color); ?> !important;
}
.text-theme{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.hover-color-theme a:hover{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.btn-theme, .btn, .btn-white, .btn-theme-2, .btn-black, input[type*="submit"]:not(.fa):not(.btn-theme), #tribe-events .tribe-events-button, .tribe-events-button{
   background: <?php echo esc_attr($theme_color); ?>;
}
.btn-inline{
   color: <?php echo esc_attr($theme_color); ?>;
}
.btn-inline span:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.socials a i{
   background: <?php echo esc_attr($theme_color); ?>;
}
.socials-2 li a i:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.alert-danger{
   background: <?php echo esc_attr($theme_color); ?>;
}
.desc-slider a{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #wp-footer a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.topbar .topbar-information i{
   color: <?php echo esc_attr($theme_color); ?>;
}
.topbar .header-right .header-social .socials > li a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.topbar .header-right .mini-cart-header .mini-cart .mini-cart-items{
   background: <?php echo esc_attr($theme_color); ?>;
}
.header-mobile .header-mobile-content .mini-cart-header a.mini-cart .mini-cart-items{
   background: <?php echo esc_attr($theme_color); ?>;
}
 ul.gva-nav-menu > li:hover > a, ul.gva-nav-menu > li:active > a, ul.gva-nav-menu > li:focus > a, ul.gva-nav-menu > li.current_page_parent > a{
   color: <?php echo esc_attr($theme_color); ?>;
}
 ul.gva-nav-menu > li .submenu-inner li a:hover, ul.gva-nav-menu > li .submenu-inner li a:focus, ul.gva-nav-menu > li .submenu-inner li a:active, ul.gva-nav-menu > li ul.submenu-inner li a:hover, ul.gva-nav-menu > li ul.submenu-inner li a:focus, ul.gva-nav-menu > li ul.submenu-inner li a:active{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gavias-off-canvas-toggle{
   background: <?php echo esc_attr($theme_color); ?>;
}
 #gavias-off-canvas .off-canvas-top .top-social > a:hover{
   background: <?php echo esc_attr($theme_color); ?>;
   border-color: <?php echo esc_attr($theme_color); ?>;
}
 #gavias-off-canvas .off-canvas-top .gavias-off-canvas-close:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
 #gavias-off-canvas ul#menu-main-menu > li > a.active > a{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #gavias-off-canvas ul#menu-main-menu > li .submenu-inner.dropdown-menu li a:hover, #gavias-off-canvas ul#menu-main-menu > li .submenu-inner.dropdown-menu li a:focus{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #gavias-off-canvas ul#menu-main-menu > li .submenu-inner.dropdown-menu li.active > a{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-offcanvas-content a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-offcanvas-content .close-canvas a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-offcanvas-content #gva-mobile-menu ul.gva-mobile-menu > li a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-offcanvas-content #gva-mobile-menu ul.gva-mobile-menu > li.menu-item-has-children .caret:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-offcanvas-content #gva-mobile-menu ul.gva-mobile-menu > li ul.submenu-inner li a:hover, .gva-offcanvas-content #gva-mobile-menu ul.gva-mobile-menu > li div.submenu-inner li a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.megamenu-main .widget.widget-html ul li strong{
   color: <?php echo esc_attr($theme_color); ?>;
}
.col-bg-bottom-theme:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.col-bg-theme-inner > .elementor-column-wrap > .elementor-widget-wrap{
   background: <?php echo esc_attr($theme_color); ?>;
}
.col-bg-theme > .elementor-column-wrap{
   background-color: <?php echo esc_attr($theme_color); ?> !important;
}
.gva-social-links.style-v2 ul.socials > li > a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-team .team-position{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-team.team-horizontal .team-header .social-list a:hover{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.gsc-team.team-horizontal .team-name:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-team.team-vertical .team-body .info{
   background: <?php echo esc_attr($theme_color); ?>;
}
.post-small .post .cat-links a{
   color: <?php echo esc_attr($theme_color); ?>;
}
.elementor-widget-icon-box.icon-color-theme .elementor-icon, .elementor-widget-icon-box.icon-color-theme .elementor-icon-list-icon, .elementor-widget-icon-list.icon-color-theme .elementor-icon, .elementor-widget-icon-list.icon-color-theme .elementor-icon-list-icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.elementor-widget-icon-box.hover-color-theme a:hover, .elementor-widget-icon-list.hover-color-theme a:hover{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.gva-content-horizontal .content-hover-horizontal .content-item .content .action svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.gsc-career .box-content .job-type{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gva-hover-box-carousel .hover-box-item .box-content .box-icon{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-countdown{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box .highlight-icon .box-icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box .highlight-icon .box-icon svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box .highlight-icon .icon-container{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box-group.style-1 .icon-box-item-content .icon-box-item-inner .box-icon i{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box-group.style-1 .icon-box-item-content .icon-box-item-inner .box-icon svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box-styles.style-1 .icon-box-inner .box-icon{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-icon-box-styles.style-2 .box-icon{
   background: <?php echo esc_attr($theme_color); ?>;
}
.milestone-block.style-2 .box-content .milestone-icon .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.milestone-block.style-2 .box-content .milestone-icon .icon svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.gallery-post a.zoomGallery{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-heading .heading-video .video-link{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-heading .title .highlight, .gsc-heading .title strong{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-image-content.skin-v2 .title{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-image-content.skin-v4 .box-content .read-more svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.gva-posts-grid .posts-grid-filter ul.nav-tabs > li > a.active{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-testimonial .testimonial-item .testimonial-content .testimonial-meta .testimonial-information span.testimonial-job{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-testimonial-single.style-1 .testimonial-item .testimonial-content .testimonial-meta .testimonial-job{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-video-box.style-1 .video-inner .video-image .video-action .popup-video:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-video-box.style-2 .video-inner .video-action .popup-video{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gva-video-carousel .video-item-inner .video-link{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-pricing.style-1 .content-inner .plan-price .price-value{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-pricing.style-1 .content-inner .plan-price .interval{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-pricing.style-1 .content-inner .plan-list li .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-pricing.style-2 .content-inner .price-meta .plan-price .price-value{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-pricing.style-2 .content-inner .price-meta .plan-price .interval{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-socials ul.social-links li a{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-tabs-content .nav_tabs > li a:before{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gsc-tabs-content .tab-content .tab-pane .tab-content-item ul > li:after{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-list-number.style-2 ul.list-number li.list-number-item h3 span{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-text-arrow.style-1 .content-inner .title .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-locations-map .makers .location-item .maker-item-inner .right .location-title:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-locations-map .makers .location-item .maker-item-inner:hover .location-title, .gva-locations-map .makers .location-item .maker-item-inner.active .location-title{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-locations-map .makers .location-item .maker-item-inner:hover .icon, .gva-locations-map .makers .location-item .maker-item-inner.active .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gsc-work-process .box-content .number-text{
   background: <?php echo esc_attr($theme_color); ?>;
}
.gva-user .login-account .profile:hover, .topbar-mobile .login-account .profile:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-user .login-register a .icon, .topbar-mobile .login-register a .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-user .login-register a:hover, .topbar-mobile .login-register a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget .widget-title:after, .widget .widgettitle:after, .widget .wpb_singleimage_heading:after, .wpb_single_image .widget-title:after, .wpb_single_image .widgettitle:after, .wpb_single_image .wpb_singleimage_heading:after, .wpb_content_element .widget-title:after, .wpb_content_element .widgettitle:after, .wpb_content_element .wpb_singleimage_heading:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.color-theme .widget-title, .color-theme .widgettitle{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.wp-sidebar ul li a:hover, .elementor-widget-sidebar ul li a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.wp-sidebar .post-author, .wp-sidebar .post-date, .elementor-widget-sidebar .post-author, .elementor-widget-sidebar .post-date{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #wp-footer .widget ul li a:hover, #wp-footer .wpb_single_image ul li a:hover, #wp-footer .widget_nav_menu ul li a:hover{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.widget_tag_cloud .tagcloud > a:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
.mailchimp-small .newsletter-form .form-left input[type="email"]:focus{
   border: 1px solid <?php echo esc_attr($theme_color); ?>;
}
.mailchimp-small .newsletter-form .form-right{
   background: <?php echo esc_attr($theme_color); ?>;
}
.mailchimp-small .newsletter-form .form-right .form-action{
   background: <?php echo esc_attr($theme_color); ?>;
}
.newsletter-form .form-action{
   background: <?php echo esc_attr($theme_color); ?>;
}
.widget_categories ul > li > a:hover, .widget_archive ul > li > a:hover, .wp-sidebar .widget_nav_menu ul > li > a:hover, #wp-footer .widget_nav_menu ul > li > a:hover, .elementor-widget-sidebar .widget_nav_menu ul > li > a:hover, .widget_pages ul > li > a:hover, .widget_meta ul > li > a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget_categories ul > li.current_page_item > a, .widget_archive ul > li.current_page_item > a, .wp-sidebar .widget_nav_menu ul > li.current_page_item > a, #wp-footer .widget_nav_menu ul > li.current_page_item > a, .elementor-widget-sidebar .widget_nav_menu ul > li.current_page_item > a, .widget_pages ul > li.current_page_item > a, .widget_meta ul > li.current_page_item > a{
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget_rss ul > li a .post-date, .widget_recent_entries ul > li a .post-date{
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget_rss > ul li .rss-date{
   color: <?php echo esc_attr($theme_color); ?>;
}
.opening-time .phone{
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget_gva_give_categories_widget ul.categories-listing li:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.support-box .phone a i{
   color: <?php echo esc_attr($theme_color); ?>;
}
.download-box a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.post-block .entry-meta .entry-date{
   color: <?php echo esc_attr($theme_color); ?>;
}
.post-block .tag-links > a:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
.post-style-2 .entry-content .entry-meta .right i{
   color: <?php echo esc_attr($theme_color); ?>;
}
.post-style-2 .entry-content .read-more svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.post-style-2:hover .entry-content .entry-meta .left{
   border-color: <?php echo esc_attr($theme_color); ?>;
}
.single.single-post #wp-content > article.post .entry-meta-inner .entry-meta .cat-links a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.single.single-post #wp-content > article.post .entry-meta-inner .entry-meta .entry-date{
   color: <?php echo esc_attr($theme_color); ?>;
}
.single.single-post #wp-content > article.post .entry-footer .tag-links > a:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
.single.single-post #wp-content > article.post .post-content input[type="submit"]{
   background: <?php echo esc_attr($theme_color); ?>;
}
.post-navigation a:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
.tribe-event-list-block .tribe-event-left .content-inner .tribe-start-date{
   background: <?php echo esc_attr($theme_color); ?>;
}
.tribe-event-list-block .tribe-event-right .content-inner .tribe-events-event-meta .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.tribe-event-list-block.v2 .event-action a{
   background: <?php echo esc_attr($theme_color); ?> !important;
}
.tribe-events-single .tribe-events-schedule .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.tribe-events-single .tribe-events-event-meta .tribe-event-single-detail .tribe-event-single-meta-detail > div .icon{
   color: <?php echo esc_attr($theme_color); ?>;
}
.tribe-events-single .tribe-events-event-meta .tribe-event-meta-bottom .event-single-organizer > .content-inner .meta-item .icon svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.tribe-events-single .tribe-events-event-meta .tribe-event-meta-bottom .event-single-venue > .content-inner{
   background: <?php echo esc_attr($theme_color); ?>;
}
.tribe-events-single .tribe-events-event-meta .tribe-event-meta-bottom .event-single-venue > .content-inner:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.post-type-archive-tribe_events #tribe-events-bar #tribe-bar-form .tribe-bar-submit .tribe-events-button{
   background: <?php echo esc_attr($theme_color); ?>;
}
.post-type-archive-tribe_events table.tribe-events-calendar tbody td .tribe-events-tooltip .tribe-events-event-body .tribe-event-duration{
   color: <?php echo esc_attr($theme_color); ?>;
}
.post-type-archive-tribe_events table.tribe-events-calendar tbody td:hover{
   border-bottom: 2px solid <?php echo esc_attr($theme_color); ?> !important;
}
.portfolio-v1 .images .link:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
.portfolio-v1 .portfolio-content .content-inner .portfolio-meta:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.portfolio-v1:hover .portfolio-content .content-inner, .portfolio-v1:active .portfolio-content .content-inner, .portfolio-v1:focus .portfolio-content .content-inner{
   background: <?php echo esc_attr($theme_color); ?>;
   border-color: <?php echo esc_attr($theme_color); ?>;
}
.portfolio-v2 .images .link:hover{
   background: <?php echo esc_attr($theme_color); ?>;
}
.portfolio-v2:hover .portfolio-content, .portfolio-v2:active .portfolio-content, .portfolio-v2:focus .portfolio-content{
   background: <?php echo esc_attr($theme_color); ?>;
}
.portfolio-filter ul.nav-tabs > li > a.active{
   color: <?php echo esc_attr($theme_color); ?>;
}
.service-block .service-icon{
   background: <?php echo esc_attr($theme_color); ?>;
}
.service-item-v2:hover .service-image .service-icon{
   background: <?php echo esc_attr($theme_color); ?>;
}
.service-item-v3:hover .service-icon{
   border-bottom-color: <?php echo esc_attr($theme_color); ?>;
}
.service-item-v3:hover .service-icon svg{
   fill: <?php echo esc_attr($theme_color); ?>;
}
.service-block-single .service-images:hover .service-icon{
   background: <?php echo esc_attr($theme_color); ?>;
}
.team-progress-wrapper .team__progress .team__progress-bar{
   background: <?php echo esc_attr($theme_color); ?>;
}
.team-progress-wrapper .team__progress .team__progress-bar .percentage{
   background: <?php echo esc_attr($theme_color); ?>;
}
.team-progress-wrapper .team__progress .team__progress-bar .percentage:after{
   border-top-color: <?php echo esc_attr($theme_color); ?>;
}
.team-block.team-v1 .team-image .socials-team a.share-social{
   background: <?php echo esc_attr($theme_color); ?>;
}
.team-block.team-v1 .team-content .team-job{
   color: <?php echo esc_attr($theme_color); ?>;
}
.team-block.team-v2 .team-image .socials-team a{
   background: <?php echo esc_attr($theme_color); ?>;
}
.team-block-single .heading:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.team-block-single .team-job{
   color: <?php echo esc_attr($theme_color); ?>;
}
.team-block-single .team-quote:after{
   color: <?php echo esc_attr($theme_color); ?>;
}
.team-block-single .socials-team a:hover{
   background: <?php echo esc_attr($theme_color); ?>;
   border-color: <?php echo esc_attr($theme_color); ?>;
}
.pagination .disabled{
   background: <?php echo esc_attr($theme_color); ?>;
}
.pagination .current{
   background: <?php echo esc_attr($theme_color); ?>;
}
.content-page-index .post-masonry-index .post.sticky .entry-content:after{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #comments .comments-title:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
 #comments #add_review_button,
 #comments #submit{
   background: <?php echo esc_attr($theme_color); ?>;
}
 #comments #reply-title{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #comments ol.comment-list .the-comment .comment-rate .on{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #comments ol.comment-list .the-comment .comment-info:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
 #comments ol.comment-list .the-comment .comment-info a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
 #comments ol.comment-list .the-comment .comment-reply-link{
   color: <?php echo esc_attr($theme_color); ?>;
}
.comment-rating .comment-star-rating > li a.active{
   color: <?php echo esc_attr($theme_color); ?>;
}
.pingbacklist > li .author-meta .comment-info:after{
   background: <?php echo esc_attr($theme_color); ?>;
}
.pingbacklist > li .author-meta .comment-info a:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.owl-carousel .owl-dots .owl-dot.active, .flex-control-nav .owl-dots .owl-dot.active, .ctf-tweets .owl-dots .owl-dot.active{
   background: <?php echo esc_attr($theme_color); ?>;
}
 ul.nav-tabs > li > a:hover, ul.nav-tabs > li > a:focus, ul.nav-tabs > li > a:active{
   color: <?php echo esc_attr($theme_color); ?>;
}
 ul.nav-tabs > li.active > a{
   background: <?php echo esc_attr($theme_color); ?> !important;
}
.btn-slider-white{
   color: <?php echo esc_attr($theme_color); ?>;
}
.btn-slider-white:hover, .btn-slider-white:focus, .btn-slider-white:active{
   background: <?php echo esc_attr($theme_color); ?>;
}
.tweet-1 .ctf-type-usertimeline{
   background: <?php echo esc_attr($theme_color); ?>;
}
.tweet-1 .ctf-type-usertimeline .ctf-tweets .ctf-item svg:hover, .tweet-1 .ctf-type-usertimeline .ctf-tweets .ctf-item i:hover{
   color: <?php echo esc_attr($theme_color); ?>;
}
.tweet-2 .ctf-type-usertimeline .ctf-item .ctf-tweet-text a{
   color: <?php echo esc_attr($theme_color); ?>;
}
.tweet-2 .ctf-type-usertimeline .ctf-item .ctf-tweet-text a:hover, .tweet-2 .ctf-type-usertimeline .ctf-item .ctf-tweet-text a:focus{
   color: <?php echo esc_attr($theme_color); ?>;
}
.tweet-2 .ctf-type-usertimeline .ctf-item .ctf-author-box .ctf-author-box-link .ctf-author-screenname{
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.btn-link:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.page-link:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce-tabs .nav-tabs > li.active > a {
   color: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce-tab-product-info .submit {
   background: <?php echo esc_attr($theme_color); ?>;
}
.minibasket.light i {
   color: <?php echo esc_attr($theme_color); ?>;
 }
 
 table.variations a.reset_variations {
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.single-product .social-networks > li a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.single-product .image_frame .woocommerce-product-gallery__trigger:hover {
   background: <?php echo esc_attr($theme_color); ?>;
}
.single-product .image_frame .onsale {
   background: <?php echo esc_attr($theme_color); ?>;
}
.single-product ol.flex-control-nav.flex-control-thumbs .owl-item img.flex-active {
   border: 1px solid <?php echo esc_attr($theme_color); ?>;
}
.single-product .product-single-main .product-type-grouped table.group_table tr td.label a:hover, .single-product .product-single-main .product-type-grouped table.group_table tr td label a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.single-product .entry-summary .woocommerce-product-rating .woocommerce-review-link:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.single-product .entry-summary .price {
   color: <?php echo esc_attr($theme_color); ?>;
}
.single-product .product-single-inner .cart .button, .single-product .product-single-inner .add-cart .button {
   background: <?php echo esc_attr($theme_color); ?>;
}
.single-product .product-single-inner .yith-wcwl-add-to-wishlist a {
   background: <?php echo esc_attr($theme_color); ?>;
}
.single-product .product-single-inner a.compare {
   background: <?php echo esc_attr($theme_color); ?>;
}
.single-product .product-single-inner form.cart .table-product-group td.label a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.single-product .product-single-inner form.cart .add-cart button {
   background: <?php echo esc_attr($theme_color); ?>;
}
.single-product .product_meta > span a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul > li.is-active a {
   color: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce #breadcrumb a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce-page .content-page-inner input.button, .woocommerce-page .content-page-inner a.button {
   background: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce-cart-form__contents .woocommerce-cart-form__cart-item td.product-remove a.remove {
   color: <?php echo esc_attr($theme_color); ?>;
}
.shop-loop-actions .quickview a:hover, .shop-loop-actions .yith-wcwl-add-to-wishlist a:hover, .shop-loop-actions .yith-compare a:hover, .shop-loop-actions .add-to-cart a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.shop-loop-actions .quickview a:hover:after, .shop-loop-actions .yith-wcwl-add-to-wishlist a:hover:after, .shop-loop-actions .yith-compare a:hover:after, .shop-loop-actions .add-to-cart a:hover:after {
   color: <?php echo esc_attr($theme_color); ?>;
}
.shop-loop-price .price {
   color: <?php echo esc_attr($theme_color); ?>;
}
.gva-countdown .countdown-times > div.day {
   color: <?php echo esc_attr($theme_color); ?>;
}
.product_list_widget .minicart-close:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.product_list_widget.cart_list .widget-product .name a:hover {
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.product_list_widget.cart_list .widget-product .remove {
   background: <?php echo esc_attr($theme_color); ?>;
}
.woo-display-mode > a:hover, .woo-display-mode > a:active, .woo-display-mode > a:focus, .woo-display-mode > a.active {
   background: <?php echo esc_attr($theme_color); ?>;
}
.filter-sidebar .filter-sidebar-inner.layout-offcavas .filter-close {
   background: <?php echo esc_attr($theme_color); ?>;
}
.woocommerce .button[type*="submit"] {
   background: <?php echo esc_attr($theme_color); ?>;
}
.widget.widget_layered_nav ul > li a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget.widget_product_categories li.current-cat > a {
   color: <?php echo esc_attr($theme_color); ?> !important;
}
.widget.widget_product_categories ul.product-categories > li.has-sub .cat-caret:hover {
   color: <?php echo esc_attr($theme_color); ?>;
}
.widget.widget_product_categories ul.product-categories > li ul a:hover {
   color: <?php echo esc_attr($theme_color); ?>;
 }
.owl-carousel .owl-nav > div:hover, .owl-carousel .owl-nav > div:focus, .flex-control-nav .owl-nav > div:hover, .flex-control-nav .owl-nav > div:focus, .ctf-tweets .owl-nav > div:hover, .ctf-tweets .owl-nav > div:focus{
     background-color: <?php echo esc_attr($theme_color); ?>;
}
<?php } //End Color Theme ?> 


<?php

      $styles = ob_get_clean();
      
      $styles = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $styles );
      
      $styles = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '   ', '    ' ), '', $styles );

      if($styles){
         wp_enqueue_style( 'indutri-custom-style-color', INDUTRI_THEME_URL . '/css/custom_script.css');
         wp_add_inline_style( 'indutri-custom-style-color', $styles );
      }

   }
}

add_action( 'wp_enqueue_scripts', 'indutri_custom_color_theme', 99999 );