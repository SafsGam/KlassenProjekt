<?php 

header("Content-type: application/json");

echo json_encode([
    ["id" =>1, "title" => "Erste Aufgabe"],
    ["id" =>2, "title" => "Zweite Aufgabe"]
]);
