<?php
/**
 * Template for displaying the Check Availability Button
 */

get_template_part('template-parts/modals/modal', 'check-availability-pop'); 
$button_classes = array('blue','pink','white'); shuffle($button_classes);
?>

<a data-id="<?php the_id(); ?>" data-toggle="modal" data-target="#check-modal" href="#" id="check-availability-button" class="<?php echo $button_classes[0]; ?>">
	<span class="glyphicon glyphicon-chevron-right"></span> Check Availability
</a>