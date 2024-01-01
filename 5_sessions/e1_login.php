<?php

session_start();

$users = [
    array(
        "username" => "Josué",
        "email" => "josue@email.com"
    ),
    array(
        "username" => "José",
        "email" => "jose@email.com"
    )
];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];

?>