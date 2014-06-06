<?php
/* @var $this CitiesController */
/* @var $model Cities */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cities-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_hi'); ?>
		<?php echo $form->textField($model,'name_hi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name_hi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_order'); ?>
		<?php echo $form->textField($model,'display_order'); ?>
		<?php echo $form->error($model,'display_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_language_id'); ?>
		<?php echo $form->textField($model,'default_language_id'); ?>
		<?php echo $form->error($model,'default_language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language_id'); ?>
		<?php echo $form->textField($model,'language_id'); ?>
		<?php echo $form->error($model,'language_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id'); ?>
		<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'std_code'); ?>
		<?php echo $form->textField($model,'std_code',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'std_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active_flag'); ?>
		<?php echo $form->textField($model,'active_flag'); ?>
		<?php echo $form->error($model,'active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_restaurants'); ?>
		<?php echo $form->textField($model,'has_restaurants'); ?>
		<?php echo $form->error($model,'has_restaurants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_nightlife'); ?>
		<?php echo $form->textField($model,'has_nightlife'); ?>
		<?php echo $form->error($model,'has_nightlife'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_chillout'); ?>
		<?php echo $form->textField($model,'has_chillout'); ?>
		<?php echo $form->error($model,'has_chillout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_takeaway'); ?>
		<?php echo $form->textField($model,'has_takeaway'); ?>
		<?php echo $form->error($model,'has_takeaway'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_cafes'); ?>
		<?php echo $form->textField($model,'has_cafes'); ?>
		<?php echo $form->error($model,'has_cafes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_events'); ?>
		<?php echo $form->textField($model,'has_events'); ?>
		<?php echo $form->error($model,'has_events'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_45_star'); ?>
		<?php echo $form->textField($model,'has_45_star'); ?>
		<?php echo $form->error($model,'has_45_star'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_dish_search'); ?>
		<?php echo $form->textField($model,'has_dish_search'); ?>
		<?php echo $form->error($model,'has_dish_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_postcode_search'); ?>
		<?php echo $form->textField($model,'has_postcode_search'); ?>
		<?php echo $form->error($model,'has_postcode_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_luxury_dining'); ?>
		<?php echo $form->textField($model,'filter_luxury_dining'); ?>
		<?php echo $form->error($model,'filter_luxury_dining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_michelin_starred'); ?>
		<?php echo $form->textField($model,'filter_michelin_starred'); ?>
		<?php echo $form->error($model,'filter_michelin_starred'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_catering'); ?>
		<?php echo $form->textField($model,'has_catering'); ?>
		<?php echo $form->error($model,'has_catering'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distance_unit'); ?>
		<?php echo $form->textField($model,'distance_unit',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'distance_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_radius'); ?>
		<?php echo $form->textField($model,'search_radius',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'search_radius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citibank_discount_flag'); ?>
		<?php echo $form->textField($model,'citibank_discount_flag'); ?>
		<?php echo $form->error($model,'citibank_discount_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emirates_discount_flag'); ?>
		<?php echo $form->textField($model,'emirates_discount_flag'); ?>
		<?php echo $form->error($model,'emirates_discount_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'show_zones'); ?>
		<?php echo $form->textField($model,'show_zones'); ?>
		<?php echo $form->error($model,'show_zones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cft_ranges'); ?>
		<?php echo $form->textField($model,'cft_ranges',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'cft_ranges'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cft_ranges_web'); ?>
		<?php echo $form->textArea($model,'cft_ranges_web',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cft_ranges_web'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cft_round_off'); ?>
		<?php echo $form->textField($model,'cft_round_off',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'cft_round_off'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menus_active_flag'); ?>
		<?php echo $form->textField($model,'menus_active_flag'); ?>
		<?php echo $form->error($model,'menus_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photos_active_flag'); ?>
		<?php echo $form->textField($model,'photos_active_flag'); ?>
		<?php echo $form->error($model,'photos_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reviews_active_flag'); ?>
		<?php echo $form->textField($model,'reviews_active_flag'); ?>
		<?php echo $form->error($model,'reviews_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maps_active_flag'); ?>
		<?php echo $form->textField($model,'maps_active_flag'); ?>
		<?php echo $form->error($model,'maps_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review_alert_email'); ?>
		<?php echo $form->textField($model,'review_alert_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'review_alert_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qc_email'); ?>
		<?php echo $form->textField($model,'qc_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'qc_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_veg'); ?>
		<?php echo $form->textField($model,'filter_veg'); ?>
		<?php echo $form->error($model,'filter_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_serves_veg'); ?>
		<?php echo $form->textField($model,'filter_serves_veg'); ?>
		<?php echo $form->error($model,'filter_serves_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_non_veg'); ?>
		<?php echo $form->textField($model,'filter_non_veg'); ?>
		<?php echo $form->error($model,'filter_non_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'show_non_veg'); ?>
		<?php echo $form->textField($model,'show_non_veg'); ?>
		<?php echo $form->error($model,'show_non_veg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_credit_cards'); ?>
		<?php echo $form->textField($model,'filter_credit_cards'); ?>
		<?php echo $form->error($model,'filter_credit_cards'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_buffet'); ?>
		<?php echo $form->textField($model,'filter_buffet'); ?>
		<?php echo $form->error($model,'filter_buffet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_happy_hours'); ?>
		<?php echo $form->textField($model,'filter_happy_hours'); ?>
		<?php echo $form->error($model,'filter_happy_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_wifi'); ?>
		<?php echo $form->textField($model,'filter_wifi'); ?>
		<?php echo $form->error($model,'filter_wifi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_breakfast'); ?>
		<?php echo $form->textField($model,'filter_breakfast'); ?>
		<?php echo $form->error($model,'filter_breakfast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_bar'); ?>
		<?php echo $form->textField($model,'filter_bar'); ?>
		<?php echo $form->error($model,'filter_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_no_bar'); ?>
		<?php echo $form->textField($model,'filter_no_bar'); ?>
		<?php echo $form->error($model,'filter_no_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_live_music'); ?>
		<?php echo $form->textField($model,'filter_live_music'); ?>
		<?php echo $form->error($model,'filter_live_music'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_outdoor_seating'); ?>
		<?php echo $form->textField($model,'filter_outdoor_seating'); ?>
		<?php echo $form->error($model,'filter_outdoor_seating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_has_events'); ?>
		<?php echo $form->textField($model,'filter_has_events'); ?>
		<?php echo $form->error($model,'filter_has_events'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_sheesha'); ?>
		<?php echo $form->textField($model,'filter_sheesha'); ?>
		<?php echo $form->error($model,'filter_sheesha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_halal'); ?>
		<?php echo $form->textField($model,'filter_halal'); ?>
		<?php echo $form->error($model,'filter_halal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_friday_brunch'); ?>
		<?php echo $form->textField($model,'filter_friday_brunch'); ?>
		<?php echo $form->error($model,'filter_friday_brunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_sunday_brunch'); ?>
		<?php echo $form->textField($model,'filter_sunday_brunch'); ?>
		<?php echo $form->error($model,'filter_sunday_brunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_weekend_brunch'); ?>
		<?php echo $form->textField($model,'filter_weekend_brunch'); ?>
		<?php echo $form->error($model,'filter_weekend_brunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_sports_bar'); ?>
		<?php echo $form->textField($model,'filter_sports_bar'); ?>
		<?php echo $form->error($model,'filter_sports_bar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_cookie_flag'); ?>
		<?php echo $form->textField($model,'check_cookie_flag'); ?>
		<?php echo $form->error($model,'check_cookie_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acd_active_flag'); ?>
		<?php echo $form->textField($model,'acd_active_flag'); ?>
		<?php echo $form->error($model,'acd_active_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_desserts_bakes'); ?>
		<?php echo $form->textField($model,'filter_desserts_bakes'); ?>
		<?php echo $form->error($model,'filter_desserts_bakes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rooftop_flag'); ?>
		<?php echo $form->textField($model,'rooftop_flag'); ?>
		<?php echo $form->error($model,'rooftop_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afternoon_tea_flag'); ?>
		<?php echo $form->textField($model,'afternoon_tea_flag'); ?>
		<?php echo $form->error($model,'afternoon_tea_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cafe_flag'); ?>
		<?php echo $form->textField($model,'cafe_flag'); ?>
		<?php echo $form->error($model,'cafe_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quick_bites_flag'); ?>
		<?php echo $form->textField($model,'quick_bites_flag'); ?>
		<?php echo $form->error($model,'quick_bites_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_wishlist'); ?>
		<?php echo $form->textField($model,'filter_wishlist'); ?>
		<?php echo $form->error($model,'filter_wishlist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_pet_friendly'); ?>
		<?php echo $form->textField($model,'filter_pet_friendly'); ?>
		<?php echo $form->error($model,'filter_pet_friendly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_cheap_eats'); ?>
		<?php echo $form->textField($model,'filter_cheap_eats'); ?>
		<?php echo $form->error($model,'filter_cheap_eats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_vineyard'); ?>
		<?php echo $form->textField($model,'filter_vineyard'); ?>
		<?php echo $form->error($model,'filter_vineyard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filter_seaside'); ?>
		<?php echo $form->textField($model,'filter_seaside'); ?>
		<?php echo $form->error($model,'filter_seaside'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'has_collections'); ?>
		<?php echo $form->textField($model,'has_collections'); ?>
		<?php echo $form->error($model,'has_collections'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->