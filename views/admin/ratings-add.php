
<div class="uk-width-1">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/Ratings/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/Ratings" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
</div>

<?php 
if (isset($_GET['id'])){
	if (!$data=Yii::app()->functions->getRatingInfo($_GET['id'])){
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
      <form class="mt-3 row g-3 forms" id="forms">
      <?php echo CHtml::hiddenField('action','addRatings')?>
      <?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>
      <?php if (!isset($_GET['id'])):?>
      <?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin/Ratings/")?>
      <?php endif;?>


      <div class="row">
        <label class="mx-3 form-label"><?php echo Yii::t("default","Range 1")?></label>
        <?php 
        echo CHtml::textField('rating_start',
        isset($data['rating_start'])?$data['rating_start']:""
        ,array('class'=>" mx-4 form-control numeric_only",'data-validation'=>"required",'style'=>"max-width:90%;"))
        ?>
      </div>

      <div class="row">
        <label class="mx-3 form-label"><?php echo Yii::t("default","Range 2")?></label>
        <?php 
        echo CHtml::textField('rating_end',
        isset($data['rating_end'])?$data['rating_end']:"",
        array('class'=>" mx-4 form-control numeric_only",'data-validation'=>"required",'style'=>"max-width:90%;"))
        ?>
      </div>

      <div class="row">
        <label class="mx-3 form-label"><?php echo Yii::t("default","Ratings")?></label>
        <?php 
        echo CHtml::textField('meaning',
        isset($data['meaning'])?$data['meaning']:"",
        array('class'=>" mx-4 form-control numeric_only",'data-validation'=>"required",'style'=>"max-width:90%;"))
        ?>
      </div>


      <div class="">
        <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="mx-3 my-2 btn btn-sm btn-success">
      </div>

      </form>
    </div>
  </div>
</div>
