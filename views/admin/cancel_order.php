
<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list2" method="POST" class="report uk-form uk-form-horizontal merchant-dashboard" >
                    <input type="hidden" name="action" id="action" value="requestCancelOrderList">
                    <input type="hidden" name="tbl" id="tbl" value="item">
                    <table id="table_list2" class="table table-hover table-striped table-condensed datatable-basic">  
                    <thead>
                            <tr> 
                                <th width="2%"><?php echo Yii::t('default',"Ref#")?></th>
                                <th width="6%"><?php echo Yii::t('default',"Name")?></th>
                                <th width="6%"><?php echo Yii::t('default',"Contact#")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Item")?></th>            
                                <th width="3%"><?php echo Yii::t('default',"TransType")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Payment Type")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Total")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Tax")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Total W/Tax")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Status")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Platform")?></th>
                                <th width="3%"><?php echo Yii::t('default',"Date")?></th>
                                <th width="3%"></th>
                            </tr>
                        </thead>
                        <tbody>    
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
