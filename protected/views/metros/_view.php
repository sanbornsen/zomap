<?php
/* @var $this MetrosController */
/* @var $data Metros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->metro_id), array('view', 'id'=>$data->metro_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_id')); ?>:</b>
	<?php echo CHtml::encode($data->source_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
	<?php echo CHtml::encode($data->source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direction')); ?>:</b>
	<?php echo CHtml::encode($data->direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('radius')); ?>:</b>
	<?php echo CHtml::encode($data->radius); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('exit_dir')); ?>:</b>
	<?php echo CHtml::encode($data->exit_dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line); ?>
	<br />
	*/ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::encode($data->city_id); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('real_city')); ?>:</b>
	<?php echo CHtml::encode($data->real_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_added')); ?>:</b>
	<?php echo CHtml::encode($data->date_added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_1')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_2')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_3')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_4')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_5')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_1_class')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_1_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_2_class')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_2_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_3_class')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_3_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_4_class')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_4_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metro_line_5_class')); ?>:</b>
	<?php echo CHtml::encode($data->metro_line_5_class); ?>
	<br />

	*/ ?>

</div>