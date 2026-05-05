<?php
include '../Db/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = $_POST['model'];
    $date_of_release = $_POST['date_of_release'];
    $vehicle_status = $_POST['vehicle_status'];

    $addData = $connection->prepare("INSERT INTO vehicles(model, date_of_release, vehicle_status) values(?,?,?)");
    $addData -> bind_param("sss", $model, $date_of_release, $vehicle_status);
    if($addData -> execute()){
        echo "added successfully";
    }
    else{
        echo "error occurred";
    }
}
?>