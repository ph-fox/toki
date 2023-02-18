
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/reviews" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
              <form id="frm_table_list" method="POST" >
              <input type="hidden" name="action" id="action" value="adminCustomerReviews">
              <input type="hidden" name="tbl" id="tbl" value="review">
              <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
              <input type="hidden" name="whereid"  id="whereid" value="id">
              <input type="hidden" name="slug" id="slug" value="reviews">
              <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">
                <!--<caption>Merchant List</caption>-->
                <thead>
                      <tr>			
                          <th width="2%"><?php echo Yii::t('default',"ID")?></th>
                          <th width="5%"><?php echo Yii::t('default',"Merchant Name")?></th>
                    <th width="5%"><?php echo Yii::t('default',"customer")?></th>
                    <th width="10%"><?php echo Yii::t('default',"Reviews")?></th>				 
                    <!--<th width="10%"><?php echo Yii::t('default',"Order Ref")?></th>-->				 
                    <th width="5%"><?php echo Yii::t('default',"Rating")?></th>			 
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
