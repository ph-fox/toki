
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/smstransaction/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/smstransaction" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>



<?php 
if (isset($_GET['id'])){
	if (!$data=Yii::app()->functions->getSMSTransaction($_GET['id'])){
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
            <div class="card-body">

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','updateSMSTransaction')?>
<?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>
<?php if (!isset($_GET['id'])):?>
<?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin/smstransaction/Do/Add")?>
<?php endif;?>



<?php if (isset($_GET['id'])):?> <!--EDIT-->
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Merchant Name")?></label>
  <?php 
  echo clearString($data['merchant_name']);
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SMS Package")?></label>
  <?php 
  echo $data['sms_package_name'];
  ?>
</div>

<?php else: ?>  <!--ADD-->

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Merchant Name")?></label>
  <?php 
  echo CHtml::dropDownList('merchant_id','',
  (array)Yii::app()->functions->merchantList(true)
  ,array(
    'class'=>'p-1 border rounded'
  ))
  ?>
</div>

<?php 
$sms_pack=Yii::app()->functions->getSMSPackage();
$sms_drop[]=t("Please Select");
if (is_array($sms_pack) && count($sms_pack)>=1){
	foreach ($sms_pack as $sms_val) {		
		$sms_drop[$sms_val['sms_package_id']]=ucwords($sms_val['title']);
	}
}
?>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SMS Package")?></label>
  <?php 
  echo CHtml::dropDownList('sms_package_id','',
  (array)$sms_drop
  ,array(
    'class'=>'p-1 border rounded'
  ))
  ?>
</div>

<?php endif;?>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SMS Credits")?></label>
  <?php 
  echo CHtml::textField('sms_limit',
  isset($data['sms_limit'])?$data['sms_limit']:""
  ,array('class'=>"form-control",'data-validation'=>"required"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Status")?></label>
  <?php 
  echo CHtml::dropDownList("status",
  isset($data['status'])?$data['status']:''
  ,(array)paymentStatus(),array(
    'class'=>"p-1 border rounded"
  ));
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
