<?php

function getIds($tablanev, $conn) {
    $tomb = array(); // ebben leszek azk id-k felsorolva

    $sql = "SELECT userID FROM $tablanev";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tomb[] = $row['userID'];
        }
    }
    return $tomb;
}


?>
