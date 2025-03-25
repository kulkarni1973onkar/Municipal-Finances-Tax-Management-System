<?php
          
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=gu5fWD9sJ1hSZFjQxHiIypO7dTe0VkNo4GwvLM3KC2qmncatB6hve0G5JBCoFjTRNrE91AgXatpzi7VD&message=".urlencode('Hi,Your Propert Tax has been generated for this month please pay it before the 10th of this month. ')."&language=english&route=q&numbers=".urlencode('9146579640'),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
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

