<?php
include 'connection/connection.php';
session_start();
$AdminName = $_SESSION['AdminName'];
if(empty($_SESSION['AdminName'])){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Decent Touch Massage</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">
    <link href='images/logo.ico' type='image' rel='icon'>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>

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
            include 'includes/Admin/Reservation.html'
        ?>
    </ul> 
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">

                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <p style="color:#000000;font-size: 16px;">Welcome: <b><?php echo $AdminName?>!</b></p><br>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <center><font size=5><b>CREATE RESERVATION</b></font></center>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-br layout-item-1">
</div><div class="art-content-layout-wrapper layout-item-3">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-4" style="width: 100%;font-weight:bold" >
       <form method='POST' action='connection/functions.php'>
            <center><table width=70%>
                <tr>
                    <td width=50%>
                        <table width=100%>
                            <tr>
                                <td width=15%>FIRSTNAME:</td>
                                <td width=55%><input type='text' name='FName' required='' onkeyup="leftTrim(this)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>LASTNAME:</td>
                                <td width=55%><input type='text' name='LName' required='' onkeyup="leftTrim(this)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>BIRTHDATE:</td>
                                <td width=55%><input type='date' name='BDate' required=''></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>AGE:</td>
                                <td width=55%><input type='text' name='Age' required='' onkeyup="leftTrim(this)" onkeypress="return isNumberKey(event)"></td>
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
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>EMAIL:</td>
                                <td width=55%><input type='email' name='EMail' placeholder='(Optional)' onkeyup="leftTrim(this)"></td>
                            </tr>
                        </table>
                    </td>
                    <td width=50%>
                        <table width=100%>
                            <tr>
                                <td width=15%>ADDRESS:</td>
                                <td width=55%><input type='text' name='Address' required onkeyup="leftTrim(this)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>MOBILE:</td>
                                <td width=55%><input type='text' name='CNo' required='' onkeyup="leftTrim(this)" onkeypress="return isNumberKey(event)"></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>SERVICES:</td>
                                <td width=55%><select name='Services' required=''>
                                    <option></option>
                                    <?php
                                        $A = mysqli_query($cnn,"SELECT * FROM tblservices");
                                        while ($A1 = mysqli_fetch_array($A)) {
                                            echo "<option value='" . $A1[0] . "'>" . $A1[1] . " - " . number_format($A1[3],2) . " (" . $A1[6] . ")</option>";
                                        }
                                    ?>
                                </select></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>TIME:</td>
                                <td width=55%><select name='Time' required>
                                                <option></option>
                                                <option value='10:00:00'>10:00 AM</option>
                                                <option value='11:00:00'>11:00 AM</option>
                                                <option value='12:00:00'>12:00 PM</option>
                                                <option value='13:00:00'>1:00 PM</option>
                                                <option value='14:00:00'>2:00 PM</option>
                                                <option value='15:00:00'>3:00 PM</option>
                                                <option value='16:00:00'>4:00 PM</option>
                                                <option value='17:00:00'>5:00 PM</option>
                                                <option value='18:00:00'>6:00 PM</option>
                                                <option value='19:00:00'>7:00 PM</option>
                                                <option value='20:00:00'>8:00 PM</option>
                                                <option value='21:00:00'>9:00 PM</option>
                                                <option value='22:00:00'>10:00 PM</option>
                                                <option value='23:00:00'>11:00 PM</option>
                                                <option value='00:00:00'>12:00 AM</option>
                                                <option value='1:00:00'>1:00 AM</option>
                                                <option value='2:00:00'>2:00 AM</option>
                                            </select></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>DATE:</td>
                                <td width=55%><input type='date' name='Date' required></td>
                            </tr>
                            <tr height=10px></tr>
                            <tr>
                                <td width=15%>TYPE:</td>
                                <td width=55%><select name='Type' required>
                                                <option></option>
                                                <option>At the Center</option>
                                                <option>Home Service</option>
                                            </select></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                
                <tr height=20px></tr>
                <tr>
                    <td colspan=2><center><input type='submit' class='art-button' name='ACreateReservation' value='Reserve'>&nbsp;&nbsp;&nbsp;<input type='button' onclick='history.go(-1)' class='art-button' value='Cancel'></a></center></td>
                </tr>
            </table></center>
        </form>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-br layout-item-1">
</div><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%;font-size:18px" >
        
            </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%">
        <p style="text-align: left;"><a href='https://twitter.com/'><img width="38" height="38" alt="" src="images/1308293091_twitter-2.png" style="margin-top: 0px; margin-right: 5px; margin-bottom: 0px; margin-left: 0px;" class=""></a><a href='https://www.facebook.com/'><img width="38" height="38" alt="" src="images/1308293119_facebook-2.png" style="margin-top: 0px; margin-right: 5px; margin-bottom: 0px; margin-left: 0px;" class=""></a></p>
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