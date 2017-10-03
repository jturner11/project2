
<?php

function selectContentData()
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `content_name` FROM `Project2`;");
    $query->execute();
    return $query->fetchAll();
//foreach ($query as $item){
//    $content = $item["content_name"];
//    echo "<option name=$content> " .  $content . "</option>";
//}
}