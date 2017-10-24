<?php

// for any page that isn't the news or events, and has a featured image set
if( has_post_thumbnail() && !is_home() && !is_singular('post') && !is_singular('lccc_events') && !is_archive() ) :

	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
	$background_image = $thumb_url_array[0];
	$background_image_vertical_alignment = get_field('background_image_vertical_alignment');
	$banner_headline = '<h1>' . get_field('banner_headline') . '</h1>';
	$icon = get_field('icon');
	$accent_color = get_field('accent_color');

// if is news archive page and has featured image set
elseif( has_post_thumbnail( get_option('page_for_posts') ) && is_home() ) :

	$blog_archive_id = get_option('page_for_posts');
	$thumb_id = get_post_thumbnail_id( $blog_archive_id );
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
	$background_image = $thumb_url_array[0];
	$background_image_vertical_alignment = get_field('background_image_vertical_alignment', $blog_archive_id);
	$banner_headline = '<h1>' . get_field('banner_headline', $blog_archive_id) . '</h1>';
	$icon = get_field('icon', $blog_archive_id);
	$accent_color = get_field('accent_color', $blog_archive_id);
	

// if is news archive and doesn't have a featued image set, use news default (theme options)
elseif( is_home() && !has_post_thumbnail( get_option('page_for_posts') ) ) : 

	$background_image = get_field('news_banner_image', 'option');
	$background_image_vertical_alignment = get_field('news_background_image_vertical_alignment', 'option');
	$banner_headline = '<h1>' . get_field('news_banner_headline', 'option') . '</h1>';
	$icon = get_field('news_banner_icon', 'option');
	$accent_color = get_field('news_banner_accent_color', 'option');

// if is category or tag archive page
elseif( is_category() || is_tag() ) :

	$blog_archive_id = get_option('page_for_posts');
	
	if( has_post_thumbnail( $blog_archive_id ) ) :
		
		
		$thumb_id = get_post_thumbnail_id( $blog_archive_id );
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', false);
		$background_image = $thumb_url_array[0];
		$background_image_vertical_alignment = get_field('background_image_vertical_alignment', $blog_archive_id);
		$icon = get_field('icon', $blog_archive_id);
		$accent_color = get_field('accent_color', $blog_archive_id);

	else: 

		$background_image = get_field('news_banner_image', 'option');
		$background_image_vertical_alignment = get_field('news_background_image_vertical_alignment', 'option');
		$icon = get_field('news_banner_icon', 'option');
		$accent_color = get_field('news_banner_accent_color', 'option');

	endif;

	$banner_headline = '<h1>' . get_the_archive_title() . '</h1>';
	

// if is single news artice. 
elseif( is_singular('post') || is_single() ) : 

	// if featured image is set on news archive page, use on-page options, otherwise use news default banner (theme options)
	if( has_post_thumbnail( get_option('page_for_post') ) ) :

	$blog_archive_id = get_option('page_for_posts');
	$thumb_id = get_post_thumbnail_id( $blog_archive_id );
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
	$background_image = $thumb_url_array[0];
	$background_image_vertical_alignment = get_field('background_image_vertical_alignment', $blog_archive_id);
	$banner_headline = '<div class="fake-h1">' . get_field('banner_headline', $blog_archive_id) . '</div>';
	$icon = get_field('icon', $blog_archive_id);
	$accent_color = get_field('accent_color', $blog_archive_id);

	else :

	$background_image = get_field('news_banner_image', 'option');
	$background_image_vertical_alignment = get_field('news_background_image_vertical_alignment', 'option');
	$banner_headline = '<div class="fake-h1">' . get_field('news_banner_headline', 'option') . '</div>';
	$icon = get_field('news_banner_icon', 'option');
	$accent_color = get_field('news_banner_accent_color', 'option');

	endif;

	

