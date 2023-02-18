
<h3><?php echo t("Email Logs")?></h3>

<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" >
                    <input type="hidden" name="action" id="action" value="emailLogs">
                    <input type="hidden" name="tbl" id="tbl" value="email_logs">
                    <input type="hidden" name="server_side" id="server_side" value="1">
                    <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">  
                    <thead>
                            <tr>
                                <th><?php echo t("ID")?></th>
                                <th><?php echo t("To")?></th>
                                <th><?php echo t("Sender")?></th>
                                <th><?php echo t("Subject")?></th>
                                <th><?php echo t("Content")?></th>
                                <th><?php echo t("Provider")?></th>
                                <th><?php echo t("Status")?></th>
                                <th><?php echo t("Date")?></th>
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
