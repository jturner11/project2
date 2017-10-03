<?php
include("phpformsfunctions/editFunctionDynamic.php");
?>
<h1>EDIT YOUR DATA</h1>
<form action="phpformsfunctions/editFunction.php" method="POST">
    <select>
        <?php
        getData();
        ?>
    </select>
    <input type="text" name="content_name">
    <input type="text" name="text_content">
    <input type="submit" name="submit" value="Submit">
</form>