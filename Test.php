<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
    <title>My Test Page</title>
</head>
<body>

<form action="insert.php" method="post">

    <input type="text" name="firstname" placeholder="First Name"><br><br>
    <input type="text" name="lastname" placeholder="Last Name"><br><br>
    <input type="submit" name="Submit">

</form>

</body>
</html>




<?php
echo "My test page is working.";
?>