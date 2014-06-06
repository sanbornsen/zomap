<?php
/* @var $this MetrosController */
/* @var $model Metros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'metros-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_id'); ?>
		<?php echo $form->textField($model,'source_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direction'); ?>
		<?php echo $form->textField($model,'direction',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'direction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'radius'); ?>
		<?php echo $form->textField($model,'radius',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'radius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exit_dir'); ?>
		<?php echo $form->textField($model,'exit_dir',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'exit_dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line'); ?>
		<?php echo $form->textField($model,'metro_line',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metro_line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
		<?php echo $form->error($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'real_city'); ?>
		<?php echo $form->textField($model,'real_city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'real_city'); ?>
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
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_1'); ?>
		<?php echo $form->textField($model,'metro_line_1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_2'); ?>
		<?php echo $form->textField($model,'metro_line_2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_3'); ?>
		<?php echo $form->textField($model,'metro_line_3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_4'); ?>
		<?php echo $form->textField($model,'metro_line_4',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_5'); ?>
		<?php echo $form->textField($model,'metro_line_5',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_1_class'); ?>
		<?php echo $form->textField($model,'metro_line_1_class',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_1_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_2_class'); ?>
		<?php echo $form->textField($model,'metro_line_2_class',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_2_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_3_class'); ?>
		<?php echo $form->textField($model,'metro_line_3_class',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_3_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_4_class'); ?>
		<?php echo $form->textField($model,'metro_line_4_class',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_4_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metro_line_5_class'); ?>
		<?php echo $form->textField($model,'metro_line_5_class',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'metro_line_5_class'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->