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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td>
                        test@gmail.com
                    </td>
                    <td>
                        0783456789 
                    </td>

                    <td>
                        <a href="" class=" text-white bg-red-600 p-2  w-52">Delete</a>
                        <a href="" class=" bg-blue-500  text-white p-2 w-52">Update</a>
                    </td>
                   
                </tr>


            </tbody>
        </table>
    </div>



</body>

</html>