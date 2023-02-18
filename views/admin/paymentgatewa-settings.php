<div class="spacer"></div>

<div class="row">
    <div class="col-7">
        <div class="card">
            <div class="card-body">

<form class="mx-3 admin-settings-page forms" id="forms">
<?php echo CHtml::hiddenField('action','paymentgatewaySettings')?>

<?php 
$paymentgateway=Yii::app()->functions->getMerchantListOfPaymentGateway();
$list=FunctionsV3::PaymentOptionList();
?>

<h4><?php echo t("list of enabled payment gateway on merchant")?></h4>
  
  <div class="row">  
  <ul>
  
  <?php foreach ($list as $key=>$val):?>
   <li><?php 
   echo CHtml::checkBox('paymentgateway[]',
   in_array($key,(array)$paymentgateway)?true:false
   ,array(
    'class'=>"icheck",
    'value'=>$key
   ));
   echo "<span>".$val."</span>";
   ?>
   </li>
   <?php endforeach;?>
        
  </ul>
</div>

<div class="">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>

  </div>
  </div>
  </div>
  </div>
