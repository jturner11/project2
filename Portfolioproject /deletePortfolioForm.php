<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Anton|Gruppo|Hind+Vadodara:300|Oswald:300,400|Patrick+Hand+SC|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="deletePage.css">
</head>
<body>
<div class="deletePortfolio">
<?php
    require "displayData.php";
    require "phpformsfunctions/deleteData.php";

    if (isset($_GET['id'])){
        if (deletePortfolioProject()){
            header("location: portfolio.php");
        } else {
            echo "something went wrong";
        }
    }
    $projects = selectPortfoliopageData();
        foreach($projects as $project){
            echo $project["text_content"];
            echo '<a href="deletePortfolioForm.php?id=' . $project["id"] . '">Delete </a><br><br>';
    }
    ?>
</div>
    </body>
</html>