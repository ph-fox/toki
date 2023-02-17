

<div class="uk-width-1">
  <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dishes/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
  <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dishes" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
</div>

<div class="spacer"></div>

<div>
  <div class="border border-3 border-grey rounded text-left bg-white" style="max-width:470px;">
  <form class="row g-3 forms mt-2" id="forms">
    <?php echo CHtml::hiddenField('action','addDish')?>
    <?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>
    <?php if (!isset($_GET['id'])):?>
    <?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin/dishes/Do/Add")?>
    <?php endif;?>

    <?php if ( Yii::app()->functions->multipleField()==2):?>

    <ul data-uk-tab="{connect:'#tab-content'}" class="uk-tab uk-active">
      <li class="uk-active" ><a href="#"><?php echo t("default")?></a></li>    
      <?php if ( $fields=FunctionsV3::getLanguageList(false)):?>  
      <?php foreach ($fields as $f_val): ?>
      <li class="" ><a href="#"><?php echo $f_val;?></a></li>
      <?php endforeach;?>
      <?php endif;?>
    </ul>

    <ul class="uk-switcher" id="tab-content">
      <li class="uk-active">      
    
      <div class="row">
        <label class="form-label"><?php echo Yii::t("default","Dish Name")?></label>
        <?php echo CHtml::textField('dish_name',
        isset($data['default'])?$data['default']['dish_name']:''
        ,array(
        'class'=>'uk-form-width-large',
        'data-validation'=>"required"
        ))?>  
      </div>    
    
      <div style="height:10px;"></div>
  
      </li>
      
      <?php if (is_array($fields) && count($fields)>=1):?>
      <?php foreach ($fields as $key_f => $f_val):?>
      <li>   
      <div class="row">
	      <label class="form-label"><?php echo Yii::t("default","Dish Name")?></label>
    	  <?php echo CHtml::textField("dish_name_trans[$key_f]",
	      isset($data[$f_val])?$data[$f_val]['dish_name']:''
	      ,array(
	      'class'=>'uk-form-width-large',
    	  ))?>  
      </div>    
   
      <div style="height:10px;"></div>
   
      </li>
      <?php endforeach;?>
      <?php endif;?>
    </ul>

    <?php else :?>
    <div class="row m-2">
      <label class="form-label"><?php echo Yii::t("default","Dish Name")?></label>
    <?php 
    echo CHtml::textField('dish_name',
      isset($data['dish_name'])?$data['dish_name']:""
      ,array('class'=>"uk-form-width-large mx-2 form-control","style"=>"width:90%;",'data-validation'=>"required"))
    ?>
  </div>
  <?php endif;?>

  <div class="row"> 
    <div>
      <label class="form-label mx-3 text-center"><?php echo t("Upload Icon")?></label>
      <a href="javascript:;" id="sau_upload_file" class="btn btn-primary" data-progress="sau_progress" data-preview="image_preview" data-field="spicydish">
      <?php echo t("Browse")?>
      </a>
    </div>
  </div>
  <div class="sau_progress"></div>

  <div class="image_preview">
  <?php 
  $image=isset($data['default']['photo'])?$data['default']['photo']:'';
  if(!empty($image)){
   	echo '<img src="'.FunctionsV3::getImage($image).'" class="uk-thumbnail" id="logo-small"  />';
 	  echo CHtml::hiddenField('spicydish',$image);
   	echo '<br/>';
 	  echo '<a href="javascript:;" class="sau_remove_file" data-preview="image_preview" >'.t("Remove image").'</a>';
  }
  ?>
  </div>	

  <div style="height:20px;"></div>
	
  <div class="row">
  <label class="form-label mx-3"><?php echo Yii::t("default","Status")?></label>
  <?php echo CHtml::dropDownList('status',
  isset($data['status'])?$data['status']:"",
  (array)statusList(),
  array(
  'class'=>'mx-4 rounded',
  'data-validation'=>"required",
  "style"=>"width:90%;padding:5px;"
  ))?>
  </div>

  <div class="row">
    <label class="form-label"></label>
    <input type="submit" class="form-control btn btn-primary mx-4" style="max-width:90%;" value="<?php echo Yii::t("default","Save")?>">
    <br>
  </div>
  </form>
  </div>
</div>
