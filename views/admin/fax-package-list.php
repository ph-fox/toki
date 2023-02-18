
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/faxpackage/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/faxpackage" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/faxpackage/Do/Sort" class="btn btn-secondary"><i class="fa fa-sort-alpha-asc"></i> <?php echo Yii::t("default","Sort")?></a>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
<form id="frm_table_list" method="POST" >
<input type="hidden" name="action" id="action" value="FaxpackagesList">
<input type="hidden" name="tbl" id="tbl" value="fax_package">
<input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
<input type="hidden" name="whereid"  id="whereid" value="fax_package_id">
<input type="hidden" name="slug" id="slug" value="faxpackage/Do/Add">
<table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">
  <!--<caption>Merchant List</caption>-->
   <thead>
        <tr>
            <th width="3%"><?php echo Yii::t("default","ID")?></th>
            <th width="7%"><?php echo Yii::t("default","Title")?></th>
            <th width="7%"><?php echo Yii::t("default","Description")?></th>
            <th width="3%"><?php echo Yii::t("default","Price")?></th>
            <th width="3%"><?php echo Yii::t("default","Promo Price")?></th>
            <th width="5%"><?php echo Yii::t("default","Fax Credit Limit")?></th>            
            <th width="5%"><?php echo Yii::t("default","Status")?></th>            
        </tr>
    </thead>
    <tbody>    
    </tbody>
</table>
<div class="clear"></div>
</form>
</div>
</div>
</div>
</div>
</div>
