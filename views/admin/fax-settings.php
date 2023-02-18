<div class="spacer"></div>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','FaxSettings')?>

<h3><?php echo t("Fax Settings")?></h3>

<div class="">
<label class="form-label"><?php echo t("Enabled Fax Services from merchant")?>:</label>  
<?php echo CHtml::checkBox('fax_enabled',
yii::app()->functions->getOptionAdmin('fax_enabled')==2?true:false,
array(
 'class'=>"icheck",
 'value'=>2
))?>
</div>

<div class="">
<label class="form-label"><?php echo t("Use admin Fax credits to send Fax on merchant")?>:</label>  
<?php echo CHtml::checkBox('fax_user_admin_credit',
yii::app()->functions->getOptionAdmin('fax_user_admin_credit')==2?true:false,
array(
 'class'=>"icheck",
 'value'=>2
))?>
</div>

<h3><?php echo t("Faxage Account")?></h3>
<p class="text-muted uk-text-small">
<?php echo t("Get your faxage.com account on")?>  http://www.faxage.com
</p>

<div class="row">
<label class="form-label"><?php echo t("Company")?>:</label>  
<?php 
echo CHtml::textField('fax_company',yii::app()->functions->getOptionAdmin('fax_company'),array(
 'class'=>"form-control"
))
?>
</div>

<div class="row">
<label class="form-label"><?php echo t("Username")?>:</label>  
<?php 
echo CHtml::textField('fax_username',yii::app()->functions->getOptionAdmin('fax_username'),array(
 'class'=>"form-control"
))
?>
</div>

<div class="row">
<label class="form-label"><?php echo t("Password")?>:</label>  
<?php 
echo CHtml::passwordField('fax_password',yii::app()->functions->getOptionAdmin('fax_password'),array(
 'class'=>"form-control"
))
?>
</div>

<h3><?php echo t("Notificaton")?></h3>


<div class="row">
<label class="form-label"><?php echo t("Email address")?>:</label>  
<?php 
echo CHtml::textField('fax_email_notification',yii::app()->functions->getOptionAdmin('fax_email_notification'),array(
 'class'=>"form-control"
))
?>
</div>
<p class="text-muted"><?php echo t("Email Address that will receive notification when there is new payment")?></p>

<hr></hr>


<div class="row mt-1">
    <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>
</form>
</div>
</div>
</div>
</div>
