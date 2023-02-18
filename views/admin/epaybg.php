<div class="spacer"></div>

<div class="row">
    <div class="col-7">
        <div class="card">
            <div class="card-body">

<?php
$enabled_paypal=Yii::app()->functions->getOptionAdmin('admin_enabled_epaybg');
$paypal_mode=Yii::app()->functions->getOptionAdmin('admin_mode_epaybg');
?>

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','saveAdminEpaybgSettings')?>

<div class="">
  <label class="form-label"><?php echo Yii::t("default","Enabled")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_enabled_epaybg',
  $enabled_paypal=="yes"?true:false
  ,array(
    'value'=>"yes",
    'class'=>"icheck"
  ))
  ?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Mode")?></label>
  <?php 
  echo CHtml::radioButton('admin_mode_epaybg',
  $paypal_mode=="sandbox"?true:false
  ,array(
    'value'=>"sandbox",
    'class'=>"icheck"
  ))
  ?>
  <?php echo t("Sandbox")?> 
  <?php 
  echo CHtml::radioButton('admin_mode_epaybg',
  $paypal_mode=="live"?true:false
  ,array(
    'value'=>"live",
    'class'=>"icheck"
  ))
  ?>	
  <?php echo t("Live")?>
</div>

<h3><?php echo Yii::t("default","Sandbox")?></h3>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","MIN")?></label>
  <?php 
  echo CHtml::textField('admin_sandbox_epaybg_min',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_epaybg_min')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Secret")?></label>
  <?php 
  echo CHtml::textField('admin_sandbox_epaybg_secret',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_epaybg_secret')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Payment Request")?></label>
  <?php   
  echo CHtml::dropDownList('admin_sandbox_epaybg_request',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_epaybg_request')
  ,Yii::app()->functions->epayBgPaymentRequestType(),
array(
  'class'=>"p-1 border rounded"
));
  ?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Language")?></label>
  <?php   
  echo CHtml::dropDownList('admin_sandbox_epaybg_lang',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_epaybg_lang')
  ,Yii::app()->functions->epayBgPaymentLanguahe(),array(
    'class'=>"p-1 border rounded"
  ));
  ?>
</div>


<h3><?php echo Yii::t("default","Live")?></h3>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","MIN")?></label>
  <?php 
  echo CHtml::textField('admin_live_epaybg_min',
  Yii::app()->functions->getOptionAdmin('admin_live_epaybg_min')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Secret")?></label>
  <?php 
  echo CHtml::textField('admin_live_epaybg_secret',
  Yii::app()->functions->getOptionAdmin('admin_live_epaybg_secret')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Payment Request")?></label>
  <?php   
  echo CHtml::dropDownList('admin_live_epaybg_request',
  Yii::app()->functions->getOptionAdmin('admin_live_epaybg_request')
  ,Yii::app()->functions->epayBgPaymentRequestType(),array(
    'class'=>"p-1 border rounded"
  ));
  ?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Language")?></label>
  <?php   
  echo CHtml::dropDownList('admin_live_epaybg_lang',
  Yii::app()->functions->getOptionAdmin('admin_live_epaybg_lang')
  ,Yii::app()->functions->epayBgPaymentLanguahe(),array(
    'class'=>"p-1 border rounded"
  ));
  ?>
</div>

<h3><?php echo Yii::t("default","URL for receiving notifications")?></h3>
<p class="text-danger"><?php echo websiteUrl()?>/store/epaybg/mode/receiver/</p>
<p><?php echo t("Set this link as Notification for WEB payments in your Epaybg account")?></p>

<div class="row mt-3">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>

</div>
</div>
</div>
</div>
