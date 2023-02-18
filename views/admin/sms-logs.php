
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/smslogs" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
<form id="frm_table_list" method="POST" >
<input type="hidden" name="action" id="action" value="smsLogs">
<input type="hidden" name="tbl" id="tbl" value="sms_broadcast_details">
<input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
<input type="hidden" name="whereid"  id="whereid" value="id">
<input type="hidden" name="slug" id="slug" value="smslogs">
<input type="hidden" name="server_side" id="server_side" value="1">
<table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
   <thead>
        <tr>
            <th width="2%"><?php echo Yii::t("default","ID")?></th>
            <th width="2%"><?php echo Yii::t("default","Gateway")?></th>
            <th width="4%"><?php echo Yii::t("default","Merchant Name")?></th>
            <th width="7%"><?php echo Yii::t("default","Mobile Number")?></th>
            <th width="7%"><?php echo Yii::t("default","SMS Message")?></th>
            <th width="7%"><?php echo Yii::t("default","Gateway Response")?></th>
            <th width="7%"><?php echo Yii::t("default","Status")?></th>
            <th width="3%"><?php echo Yii::t("default","Date Created")?></th>            
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
