<?php
?>
<div class="breadcrumbs">
    <a href="/dhadmin/controlPackage/index">用户路由列表</a> &raquo; <span>更新监控包</span></div>
<h4 class="text-center">更新监控包</h4>
<div class="form">
    <?php
    //判断是否有提示信息
    if(Yii::app()->user->hasFlash('status')){?>
        <script type="text/javascript">alert("更新成功！");</script>
        <div class="alert alert-success">
            <b><?php echo Yii::app()->user->getFlash('status');?></b>

        </div>
    <?php }?>
    <div class="container-fluid">
        <div class="alert alert-info" >带（*）的内容是必须填写的！</div>
        <div class="row">
            <!--左侧-->
            <div class="col-md-10">
                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'login-form',
                    'enableClientValidation' => false,
                    'htmlOptions' => array('class' => "form-horizontal"),
                )); ?>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">包名 *</label>
                    <div class="col-sm-5">
                        <?php echo $form->textField($model, 'package_name', array('class'=>'form-control')); ?>
                    </div>
                    <div class="col-md-5"><?php echo $form->error($model, 'package_name',array('class'=>"errorMessageTips"));?></div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">业务名称 *</label>
                    <div class="col-sm-5">
                        <?php echo $form->textField($model, 'name', array('class'=>'form-control')); ?>
                    </div>
                    <div class="col-md-5"><?php echo $form->error($model, 'name',array('class'=>"errorMessageTips"));?></div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">分组</label>
                    <div class="col-sm-5">
                        <?php echo $form->dropDownList($model,'type',array("0"=>"ROM","99"=>"线下","707"=>"707"),array("class"=>"form-control"));?>
                    </div>
                    <div class="col-md-5"><?php echo $form->error($model, 'type',array('class'=>"errorMessageTips"));?></div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">状 &nbsp;&nbsp;态&nbsp;&nbsp;</label>
                    <div class="col-sm-5">
                        <?php echo $form->dropDownList($model,'status',array("0"=>"禁用","1"=>"正常"),array("class"=>"form-control"));?>
                    </div>
                    <div class="col-md-5"><?php echo $form->error($model, 'status',array('class'=>"errorMessageTips"));?></div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">开 &nbsp;&nbsp;关&nbsp;&nbsp;</label>
                    <div class="col-sm-5">
                        <?php echo $form->dropDownList($model,'is_check',array("0"=>"关闭","1"=>"开启"),array("class"=>"form-control"));?>
                    </div>
                    <div class="col-md-5"><?php echo $form->error($model, 'is_check',array('class'=>"errorMessageTips"));?></div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">确认提交</button>
                    </div>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
