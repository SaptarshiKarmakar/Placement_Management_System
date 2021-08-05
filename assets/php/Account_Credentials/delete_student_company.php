<?php
    session_start();
    include '../Database Connection/dbcon.php';
    $id = $_GET['id_c'];
    //$id_c=$_SESSION['id_c'];
    $query = "delete from student_company where id_c ='$id'";
    $data = mysqli_query($con,$query);

    if($data){
        echo "Deleted";
        header("location: student_list.php");
        
    }
    else{
        echo "Not deleted";
    }
?>