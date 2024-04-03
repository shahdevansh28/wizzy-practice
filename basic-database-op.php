<?php
require_once "conn.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    if ($fname != "" && $lname != "" && $email != "") {
        $sql = "INSERT INTO user (`fname`, `lname` , `email`) VALUES ('$fname', '$lname' , '$email')";
        if (mysqli_query($con, $sql) or die(mysqli_error($con))) {
            echo "Successfully inserted $fname and $lname";
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Please enter input";
    }
    header("Location: basic-database-op.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <div>
        <h2>Add form </h2>
        <form method="POST">
            <lable for="fname" name="fname">First Name</lable>
            <input type="text" name="fname">
            <label for="fname">Last Name</label>
            <input type="text" name="lname">
            <label for="email">Email</label>
            <input type="email" name="email">
            <button type=" submit" name="submit">Add</button>
        </form>
    </div>
    <h2>User Data </h2>
    <table>
        <thead>
            <tr>
                <th>First Name </th>
                <th>Last Name </th>
                <th>Email </th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'conn.php';
            $query = "SELECT * FROM user";

            if ($res = $con->query($query)) {
                while ($row = mysqli_fetch_array($res)) {
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email = $row['email'];
                    ?>
                    <tr>
                        <td>
                            <?php echo $fname; ?>
                        </td>
                        <td>
                            <?php echo $lname; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td><a href="updatedata.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>

                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>