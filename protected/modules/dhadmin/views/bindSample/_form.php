<?php
/* @var $this BindSampleController */
/* @var $model BindSample */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bind-sample-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal')
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">广告类型</label>
		<div class="col-sm-5">
			<?php if(empty($model->type)) {echo $form->textField($model,'type',array('class'=>"form-control"));} else {echo $form->textField($model,'type',array('readonly'=>'readonly','class'=>"form-control"))."（不能更改）";} ?>
		</div>
		<div class="col-md-5"><?php echo $form->error($model, 'type',array('class'=>"errorMessageTips"));?></div>
	</div>

	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">广告key </label>
		<div class="col-sm-5">
			<?php if(empty($model->val)) {echo $form->textField($model,'val',array('class'=>"form-control"));} else {echo $form->textField($model,'val',array('readonly'=>'readonly','class'=>"form-control"))."（不能更改）";} ?>
		</div>
		<div class="col-md-5"><?php echo $form->error($model, 'val',array('class'=>"errorMessageTips"));?></div>
	</div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">所属用户 </label>
        <div class="col-sm-5">
            <?php echo $form->textField($model,'username',array('class'=>"form-control")); ?>
        </div>
        <div class="col-md-5"><?php echo $form->error($model, 'val',array('class'=>"errorMessageTips"));?></div>
    </div>


    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">资源类型</label>
        <div class="col-sm-5">
            <?php echo $form->dropDownList($model, 'utype', array(0 => '独立用户',1=>'平台分组'),array('class'=>"form-control")) ?>

        </div>
        <div class="col-md-5"><?php echo $form->error($model, 'utype',array('class'=>"errorMessageTips"));?></div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">分组ID</label>
        <div class="col-sm-5">
            <?php echo $form->dropDownList($model, 'uid',array(''=>'','0'=>'0','69'=>'69','77'=>'77','88'=>'88','96'=>'96','99'=>'99','707'=>'707'),array('class'=>"form-control")) ?>
        </div>
        <div class="col-md-5"><?php echo $form->error($model, 'uid',array('class'=>"errorMessageTips"));?></div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">扣量基数(10%=0.1)</label>
        <div class="col-sm-5">
            <?php echo $form->textField($model,'klradio',array('class'=>"form-control")); ?>
        </div>
        <div class="col-md-5"><?php echo $form->error($model, 'klradio',array('class'=>"errorMessageTips"));?></div>
    </div>




	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">状态</label>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model, 'status', array(0 => '已分配',1=>'未分配'),array('class'=>"form-control")) ?>

		</div>
		<div class="col-md-5"><?php echo $form->error($model, 'status',array('class'=>"errorMessageTips"));?></div>
	</div>

<!--	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">分配类型</label>
		<div class="col-sm-5">
			<?php /*echo $form->dropDownList($model, 'allot', array(0 => '自动分配',1=>'手动分配'),array('class'=>"form-control")) */?>
		</div>
		<div class="col-md-5"><?php /*echo $form->error($model, 'allot',array('class'=>"errorMessageTips"));*/?></div>
	</div>
-->
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">是否被封号</label>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model, 'closed', array(0 => '可用',1=>'已封号'),array('class'=>"form-control")) ?>
		</div>
		<div class="col-md-5"><?php echo $form->error($model, 'closed',array('class'=>"errorMessageTips"));?></div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">确认提交</button>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->