<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $defaultName = "nuk";
    $defaultPwd = "123";

    $userName = $_POST["userName"];
    $userPwd = $_POST["userPwd"];
    

    if($userName == $defaultName && $userPwd == $defaultPwd){
        echo "successed";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds",time());
        setcookie("userName",$defaultName, $cookiedate);
        header("Location:form.php");
    }else{
        echo "failed";
        header("Refresh:3;url='login.php'");
    }

    ?>
</body>
</html>