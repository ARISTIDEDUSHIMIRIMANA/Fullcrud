<?php

include "connection.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="tailwind.js"></script>
</head>

<body>

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM infomation WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
 
    ?>



    <form class="max-w-sm mx-auto" method="post">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium ">Your email</label>
            <input type="text"  value="<?php echo $row['email'] ?>"  name="email" class="  text-sm rounded-lg  block w-full p-2.5 border-2" required />
        </div>
        <div class="mb-5">
            <label for="number" class="block mb-2 text-sm font-medium ">Number</label>
            <input type="number" name="number"   value="<?php echo $row['number'] ?>"  class="  text-sm rounded-lg  block w-full p-2.5 border-2" required />
        </div>

        <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</body>

</html>


<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "UPDATE infomation SET email='$email',number='$number' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {

        header("location:display.php");
    } else {
        echo $conn->error;
    }
}
?>


 