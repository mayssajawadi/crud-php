<?php
include "config.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}
$sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

$result = $conn->query($sql);

if($result == TRUE){
    echo "new record created succesfully";
}
else{
    echo "Error:" .$sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<body>
    <h2>Singn Up Form</h2>

    <form actions="" method="POST"
    <fieldset>
        <legend> Personnal Information: </legend>
        First Names: <br>
        <input type="text" name="firstname">
        <br>
        Last Name: <br>
        <input type="text" name="lastname">
        <br>
        Password: <br>
        <input type="password" name="password">
        <br>
        Gender: <br>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">female
        <br><br>
        <input type="submit" name="submit" value="submit">
</fieldset>
</form>
</body>
</html>

