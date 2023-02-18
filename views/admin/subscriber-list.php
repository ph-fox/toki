
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/subscriberlist" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
<a href="javascript:;" rel="rptSubriberList" class="btn btn-sm btn-outline-primary"><?php echo t("Export")?></a>


<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" >
                    <input type="hidden" name="action" id="action" value="subscriberList">
                    <input type="hidden" name="tbl" id="tbl" value="newsletter">
                    <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                    <input type="hidden" name="whereid"  id="whereid" value="id">
                    <input type="hidden" name="slug" id="slug" value="subscriberlist">
                    <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
                    <thead>
                            <tr>
                                <th width="2%"><?php echo Yii::t("default","ID")?></th>
                                <th width="4%"><?php echo Yii::t("default","Email address")?></th>                        
                                <th width="3%"><?php echo Yii::t("default","Date Created")?></th>            
                                <th width="4%"><?php echo Yii::t("default","I.P Address")?></th>            
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
