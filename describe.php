<?php
    include_once "db.php";
    if(isset($_POST['submit2'])){
        $name2 = mysqli_real_escape_string($conn, $_POST['name2']);
        $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        if(empty($name2) || empty($email2) || empty($comment)){
            header("Location:index.php?describe=empty&name2=".$name2."&email2=".$email2."&comment2=".$comment);
            exit();
        }else{
            if(!preg_match("/^[a-zA-Z]*$/", $name2)){
                header("Location:index.php?describe=charwrong&email2=".$email2."&comment2=".$comment);
                exit();
            }else{
                if(!filter_var($email2, FILTER_VALIDATE_EMAIL)){
                    header("Location:index.php?describe=emailerror&name2=".$name2."&comment2=".$comment);
                    exit();
                }else{
                    $sql = "insert into favourite (NAME, EMAIL, FAVOURITE_MOMENT) values (?,?,?);";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location:index.php?describe=sqlerror");
                    }else{
                        $some = mysqli_stmt_bind_param($stmt, 'sss', $name2, $email2, $comment);
                        mysqli_stmt_execute($stmt);
                    }
                    header("Location:index.php?describe=success");
                }
            }
        }
    }