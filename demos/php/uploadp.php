<?php

$client = new http\Client;
$request = new http\Client\Request;
$request->setRequestUrl('https://upload.box.com/api/2.0/files/content');
$request->setRequestMethod('POST');
$body = new http\Message\Body;
$body->addForm(array(
  'attributes' => '{"name":"sample.pdf", "parent": {"id": "127623084664"}}'
), array(
    array('name' => 'file', 'type' => 'multipart/form-data', 'file' => '/Users/jvandermerwe/Documents/Samples/Sample_Colour.pdf', 'data' => null)
));
$request->setBody($body);
$request->setOptions(array());
$request->setHeaders(array(
  'Authorization' => 'Bearer 9C6apukxx87U4SqabECMfihnj5wQwbWW',
  'Cookie' => 'box_visitor_id=5de55e462c6076.92042824'
));
$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();

 ?>