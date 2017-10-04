<?php
    include("selectContentData.php");
    $var = selectContentData();
?>
    <div class="deleteForm">
    <h1>DELETE YOUR DATA</h1>
        <form action="phpformsfunctions/deleteData.php" method="POST">
            <select name="content_name">
                <?php
                    foreach ($var as $item){
                     $content = $item["content_name"];
                     echo "<option value=$content> " .  $content . "</option>";
                 }
                ?>
                </select>
            <input type="submit" name="Delete" value="Submit">
        </form>
</div>