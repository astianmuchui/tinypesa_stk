<?php
$amount = '5';
$phonenuber = '0768168060';
$Account_no = 'UMESKIA SOFTWARES';
$url = 'https://tinypesa.com/api/v1/express/initialize';
$data = array(
    'amount' => $amount,
    'msisdn' => $phonenuber,
    'account_no'=>$Account_no
);
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'ApiKey: nEa87QEAdme'
 );
$info = http_build_query($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
$msg_resp = json_decode($resp);

if($msg_resp ->success == 'true'){
    echo "WAIT FOR NEVEREST STK POP UP";
}

?>


