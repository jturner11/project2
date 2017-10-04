<?php
/**
 * IS LOGGED IN
 *
 * @return bool
 */
function isLoggedIn() {
    session_start();
    if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] == false) {
        return false;
    }
    return true;
}
/**
 * THE LOG IN FORM
 *
 * @return bool
 */
function logIn() {
    $username = "user";
    $password = "password";
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] == $username && $_POST["password"] == $password) {
            return true;
        }
    }
    return false;
}