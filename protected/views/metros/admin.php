<?php
/* @var $this MetrosController */
/* @var $model Metros */

$this->breadcrumbs=array(
	'Metroses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Metros', 'url'=>array('index')),
	array('label'=>'Create Metros', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#metros-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Metroses</h1>

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
	'id'=>'metros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'metro_id',
		'group_id',
		'source_id',
		'source',
		'name',
		'direction',
		/*
		'radius',
		'exit_dir',
		'metro_line',
		'city_id',
		'real_city',
		'latitude',
		'longitude',
		'status',
		'date_added',
		'metro_line_1',
		'metro_line_2',
		'metro_line_3',
		'metro_line_4',
		'metro_line_5',
		'metro_line_1_class',
		'metro_line_2_class',
		'metro_line_3_class',
		'metro_line_4_class',
		'metro_line_5_class',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
