<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','withdrawalDriversSettings')?>

<?php 
$payoutRequest=EmailTPL::payoutRequest();
$payoutProcess=EmailTPL::payoutProcess();
$paymode=yii::app()->functions->getOptionAdmin('wd_driver_paypal_mode');

$wd_driver_template_payout_subject=yii::app()->functions->getOptionAdmin('wd_driver_template_payout_subject');
$wd_driver_template_process_subject=yii::app()->functions->getOptionAdmin('wd_driver_template_process_subject');
if (empty($wd_driver_template_payout_subject)){
	$wd_driver_template_payout_subject=t("Your Request for Withdrawal was Received");
}
if (empty($wd_driver_template_process_subject)){
	$wd_driver_template_process_subject=t("Your Request for Withdrawal has been Processed");
}
?>


<h3><?php echo t("Settings")?></h3>

<!--<div class="row">
<label class="form-label"><?php echo t("Disabled Withdrawal from merchant")?>:</label>  
<?php echo CHtml::checkBox('wd_driver_payout_disabled',
yii::app()->functions->getOptionAdmin('wd_driver_payout_disabled')==2?true:false,
array(
 'class'=>"icheck ",
 'value'=>2
))?>
</div>-->

<div class="row">
<label class="form-label"><?php echo t("Enabled Notification")?>?</label>  
<?php echo CHtml::checkBox('wd_driver_payout_notification',
yii::app()->functions->getOptionAdmin('wd_driver_payout_notification')==2?true:false,
array(
 'class'=>"icheck",
 'value'=>2
))?>
</div>

<!--<div class="row">
<label class="form-label"><?php echo t("Minimum Payout Amount")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_minimum_amount',yii::app()->functions->getOptionAdmin('wd_driver_minimum_amount'),array(
 'class'=>"numeric_only"
));
?>
<span style="padding-left:10px;">
<?php echo Yii::app()->functions->adminCurrencySymbol();?>
</span>
<p class="text-muted"><?php echo t("Minimum Amount that merchant can only withdraw")?></p>
</div>-->


<div class="row">
<label class="form-label"><?php echo t("Days to process")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_days_process',yii::app()->functions->getOptionAdmin('wd_driver_days_process'),array(
 'class'=>"numeric_only form-control"
))
?>
<span style="padding-left:10px;"><?php echo t("days")?></span>
<p class="text-muted"><?php echo t("How many days the payout will be process")?></p>
</div>

<hr></hr>

<h3><?php echo t("Payment method")?></h3>

<!--<div class="row">
<label class="form-label"><b><?php echo t("Enabled Paypal")?>:</b></label>  
<?php echo CHtml::checkBox('wd_driver_enabled_paypal',
yii::app()->functions->getOptionAdmin('wd_driver_enabled_paypal')==2?true:false,
array(
 'class'=>"icheck",
 'value'=>2
))?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Mode")?></label>
  <?php 
  echo CHtml::radioButton('wd_driver_paypal_mode',
  $paymode=="Sandbox"?true:false
  ,array(
    'value'=>"Sandbox",
    'class'=>"icheck"
  ))
  ?>
  <?php echo Yii::t("default","Sandbox")?>
  <?php 
  echo CHtml::radioButton('wd_driver_paypal_mode',
  $paymode=="live"?true:false
  ,array(
    'value'=>"live",
    'class'=>"icheck"
  ))
  ?>	
  <?php echo Yii::t("default","live")?> 
</div>

<div class="row">
<label class="form-label"><?php echo t("Minimum Payout Amount")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_paypal_minimum',yii::app()->functions->getOptionAdmin('wd_driver_paypal_minimum'),array(
 'class'=>"numeric_only "
));
?>
<span style="padding-left:10px;">
<?php echo Yii::app()->functions->adminCurrencySymbol();?>
</span>
</div>

<!--<div class="row">
<label class="form-label"><?php echo t("Client ID")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_paypal_client_id',yii::app()->functions->getOptionAdmin('wd_driver_paypal_client_id'),array(
 'class'=>"uk-form-width-large"
))
?>
</div>


