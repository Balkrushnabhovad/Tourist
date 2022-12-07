<?php
require 'connect.php';
if (isset($_POST['emailsubscribe'])) {
    $email = $_POST['email'];
    if (empty($email)) {
        header("location:javascript://history.go(-1)");
        exit();
    }
     else {
        $sqlcheck = "SELECT email from subscribe WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sqlcheck)) {
            header("location:javascript://history.go(-1)");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header('location: ../index.php?subs=exists');
                exit();
            } else {

                $sql = "INSERT into subscribe (email) VALUES (?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location:javascript://history.go(-1)");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    header("location:javascript://history.go(-1)");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('location: ../index.php?subs=failed');
    exit();
}
