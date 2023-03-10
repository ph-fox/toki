
<a href="<?php echo Yii::app()->createUrl('admin/tags_add')?>" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->createUrl('admin/tags') ?>" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<?php 
if (isset($_GET['tag_id'])){
	if (!$data=FunctionsV3::getTagsByID( (integer)$_GET['tag_id'] )){
		echo "<div class=\"alert alert-danger\">".
		Yii::t("default","Sorry but we cannot find what your are looking for.")."</div>";
		return ;
	}
}
?>                                   

<div class="spacer"></div>
<div class="row">
  <div class="col-6">
    <div class="card">
      <form class="row g-3 forms" id="forms">
      <?php echo CHtml::hiddenField('action','addTag')?>
      <?php echo CHtml::hiddenField('tag_id',isset($_GET['tag_id'])?$_GET['tag_id']:"");?>
      <?php if (!isset($_GET['id'])):?>
      <?php echo CHtml::hiddenField("redirect", Yii::app()->createUrl('admin/tags') )?>
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
        <label class="form-label"><?php echo Yii::t("default","Tag Name")?></label>
        <?php echo CHtml::textField('tag_name',
        isset($data['tag_name'])?($data['tag_name']):""
        ,array(
        'class'=>'uk-form-width-large',
        'data-validation'=>"required"
        ))?>  
        </div>    
        
      <div class="row">
        <label class="form-label"><?php echo Yii::t("default","Description")?></label>
        <?php echo CHtml::textField('description',
        isset($data['description'])?($data['description']):""
        ,array(
        'class'=>'uk-form-width-large',  
        ))?>  
        </div>      
          
          <div style="height:10px;"></div>
        
        </li>
        
        <?php 
        $tag_name_trans=isset($data['tag_name_trans'])?json_decode($data['tag_name_trans'],true):'';   
        $description_trans=isset($data['description_trans'])?json_decode($data['description_trans'],true):'';   
        ?>
        
        <?php if (is_array($fields) && count($fields)>=1):?>
        <?php foreach ($fields as $key_f => $f_val): ?>
        <li>
        
        <div class="row">
          <label class="form-label"><?php echo Yii::t("default","Tag Name")?></label>
          <?php echo CHtml::textField("tag_name_trans[$key_f]",
          array_key_exists($key_f,(array)$tag_name_trans)?$tag_name_trans[$key_f]:''
          ,array(
          'class'=>'uk-form-width-large',
          ))?>  
        </div>    
        
          <div class="row">
          <label class="form-label"><?php echo Yii::t("default","Tag Name")?></label>
          <?php echo CHtml::textField("description_trans[$key_f]",
          array_key_exists($key_f,(array)$description_trans)?$description_trans[$key_f]:''
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

      <div class="row mt-4">
        <label class="mt-1 mx-3 form-label"><?php echo Yii::t("default","Tag Name")?></label>
        <?php 
        echo CHtml::textField('tag_name',
        isset($data['tag_name'])?$data['tag_name']:""
        ,array('class'=>"form-control mx-4",
        'data-validation'=>"required",
        "style"=>"width:90%;"))
        ?>
      </div>
      <?php endif;?>

      <div class="mb-3">
        <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="mx-3 btn btn-success">
      </div>

      </form>
    </div>
  </div>
</div>
