<?php

header("Content-Type: application/json");

$tasks = [
    ["id" => 1, "title" => "Erste Aufgabe"],
    ["id" => 2, "title" => "Zweite Aufgabe"],
    ["id" => 3, "title" => "Dritte Aufgabe"]
];

echo json_encode($tasks);
