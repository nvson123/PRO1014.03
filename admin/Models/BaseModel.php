<?php
require_once "env.php";
function getConnect()
{
    $connect = new PDO(
        "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME,
        DBUSER,
        DBPASS
    );
    return $connect;
}

function getData($query, $getAll = true){
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll) {
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}
