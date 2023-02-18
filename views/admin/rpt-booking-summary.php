<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
<form id="frm_table_list" method="GET" class="report uk-form uk-form-horizontal" >
<?php echo CHtml::hiddenField('start_date',isset($_GET['start_date'])?$_GET['start_date']:"")?>
<?php echo CHtml::hiddenField('end_date',isset($_GET['end_date'])?$_GET['end_date']:"")?>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Merchant Name")?></label>
  <?php 
  echo CHtml::dropDownList('merchant_id',
  isset($_GET['merchant_id'])?$_GET['merchant_id']:''
  ,
  (array)Yii::app()->functions->merchantList3(true,true)
  ,array(
    'class'=>'p-1 border rounded'
  ))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Start Date")?></label>
  <?php echo CHtml::textField('start_date1',
  isset($_GET['start_date1'])?$_GET['start_date1']:''
  ,array(
  'class'=>'form-control j_date',
  'data-id'=>'start_date'
  ))?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","End Date")?></label>
  <?php echo CHtml::textField('end_date1',
  isset($_GET['end_date1'])?$_GET['end_date1']:''
  ,array(
  'class'=>'form-control j_date' ,
  'data-id'=>'end_date'
  ))?>
</div>

<div class="mt-3">
  <label class="form-label">&nbsp;</label>
  <input type="submit" class="btn btn-sm btn-success" value="<?php echo t("Search")?>" >  
  <a href="javascript:;" rel="merchanBbookingSummaryReport" class="btn btn-sm btn-outline-primary"><?php echo Yii::t("default","Export")?></a>
</div>  

<div style="height:20px;"></div>


<h3 style="text-align:center;"><?php echo t("Booking Summary Report")?></h3>
<?php if (isset($_GET['start_date']) || isset($_GET['end_date'])):?>
<p style="text-align:center;"><?php echo prettyDate($_GET['start_date'])." ".t("and")." ".prettyDate($_GET['end_date'])?></p>
<?php else :?>
<p style="text-align:center;"><?php echo t("As of")." ".date('F d Y')?></p>
<?php endif;?>

<input type="hidden" name="action" id="action" value="merchanBbookingSummaryReport">
<input type="hidden" name="tbl" id="tbl" value="item">
<input type="hidden" name="server_side" id="server_side" value="1">	
<div class="table-responsive">
<table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
   <thead>
        <tr>                         
           <th width="3%"><?php echo Yii::t('default',"Merchant Name")?></th> 
           <th width="3%"><?php echo Yii::t('default',"Total Approved")?></th> 
           <th width="3%"><?php echo Yii::t('default',"Total Denied")?></th> 
           <th width="3%"><?php echo Yii::t('default',"Total Pending")?></th> 
        </tr>
    </thead>
    <tbody>    
    </tbody>
</table>
<div class="clear"></div>
</div>
</form>
</div>
</div>
</div>
</div>
