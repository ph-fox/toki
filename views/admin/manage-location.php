
<h3><?php echo t("Country List")?></h3>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" >
                    <input type="hidden" name="action" id="action" value="CountryList">
                    <input type="hidden" name="tbl" id="tbl" value="location_countries">
                    <input type="hidden" name="server_side" id="server_side" value="1">
                    <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
                    <thead>
                            <tr>
                                <th width="5%"><?php echo t("ID")?></th>
                                <th width="10%"><?php echo t("Code")?></th>
                                <th width="10%"><?php echo t("Name")?></th>
                                <th width="10%"><?php echo t("Phone Code")?></th>            
                                <th width="10%"><?php echo t("Actions")?></th>
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
