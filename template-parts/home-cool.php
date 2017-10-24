<?php

$cool_headline = get_field('cool_headline');
$cool_subheading = get_field('cool_subheading');
$video = get_field('video');
$cool_descriptive_text = get_field('cool_descriptive_text');

?>

<section id="cool">
	
	<?php if( $cool_headline || $cool_subheading ) : ?>

	<div class="row section-title-row full-margin">
	
		<div class="small-12 columns text-center">
		
			<?php 
			
			if( $cool_headline ) :
			
				echo '<h2>' . $cool_headline . '</h2>';
			
			endif;
						
			?>
		
		</div>
	
	</div>
	
	<?php endif; ?>
	
	<div class="row home-video-row">
	
		<div class="small-12 medium-8 columns video-column">
		
			<?php if( $video ) : ?>
			
			<div class="flex-video">
			
				<?php echo $video; ?>
			
			</div>
			
			<?php endif; ?>
		
		</div>
		
		<div class="small-12 medium-4 columns">
		
		<?php
			
		if( $cool_subheading ) :
			
			echo '<h3>' . $cool_subheading . '</h3>';
			
		endif;
			
		echo $cool_descriptive_text;
			
		?>
		
		</div>
	
	</div>

</section>