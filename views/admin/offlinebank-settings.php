<div class="spacer"></div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
<?php
$enabled=Yii::app()->functions->getOptionAdmin('admin_bankdeposit_enabled');
$deposit_instructions=Yii::app()->functions->getOptionAdmin('admin_deposit_instructions');
if (empty($deposit_instructions)){
	$deposit_instructions=EmailTPL::bankDepositTPL();
}
?>

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','adminBankDeposit')?>

<div class="">
  <label class="form-label"><?php echo Yii::t("default","Enabled Offline Bank Deposit")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_bankdeposit_enabled',
  $enabled=="yes"?true:false
  ,array(
    'value'=>"yes",
    'class'=>"icheck"
  ))
  ?> 
</div>


<div class="row mt-3 mx-auto">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>

  </div>
  </div>
  </diV>
  </div>
