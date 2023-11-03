<?php
include "dbconfig.php";
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM students2 WHERE id ='$stu_id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('Location: read.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>