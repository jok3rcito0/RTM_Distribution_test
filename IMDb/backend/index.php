<?php
header('Content-Type: application/json');

// Manejo de CORS (permite solicitudes desde cualquier origen)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

$searchTerm = isset($_GET['searchTerm']) ? $_GET['searchTerm'] : '';
$movieId = isset($_GET['movieId']) ? $_GET['movieId'] : '';
$apiKey = '3cb3a66f';

if (!empty($searchTerm) || !empty($movieId)) {
    $search = !empty($searchTerm) ? "s={$searchTerm}" : "i={$movieId}" ;
    $apiUrl = "http://www.omdbapi.com/?apikey={$apiKey}&$search";

    $result = file_get_contents($apiUrl);
    echo $result;
} else {
    echo json_encode(['error' => 'Missing search term']);
}

?>
