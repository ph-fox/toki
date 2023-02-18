<div class="spacer"></div>

<div class="row">
    <div class="col-7">
        <div class="card">
            <div class="card-body">


<?php
$enabled_paypal=Yii::app()->functions->getOptionAdmin('admin_enabled_barclay');
$paypal_mode=Yii::app()->functions->getOptionAdmin('admin_mode_barclay');
?>

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','saveAdminBarclaySettings')?>

<div class="">
  <label class="form-label"><?php echo Yii::t("default","Enabled")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_enabled_barclay',
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
  echo CHtml::radioButton('admin_mode_barclay',
  $paypal_mode=="sandbox"?true:false
  ,array(
    'value'=>"sandbox",
    'class'=>"icheck"
  ))
  ?>
  <?php echo t("Sandbox")?> 
  <?php 
  echo CHtml::radioButton('admin_mode_barclay',
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
  <label class="form-label"><?php echo Yii::t("default","PSPID")?></label>
  <?php 
  echo CHtml::textField('admin_sandbox_barclay_pspid',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_barclay_pspid')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Password")?></label>
  <?php 
  echo CHtml::textField('admin_sandbox_barclay_password',
  Yii::app()->functions->getOptionAdmin('admin_sandbox_barclay_password')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>



<h3><?php echo Yii::t("default","Live")?></h3>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","PSPID")?></label>
  <?php 
  echo CHtml::textField('admin_live_barclay_pspid',
  Yii::app()->functions->getOptionAdmin('admin_live_barclay_pspid')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Password")?></label>
  <?php 
  echo CHtml::textField('admin_live_barclay_password',
  Yii::app()->functions->getOptionAdmin('admin_live_barclay_password')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<h3><?php echo Yii::t("default","Parameters")?></h3>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Currency")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_currency',
  Yii::app()->functions->getOptionAdmin('admin_bcy_currency')
  ,array(
    'class'=>"form-control"
  ))
  ?>
  <span class="text-muted"><?php echo t("Example GBP")?></span>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Language")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_language',
  Yii::app()->functions->getOptionAdmin('admin_bcy_language')
  ,array(
    'class'=>"form-control"
  ))
  ?>
  <span class="text-muted"><?php echo t("Example en_GB")?></span>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Font Type")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_font',
  Yii::app()->functions->getOptionAdmin('admin_bcy_font')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Logo URL Or Filename")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_logo',  
  getOptionA('admin_bcy_logo')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","PMLISTTYPE")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_listype',
  Yii::app()->functions->getOptionAdmin('admin_bcy_listype')
  ,array(
    'class'=>"form-control"
  ))
  ?>
  <span class="text-muted"><?php t("value = 1")?></span>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","BG Color")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_bgcolor',
  Yii::app()->functions->getOptionAdmin('admin_bcy_bgcolor')
  ,array(
    'class'=>"form-control"
  ))
  ?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Button Color")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_buttoncolor',
  Yii::app()->functions->getOptionAdmin('admin_bcy_buttoncolor')
  ,array(
    'class'=>"form-control"
  ))
  ?> 
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Button Text Color")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_buttontextcolor',
  Yii::app()->functions->getOptionAdmin('admin_bcy_buttontextcolor')
  ,array(
    'class'=>"form-control"
  ))
  ?> 
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Table BG Color")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_table_bgcolor',
  Yii::app()->functions->getOptionAdmin('admin_bcy_table_bgcolor')
  ,array(
    'class'=>"form-control"
  ))
  ?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Table Text Color")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_table_textcolor',
  Yii::app()->functions->getOptionAdmin('admin_bcy_table_textcolor')
  ,array(
    'class'=>"form-control"
  ))
  ?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Title")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_title',
  Yii::app()->functions->getOptionAdmin('admin_bcy_title')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Text Color")?></label>
  <?php 
  echo CHtml::textField('admin_bcy_textcolor',
  Yii::app()->functions->getOptionAdmin('admin_bcy_textcolor')
  ,array(
    'class'=>"form-control"
  ))
  ?> 
</div>

<div class="row mt-3">
<label class="form-label"></label>
<input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>
  </div>
  </div>
  </div>
  </div>
