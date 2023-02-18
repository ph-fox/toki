<div class="spacer"></div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">

<?php
$enabled=Yii::app()->functions->getOptionAdmin('admin_payu_enabled');
$paymode=Yii::app()->functions->getOptionAdmin('admin_payu_mode');
?>

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','adminPayUMoney')?>

<div class="">
  <label class="form-label"><?php echo Yii::t("default","Enabled PayUMoney")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_payu_enabled',
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
  echo CHtml::radioButton('admin_payu_mode',
  $paymode=="Sandbox"?true:false
  ,array(
    'value'=>"Sandbox",
    'class'=>"icheck"
  ))
  ?>
  <?php echo Yii::t("default","Sandbox")?>
  <?php 
  echo CHtml::radioButton('admin_payu_mode',
  $paymode=="live"?true:false
  ,array(
    'value'=>"live",
    'class'=>"icheck"
  ))
  ?>	
  <?php echo Yii::t("default","live")?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Merchant Key")?></label>
  <?php 
  echo CHtml::textField('admin_payu_key',
  Yii::app()->functions->getOptionAdmin('admin_payu_key')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SALT")?></label>
  <?php 
  echo CHtml::textField('admin_payu_salt',
  Yii::app()->functions->getOptionAdmin('admin_payu_salt')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>



<div class="row mt-3">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>
  </div>
  </div>
  </div>
  </div>
