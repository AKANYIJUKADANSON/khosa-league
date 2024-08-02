<?php
echo<<<HTML
<style type='text/css'> .table{ font-family: monospace; } </style>
<link rel='stylesheet' href='core/plugins/bootstrap.css'>
HTML;
$logfile = "core/log/log_hx.html";
$log_wh = "";$log_wf = "";
$log_wh .= "<table class ='table table-striped'>";
$log_wh .= "<thead>";
$log_wh .= "<tr>";
$log_wh .= "<th scope='col'>No</th>";
$log_wh .= "<th scope='col'>IP</th>";
$log_wh .= "<th scope='col'>Continent</th>";
$log_wh .= "<th scope='col'>Country</th>";
$log_wh .= "<th scope='col'>Organization</th>";
$log_wh .= "<th scope='col'>ISP</th>";
$log_wh .= "<th scope='col'>Languages</th>";
$log_wh .= "<th scope='col'>Is EU Member?</th>";
$log_wh .= "<th scope='col'>Currency</th>";
$log_wh .= "<th scope='col'>Timezone</th>";
$log_wh .= "<th scope='col'>Local-Time</th>";
$log_wh .= "<th scope='col'>IP_Addr</th>";
$log_wh .= "<th scope='col'>URL</th>";
$log_wh .= "<th scope='col'>Browser</th>";
$log_wh .= "</tr>";
$log_wh .= "</thead>";
$log_wh .= "<tbody>";
$log_wf .= "</tbody>";
$log_wf .= "</table>";
$ft = fopen($logfile,'r');
echo $log_wh;
if($ft) {
	 while (!feof($ft)) {
		 while($d = fgets($ft)) {
		  echo $d;
		}
}
}
echo $log_wf;
fclose($ft);
?>