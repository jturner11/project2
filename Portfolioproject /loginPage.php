<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <?php
        session_start();
        $username = "user";
        $password = "password";
        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == TRUE) {
            header("location: index.php");
        }
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            if ($_POST["username"] == $username && $_POST["password"] == $password)
                $_SESSION["logged_in"] = TRUE;
            header("location: index.php");
}   ?>
</head>
<body class="loginBody">
    <div class="loginPage">
        <h1>Welcome, please log in to your account</h1>
        <br>
        <form method="post"  action="phpform.php">
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
