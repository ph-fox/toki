
<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

<form id="frm_table_list" method="POST" class="report uk-form uk-form-horizontal" >

<?php echo CHtml::hiddenField('start_date',isset($_GET['start_date'])?$_GET['start_date']:"")?>
<?php echo CHtml::hiddenField('end_date',isset($_GET['end_date'])?$_GET['end_date']:"")?>

<?php 
$order_stats=clientStatus();
?>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Start Date")?></label>
  <?php echo CHtml::textField('start_date1',''  
  ,array(
  'class'=>'form-control j_date' ,
  'data-id'=>'start_date'
  ))?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","End Date")?></label>
  <?php echo CHtml::textField('end_date1',''  
  ,array(
  'class'=>'form-control j_date' ,
  'data-id'=>'end_date'
  ))?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Status")?></label>
  <?php echo CHtml::dropDownList('stats_id[]',array(4),(array)$order_stats,array(
  'class'=>"chosen form-control",
  'multiple'=>true
  ),array('class'=>"p-1 border rounded"))?>
</div>

<div class="mt-3">
  <label class="form-label">&nbsp;</label>
  <input type="button" class="btn btn-sm btn-success" value="<?php echo t("Search")?>" onclick="sales_summary_reload();">  
  <a href="javascript:;" rel="rptSalesMerchant" class="btn btn-sm btn-outline-primary"><?php echo t("Export")?></a>
</div>  

<div style="height:20px;"></div>

<input type="hidden" name="action" id="action" value="rptSalesMerchant">
<input type="hidden" name="tbl" id="tbl" value="item">
<input type="hidden" name="server_side" id="server_side" value="1">
<div class="table-responsive">
  <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
    <thead>
          <tr> 
              <th width="2%"><?php echo Yii::t('default',"MerchantID")?></th>
              <th width="6%"><?php echo Yii::t('default',"Merchant Name")?></th>
              <th width="3%"><?php echo Yii::t('default',"Contact name")?></th>            
              <th width="3%"><?php echo Yii::t('default',"Contact")?></th>
              <th width="3%"><?php echo Yii::t('default',"Address")?></th>
              <th width="3%"><?php echo Yii::t('default',"Package")?></th>            
              <th width="3%"><?php echo Yii::t('default',"Status")?></th>        
              <th width="3%"></th>       
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
