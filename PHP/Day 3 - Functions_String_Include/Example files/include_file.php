<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        ini_set('display_errors','1');

        
        $page = 'home';
        // Include a file -> warning if error
        //include 'nav.php';
        include_once 'nav.php';
        ?>
        
        THIS IS MY BODY
        
        <?php
        // Require a file -> stop script if error
        //require 'footer.html';
        require_once 'footer.html';
        
    ?>
</body>
</html>