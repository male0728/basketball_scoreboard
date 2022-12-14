<?php

require_once "dbconfig.php";

$where_sql = '';
if (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
    $where_sql .= "where start between'".$_GET['startDate']."' and '".$_GET['endDate']."' ";
}

$sql = "select * from gameset $where_sql";
$result = $db->query($sql);


    $eventsArr = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($eventsArr, $row);
        }
    }
    echo json_encode($eventsArr);













?>