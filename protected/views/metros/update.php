<?php
/* @var $this MetrosController */
/* @var $model Metros */

$this->breadcrumbs=array(
	'Metroses'=>array('index'),
	$model->name=>array('view','id'=>$model->metro_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Metros', 'url'=>array('index')),
	array('label'=>'Create Metros', 'url'=>array('create')),
	array('label'=>'View Metros', 'url'=>array('view', 'id'=>$model->metro_id)),
	array('label'=>'Manage Metros', 'url'=>array('admin')),
);
?>

<h1>Update Metros <?php echo $model->metro_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>