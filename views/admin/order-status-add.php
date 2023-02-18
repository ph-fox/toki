
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/OrderStatus/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/OrderStatus" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<div class="spacer"></div>

<div class="row">
  <div class="col-6">
    <div class="card">
      <form class="row g-3 forms" id="forms">
      <?php echo CHtml::hiddenField('action','addOrderStatus')?>
      <?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>
      <?php echo CHtml::hiddenField('is_admin',1);?>
      <?php if (!isset($_GET['id'])):?>
      <?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin/OrderStatus/Do/Add")?>
      <?php endif;?>

      <?php 
      if (isset($_GET['id'])){
        if (!$data=Yii::app()->functions->getOrderStatus($_GET['id'])){
          echo "<div class=\"alert alert-danger\">".
          Yii::t("default","Sorry but we cannot find what your are looking for.")."</div>";
          return ;
        }	
      }
      ?>                                 

      <div class="mt-4 row">
        <label class="mt-1 mx-3 form-label"><?php echo Yii::t("default","Status")?></label>
        <?php echo CHtml::textField('description',
        isset($data['description'])?$data['description']:""
        ,array(
        'class'=>'mx-4 form-control',
        'data-validation'=>"required",
        'style'=>"width:90%;"
        ))?>
      </div>

      <div class="mb-3">
        <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="mx-3 btn btn-success ">
      </div>
      </form>
    </div>
  </div>
</div>
