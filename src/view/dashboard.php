<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<!-- Admin side and navigation bar -->
<?php
include_once './navigation.php';
?>

<body class="bg-gray-900">
  <!-- Different page na itey -->

  <div class="p-6 sm:ml-64">
    <!-- Main container -->
    <div class="border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-auto space-y-5">
      <!-- Page content -->
      <div class="grid grid-cols-2 gap-5">
        <!-- Stock and expired items container -->
        <div class="flex items-center justify-center h-auto rounded bg-gray-50 dark:bg-gray-800 p-8 flex-col space-y-5">
          <div class="flex items-center justify-between p-5 w-full bg-white border border-gray-200 rounded-lg shadow border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Stock Items</h5>
            <p class="font-bold text-gray-900 dark:text-gray-400">422</p>
          </div>
          <div class="flex items-center justify-between p-5 w-full bg-white border border-gray-200 rounded-lg shadow border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Expired Items</h5>
            <p class="font-bold text-gray-900 dark:text-gray-400">35</p>
          </div>

        </div>
        <div class="flex justify-center h-auto rounded flex-col space-y-4">
          <div class="flex items-center justify-between p-5 w-full h-full bg-gray-50 dark:bg-gray-800 rounded">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Stock Items</h5>
            <p class="font-bold text-gray-900 dark:text-gray-400">422</p>
          </div>
          <div class="flex items-center justify-between p-5 w-full h-full bg-gray-50 dark:bg-gray-800 rounded">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Stock Items</h5>
            <p class="font-bold text-gray-900 dark:text-gray-400">422</p>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="grid grid-cols-2 gap-5">
        <!-- Stock and expired items container -->
        <div class="flex items-center justify-center h-96 rounded bg-gray-50 dark:bg-gray-800 p-8 flex-col space-y-5">

        </div>
        <div class="flex items-center justify-center h-96 rounded bg-gray-50 dark:bg-gray-800 p-8 flex-col space-y-5">

        </div>
      </div>
    </div>

  </div>


  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>