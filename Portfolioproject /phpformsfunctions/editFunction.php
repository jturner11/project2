<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo $_POST['content_name'];
echo $_POST['text_content'];

$query = $db->prepare("UPDATE Project2 SET `content_name` = :content_name, `text_content` = :text_content WHERE `content_name` = `content_name`;");
$query->bindParam(':content_name', $_POST['content_name']);
$query->bindParam(':text_content', $_POST['text_content']);
$query->execute();

