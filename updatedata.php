<?php
require_once "conn.php";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $update_query = "UPDATE user SET `fname` = '$fname' , `lname` = '$lname' , `email` = '$email' WHERE `id` =" . $_GET['id'];

    if(mysqli_query($con,$update_query)){
        echo "Update Successfully";
        header("Location:basic-database-op.php");
    }else{
        echo "Something went wrong";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h2>Update Data</h2>
    <?php
    require_once "conn.php";
    $select_user = "SELECT * FROM user WHERE id = " . $_GET['id'];
    
    if ($result = $con ->query($select_user)) {
        while ($row = $result -> fetch_assoc()) { 
            $Id = $row['id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
    ?>
    <form method="POST" action = "updatedata.php?id=<?php echo $Id; ?>">
        <lable for="fname" name="fname">First Name</lable>
        <input type="text" name="fname" value=<?php echo $fname; ?>>
        <label for="fname">Last Name</label>
        <input type="text" name="lname" value=<?php echo $lname; ?>>
        <label for="email">Email</label>
        <input type="email" name="email" value=<?php echo $email; ?>>
        <button type=" submit" name="submit">Update</button>
    </form>

    <?php
        }
    }
    ?>
</body>

</html>