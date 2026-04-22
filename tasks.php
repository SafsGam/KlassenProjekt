<?php 

header("Content-type: application/json");

echo json_encode([
    ["id" =>1, "title" => "php api erstellen"],
    ["id" =>2, "title" => "html seite erstellen"],
    ["id" =>3, "title" => "css styling hinzufügen"],
    ["id" =>4, "title" => "git branch erstellen"],
    ["id" =>5, "title" => "merge request"]
]);
