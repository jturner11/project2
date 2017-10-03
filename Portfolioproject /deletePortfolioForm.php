<?php
require "displayData.php";
require "phpformsfunctions/deleteData.php";

if (isset($_GET['id'])){
    deletePortfolioProject();
}


      $projects = selectPortfoliopageData();
        foreach($projects as $project){
            echo $project["text_content"];
            echo '<a href="deletePortfolioForm.php?id=' . $project["id"] . '">Delete </a><br><br>';
        }
?>
