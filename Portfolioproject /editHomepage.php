<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="index.css">
<?php require "displayData.php";
?>
</head>
<body class="editHomepage">
<button><a href="index.php">Home</a></button>
<form action="phpformsfunctions/phpAddFunction.php" method="post">
    <input type="hidden" name="content_name" value="homepage">
    <br>
    <h1>Edit Content:</h1>
    <br>
    <textarea name="text_content"> <?php echo selectHomepageData(); ?> </textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>