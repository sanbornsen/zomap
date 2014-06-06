<?php
/* @var $this CitiesController */
/* @var $data Cities */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->city_id), array('view', 'id'=>$data->city_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_hi')); ?>:</b>
	<?php echo CHtml::encode($data->name_hi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('display_order')); ?>:</b>
	<?php echo CHtml::encode($data->display_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_language_id')); ?>:</b>
	<?php echo CHtml::encode($data->default_language_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language_id')); ?>:</b>
	<?php echo CHtml::encode($data->language_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php echo CHtml::encode($data->country_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('std_code')); ?>:</b>
	<?php echo CHtml::encode($data->std_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active_flag')); ?>:</b>
	<?php echo CHtml::encode($data->active_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_restaurants')); ?>:</b>
	<?php echo CHtml::encode($data->has_restaurants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_nightlife')); ?>:</b>
	<?php echo CHtml::encode($data->has_nightlife); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_chillout')); ?>:</b>
	<?php echo CHtml::encode($data->has_chillout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_takeaway')); ?>:</b>
	<?php echo CHtml::encode($data->has_takeaway); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_cafes')); ?>:</b>
	<?php echo CHtml::encode($data->has_cafes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_events')); ?>:</b>
	<?php echo CHtml::encode($data->has_events); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_45_star')); ?>:</b>
	<?php echo CHtml::encode($data->has_45_star); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_dish_search')); ?>:</b>
	<?php echo CHtml::encode($data->has_dish_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_postcode_search')); ?>:</b>
	<?php echo CHtml::encode($data->has_postcode_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_luxury_dining')); ?>:</b>
	<?php echo CHtml::encode($data->filter_luxury_dining); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_michelin_starred')); ?>:</b>
	<?php echo CHtml::encode($data->filter_michelin_starred); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_catering')); ?>:</b>
	<?php echo CHtml::encode($data->has_catering); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distance_unit')); ?>:</b>
	<?php echo CHtml::encode($data->distance_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_radius')); ?>:</b>
	<?php echo CHtml::encode($data->search_radius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citibank_discount_flag')); ?>:</b>
	<?php echo CHtml::encode($data->citibank_discount_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emirates_discount_flag')); ?>:</b>
	<?php echo CHtml::encode($data->emirates_discount_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show_zones')); ?>:</b>
	<?php echo CHtml::encode($data->show_zones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cft_ranges')); ?>:</b>
	<?php echo CHtml::encode($data->cft_ranges); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cft_ranges_web')); ?>:</b>
	<?php echo CHtml::encode($data->cft_ranges_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cft_round_off')); ?>:</b>
	<?php echo CHtml::encode($data->cft_round_off); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menus_active_flag')); ?>:</b>
	<?php echo CHtml::encode($data->menus_active_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photos_active_flag')); ?>:</b>
	<?php echo CHtml::encode($data->photos_active_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reviews_active_flag')); ?>:</b>
	<?php echo CHtml::encode($data->reviews_active_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maps_active_flag')); ?>:</b>
	<?php echo CHtml::encode($data->maps_active_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_alert_email')); ?>:</b>
	<?php echo CHtml::encode($data->review_alert_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qc_email')); ?>:</b>
	<?php echo CHtml::encode($data->qc_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_veg')); ?>:</b>
	<?php echo CHtml::encode($data->filter_veg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_serves_veg')); ?>:</b>
	<?php echo CHtml::encode($data->filter_serves_veg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_non_veg')); ?>:</b>
	<?php echo CHtml::encode($data->filter_non_veg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show_non_veg')); ?>:</b>
	<?php echo CHtml::encode($data->show_non_veg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_credit_cards')); ?>:</b>
	<?php echo CHtml::encode($data->filter_credit_cards); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_buffet')); ?>:</b>
	<?php echo CHtml::encode($data->filter_buffet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_happy_hours')); ?>:</b>
	<?php echo CHtml::encode($data->filter_happy_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_wifi')); ?>:</b>
	<?php echo CHtml::encode($data->filter_wifi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_breakfast')); ?>:</b>
	<?php echo CHtml::encode($data->filter_breakfast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_bar')); ?>:</b>
	<?php echo CHtml::encode($data->filter_bar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_no_bar')); ?>:</b>
	<?php echo CHtml::encode($data->filter_no_bar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_live_music')); ?>:</b>
	<?php echo CHtml::encode($data->filter_live_music); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_outdoor_seating')); ?>:</b>
	<?php echo CHtml::encode($data->filter_outdoor_seating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_has_events')); ?>:</b>
	<?php echo CHtml::encode($data->filter_has_events); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_sheesha')); ?>:</b>
	<?php echo CHtml::encode($data->filter_sheesha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_halal')); ?>:</b>
	<?php echo CHtml::encode($data->filter_halal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_friday_brunch')); ?>:</b>
	<?php echo CHtml::encode($data->filter_friday_brunch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_sunday_brunch')); ?>:</b>
	<?php echo CHtml::encode($data->filter_sunday_brunch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_weekend_brunch')); ?>:</b>
	<?php echo CHtml::encode($data->filter_weekend_brunch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_sports_bar')); ?>:</b>
	<?php echo CHtml::encode($data->filter_sports_bar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_cookie_flag')); ?>:</b>
	<?php echo CHtml::encode($data->check_cookie_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acd_active_flag')); ?>:</b>
	<?php echo CHtml::encode($data->acd_active_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_desserts_bakes')); ?>:</b>
	<?php echo CHtml::encode($data->filter_desserts_bakes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rooftop_flag')); ?>:</b>
	<?php echo CHtml::encode($data->rooftop_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afternoon_tea_flag')); ?>:</b>
	<?php echo CHtml::encode($data->afternoon_tea_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cafe_flag')); ?>:</b>
	<?php echo CHtml::encode($data->cafe_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quick_bites_flag')); ?>:</b>
	<?php echo CHtml::encode($data->quick_bites_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_wishlist')); ?>:</b>
	<?php echo CHtml::encode($data->filter_wishlist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_pet_friendly')); ?>:</b>
	<?php echo CHtml::encode($data->filter_pet_friendly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_cheap_eats')); ?>:</b>
	<?php echo CHtml::encode($data->filter_cheap_eats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_vineyard')); ?>:</b>
	<?php echo CHtml::encode($data->filter_vineyard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filter_seaside')); ?>:</b>
	<?php echo CHtml::encode($data->filter_seaside); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_collections')); ?>:</b>
	<?php echo CHtml::encode($data->has_collections); ?>
	<br />

	*/ ?>

</div>