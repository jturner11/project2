<!DOCTYPE html>
<html>
<head>
    <?php require "loginPageFunctions.php"; ?>
    <link rel="stylesheet" type="text/css" href="index.css">
    <?php

        $username = "user";
        $password = "password";

        if (isLoggedIn()) {
            header("location: index.php");
            exit;
        }
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                $_SESSION["logged_in"] = TRUE;
                header("location: index.php");
                exit;
            }
        }

?>
</head>
<body class="loginBody">
    <div class="loginPage">
        <h1>Welcome, please log in to your account</h1>
        <br>
        <form method="post"  action="loginPage.php">
            <h4> Username: </h4>
            <input type="text" name="username">
           <br><br>
            <h4> Password: </h4>
            <input type="password" name="password">
            <br>
            <input type="submit" value="login">
        </form>

    </div>
</body>
</html>
