<?php 
    session_start();
    include 'db.php'; 
    $rnumber = $_POST['rnumber'];
    $Password =  md5($_POST['pass']);

    if(!empty($rnumber)&& !empty($Password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE rnumber = '{$rnumber}' AND password = '{$Password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            if($row){
            $_SESSION['unique_id'] = $row['unique_id'];
            $_SESSION['rnumber'] = $row['rnumber'];
            $_SESSION['otp'] = $row['otp'];
            echo "success";
        }
        }
        else{
            echo "Registration ID or Password is Incorrect! ";    
        }
    }
    else{
        echo "All Fields are Required!";
    }
?>