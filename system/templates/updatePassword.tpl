<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Varner Claims Consulting | Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="{$SERVER_ACTUAL_PATH}assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{$SERVER_ACTUAL_PATH}assets/css/metro.css" rel="stylesheet" />
  <link href="{$SERVER_ACTUAL_PATH}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="{$SERVER_ACTUAL_PATH}assets/css/style.css" rel="stylesheet" />
  <link href="{$SERVER_ACTUAL_PATH}assets/css/style_responsive.css" rel="stylesheet" />
  <link href="{$SERVER_ACTUAL_PATH}assets/css/style_default.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="{$SERVER_ACTUAL_PATH}assets/uniform/css/uniform.default.css" />
  <link rel="shortcut icon" href="{$SERVER_ACTUAL_PATH}favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
  <!-- BEGIN LOGO -->
  <div class="logo">
    <img src="{$SERVER_ACTUAL_PATH}assets/img/logo.gif" alt="" /> 
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="form-vertical forget-form" method="POST" action="{$SERVER_ACTUAL_PATH}Password-Update" style="display:block;">
        <h3 class="">Update Password</h3>
        <div class="control-group">
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-key"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password" id="password"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-key"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="Retry Password" name="rpassword" id="rpassword"/>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <a href="#" class="btn">
                <i class="m-icon-swapleft"></i> Cancel
            </a>
            <button type="submit" class="btn green pull-right">
                Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>            
        </div>
        <input type="hidden" name="fp_key" value="{$fp_key}"/>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    2014 &copy; Baltinc'Sift Technologies
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="{$SERVER_ACTUAL_PATH}assets/js/jquery-1.8.3.min.js"></script>
  <script src="{$SERVER_ACTUAL_PATH}assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="{$SERVER_ACTUAL_PATH}assets/uniform/jquery.uniform.min.js"></script> 
  <script src="{$SERVER_ACTUAL_PATH}assets/js/jquery.blockui.js"></script>
  <script type="text/javascript" src="{$SERVER_ACTUAL_PATH}assets/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="{$SERVER_ACTUAL_PATH}assets/js/app.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <script>
    var validPass = function()
    {
        var newPass = document.getElementById('password').value;
        var cPass = document.getElementById('rpassword').value;
        if(newPass=="")
        {
            document.getElementById("password").style.borderColor="#FF0000";
            return false;
        }
        else if(cPass=="")
        {
            document.getElementById("rpassword").style.borderColor="#FF0000";
            return false;
        }
        else if(newPass != cPass)
        {
            document.getElementById("password").style.borderColor="#FF0000";
            document.getElementById("rpassword").style.borderColor="#FF0000";
            return false;
        }
        return true;
    }
</script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>