
<div class="spacer"></div>

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-body">
<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','cardPaymentSettings')?>
  
<div class="">
  <label class="form-label"><?php echo Yii::t("default","Disabled Card Payment")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_enabled_card',
  Yii::app()->functions->getOptionAdmin('admin_enabled_card')=="yes"?true:false
  ,array(
    'value'=>"yes",
    'class'=>"icheck"
  ));      
  ?> 
</div>


<div class="row">
  <label class="form-label"><?php echo t("Encryption Key")?>?</label>
  <?php 
  echo CHtml::textField('offline_cc_encryption_key',
  getOptionA('offline_cc_encryption_key'),array(
   'class'=>'form-control'
  ));
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
