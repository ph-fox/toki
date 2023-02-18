<div class="spacer"></div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
<?php
$enabled=Yii::app()->functions->getOptionAdmin('admin_sisow_enabled');
$paymode=Yii::app()->functions->getOptionAdmin('admin_sisow_mode');
?>

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','adminSisowSettings')?>

<div class="">
  <label class="form-label"><?php echo Yii::t("default","Enabled Sisow")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_sisow_enabled',
  $enabled=="yes"?true:false
  ,array(
    'value'=>"yes",
    'class'=>"icheck"
  ))
  ?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Mode")?></label>
  <?php 
  echo CHtml::radioButton('admin_sisow_mode',
  $paymode=="Sandbox"?true:false
  ,array(
    'value'=>"Sandbox",
    'class'=>"icheck"
  ))
  ?>
  <?php echo Yii::t("default","Sandbox")?>
  <?php 
  echo CHtml::radioButton('admin_sisow_mode',
  $paymode=="live"?true:false
  ,array(
    'value'=>"live",
    'class'=>"icheck"
  ))
  ?>	
  <?php echo Yii::t("default","live")?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Merchant ID")?></label>
  <?php 
  echo CHtml::textField('admin_sanbox_sisow_secret_key',
  Yii::app()->functions->getOptionAdmin('admin_sanbox_sisow_secret_key')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Merchant Key")?></label>
  <?php 
  echo CHtml::textField('admin_sandbox_sisow_pub_key',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_sisow_pub_key')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Shop ID")?></label>
  <?php 
  echo CHtml::textField('admin_sandbox_sisow_shopid',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_sisow_shopid')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>



<div class="row">
<label class="form-label"></label>
<input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>

</div>
</div>
</div>
</div>
