

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST and GET - PHP Tutorial Lesson 10</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" name="submit">
</form>

<div>
    <?php
    if(isset($_POST['submit'])) {
        echo "<br>Name: " . $_POST['name'];
        echo "<br>Age: " . $_POST['age'];
    }
    ?>
</div>
</body>
</html>
