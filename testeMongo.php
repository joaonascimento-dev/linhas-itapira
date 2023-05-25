<?php
require_once 'C:\\xampp\\php\\vendor\\autoload.php';

//phpinfo();

// Connect to MongoDB
//$mongoClient = new MongoDB\Client("mongodb://mongoadmin:Fat3cItapira@localhost:27017/");
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$collection = $mongoClient->linhasItapira->onibusLocalizacao;

// Query MongoDB collection
$documents = $collection->find();

// Generate HTML code
$html = '<ul>';
foreach ($documents as $document) {
    $html .= '<li>' . $document['latitude'] . ' ' . $document['longitude'] . '</li>'; // Replace 'field_name' with the actual field you want to display
}
$html .= '</ul>';

// Output HTML code
echo $html;

/*
{
  "_id": 1,
  "latitude": "-22.4386529",
  "longitude": "-46.822313",
  "linhaId": 1
}
*/

?>
