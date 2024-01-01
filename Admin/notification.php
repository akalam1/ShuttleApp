<!DOCTYPE html>
<html>

<head>
    <style>

    </style>
    <?php

    include 'darktheme.php';

    ?>
</head>

<body>
    <form action="../home/webpage.php" method="post">
        <label for="message">Notification Message:</label>
        <input type="text" id="message" name="message">
        <input type="submit" value="Send Notification">
    </form>
    <?php

    $message = 0;
    ?>

</body>

</html>