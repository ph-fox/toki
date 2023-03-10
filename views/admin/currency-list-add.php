
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/ManageCurrency/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/ManageCurrency" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>


<?php 
if (isset($_GET['id'])){
	if (!$data=Yii::app()->functions->getCurrencyDetailsByID($_GET['id'])){
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
      <?php echo CHtml::hiddenField('action','addCurrency')?>
      <?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>
      <?php if (!isset($_GET['id'])):?>
      <?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin/ManageCurrency/")?>
      <?php endif;?>


      <div class="row mt-4">
        <label class="mx-3 form-label"><?php echo Yii::t("default","Currency Code")?></label>
        <?php 
        echo CHtml::textField('currency_code',
        isset($data['currency_code'])?$data['currency_code']:""
        ,array('class'=>"mx-4 form-control",
        'style'=>"max-width:90%;",
          'data-validation'=>"required",
          'maxlength'=>3
          ))
        ?>
      </div>

      <div class="row">
        <label class="mx-3 form-label"><?php echo Yii::t("default","Currency Symbol")?></label>
        <?php 
        echo CHtml::textField('currency_symbol',
        isset($data['currency_symbol'])?$data['currency_symbol']:"",
        array('class'=>"mx-4 form-control",'style'=>"max-width:90%;",'data-validation'=>"required"))
        ?>
      </div>
      <p class="mx-3 text-muted"><?php echo Yii::t("default","To get symbol refer to")?> <a target="_blank" href="http://www.xe.com/symbols.php">http://www.xe.com/symbols.php</a></p>


      <div class="">
        <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="mx-3 mb-2 btn btn-sm btn-success">
      </div>

      </form>
    </div>
  </div>
</div>
