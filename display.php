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
    include "connection.php";
    include "navbar.php";

    ?>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                </tr>
            </thead>
            <tbody>


                <?php
                
                $sql = "SELECT * FROM infomation";
                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($query)) {
 
                ?>
                

                <tr class="  ">
                    <td >
                        <?php echo $row['id'] ?>
                    </td>
                    <td>
                    <?php echo $row['email'] ?>
                    </td>

                    <td>
                    <?php echo $row['number'] ?>
                    </td>
 
                    <td>
                        <a href="update.php?id=<?php echo $row['id'] ?>" class=" bg-blue-600  w-52 text-white">update</a>
                        <a href="delete.php?id=<?php echo $row['id']?>" class=" bg-red-500 text-white w-52 ">delete</a>
                    </td>
                </tr>


                <?php

                }
                ?>



            </tbody>
        </table>
    </div>



</body>

</html>