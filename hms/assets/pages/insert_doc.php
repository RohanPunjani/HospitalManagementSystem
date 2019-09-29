<?php
    $conn = mysqli_connect("localhost","root","","hms");
    $doc_name = $_POST['doc_name'];
    $doc_mobile = $_POST['doc_mobile'];
    $doc_email = $_POST['doc_email'];
    $doc_add = $_POST['doc_add'];
    $doc_pass = $_POST['doc_pass'];
    $doc_hos_id = $_POST['doc_hos_id'];
    $sql = "
        INSERT INTO `doctors`(`doc_name`, `doc_mobile`, `doc_email`, `doc_add`, `doc_pass`, `hos_id`) 
        VALUES ('$doc_name','$doc_mobile','$doc_email','$doc_add','$doc_pass','$doc_hos_id');
    ";
    $res = mysqli_query($conn, $sql);
    if($res);
    header("location:access.php");
 ?>