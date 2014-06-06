<?php
/* @var $this CitiesController */
/* @var $model Cities */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_hi'); ?>
		<?php echo $form->textField($model,'name_hi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'display_order'); ?>
		<?php echo $form->textField($model,'display_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'default_language_id'); ?>
		<?php echo $form->textField($model,'default_language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'language_id'); ?>
		<?php echo $form->textField($model,'language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'std_code'); ?>
		<?php echo $form->textField($model,'std_code',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active_flag'); ?>
		<?php echo $form->textField($model,'active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_restaurants'); ?>
		<?php echo $form->textField($model,'has_restaurants'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_nightlife'); ?>
		<?php echo $form->textField($model,'has_nightlife'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_chillout'); ?>
		<?php echo $form->textField($model,'has_chillout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_takeaway'); ?>
		<?php echo $form->textField($model,'has_takeaway'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_cafes'); ?>
		<?php echo $form->textField($model,'has_cafes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_events'); ?>
		<?php echo $form->textField($model,'has_events'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_45_star'); ?>
		<?php echo $form->textField($model,'has_45_star'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_dish_search'); ?>
		<?php echo $form->textField($model,'has_dish_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_postcode_search'); ?>
		<?php echo $form->textField($model,'has_postcode_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_luxury_dining'); ?>
		<?php echo $form->textField($model,'filter_luxury_dining'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_michelin_starred'); ?>
		<?php echo $form->textField($model,'filter_michelin_starred'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_catering'); ?>
		<?php echo $form->textField($model,'has_catering'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distance_unit'); ?>
		<?php echo $form->textField($model,'distance_unit',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_radius'); ?>
		<?php echo $form->textField($model,'search_radius',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citibank_discount_flag'); ?>
		<?php echo $form->textField($model,'citibank_discount_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emirates_discount_flag'); ?>
		<?php echo $form->textField($model,'emirates_discount_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'show_zones'); ?>
		<?php echo $form->textField($model,'show_zones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cft_ranges'); ?>
		<?php echo $form->textField($model,'cft_ranges',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cft_ranges_web'); ?>
		<?php echo $form->textArea($model,'cft_ranges_web',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cft_round_off'); ?>
		<?php echo $form->textField($model,'cft_round_off',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menus_active_flag'); ?>
		<?php echo $form->textField($model,'menus_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photos_active_flag'); ?>
		<?php echo $form->textField($model,'photos_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reviews_active_flag'); ?>
		<?php echo $form->textField($model,'reviews_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maps_active_flag'); ?>
		<?php echo $form->textField($model,'maps_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'review_alert_email'); ?>
		<?php echo $form->textField($model,'review_alert_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qc_email'); ?>
		<?php echo $form->textField($model,'qc_email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_veg'); ?>
		<?php echo $form->textField($model,'filter_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_serves_veg'); ?>
		<?php echo $form->textField($model,'filter_serves_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_non_veg'); ?>
		<?php echo $form->textField($model,'filter_non_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'show_non_veg'); ?>
		<?php echo $form->textField($model,'show_non_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_credit_cards'); ?>
		<?php echo $form->textField($model,'filter_credit_cards'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_buffet'); ?>
		<?php echo $form->textField($model,'filter_buffet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_happy_hours'); ?>
		<?php echo $form->textField($model,'filter_happy_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_wifi'); ?>
		<?php echo $form->textField($model,'filter_wifi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_breakfast'); ?>
		<?php echo $form->textField($model,'filter_breakfast'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_bar'); ?>
		<?php echo $form->textField($model,'filter_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_no_bar'); ?>
		<?php echo $form->textField($model,'filter_no_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_live_music'); ?>
		<?php echo $form->textField($model,'filter_live_music'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_outdoor_seating'); ?>
		<?php echo $form->textField($model,'filter_outdoor_seating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_has_events'); ?>
		<?php echo $form->textField($model,'filter_has_events'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_sheesha'); ?>
		<?php echo $form->textField($model,'filter_sheesha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_halal'); ?>
		<?php echo $form->textField($model,'filter_halal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_friday_brunch'); ?>
		<?php echo $form->textField($model,'filter_friday_brunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_sunday_brunch'); ?>
		<?php echo $form->textField($model,'filter_sunday_brunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_weekend_brunch'); ?>
		<?php echo $form->textField($model,'filter_weekend_brunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_sports_bar'); ?>
		<?php echo $form->textField($model,'filter_sports_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_cookie_flag'); ?>
		<?php echo $form->textField($model,'check_cookie_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acd_active_flag'); ?>
		<?php echo $form->textField($model,'acd_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_desserts_bakes'); ?>
		<?php echo $form->textField($model,'filter_desserts_bakes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rooftop_flag'); ?>
		<?php echo $form->textField($model,'rooftop_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afternoon_tea_flag'); ?>
		<?php echo $form->textField($model,'afternoon_tea_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cafe_flag'); ?>
		<?php echo $form->textField($model,'cafe_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quick_bites_flag'); ?>
		<?php echo $form->textField($model,'quick_bites_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_wishlist'); ?>
		<?php echo $form->textField($model,'filter_wishlist'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_pet_friendly'); ?>
		<?php echo $form->textField($model,'filter_pet_friendly'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_cheap_eats'); ?>
		<?php echo $form->textField($model,'filter_cheap_eats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_vineyard'); ?>
		<?php echo $form->textField($model,'filter_vineyard'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filter_seaside'); ?>
		<?php echo $form->textField($model,'filter_seaside'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'has_collections'); ?>
		<?php echo $form->textField($model,'has_collections'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->