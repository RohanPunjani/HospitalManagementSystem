<?php
    $conn = mysqli_connect("localhost","root","","hms");
    $pat_name = $_POST['pat_name'];
    $pat_mobile = $_POST['pat_mobile'];
    $pat_email = $_POST['pat_email'];
    $pat_add = $_POST['pat_add'];
    $pat_pass = $_POST['pat_pass'];
    $pat_doc_id = $_POST['pat_doc_id'];
    $pat_disease = $_POST['pat_disease']
    $sql = "
        INSERT INTO `patient`(`pat_mobile`, `pat_email`, `pat_address`,  `pat_name`, `pat_pass`, `pat_doc_id`, `pat_disease`, `pat_status`)
        VALUES ('$pat_mobile','$pat_email','$pat_add','$pat_name','$pat_pass','$pat_doc_id',');
    ";
    $res = mysqli_query($conn, $sql);
    if($res);
        header("location:access.php");
 ?>