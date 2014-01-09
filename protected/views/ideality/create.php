<?php
$this->breadcrumbs=array(
	'Idealities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ideality', 'url'=>array('index')),
	array('label'=>'Manage Ideality', 'url'=>array('admin')),
);
?>

<h1>Create Ideality</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>