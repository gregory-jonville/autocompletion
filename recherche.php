<?php
session_start();
require_once './classes/database.php';


if (isset($_GET["search"]) && !empty($_GET["search"])) {

    $connect = $db->connectDb();
        $str = $db->checkInput($_GET['search']);
        $result = $connect->query("SELECT id,nom from atomes WHERE nom LIKE '%$str%' GROUP BY id ORDER BY id DESC");
        $result = $result->fetchALL();
    echo json_encode($result);
}else{
    echo json_encode([]);
}
?>