<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is class for form formating in Web Technology</h1>
    <?php
    echo "<h1 style='color:red;'>My Form</h1>";
    if(isset($_POST['submit'])){
        echo 'password is: ',$_POST['pwd'];
    }
    ?>

    <form action="" method="post">
        <div>
            <label for="">Username: </label>
            <input type="text" name="username" placeholder="username">
        </div>
        <div>
            <label for="">Password: </label>
            <input type="password" name="pwd" placeholder="username">
        </div>
        <div>
            <input type="color" name="black" id="black">
            <input type="date" name="" id="date">
            <input type="Submit" value="login"  name="submit">
        </div>
    </form>
</body>
</html>