<?php
$this->breadcrumbs=array(
	'Idealities',
);

$this->menu=array(
	array('label'=>'Create Ideality', 'url'=>array('create')),
	array('label'=>'Manage Ideality', 'url'=>array('admin')),
);
?>

<h1>Idealities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
