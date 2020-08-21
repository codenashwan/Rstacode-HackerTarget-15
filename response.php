<?php
$links = [
    'mtr/?q=',
    'nping/?q=',
    'dnslookup/?q=',
    'reversedns/?q=',
    'hostsearch/?q=',
    'findshareddns/?q=',
    'zonetransfer/?q=',
    'whois/?q=',
    'geoip/?q=',
    'reverseiplookup/?q=',
    'nmap/?q=',
    'nmap/?q=',
    'subnetcalc/?q=',
    'httpheaders/?q=',
    'pagelinks/?q=',
    'nmap/?q='
];
$id = $_POST['id'];
$domain = $_POST['domain'];
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin: https://api.hackertarget.com/$links[$id]$domain", true);
$ch = curl_init("https://api.hackertarget.com/$links[$id]$domain");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>