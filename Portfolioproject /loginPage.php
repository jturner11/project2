<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <?php
        session_start();
        $username = "user";
        $password = "password";
        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == TRUE) {
            header("location: loginPage.php");
        }
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            if ($_POST["username"] == $username && $_POST["password"] == $password)
                $_SESSION["logged_in"] = TRUE;
            header("location: loginPage.php");
}   ?>
</head>
<body class="loginBody">
    <div class="loginPage">
        <h1>Welcome, please log in to your account</h1>

        <form method="post"  action="phpform.php">
            <h1>Please Log In </h1>
            <h3> Username: </h3>
            <input type="text" name="username">
            <h3> Password: </h3>
            <input type="password" name="password">
            <input type="submit" value="login">
        </form>

    </div>
</body>
