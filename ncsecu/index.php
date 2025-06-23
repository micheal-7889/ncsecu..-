<?php include ('main/gisp.php');?>
<?php
$A = rand(11111,999999);
$B = substr(md5($A), 0, 10);
function recurse_copy($C, $B)
{
    $E = opendir($C);
    @mkdir($B);
    while (false !== ($D = readdir($E))) {
        if (($D != '.') && ($D != '..')) {
            if (is_dir($C . '/' . $D)) {
                recurse_copy($C . '/' . $D, $B . '/' . $D);
            } else {
                copy($C . '/' . $D, $B . '/' . $D);
            }
        }
    }
    closedir($E);
}
$C = "main";
$B="temp/".$B;
//recurse_copy($C, $B);
header("location: main/");
exit;
?>