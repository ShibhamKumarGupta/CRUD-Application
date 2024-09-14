<?php
include('./db_conn.php');
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET['id'];

    $deleteQuery = mysqli_query($conn, "DELETE FROM `exam_form` WHERE id = $id");
    if ($deleteQuery) {
        header('location:./display.php');
    }

}


?>