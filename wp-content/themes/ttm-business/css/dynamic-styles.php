<?php 

$ttm_business_options = get_option( 'ttm_business_options' );

$skincolor          = isset( $ttm_business_options['primary_color'] ) ? $ttm_business_options['primary_color'] : '#e12454';
$secondarygreycolor        = isset( $ttm_business_options['secondary_color'] ) ? $ttm_business_options['secondary_color'] : '#13232f';
$secondarycolor         = isset( $ttm_business_options['tertiary_color'] ) ? $ttm_business_options['tertiary_color'] : '#f4f9fc';

?>
:root {
  --prt-skincolor:<?php echo esc_attr($skincolor); ?>;
  --prt-greycolor:<?php echo esc_attr($secondarygreycolor); ?>;
  --prt-darkcolor:<?php echo esc_attr($secondarycolor); ?>;
}

<?php

		
if (isset($ttm_business_options['body_typography'])) {
if ($ttm_business_options['body_typography']) { ?>
body{
<?php if (!empty($ttm_business_options['body_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['body_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['body_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['body_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['body_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['body_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['body_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['body_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['body_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['body_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($ttm_business_options['h1_typography'])) {
if ($ttm_business_options['h1_typography']) { ?>
h1{
<?php if (!empty($ttm_business_options['h1_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h1_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h1_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['h1_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h1_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['h1_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h1_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['h1_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h1_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['h1_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($ttm_business_options['h2_typography'])) {
if ($ttm_business_options['h2_typography']) { ?>
h2{
<?php if (!empty($ttm_business_options['h2_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h2_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h2_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['h2_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h2_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['h2_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h2_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['h2_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h2_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['h2_typography']['color']) ?>;
<?php endif; ?>
}
article.post p.tm-blockquote-authorname {
	color: <?php echo esc_attr($ttm_business_options['h2_typography']['color']) ?>;
}
<?php  } } ?>
<?php if (isset($ttm_business_options['h3_typography'])) {
if ($ttm_business_options['h3_typography']) { ?>
h3{
<?php if (!empty($ttm_business_options['h3_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h3_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h3_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['h3_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h3_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['h3_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h3_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['h3_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h3_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['h3_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($ttm_business_options['h4_typography'])) {
if ($ttm_business_options['h4_typography']) { ?>
h4{
<?php if (!empty($ttm_business_options['h4_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h4_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h4_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['h4_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h4_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['h4_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h4_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['h4_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h4_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['h4_typography']['color']) ?>;
<?php endif; ?>
}
.ttm-business-blog-classic .prt-blogbox-footer a {
<?php if (!empty($ttm_business_options['h4_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h4_typography']['font-family']) ?>;
<?php endif; ?>	
}
<?php  } } ?>
<?php if (isset($ttm_business_options['h5_typography'])) {
if ($ttm_business_options['h5_typography']) { ?>
h5{
<?php if (!empty($ttm_business_options['h5_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h5_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h5_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['h5_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h5_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['h5_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h5_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['h5_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h5_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['h5_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($ttm_business_options['h6_typography'])) {
if ($ttm_business_options['h6_typography']) { ?>
h6{
<?php if (!empty($ttm_business_options['h6_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['h6_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h6_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['h6_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h6_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['h6_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h6_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['h6_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['h6_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['h6_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($ttm_business_options['mainmenu_typography'])) {
if ($ttm_business_options['mainmenu_typography']) { ?>
.site-header .main-navigation div>ul>li>a{
<?php if (!empty($ttm_business_options['mainmenu_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['mainmenu_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['mainmenu_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['mainmenu_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['mainmenu_typography']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['color']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['mainmenu_typography']['letter-spacing'])): ?>
	letter-spacing: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['letter-spacing']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['mainmenu_typography']['text-transform'])): ?>
	text-transform: <?php echo esc_attr($ttm_business_options['mainmenu_typography']['text-transform']) ?>;
<?php endif; ?>
}
<?php  } } ?>


.site-footer {
	<?php if (isset($ttm_business_options['footer_background']) && $ttm_business_options['footer_background']) : ?>
		background-color: <?php echo esc_attr($ttm_business_options['footer_background']); ?>;
	<?php else : ?>
		background-color: #142a42;
	<?php endif; ?>
}
#bottom-footer-text {
	<?php if (isset($ttm_business_options['footer_copyright_background']) && $ttm_business_options['footer_copyright_background']) : ?>
		background-color: <?php echo esc_attr($ttm_business_options['footer_copyright_background']); ?>;
	<?php else : ?>
		background-color: #142a42;
	<?php endif; ?>
}
.bottom-footer-text .footer-right, .bottom-footer-text .footer-left {
	<?php if (isset($ttm_business_options['footer_text_color']) && $ttm_business_options['footer_text_color']) : ?>
		color: <?php echo esc_attr($ttm_business_options['footer_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.site-footer .widget.widget_nav_menu a:not(:hover),
.ttm-business-footer-widgets-wrapper .widget {
	<?php if (isset($ttm_business_options['footerwidget_text_color']) && $ttm_business_options['footerwidget_text_color']) : ?>
		color: <?php echo esc_attr($ttm_business_options['footerwidget_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.site-footer .widget .widget-title {
	<?php if (isset($ttm_business_options['footerwidget_heading_color']) && $ttm_business_options['footerwidget_heading_color']) : ?>
		color: <?php echo esc_attr($ttm_business_options['footerwidget_heading_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.col-sm-12.prt-footer2-left, .col-sm-12.prt-footer2-right {
	<?php if (isset($ttm_business_options['footer_text_color']) && $ttm_business_options['footer_text_color']) : ?>
		color: <?php echo esc_attr($ttm_business_options['footer_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.ttm-business-page-title {
	<?php if (!empty($ttm_business_options['page_title_banner_image']['background-color'])): ?>
		background-color: <?php echo esc_attr($ttm_business_options['page_title_banner_image']['background-color']) ?>;
	<?php endif; ?>
	<?php if (!empty($ttm_business_options['page_title_banner_image']['background-image'])): ?>
		background-image: url("<?php echo esc_attr($ttm_business_options['page_title_banner_image']['background-image']) ?>");
	<?php endif; ?>
	<?php if (!empty($ttm_business_options['page_title_banner_image']['background-size'])): ?>
		background-size: <?php echo esc_attr($ttm_business_options['page_title_banner_image']['background-size']) ?>;
	<?php endif; ?>
	<?php if (!empty($ttm_business_options['page_title_banner_image']['background-repeat'])): ?>
		background-repeat: <?php echo esc_attr($ttm_business_options['page_title_banner_image']['background-repeat']) ?>;
	<?php endif; ?>
	<?php if (!empty($ttm_business_options['page_title_banner_image']['background-position'])): ?>
		background-position: <?php echo esc_attr($ttm_business_options['page_title_banner_image']['background-position']) ?>;
	<?php endif; ?>
	<?php if (!empty($ttm_business_options['page_title_banner_image']['background-attachment'])): ?>
		background-attachment: <?php echo esc_attr($ttm_business_options['page_title_banner_image']['background-attachment']) ?>;
	<?php endif; ?>
}

.ttm-business-page-title {
<?php if (isset($ttm_business_options['page_title_height']) && $ttm_business_options['page_title_height']) : ?>
		height: <?php echo esc_attr($ttm_business_options['page_title_height']); ?>px;
	<?php else : ?>
		height:300px;
	<?php endif; ?>
}
.ttm-business-page-title .page-title{
	<?php if (isset($ttm_business_options['page_titlebar_text_color']) && $ttm_business_options['page_titlebar_text_color']) : ?>
		color: <?php echo esc_attr($ttm_business_options['page_titlebar_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}

.site-header .sticky-site-logo, .site-header .site-logo,.header-right-side {
<?php if (isset($ttm_business_options['height_height']) && $ttm_business_options['height_height']) : ?>
		height: <?php echo esc_attr($ttm_business_options['height_height']); ?>px;
	line-height: <?php echo esc_attr($ttm_business_options['height_height']); ?>px;
	<?php else : ?>
		height:100px;
		line-height:100px;
	<?php endif; ?>
}
.site-header .main-navigation div>ul>li>a {
<?php if (isset($ttm_business_options['height_height']) && $ttm_business_options['height_height']) : ?>
		line-height: <?php echo esc_attr($ttm_business_options['height_height']); ?>px;
	<?php else : ?>
		line-height:100px;
	<?php endif; ?>
}
.site-header {
	<?php if (isset($ttm_business_options['height_background']) && $ttm_business_options['height_background']) : ?>
		background-color: <?php echo esc_attr($ttm_business_options['height_background']); ?>;
	<?php else : ?>
		background-color: #fff;
	<?php endif; ?>
}

	.site-footer a, .bottom-footer-text a {
<?php if (isset($ttm_business_options['footerwidget_link_color']['regular']) && $ttm_business_options['footerwidget_link_color']['regular']) : ?>
		color: <?php echo esc_attr($ttm_business_options['footerwidget_link_color']['regular']); ?>;
	<?php else : ?>
		color: #fff;
<?php endif; ?>
	}
	
.site-footer a:hover, .bottom-footer-text a:hover {
<?php if (isset($ttm_business_options['footerwidget_link_color']['hover']) && $ttm_business_options['footerwidget_link_color']['hover']) : ?>
		color: <?php echo esc_attr($ttm_business_options['footerwidget_link_color']['hover']); ?>;
	<?php else : ?>
		color: #e12454;
<?php endif; ?>
}

.site-header .site-logo img {
<?php
 if (isset($ttm_business_options['site-logo-height']['height']) && $ttm_business_options['site-logo-height']['height']) : ?>
		height: <?php echo esc_attr($ttm_business_options['site-logo-height']['height']); ?>;
	<?php else : ?>
		height:40px;
<?php endif; ?>
}
<?php if ( ! class_exists( 'Redux' ) ) { ?>
.sidebar .widget h2, .sidebar .wp-block-search__label,	
a,h1,h2,h3,h4,h5,h6{
	<?php if (isset($ttm_business_options['h1_typography']['color']) && $ttm_business_options['h1_typography']['color']) : ?>
		color: <?php echo esc_attr($ttm_business_options['h1_typography']['color']); ?>;
	<?php else : ?>
		color: #18304b;
	<?php endif; ?>
	    font-family: "Roboto Slab", Sans-serif;
		font-weight: 400;
}
.page .entry-content {
	margin-bottom:45px;
}
.ttm-business-page-title-layer {
    background-color: var(--prt-greycolor);
}
<?php } ?>

<?php if (isset($ttm_business_options['center_logo_width']) && $ttm_business_options['center_logo_width']) : ?>
@media (min-width: 1200px) {
.header-layout-2 .site-header .headerlogo,
.header-layout-2 .site-header .site-logo a {
    width: <?php echo esc_attr($ttm_business_options['center_logo_width']); ?>px;
}
}
<?php endif; ?>

<?php if (isset($ttm_business_options['first_menu_margin']) && $ttm_business_options['first_menu_margin']) : ?>
.header-layout-2 .site-header .main-navigation div>ul>li.logo-after-this {
    margin-right: <?php echo esc_attr($ttm_business_options['first_menu_margin']); ?>px;
}
<?php endif; ?>

<?php if (isset($ttm_business_options['active_menu_color']) && $ttm_business_options['active_menu_color']) : ?>
.site-header .main-navigation div>ul>li.current_page_parent>a,
.site-header .main-navigation div > ul ul li.current-menu-item > a, .ttm-business-copyright .social-icons li a:hover, .site-header .main-navigation div > ul > li.current-menu-parent > a, .site-header .main-navigation div > ul > li > a:hover, .site-header .main-navigation div > ul > li.current-menu-item > a, .site-header .main-navigation div > ul ul li.current_page_item > a, .site-header .main-navigation div > ul ul li a:hover, .skincolor {
	color: <?php echo esc_attr($ttm_business_options['active_menu_color']); ?>;
}
<?php endif; ?>

<?php if (isset($ttm_business_options['widget_title_typography'])) {
if ($ttm_business_options['widget_title_typography']) { ?>
.site-footer .widget .widget-title,
.sidebar .widget h2, .sidebar .wp-block-search__label{
<?php if (!empty($ttm_business_options['widget_title_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['widget_title_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['widget_title_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['widget_title_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['widget_title_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['widget_title_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['widget_title_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['widget_title_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['widget_title_typography']['letter-spacing'])): ?>
	letter-spacing: <?php echo esc_attr($ttm_business_options['widget_title_typography']['letter-spacing']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['widget_title_typography']['text-transform'])): ?>
	text-transform: <?php echo esc_attr($ttm_business_options['widget_title_typography']['text-transform']) ?>;
<?php endif; ?>
}
<?php  } } ?>

<?php if (isset($ttm_business_options['page_title_background_color']) && $ttm_business_options['page_title_background_color']) : ?>
.ttm-business-page-title-layer {
		background-color: <?php echo esc_attr($ttm_business_options['page_title_background_color']); ?>;
}
<?php endif; ?>


@media (min-width: 1200px) {
	.tm-header-layout-3 .ttm-business-page-title .page-title {
	  padding-top: <?php echo esc_attr($ttm_business_options['height_height']) ?>px;
	}
}

<?php
if (isset($ttm_business_options['logo_font'])) {
if ($ttm_business_options['logo_font']) { ?>
.site-title-text{
<?php if (!empty($ttm_business_options['logo_font']['font-family'])): ?>
	font-family: <?php echo esc_attr($ttm_business_options['logo_font']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['logo_font']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($ttm_business_options['logo_font']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['logo_font']['font-size'])): ?>
	font-size: <?php echo esc_attr($ttm_business_options['logo_font']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['logo_font']['line-height'])): ?>
	line-height: <?php echo esc_attr($ttm_business_options['logo_font']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($ttm_business_options['logo_font']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['logo_font']['color']) ?>;
<?php endif; ?>
}
.site-title-text a:hover {
	<?php if (!empty($ttm_business_options['logo_font']['color'])): ?>
	color: <?php echo esc_attr($ttm_business_options['logo_font']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>