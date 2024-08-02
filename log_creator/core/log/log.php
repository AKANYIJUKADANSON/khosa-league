<?php
/*
Advanced Log_Creater v1.0 By pr0ph3tc0d3r
└── Log/
	├── core/
	│    ├── core_x.php
	│    ├── log/
	│    │   ├── log.php
	│    │   └── log_hx.html
	│    └── plugins/
	│        ├── bootstrap.js (not necessary in demo edition)
	│        └── bootstrap.css
	└──log_monitor.php
		
For Usage (: Very light & simple to use in 4 steps

Please keep the files alined in the directories shown
 in the tree above(unless the notice below these instructions applies!)
-Visit the website ipgeolocation.io and sign up for a free API key that will
 keep track of your visitors geo-location and go to the line 
 "$apiKey = "PUT_YOUR_API_KEY_HERE" in the file called log.php and provide your API Key.
-Make sure to include the file log.php for log creation by adding
 this line "include("log_creator/core/core_x.php");" in your code(without the outer quotes)
 -In the core/log/log.php file, change the $logfile directory to match the one in the previous line.
-Monitor all logs from the log_monitor.php file that should be
 kept out of site from the public.

NOTE : Customise the directory & file naming (for only professional users) :)
*/
##################################
$logfile = '../log_creator/core/log/log_hx.html';
$ipaddr = $_SERVER['REMOTE_ADDR'];
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$time = local_time_calibration();
$browser = $_SERVER['HTTP_USER_AGENT'];
##################################################
$apiKey = "c19c42c881cc4c8889011238ee1bcad1"; //from ipgeolocation.io
$location = get_geolocation($apiKey, $ipaddr);
$decodedLocation = json_decode($location, true);
##################################################
if($fh = fopen($logfile,'r')) {
	$lines = 0;
	 while (!feof($fh)) {
		 if(fgets($fh)) {
		 $lines++;
		 }
	 }
}
$line_no = $lines+1;
$log_w = "";
$log_w .= "<tr>";
$log_w .= "<th scope='row'>$line_no</td>";
if ($decodedLocation['message'] != '') {
    $log_w .= "<td>".$ip."</td>";
    $log_w .= "<td>".$decodedLocation['message']."</td>";
} else {
    $log_w .= "<td>".$decodedLocation['ip']."</td>";
    $log_w .= "<td>".$decodedLocation['continent_name']." (".$decodedLocation['continent_code'].")</td>";
    $log_w .= "<td>".$decodedLocation['country_name']." (".$decodedLocation['country_code2'].")</td>";
    $log_w .= "<td>".$decodedLocation['organization']."</td>";
    $log_w .= "<td>".$decodedLocation['isp']."</td>";
    $log_w .= "<td>".$decodedLocation['languages']."</td>";

    if ($decodedLocation['is_eu'] == true) {
        $log_w .= "<td>Yes</td>";
    } else {
        $log_w .= "<td>No</td>";
    }
    
    $log_w .= "<td>".$decodedLocation['currency']['name']."</td>";
    $log_w .= "<td>".$decodedLocation['time_zone']['name']."</td>";
}

$log_w .= "<td>".$time."</td>";
$log_w .= "<td>".$ipaddr."</td>";
$log_w .= "<td>".$url."</td>";
$log_w .= "<td>".$browser."</td>";
$log_w .= "</tr>";

function local_time_calibration(){
	$h = date('H:i:s');
	$hd = date('d/m/Y');
	$e = explode(':',$h);
	for($j=0;$j<3;$j++)
	{
		$hr = $e[0] - 4;
	}
	return "$hd {$hr}:{$e[1]}:{$e[2]}";
}
function get_geolocation($apiKey, $ip, $lang = "en", $fields = "*", $excludes = "") {
    $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$apiKey."&ip=".$ip."&lang=".$lang."&fields=".$fields."&excludes=".$excludes;
    $cURL = curl_init();
    curl_setopt($cURL, CURLOPT_URL, $url);
    curl_setopt($cURL, CURLOPT_HTTPGET, true);
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json'
    ));
    return curl_exec($cURL);
}


/*

On every submit
$handle = fopen(“usernames.txt”, “a”);
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “rn”);
}
fwrite($handle, “rn”);
fclose($handle);
*/
$info = "$log_w\n";
$fp = fopen($logfile, "a");
@fputs($fp,"$info");    
@fclose($fp);
?>