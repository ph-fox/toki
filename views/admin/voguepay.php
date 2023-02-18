<div class="spacer"></div>

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-body">

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','AdminVoguepaySettings')?>

<div class="">
  <label class="form-label"><?php echo t("Enabled")." ".t("voguepay")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_vog_enabled',
  getOptionA('admin_vog_enabled')==2?true:false
  ,array(
    'value'=>2,
    'class'=>"icheck"
  ))
  ?> 
</div>



<div class="row">
  <label class="form-label"><?php echo t("Merchant ID")?></label>
  <?php 
  echo CHtml::textField('admin_vog_merchant_id',
  Yii::app()->functions->getOptionAdmin('admin_vog_merchant_id')
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
