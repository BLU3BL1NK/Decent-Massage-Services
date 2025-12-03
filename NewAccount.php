<?php
include 'Administrator/connection/connection.php';
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Decent Touch Massage</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="Administrator/css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="Administrator/css/style.responsive.css" media="all">
    <link href='Administrator/images/logo.ico' type='image' rel='icon'>
    <script src="Administrator/js/jquery.js"></script>
    <script src="Administrator/js/script.js"></script>
    <script src="Administrator/js/script.responsive.js"></script>
    <link rel="stylesheet" href="Administrator/css/loginstyle.css">
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">



<style>.art-content .art-postcontent-0 .layout-item-0 { margin-top: 0px;margin-right: 0px;margin-bottom: 10px;margin-left: 0px;  }
.art-content .art-postcontent-0 .layout-item-1 { border-top-width:1px;border-top-style:Solid;border-top-color:#D9D9D9;  }
.art-content .art-postcontent-0 .layout-item-2 { color: #0C1301; background: ;  }
.art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-4 { border-top-style:solid;border-right-style:Solid;border-bottom-style:solid;border-left-style:solid;border-top-width:0px;border-right-width:1px;border-bottom-width:0px;border-left-width:0px;border-color:#D9D9D9; padding-top: 20px;padding-right: 20px;padding-bottom: 0px;padding-left: 0px;  }
.art-content .art-postcontent-0 .layout-item-5 { padding: 20px;  }
.art-content .art-postcontent-0 .layout-item-6 { color: #0C1301; background: #FF962E;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object260662843"></div>
<div class="art-object1659420484"></div>
<div class="art-object2006801486"></div>

            </div>           
</header>
<nav class="art-nav">
    <ul class="art-hmenu">
        <?php
            include 'Administrator/includes/Unregister/Home.html'
        ?>
    </ul> 
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-block clearfix">
        <div class="art-blockheader"><br><br><br>
            <center><font color='#000000' size=5>MEMBER LOGIN</font></center></td><br>
        </div>
        <div class="art-blockcontent">
<form method="post" action="Administrator/connection/functions.php" class="login">
            <p>
              <input type="text" name="login" id="login" placeholder='Username'>
            </p>

            <p>
              <input type="password" name="password" id="password" placeholder='Password'>
            </p>

            <p class="login-submit">
              <button type="submit" class="login-button" name='Login'>Login</button>
            </p>
            <table width=350px>
                <tr>
                    <td width=50%><a href="NewAccount.php">Create Account</a></td>
                    <td width=50% style='text-align:right'><a href="ForgotPassword.php">Forgot password?</a></td>
                </tr>
            </table>
            <p class="forgot-password"></p>
          </form>
</div><br><br>

<div class="art-blockcontent">
<input type='button' class='art-button' value='LATEST NEWS' disable style='width:90%'><br><br>
<script type="text/javascript">
//specify path to your external page:
var iframesrc="Administrator/includes/external.php"

//You may change most attributes of iframe tag below, such as width and height:
document.write('<iframe id="datamain" src="'+iframesrc+'" width="100%" height="650px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>')

</script>
</div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article"><br>
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
                    <div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <center><font size=5><b>CREATE ACCOUNT</b></font></center>
    </div>
    </div>
</div><br>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <form method='POST' action='Administrator/connection/functions.php'>
            <center><table width=100%>
                <tr>
                    <td width=50%>
                        <table width=100%>
                            <tr>
                                <td width=15%>FIRSTNAME:</td>
                                <td width=55%><input type='text' name='FName' required='' onkeyup="leftTrim(this)" style='width:95%;background: #FFFFFF'></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>LASTNAME:</td>
                                <td width=55%><input type='text' name='LName' required='' onkeyup="leftTrim(this)" style='width:95%;background: #FFFFFF'></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>BIRTHDATE:</td>
                                <td width=55%><input type='date' name='BDate' required=''></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>AGE:</td>
                                <td width=55%><input type='text' name='Age' style='width:95%;background: #FFFFFF' required='' onkeyup="leftTrim(this)" onkeypress="return isNumberKey(event)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>STATUS:</td>
                                <td width=55%><select name='Status' required>
                                                <option></option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Separated</option>
                                                <option>Widow</option>
                                            </select></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>SEX:</td>
                                <td width=55%><select name='Sex' required>
                                                <option></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select></td>
                            </tr>
                        </table>
                    </td>
                    <td width=50%>
                        <table width=100%>
                            <tr>
                                <td width=15%>EMAIL:</td>
                                <td width=55%><input type='email' name='EMail' required onkeyup="leftTrim(this)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>ADDRESS:</td>
                                <td width=55%><input type='text' name='Address' required onkeyup="leftTrim(this)" style='width:95%;background: #FFFFFF'></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>MOBILE:</td>
                                <td width=55%><input type='text' name='CNo' required=''style='width:95%;background: #FFFFFF'  onkeyup="leftTrim(this)" onkeypress="return isNumberKey(event)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>USERNAME:</td>
                                <td width=55%><input type='text' name='User' required onkeyup="leftTrim(this)" style='width:95%;background: #FFFFFF'></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>PASSWORD:</td>
                                <td width=55%><input type='password' name='Pass' required onkeyup="leftTrim(this)" style='width:95%;background: #FFFFFF'></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>CONFIRM:</td>
                                <td width=55%><input type='password' name='VPass' required onkeyup="leftTrim(this)" style='width:95%;background: #FFFFFF'></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                
                <tr height=20px></tr>
                <tr>
                    <td colspan=2><center><input type='submit' class='art-button' name='Create' value='CREATE'>&nbsp;&nbsp;&nbsp;<a href='NewAccount.php'><input type='button' class='art-button' value='CANCEL'></a></center></td>
                </tr>
            </table></center>
        </form>
    </div>
    </div>
</div>
</div><br><br><br>
</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%">
        <p style="text-align: left;"><a href='Administrator/index.php'><img width="38" height="38" alt="" src="Administrator/images/Administrator.png" style="margin-top: 0px; margin-right: 5px; margin-bottom: 0px; margin-left: 0px;" title='Administrator'></a><a href='Teller/index.php'><img width="38" height="38" alt="" src="Administrator/images/Teller.png" title='Teller' style="margin-top: 0px; margin-right: 5px; margin-bottom: 0px; margin-left: 0px;" class=""></a><a href='https://twitter.com/'><img width="38" height="38" alt="" src="Administrator/images/1308293091_twitter-2.png" style="margin-top: 0px; margin-right: 5px; margin-bottom: 0px; margin-left: 0px;" class=""></a><a href='https://www.facebook.com/'><img width="38" height="38" alt="" src="Administrator/images/1308293119_facebook-2.png" style="margin-top: 0px; margin-right: 5px; margin-bottom: 0px; margin-left: 0px;" class=""></a></p>
    </div><div class="art-layout-cell layout-item-0" style="width: 50%">
        <p style="text-align: right;">Copyright © 2017 <a href="#">Privacy Policy</a><br>
         <a href="http://www.iconfinder.com/search/?q=iconset:WPZOOM_Social_Networking_Icon_Set"></a></p>
    </div>
    </div>
</div>

    <p class="art-page-footer">
        <span id="art-footnote-links"></span>
    </p>
</footer>

    </div>
</div>


</body></html>