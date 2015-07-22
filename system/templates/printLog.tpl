<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Varner Claims Consulting | Print Call Log</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{$SERVER_ACTUAL_PATH}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{$SERVER_ACTUAL_PATH}assets/css/metro.css" rel="stylesheet" />
    <link href="{$SERVER_ACTUAL_PATH}assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="{$SERVER_ACTUAL_PATH}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{$SERVER_ACTUAL_PATH}assets/css/style_responsive.css" rel="stylesheet" />
    <link href="{$SERVER_ACTUAL_PATH}assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/uniform/css/uniform.default.css" />
    <link rel="shortcut icon" href="favicon.ico" />

    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;
            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head></head><body>" + 
              divElements + "</body>";
            //Print Page
            window.print();
            //Restore orignal HTML
            document.body.innerHTML = oldPage;
        }
    </script>
	<style type="text/css">
	.printTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; width:100%}
	.printTable th { background-color:#BDB76B;color:white;width:50%; }
	.printTable td, .printTable th { padding:5px;border:0; }
	.printTable td { border-bottom:1px dotted #BDB76B; }
</style>
</head>
<body>
    <form id="form1" runat="server">
	<div id="printablediv" class="row-fluid">
            <div style="margin-bottom:5px;" align="center">
                <h3 class="form-section">CALL LOGS</h3>
            </div>
            <table class="printTable" style="border:1px solid black;" align="center" width="100%">
                <tr>
                    <th style="border-right:1px solid black;width:5%;">#</th>
                    <th style="border-right:1px solid black;width:10%;">Initials</th>
                    <th style="border-right:1px solid black;width:20%;">Date</th>
                    <th style="border-right:1px solid black;width:50%;">Call Log Description</th>
                    <th style="border-right:1px solid black;width:15%;">Follow-Up</th>
                </tr>
                {if $tot_note_rows > 0}
                {foreach $Notes as $NP}
                    <tr>
                        <td style="border-right:1px solid black;width:5%;">#</td>
                        <td style="border-right:1px solid black;width:10%;">{$NP.Initial}</td>
                        <td style="border-right:1px solid black;width:30%;">{$NP.LastUpdatedDate}</td>
                        <td style="border-right:1px solid black;width:45%;">{$NP.NoteDescription}</td>
                        <td>{$NP.FChecked}</td>
                    </tr>
                {/foreach}
                {/if}
            </table>
        </div>
        <div style="margin-top:10px;" align="center">
            <input type="button" class="btn blue" value="Print Call Log" onclick="javascript:printDiv('printablediv')"/>
        </div>
        
    </form>
</body>
</html>