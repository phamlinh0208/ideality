<?php
$this->breadcrumbs=array(
	'Idealities'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Ideality', 'url'=>array('index')),
	array('label'=>'Create Ideality', 'url'=>array('create')),
	array('label'=>'Update Ideality', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ideality', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ideality', 'url'=>array('admin')),
);
?>

<h1>View Ideality #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'cate_id',
		'user_id',
		'code',
		'full_price',
		'partly_price',
		'short_description',
		'file_attach',
	),
)); ?>
