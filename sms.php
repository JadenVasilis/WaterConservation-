<?php

if(isset($_POST['sub']))
{
$number= $_POST['number']

$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "Your Mobile Number is Successfully Registered ",
    "language" => "english",
    "route" => "p",
    "numbers" => "$number",
     "flash" => "0"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: 4M3kQBmJnsUvO7brL1lj5PVfgWEIHq8wDeuc9i2xRYhtFXZoS0alFhWBneVvIT3pqYCEKcj7wzPNmk4r",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

{
    "return": true,
    "request_id": "lwdtp7cjyqxvfe9",
    "message": [
        "Message sent successfully to NonDND numbers"
    ]
}


}
?>
