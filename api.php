<?php
    header("Content-Type: application/json");
    echo json_encode([
        ["id" => 1, "title" => "Aufgabe 1", "completed" => false],
        ["id" => 2, "title" => "Aufgabe 2", "completed" => true],
        ["id" => 3, "title" => "Aufgabe 3", "completed" => false]
    ]);
?>