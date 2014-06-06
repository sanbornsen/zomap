<?php
/* @var $this CitiesController */
/* @var $model Cities */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cities', 'url'=>array('index')),
	array('label'=>'Create Cities', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cities-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cities</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cities-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'city_id',
		'name',
		'name_hi',
		'display_order',
		'default_language_id',
		'language_id',
		/*
		'country_id',
		'std_code',
		'url',
		'active_flag',
		'has_restaurants',
		'has_nightlife',
		'has_chillout',
		'has_takeaway',
		'has_cafes',
		'has_events',
		'has_45_star',
		'has_dish_search',
		'has_postcode_search',
		'filter_luxury_dining',
		'filter_michelin_starred',
		'has_catering',
		'latitude',
		'longitude',
		'distance_unit',
		'search_radius',
		'citibank_discount_flag',
		'emirates_discount_flag',
		'show_zones',
		'cft_ranges',
		'cft_ranges_web',
		'cft_round_off',
		'menus_active_flag',
		'photos_active_flag',
		'reviews_active_flag',
		'maps_active_flag',
		'review_alert_email',
		'qc_email',
		'filter_veg',
		'filter_serves_veg',
		'filter_non_veg',
		'show_non_veg',
		'filter_credit_cards',
		'filter_buffet',
		'filter_happy_hours',
		'filter_wifi',
		'filter_breakfast',
		'filter_bar',
		'filter_no_bar',
		'filter_live_music',
		'filter_outdoor_seating',
		'filter_has_events',
		'filter_sheesha',
		'filter_halal',
		'filter_friday_brunch',
		'filter_sunday_brunch',
		'filter_weekend_brunch',
		'filter_sports_bar',
		'check_cookie_flag',
		'acd_active_flag',
		'filter_desserts_bakes',
		'rooftop_flag',
		'afternoon_tea_flag',
		'cafe_flag',
		'quick_bites_flag',
		'filter_wishlist',
		'filter_pet_friendly',
		'filter_cheap_eats',
		'filter_vineyard',
		'filter_seaside',
		'has_collections',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
