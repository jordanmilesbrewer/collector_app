<?php
function addToTable ($db, $data){

    $name = $_POST['name'];
    $watering_needs = $_POST['watering'];
    $growth_rate_id = $_POST['growth'];
    $pet_friendliness = $_POST['pet'];
    $fertilising_needs = $_POST['fertilising'];
    $photo = 'src/img/placeholder2.jpg';

    $query = $db->prepare("INSERT INTO `plants` (`name`, `watering_needs`,`growth_rate_id`, `pet_friendliness`, `fertilising_needs`,`photo`) values (?, ?, ?, ?, ?, ?)");

    if (!$query->execute([$name, $watering_needs, $growth_rate_id, $pet_friendliness, $fertilising_needs, $photo])) {
        echo 'data not inserted successfully';
    }
}


