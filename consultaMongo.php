<?php
require_once 'C:\\xampp\\php\\vendor\\autoload.php';

$linhaId = $_GET['id'];
$whereCondition = [
    'linhaId' => intval($linhaId)
];
$sortCondition = [
    '_id' => -1    // Sort by '_id' field in ascending order (1 for ascending, -1 for descending)
];
$options = [
    'sort' => $sortCondition
];

// Connect to MongoDB
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$collection = $mongoClient->linhasItapira->onibusLocalizacao;

// Query MongoDB collection
$documentos = $collection->find($whereCondition, $options);
$document = $documentos->toArray()[0];
echo $document['latitude'] . ',' . $document['longitude'];
?>