<div class="row">
<label class="form-label"><?php echo t("Client Secret")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_paypal_client_secret',yii::app()->functions->getOptionAdmin('wd_driver_paypal_client_secret'),array(
 'class'=>"uk-form-width-large"
))
?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Paypal User")?></label>
  <?php 
  echo CHtml::textField('wd_driver_paypal_mode_user',
  Yii::app()->functions->getOptionAdmin('wd_driver_paypal_mode_user')
  ,array(
    'class'=>"uk-form-width-large"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Paypal Password")?></label>
  <?php 
  echo CHtml::textField('wd_driver_paypal_mode_pass',
  Yii::app()->functions->getOptionAdmin('wd_driver_paypal_mode_pass')
  ,array(
    'class'=>"uk-form-width-large"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Paypal Signature")?></label>
  <?php 
  echo CHtml::textField('wd_driver_paypal_mode_signature',
  Yii::app()->functions->getOptionAdmin('wd_driver_paypal_mode_signature')
  ,array(
    'class'=>"uk-form-width-large"
  ))
  ?>
</div>


<hr></hr>
-->
<div class="row">
<label class="form-label"><b><?php echo t("Enabled Bank Transfer")?>:</b></label>  
<?php echo CHtml::checkBox('wd_driver_bank_deposit',
yii::app()->functions->getOptionAdmin('wd_driver_bank_deposit')==2?true:false,
array(
 'class'=>"icheck",
 'value'=>2
))?>
</div>

<div class="row">
<label class="form-label"><b><?php echo t("Bank Fields")?>:</b></label>  

<ul>
 <li>  
  <?php echo CHtml::radioButton('wd_driver_bank_fields',
  yii::app()->functions->getOptionAdmin('wd_driver_bank_fields')=="default"?true:false,array(
  'class'=>"icheck",
  'value'=>"default"
  ))?>
  <?php echo t("Use Default")?>
 </li>
 
 <!--<li style="padding-left:170px;">  
  <?php echo CHtml::radioButton('wd_driver_bank_fields',
  yii::app()->functions->getOptionAdmin('wd_driver_bank_fields')=="au"?true:false,array(
  'class'=>"icheck",
  'value'=>"au"
  ))?>
  <?php echo t("Use Australia Bank Fields")?>
 </li>
</ul>
</div>-->


<div class="row">
<label class="form-label"><?php echo t("Minimum Payout Amount")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_bank_minimum',yii::app()->functions->getOptionAdmin('wd_driver_bank_minimum'),array(
 'class'=>"numeric_only form-control"
));
?>
<span style="padding-left:10px;">
<?php echo Yii::app()->functions->adminCurrencySymbol();?>
</span>
</div>

<hr></hr>

<h3><?php echo t("Email Template")?></h3>

<div class="row">
<label class="form-label"><?php echo t("Subject")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_template_payout_subject',$wd_driver_template_payout_subject,array(
 'class'=>"form-control"
));
?>

<div class="row">
<label class="form-label"><?php echo t("Template Payout")?>:</label>  
<?php 
echo CHtml::textArea('wd_driver_template_payout',
yii::app()->functions->getOptionAdmin('wd_driver_template_payout')==""?$payoutRequest:yii::app()->functions->getOptionAdmin('wd_driver_template_payout')
,array(
 'class'=>'big-textarea'
))
?>
<p><?php echo t("Available Tags")?>:</p>
<ul>
  <li class="uk-badge">{<?php echo t("driver-name")?>}</li>
  <li class="uk-badge">{<?php echo t("payment-method")?>}</li>
  <li class="uk-badge">{<?php echo t("payout-amount")?>}</li>
  <li class="uk-badge">{<?php echo t("account")?>}</li>
  <li class="uk-badge">{<?php echo t("cancel-date")?>}</li>
  <li class="uk-badge">{<?php echo t("cancel-link")?>}</li>
  <li class="uk-badge">{<?php echo t("process-date")?>}</li>  
</ul>
</div>

<hr></hr>


<div class="row">
<label class="form-label"><?php echo t("Subject")?>:</label>  
<?php 
echo CHtml::textField('wd_driver_template_process_subject',$wd_driver_template_process_subject,array(
 'class'=>"form-control"
));
?>

<div class="row">
<label class="form-label"><?php echo t("Template Payment Process")?>:</label>  
<?php 
echo CHtml::textArea('wd_driver_template_process',
yii::app()->functions->getOptionAdmin('wd_driver_template_process')==""?$payoutProcess:yii::app()->functions->getOptionAdmin('wd_driver_template_process')
,array(
 'class'=>'big-textarea'
))
?>
<p><?php echo t("Available Tags")?>:</p>
<ul>
  <li class="uk-badge">{<?php echo t("driver-name")?>}</li>
  <li class="uk-badge">{<?php echo t("payment-method")?>}</li>
  <li class="uk-badge">{<?php echo t("payout-amount")?>}</li> 
  <li class="uk-badge">{<?php echo t("acoount")?>}</li> 
</ul>
</div>

<hr></hr>

<div class="row">
<label class="form-label"><?php echo t("Template Payout Admin")?>:</label>  
<?php 
echo CHtml::textArea('wd_driver_template_payout_admin',
yii::app()->functions->getOptionAdmin('wd_driver_template_payout_admin')==""?"":yii::app()->functions->getOptionAdmin('wd_driver_template_payout_admin')
,array(
 'class'=>'big-textarea'
))
?>
<p><?php echo t("Available Tags")?>:</p>
<ul>
  <li class="uk-badge">{<?php echo t("driver-name")?>}</li>
  <li class="uk-badge">{<?php echo t("payment-method")?>}</li>
  <li class="uk-badge">{<?php echo t("payout-amount")?>}</li>
  <li class="uk-badge">{<?php echo t("account")?>}</li>
  <li class="uk-badge">{<?php echo t("cancel-date")?>}</li>
  <li class="uk-badge">{<?php echo t("cancel-link")?>}</li>
  <li class="uk-badge">{<?php echo t("process-date")?>}</li>  
</ul>
</div>

<div class="row">
<label class="form-label"></label>
<input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>


</form>
