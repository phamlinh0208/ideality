<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ideality-form',
        'enableAjaxValidation' => false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 50)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cate_id'); ?>
        <?php echo $form->dropDownList($model, 'cate_id', CHtml::listData(Category::model()->findAll(), 'id', 'title')); ?>
        <?php echo $form->error($model, 'cate_id'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'full_price'); ?>
        <?php echo $form->textField($model, 'full_price', array('size' => 50)); ?>
        <?php echo $form->error($model, 'full_price'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'partly_price'); ?>
        <?php echo $form->textField($model, 'partly_price', array('size' => 50)); ?>
        <?php echo $form->error($model, 'partly_price'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'short_description'); ?>
        <?php echo $form->textArea($model, 'short_description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'short_description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'file_attach'); ?>
        <?php echo $form->fileField($model, 'file_attach'); ?>
        <?php echo $form->error($model, 'file_attach'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->