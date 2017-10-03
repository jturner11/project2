<?php
function deletePortfolioProject(){
    $db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("DELETE FROM `Project2` WHERE `id` = :id;");
    $query->bindParam(':id', $_GET['id']);
    $query->execute();
}