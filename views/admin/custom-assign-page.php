
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/customPage/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/customPage/Do/AddCustom" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New Custom Link")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/customPage" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/customPage/Do/Assign" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","Assign Page")?></a>


<?php if ($res=Yii::app()->functions->getCustomPageList()):?>

<?php 
$position=array(
  //'top'=>t("Top"),
  'bottom'=>t("bottom column 1"),
  'bottom2'=>t("bottom column 2")
);
?>
<div class="spacer"></div>
<div class="row">
  <div class="col-6">
    <div class="card">
      <form class="mt-3 forms assignpage-form" id="forms">
      <?php echo CHtml::hiddenField('action','assignCustomPage')?>

      <ul class="uk-list uk-list-striped sortable-jquery">
      <?php foreach ($res as $val):?>
      <li>
      <div class="uk-grid">
        <div class="uk-width-1-2"> 
          <?php echo CHtml::hiddenField('id[]',$val['id'])?>
          <?php echo $val['page_name']?>
        </div>
        <div class="uk-width-1-2">
          <?php echo Yii::t("default","Assign to")?> <?php echo CHtml::dropDownList('assign_to[]',$val['assign_to'],$position,
          array(
            'class'=>"p-1 rounded border",
            'style'=>"outline:none;"
          ))?>
        </div>
      </div>
      </li>
      <?php endforeach;?>
      </ul>

      <div class="m-2">
      <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
      </div>

      </form>

      <?php else :?>
      <p class="text-danger"><?php echo Yii::t("default","No custom page found.")?></p>
      <?php endif;?>
    </div>
  </div>
</div>
