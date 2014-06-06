<?php
/* @var $this CitiesController */
/* @var $model Cities */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	$model->name=>array('view','id'=>$model->city_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cities', 'url'=>array('index')),
	array('label'=>'Create Cities', 'url'=>array('create')),
	array('label'=>'View Cities', 'url'=>array('view', 'id'=>$model->city_id)),
	array('label'=>'Manage Cities', 'url'=>array('admin')),
);
?>

<h1>Update Cities <?php echo $model->city_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>