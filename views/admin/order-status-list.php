
<div class="uk-width-1">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/OrderStatus/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/OrderStatus" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
</div>
<div class="spacer"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" >
                    <input type="hidden" name="action" id="action" value="OrderStatusList">
                    <input type="hidden" name="tbl" id="tbl" value="order_status">
                    <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                    <input type="hidden" name="whereid"  id="whereid" value="stats_id">
                    <input type="hidden" name="slug" id="slug" value="OrderStatus/Do/Add">
                    <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">
                    <!--<caption>Merchant List</caption>-->
                    <thead>
                            <tr>            
                                <th width="5%"><?php echo Yii::t('default',"ID")?></th>
                                <th width="4%"><?php echo Yii::t('default',"Status")?></th>            
                                <th width="4%"><?php echo Yii::t('default',"Date")?></th>
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
