
<div id="error-message-wrapper"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','analyticsSetting')?>




<p class="text-muted">
<?php 
echo t("You can add your google analytics code here or any snippet code.")
?>
</p>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Code")?></label>
  <?php 
  echo CHtml::textArea('admin_header_codes',
  Yii::app()->functions->getOptionAdmin('admin_header_codes'),
  array('class'=>'form-control'))
  ?>
</div>

<div class="row">
<label class="form-label"></label>
<input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>
