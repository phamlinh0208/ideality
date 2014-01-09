<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cate_id')); ?>:</b>
	<?php echo CHtml::encode($data->cate_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_price')); ?>:</b>
	<?php echo CHtml::encode($data->full_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partly_price')); ?>:</b>
	<?php echo CHtml::encode($data->partly_price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('short_description')); ?>:</b>
	<?php echo CHtml::encode($data->short_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_attach')); ?>:</b>
	<?php echo CHtml::encode($data->file_attach); ?>
	<br />

	*/ ?>

</div>