<?php
/* @var $this MetrosController */
/* @var $model Metros */

$this->breadcrumbs=array(
	'Metroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Metros', 'url'=>array('index')),
	array('label'=>'Manage Metros', 'url'=>array('admin')),
);
?>

<h1>Create Metros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>