// if is single event
elseif( is_singular('lccc_events') ) :

	// if single event has a featued image set, use on-page options, otherwise use default for events (theme options)
	if( has_post_thumbnail() ) :

		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
		$background_image = $thumb_url_array[0];
		$background_image_vertical_alignment = get_field('events_background_image_vertical_alignment');
		$banner_headline = '<div class="fake-h1">' . get_field('events_banner_headline') . '</div>';
		$icon = get_field('event_single_icon');
		$accent_color = get_field('event_single_accent_color');

	else :

		$background_image = get_field('events_banner_image', 'option');
		$background_image_vertical_alignment = get_field('events_background_image_vertical_alignment', 'option');
		$banner_headline = '<div class="fake-h1">' . get_field('events_banner_headline', 'option') . '</div>';
		$icon = get_field('events_fallback_icon', 'option');
		$accent_color = get_field('events_fallback_accent_color', 'option');

	endif;

// if is events or event category archive page, use default banner options (theme options)
elseif( is_post_type_archive('lccc_events') || is_tax('event_categories') ) :

		$background_image = get_field('events_banner_image', 'option');
		$background_image_vertical_alignment = get_field('events_background_image_vertical_alignment', 'option');
		$icon = get_field('events_fallback_icon', 'option');
		$accent_color = get_field('events_fallback_accent_color', 'option');

		if( is_tax('event_categories') ) :

			$event_cat = single_cat_title( '', false);
			$banner_headline = '<h1>' . $event_cat . '</h1>';		

		else :

			$banner_headline = '<h1>' . get_field('events_banner_headline', 'option') . '</h1>';

		endif;

// if is 404 page, get banner values from Fallbacks/Defaults option page
elseif( is_404() ) :

		$background_image = get_field('404_banner_image', 'option');
		$background_image_vertical_alignment = get_field('404_background_image_vertical_alignment', 'option');
		$angle_overlay = get_field('404_angle_overlay', 'option');
		$banner_headline = '<h1>' . get_field('404_banner_headline', 'option') . '</h1>';
		$icon = get_field('icon_404', 'option');
		$accent_color = get_field('accent_color_404', 'option');

// final else, if all other conditional checks return false, use the page default banner options (theme options)
else :

	global $post;
	$page_id = $post->ID;

	$background_image = get_field('page_banner_image', 'option');
	$background_image_vertical_alignment = get_field('page_background_image_vertical_alignment', 'option');
	$banner_headline = '<h1>' . get_the_title($page_id) . '</h1>';
	$icon = get_field('fallback_icon', 'option');
	$accent_color = get_field('accent_color', 'option');
	
endif;

switch( $icon ) :

	case 'kids':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Kids.svg';
		break;

	case 'food':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Adults1.svg';
		break;

	case 'drink':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Adults2.svg';
		break;

	case 'biz':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Business.svg';
		break;

	case 'com':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Community.svg';
		break;

	case 'ent':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Entrepreneurs.svg';
		break;

	case 'student':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Students.svg';
		break;

	case 'program':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Programs.svg';
		break;

	case 'chefs':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Chefs.svg';
		break;

	case 'sas':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Restaurant.svg';
		break;

	case 'fac':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Facilities.svg';
		break;

	case 'about':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-About.svg';
		break;

	case 'news':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-News.svg';
		break;

	case 'events':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Events.svg';
		break;

	case 'contact':
		$icon_url = get_stylesheet_directory_uri() . '/images/icons/BannerIcon-Contact.svg';
		break;

endswitch;




if( $background_image ) :

?>


<div class="page-banner" style="background-image: url(<?php echo $background_image; ?>); background-position: center <?php echo $background_image_vertical_alignment; ?>;">
	
	<div class="page-banner-inner">

		<div class="row banner-row">
		
			<div class="small-12 columns text-center medium-text-left">
			
				<div class="banner-icon" style="background-color:<?php echo $accent_color; ?>;">
					
					<img src="<?php echo $icon_url; ?>" alt="Icon for <?php the_title(); ?>" />
					
				</div>
				
				<div class="banner-headline">
				
					<span class="headline-wrapper">
					
						<?php echo $banner_headline; ?>
					
					</span>
					
					<div class="headline-underline" style="background-color: <?php echo $accent_color; ?>;"></div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

</div>


<?php endif; ?>