<?php

session_start();
function checkPassword(string $pwd, string $userPwd) {
    return $pwd == $userPwd;
}

if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//ERROR handlers
//Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../index.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM `users` WHERE user_uid='$uid'OR user_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error1");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                echo $row['user_uid'];
                    //De-hashing the pwd
                    $hashedPwdCheck = checkPassword($pwd, $row['user_pwd']);

                    if($hashedPwdCheck) {
                        //Log in the user here
                           $_SESSION['u_id'] = $row['user_id'];
                           $_SESSION['u_first'] = $row['user_first'];
                           $_SESSION['u_last'] = $row['user_last'];
                           $_SESSION['u_email'] = $row['user_email'];
                           $_SESSION['u_uid'] = $row['user_uid'];
                       header("Location: ../index.php?login=success");
                       exit();
                    } else {
                        header("Location: ../index.php?login=error2");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php?login=error3");
        exit();
    }

?>
