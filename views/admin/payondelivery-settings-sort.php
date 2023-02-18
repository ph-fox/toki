<?php 
$list=Yii::app()->functions->getPaymentProviderList();
?>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/payondelivery/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/payondelivery" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/payondelivery/Do/Sort" class="btn btn-secondary"><i class="fa fa-sort-alpha-asc"></i> <?php echo Yii::t("default","Sort")?></a>

<div class="spacer"></div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
          <form class="row g-3 forms" id="forms">
          <?php echo CHtml::hiddenField('action','sortItem')?>
          <?php echo CHtml::hiddenField('table','payment_provider')?>
          <?php echo CHtml::hiddenField('whereid','id')?>

          <h3 class="uk=h3"><?php echo Yii::t("default","Sort")?></h3>
          <p class="text-muted"><?php echo Yii::t("default","Drag the item below to sort")?></p>
          <?php if (is_array($list) && count($list)>=1):?>
            <ul class="uk-sortable" data-uk-sortable>
            <?php foreach ($list as $val):?>
            <li class="uk-panel uk-panel-box" style="list-style:none;margin-bottom:5px;">
              <?php echo CHtml::hiddenField('sort_field[]',$val['id'])?>
              <i class="fa fa-arrows-alt"></i>
              <?php echo ucfirst($val['payment_name'])?>
            </li>
            <?php endforeach;?>
            </ul>
          <?php else :?>
          <p class=""><?php echo Yii::t("default","No results")?></p>
          <?php endif;?>

          <div class="row mx-auto mt-3">
            <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
          </div>
          </form>
          </div>
          </div>
          </div>
          </div>
