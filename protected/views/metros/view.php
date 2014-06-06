<?php
/* @var $this MetrosController */
/* @var $model Metros */

$this->breadcrumbs=array(
	'Metroses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Metros', 'url'=>array('index')),
	array('label'=>'Create Metros', 'url'=>array('create')),
	array('label'=>'Update Metros', 'url'=>array('update', 'id'=>$model->metro_id)),
	array('label'=>'Delete Metros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->metro_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Metros', 'url'=>array('admin')),
);
?>

<h1>View Metros #<?php echo $model->metro_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'metro_id',
		'group_id',
		'source_id',
		'source',
		'name',
		'direction',
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
	),
)); ?>
