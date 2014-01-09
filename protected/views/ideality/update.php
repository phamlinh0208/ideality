<?php
$this->breadcrumbs=array(
	'Idealities'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ideality', 'url'=>array('index')),
	array('label'=>'Create Ideality', 'url'=>array('create')),
	array('label'=>'View Ideality', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ideality', 'url'=>array('admin')),
);
?>

<h1>Update Ideality <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>