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
 


  <form class="max-w-sm mx-auto">
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium ">Your email</label>
      <input type="text" id="email" class="  text-sm rounded-lg  block w-full p-2.5 border-2"  required />
    </div>
    <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium ">Number</label>
    <input type="number" id="email" class="  text-sm rounded-lg  block w-full p-2.5 border-2"  required />
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

</body>

</html>