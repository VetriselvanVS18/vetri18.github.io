<?php
    include_once "db.php";
    if(isset($_POST['submit1'])){
        $name1 = mysqli_real_escape_string($conn, $_POST['name1']);
        $email1 = mysqli_real_escape_string($conn, $_POST['email1']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        if(empty($name1) || empty($email1) || empty($dob)){
            header("Location:index.php?register=empty&name1=".$name1."&email1=".$email1."&dob=".$dob);
            exit();
        }else{
            if(!preg_match("/^[a-zA-Z]*$/", $name1)){
                header("Location:index.php?register=charwrong&email1=".$email1."&dob=".$dob);
                exit();
            }else{
                if(!filter_var($email1, FILTER_VALIDATE_EMAIL)){
                    header("Location:index.php?register=emailerror&name1=".$name1."&dob=".$dob);
                    exit();
                }else{
                    $sql1 = "select * from register;";
                    $result1 = mysqli_query($conn, $sql1);
                    $datas = array();
                    if(mysqli_num_rows($result1) > 0){
                        while($row = mysqli_fetch_assoc($result1)){
                            $datas[] = $row['EMAIL'];
                        }
                    }
                    if(in_array($email1, $datas)){
                        header("Location:index.php?register=exists&name1=".$name1."&dob=".$dob);
                        exit();
                    }else{
                        $sql = "insert into register (NAME, EMAIL, DOB) values (?,?,?);";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header("Location:index.php?register=sqlerror");
                        }else{
                            $some = mysqli_stmt_bind_param($stmt, 'sss', $name1, $email1, $dob);
                            mysqli_stmt_execute($stmt);
                        }
                        header("Location:index.php?register=success");
                    }
                }
            }
        }
    }