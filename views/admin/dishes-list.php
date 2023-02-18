
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dishes/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dishes" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>

<div class="spacer"></div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" class="p-3">
                    <input type="hidden" name="action" id="action" value="dishList">
                    <input type="hidden" name="tbl" id="tbl" value="dishes">
                    <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                    <input type="hidden" name="whereid"  id="whereid" value="dish_id">
                    <input type="hidden" name="slug" id="slug" value="/admin/dishes/Do/Add">
                    <div class="table-responsive">
                        <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
                            <thead>
                                <tr>
                                    <th width="2%"><?php echo Yii::t("default","ID")?></th>
                                    <th width="7%"><?php echo Yii::t("default","Dish Name")?></th>
                                    <th width="6%"><?php echo Yii::t("default","Icon")?></th>            
                                    <th width="3%"><?php echo Yii::t("default","Date Created")?></th>            
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
