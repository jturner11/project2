<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body class="editAboutPage">
    <button><a href="index.php">Home</a></button>
            <?php require "displayData.php";?>
        <form action="phpformsfunctions/phpAddFunction.php" method="post">
            <input type="hidden" name="content_name" value="aboutpage">
            <br><h1>Edit Content:</h1><br>
             <textarea name="text_content" rows="30"> <?php echo selectAboutpageData();?> </textarea>
          <br>
         <input type="submit" value="Submit">
     </form>
    </body>
</html>