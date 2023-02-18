
<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','languageSettings')?>

<div class="row form-control mt-1 mb-1">
  <label class="form-label"><?php echo Yii::t("default","Disabled Language on front end")?></label>
  <?php 
  echo CHtml::checkBox('show_language',
  Yii::app()->functions->getOptionAdmin('show_language')
  ,array(
   'class'=>"icheck"
  ))
  ?>
</div>

<div class="row form-control mt-1 mb-1">
  <label class="form-label"><?php echo Yii::t("default","Disabled Language bar on Admin/Merchant")?></label>
  <?php 
  echo CHtml::checkBox('show_language_backend',
  Yii::app()->functions->getOptionAdmin('show_language_backend')
  ,array(
   'class'=>"icheck"
  ))
  ?>
</div>

<div class="row form-control mt-1 mb-1">
  <label class="form-label"><?php echo Yii::t("default","Enabled Multiple Field Translation")?></label>
  <?php 
  echo CHtml::checkBox('enabled_multiple_translation',
  Yii::app()->functions->getOptionAdmin('enabled_multiple_translation')==2?true:false  
  ,array(
   'class'=>"icheck",
   'value'=>2
  ))
  ?>
</div>
<p class="text-muted uk-text-small">
<?php echo t("this will add a field on food item and category for multiple language")?>
</p>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Set Language")?></label>
  <?php if (is_array($langauge_list) && count($langauge_list)>=1):?>    
</div>  
<p class="text-muted">
<?php echo Yii::t("default","Select language that will be added in language bar")?>
</p>
<div>
<div class="row form-control mt-1 mb-1">
  <table class="w-100 table table-striped table-condensed datatable-basic" style="width:50%;">
    <thead>
      <tr>
      <th><?php echo t("Language")?></th>
      <th><?php echo t("Enabled")?></th>
      <th><?php echo t("RTL")?></th>
      </tr>
    </thead>
    
    <?php foreach ($langauge_list as $key=>$val):?>
    <tbody>
    <tr>    
      <td><?php echo " ".$val;?></td>
      
      <td>
    <?php echo CHtml::checkBox('set_lang_id[]',
    in_array($key,(array)$set_lang_id)?true:false
    ,array('class'=>"icheck",'value'=>$key))?>
      </td>
          
      <td>
      <?php echo CHtml::checkBox('lang_rtl[]',
    in_array($key,(array)$lang_rtl)?true:false
    ,array('class'=>"icheck",'value'=>$key))?>
      </td>
      
    </tr>
    </tbody>
    <?php endforeach;?>
  </table>
</div>


<?php endif;?>
  
  
<div class="row mt-2 mb-2 form-control" style="background:transparent; border:none;">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>
