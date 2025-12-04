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
            include 'includes/Admin/Settings.html'
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
        <center><font size=5><b>SERVICES</b></font></center>
        <br>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-br layout-item-1">
</div><div class="art-content-layout-wrapper layout-item-3">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-4" style="width: 100%;font-weight:bold" >
       <?php
            $limit_word = 400;
            $A = mysqli_query($cnn,"SELECT * FROM tblservices WHERE Category='Regular'");
            while ($A1 = mysqli_fetch_array($A)) {
            $content = $A1[2];
               ?>
            <center><table width=90%>
                <tr>
                    <td width=30%>
                        <table width=100%>
                            <tr rowspan=2>
                                <td><img src='Massage/<?php echo $A1[4]?>' style='width:90%;height:200px'></td>
                            </tr>
                        </table>
                    </td>
                     <td width=48% style='vertical-align:top'>
                        <table width=100%>
                            <tr>
                                <td><font size=5><b><?php echo $A1[1]?> -</font> <font size=5 color='#FF0000'>Php <?php echo number_format($A1[3],2)?></font> </b></td>
                            </tr>
                            <tr>
                                <td><p align='justify'><?php echo substr( $content,0,$limit_word)?>...</p></td>
                            </tr>
                            <tr>
                                <td><font size=3>Duration: <b><?php echo $A1[5]?> Hour</b></font></td>
                            </tr>
                            <tr height=5px></tr>
                            <tr>
                                <td><a href='ViewServices.php?No=<?php echo $A1[0]?>'><input type='button' class='art-button' value='VIEW'><a> <a href='EditServices.php?No=<?php echo $A1[0]?>'><input type='button' class='art-button' value='EDIT'><a> <a href='DeleteServices.php?No=<?php echo $A1[0]?>'><input type='button' class='art-button' value='DELETE'><a></td>
                            </tr>
                        </table>
                    </td>
                    <td width=2%></td>
                    
                </tr>
                <tr height=5px>
                    <td width=100% colspan=4><hr style='border: 1px solid #f00'></td>
                </tr>
            </table></center>
        <?php
            }
        ?>
            <center><table width=90%>
                <tr height=20px></tr>
                <tr>
                    <td><a href='AddServices.php'><input type='button' class='art-button' value='ADD SERVICES' style='width:120px;height:40px'><a></td>
                </tr>
            </table></center>
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