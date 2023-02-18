
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/voucher/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/voucher" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                  <form id="frm_table_list" method="POST" >
                  <input type="hidden" name="action" id="action" value="VoucherListNew">
                  <input type="hidden" name="tbl" id="tbl" value="voucher_new">
                  <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                  <input type="hidden" name="whereid"  id="whereid" value="voucher_id">
                  <input type="hidden" name="slug" id="slug" value="voucher/Do/Add">
                  <input type="hidden" name="voucher_owner" id="voucher_owner" value="admin">
                  <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">
                    <!--<caption>Merchant List</caption>-->
                    <thead>
                          <tr>
                        <th width="3%"><input type="checkbox" id="chk_all" class="chk_all"></th>
                        <th width="5%"><?php echo Yii::t('default',"Voucher name")?></th>			 		
                        <th width="5%"><?php echo Yii::t('default',"Type")?></th>
                        <th width="5%"><?php echo Yii::t('default',"Discount")?></th>			 
                        <th width="5%"><?php echo Yii::t('default',"Expiration")?></th>			 
                        <th width="5%"><?php echo Yii::t('default',"Used")?></th>			 
                        <th width="5%"><?php echo Yii::t('default',"Date Created")?></th>
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
