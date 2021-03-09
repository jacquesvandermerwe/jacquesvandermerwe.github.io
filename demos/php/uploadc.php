<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://upload.box.com/api/2.0/files/content',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('attributes' => '{"name":"sample.pdf", "parent": {"id": "127623084664"}}','file'=> new CURLFILE('/Users/jvandermerwe/Documents/Samples/Sample_Colour.pdf')),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 9C6apukxx87U4SqabECMfihnj5wQwbWW'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
 ?>