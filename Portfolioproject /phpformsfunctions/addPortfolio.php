<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project2', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$layout = '<div class="overlay-container">
					<a href="' . $_POST['url'] . '">
						<img src="' . $_POST['img'] . '" >
						<div class="overlay">
						    <div class="overlay-container-text">' . $_POST['text'] . '</div>
						 </div>
					</a>
				</div>';
        $query = $db->prepare("INSERT INTO `Project2` (`content_name`,`text_content`) VALUES ('portfoliopage', :text);");
        $query->bindParam(':text', $layout);
        $query->execute();
?>