<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john wick");

        $firstName = '';
        $lastName = '';

        // Make sure the form was submitted
        if(isset($_POST['submitBtn'])) {
            // Save firstname & lastname and remove the white spaces
            $firstName = trim($_POST['firstName']);
            $lastName = trim($_POST['lastName']);
            $fullName = $firstName . ' ' . $lastName;

            $match = false;

            // Loop throught the users
            foreach ($users as $user) {
                // Check if the user is a match
                if($fullName == $user) {
                    // Its a match !
                    $match = true;
                    break;
                }
            }

            if($match) {
                echo 'Welcome, ' . $firstName . ' ' . $lastName;
            } else {
                echo 'Your not on the list !';
            }

        }

    ?>
    
    <form action="" method="post">
        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
        <input type="text" name="lastName" placeholder="Last Name" value="<?= $lastName; ?>">

        <input type="submit" name="submitBtn" value="Send">
    </form>


</body>
</html>