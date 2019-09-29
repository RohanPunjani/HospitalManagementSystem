<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","hms");
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM doctors WHERE doc_email='$email' and doc_pass='$pwd';";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) == 1)
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['pat_id'] = $row['pat_id'];
        header("Location:doctor_info_page.php");
    }
    else
    {
        header("Location:doctor_login.php");
    }
 ?>