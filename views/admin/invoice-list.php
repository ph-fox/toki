
<a href="<?php echo Yii::app()->createUrl('/admin/invoice')?>" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" >
                    <input type="hidden" name="action" id="action" value="InvoiceList">
                    <input type="hidden" name="tbl" id="tbl" value="invoice">
                    <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                    <input type="hidden" name="server_side" id="server_side" value="1">
                    <input type="hidden" name="whereid" id="whereid" value="invoice_number">
                    <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic"> 
                    <thead>
                            <tr>
                                <th width="11%"><?php echo t("Invoice number")?>
                                <th width="10%"><?php echo t("Merchant id")?></th>
                                <th width="15%"><?php echo t("Merchant")?></th>             
                                <th width="15%"><?php echo t("Invoice terms")?></th>             
                                <th width="20%"><?php echo t("Period")?></th> 
                                <th width="12%"><?php echo t("Total")?></th> 
                                <th width="12%"><?php echo t("Status")?></th> 
                                <th width="12%"><?php echo t("Payment Status")?></th> 
                                <th width="12%"><?php echo t("PDF")?></th> 
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
