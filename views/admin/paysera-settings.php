<div class="spacer"></div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">

<?php
$enabled=Yii::app()->functions->getOptionAdmin('admin_paysera_enabled');
$paymode=Yii::app()->functions->getOptionAdmin('admin_paysera_mode');
?>

<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','adminPayseraSettings')?>

<div class="">
  <label class="form-label"><?php echo Yii::t("default","Enabled paysera")?>?</label>
  <?php 
  echo CHtml::checkBox('admin_paysera_enabled',
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
  echo CHtml::radioButton('admin_paysera_mode',
  $paymode==1?true:false
  ,array(
    'value'=>"1",
    'class'=>"icheck"
  ))
  ?>
  <?php echo Yii::t("default","Sandbox")?>
  <?php 
  echo CHtml::radioButton('admin_paysera_mode',
  $paymode==2?true:false
  ,array(
    'value'=>"2",
    'class'=>"icheck"
  ))
  ?>	
  <?php echo Yii::t("default","live")?> 
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","project id")?></label>
  <?php 
  echo CHtml::textField('admin_paysera_project_id',
  Yii::app()->functions->getOptionAdmin('admin_paysera_project_id')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","sign password")?></label>
  <?php 
  echo CHtml::textField('admin_paysera_password',
  Yii::app()->functions->getOptionAdmin('admin_paysera_password')
  ,array(
    'class'=>"form-control"
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Country")?></label>
  <?php 
  echo CHtml::textField('admin_paysera_country',
  Yii::app()->functions->getOptionAdmin('admin_paysera_country')
  ,array(
    'class'=>"form-control",
    'placeholder'=>t("eg. LT")
  ))
  ?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Language")?></label>
  <?php 
  echo CHtml::textField('admin_paysera_lang',
  Yii::app()->functions->getOptionAdmin('admin_paysera_lang')
  ,array(
    'class'=>"form-control",
    'placeholder'=>t("default is ENG for english")
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
