{extends file="index-main.tpl"}
{block name="body"}
<div class="span12">
    <div class="tab-content centered">
        <div class="active tab-pane ">
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-user"></i>Upload Document</h4>
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
                    <form id="add-AdditionalDetails" method="POST" enctype="multipart/form-data" class="form-horizontal" action="{$SERVER_ACTUAL_PATH}System/">
                        <h3 class="form-section">Documents</h3>								 
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">Advanced</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i> 
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="eFileUpload" class="default" />
                                                </span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn green pull-right">
                                Upload Document <i class="m-icon-swapright m-icon-white"></i>
                            </button>            
                        </div>
                        <input type="hidden" name="LoginID" value="{$LoginID}"/>
                        <input type="hidden" name="EmployeeID" value="{$EmployeeID}"/>
                        <input type="hidden" name="action" value="{$action}" />
                    </form>
                    <div class="row-fluid" style="margin-top:50px;">
                        <div class="span12">
                            <table width='100%' align='center'>
                            <tr style="color:rgb(155,0,0);height:34px;font-size:large;">
                                <td>File Name</td>
                                <td>Uploaded Date</td>
                                <td colspan="3" align="center">Actions</td>
                            </tr>
							{if $totalUploadFiles>0}
                            {foreach $UploadArray as $UPL}
                            <tr class='cl-container-tr-row'>
                                <td>
                                    <div class="controls">
                                        <label>{$UPL.FileName}</label> 
                                    </div>
                                </td>
                                <td>
                                    <div class="controls">
                                        <label>{$UPL.UploadedDate}</label> 
                                    </div>
                                </td>
                                <td style="width:8%">
                                    <a href='{$ACTUAL_UPLOAD_PATH}{$EmployeeID}/{$UPL.FileName}' class="btn green" target="_blank">View/Print</a>
                                </td>
                                <td style="width:6%">
                                    <a href='#' class="btn blue">Share</a>
                                </td>
								
								{if $IsAdmin=1}
									<td style="width:6%">
										<form method="POST" action="{$SERVER_ACTUAL_PATH}System/">
											<input type="submit" class="btn Red" value="Delete" />
											<input type="hidden" id="action" name="action" value="delete_upload_file" />
											<input type="hidden" id="UploadID" name="UploadID" value="{$UPL.UploadID}" />
											<input type="hidden" id="EmployeeID" name="EmployeeID" value="{$EmployeeID}" />
										</form>
									</td>
								{/if}
									
                            </tr>
                            {/foreach}
                            {else}
                                <tr>
                                    <td colspan="4">Files not found</td>
                                </tr>
                            {/if}
                            </table>
                        </div>
                    </div>
                        
                <!-- END FORM-->                
                </div>
            </div>
        </div>
    </div>
</div>
{/block}