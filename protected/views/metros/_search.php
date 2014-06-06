<?php
/* @var $this MetrosController */
/* @var $model Metros */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'metro_id'); ?>
		<?php echo $form->textField($model,'metro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_id'); ?>
		<?php echo $form->textField($model,'source_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direction'); ?>
		<?php echo $form->textField($model,'direction',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'radius'); ?>
		<?php echo $form->textField($model,'radius',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exit_dir'); ?>
		<?php echo $form->textField($model,'exit_dir',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line'); ?>
		<?php echo $form->textField($model,'metro_line',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'real_city'); ?>
		<?php echo $form->textField($model,'real_city',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_1'); ?>
		<?php echo $form->textField($model,'metro_line_1',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_2'); ?>
		<?php echo $form->textField($model,'metro_line_2',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_3'); ?>
		<?php echo $form->textField($model,'metro_line_3',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_4'); ?>
		<?php echo $form->textField($model,'metro_line_4',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_5'); ?>
		<?php echo $form->textField($model,'metro_line_5',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_1_class'); ?>
		<?php echo $form->textField($model,'metro_line_1_class',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_2_class'); ?>
		<?php echo $form->textField($model,'metro_line_2_class',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_3_class'); ?>
		<?php echo $form->textField($model,'metro_line_3_class',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_4_class'); ?>
		<?php echo $form->textField($model,'metro_line_4_class',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metro_line_5_class'); ?>
		<?php echo $form->textField($model,'metro_line_5_class',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->