<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        $query = $db->prepare("INSERT INTO `Project2` (`content_name`,`text_content`) VALUES (:pagename, :text);");
        $query->bindParam(':pagename', $_POST['content_name']);
        $query->bindParam(':text', $_POST['text_content']);
        $query->execute();

    if ($query->execute()) {
        if ($_POST['content_name'] == "aboutpage") {
            header("location: ../about.php");
        } elseif ($_POST['content_name'] == "homepage") {
            header("location: ../index.php");
        } else {
            echo "something went wrong";
        }
    }
?>