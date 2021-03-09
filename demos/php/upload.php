<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 <?php require_once 'HTTP/Request2.php';
$request = new HTTP_Request2();
$request->setUrl('https://upload.box.com/api/2.0/files/content');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'Authorization' => 'Bearer 9C6apukxx87U4SqabECMfihnj5wQwbWW'
));
$request->addPostParameter(array(
  'attributes' => '{"name":"sample.pdf", "parent": {"id": "127623084664"}}'
));
$request->addUpload('file', '/Users/jvandermerwe/Documents/Samples/Sample_Colour.pdf', 'Sample_Colour.pdf', 'multipart/form-data');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    echo $response->getBody();
  }
  else {
    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
    $response->getReasonPhrase();
  }
}
catch(HTTP_Request2_Exception $e) {
  echo 'Error: ' . $e->getMessage();
} ?>
 </body>
</html>