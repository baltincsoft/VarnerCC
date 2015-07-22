{extends file="index.tpl"}
{block name="body"}
<div class="span12">
    <div class="tab-content centered">
        <div class="active tab-pane ">
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-user"></i>Change Password</h4>
                </div>
                <div class="portlet-body form">
                    {if $msg}
                        <div class="alert alert-success">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Success!</strong>{$msg}
                        </div>
                    {/if}
                    {if $error_msg}
                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert"></button>
                            <strong>Error!</strong>{$error_msg}
                        </div>
                    {/if}
                    <!-- BEGIN FORM-->
                    <form id="add-AdditionalDetails" method="POST" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}System/">
                        <h3 class="form-section">Information</h3>								 
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">Old Password</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-key"></i>
                                            <input type="password" class="m-wrap span12" placeholder="Old Password" name="oldPassword" id="oldPassword"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">New Password</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-key"></i>
                                            <input type="password" class="m-wrap span12" placeholder="New Password" name="nPassword" id="nPassword"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">Confirm New Password</label>
                                    <div class="controls">
                                        <div class="input-icon left">
                                            <i class="icon-key"></i>
                                            <input type="password" class="m-wrap span12" placeholder="Confirm Password" name="cPassword" id="cPassword"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn blue pull-right" onClick="javascript:return validatePassword();"><i class="icon-ok"></i> Change Password</button>
                        </div>
                        <input type="hidden" name="LoginID" value="{$LoginID}"/>
                        <input type="hidden" name="action" value="{$action}" />
                    </form>
                <!-- END FORM-->                
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var validatePassword = function()
    {
        var newPass = document.getElementById('nPassword').value;
        var cPass = document.getElementById('cPassword').value;
        if(newPass=="")
        {
            document.getElementById("nPassword").style.borderColor="#FF0000";
            return false;
        }
        else if(cPass=="")
        {
            document.getElementById("cPassword").style.borderColor="#FF0000";
            return false;
        }
        else if(newPass != cPass)
        {
            document.getElementById("nPassword").style.borderColor="#FF0000";
            document.getElementById("cPassword").style.borderColor="#FF0000";
            return false;
        }
        return true;
    }
</script>
{/block}