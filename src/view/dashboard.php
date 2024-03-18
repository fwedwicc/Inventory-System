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
          <!-- Time and Date -->
          <div class="flex items-center space-x-4 p-5 w-full h-full bg-gray-50 dark:bg-gray-800 rounded">
            <!-- Clock Icon -->
            <svg class="w-14 h-14 mx-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div>
              <!-- Time -->
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
              <span class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">11:45am</span>
            </div>
            <div>
              <!-- Date -->
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
              <span class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">03/18/2024</span>
            </div>
          </div>
          <!-- Lists -->
          <div class="flex items-center justify-between p-5 pt-14 w-full h-40 bg-gray-50 dark:bg-gray-800 rounded overflow-y-auto">
            <ul class="space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
              <li>
                <span class="text-white font-medium">Admin: </span>Update a product: Coffee Grounds: 2 Packs
              </li>
              <li>
                <span class="text-white font-medium">Admin: </span>Deleted expired product: Fresh Milk
              <li>
                <span class="text-white font-medium">Admin: </span>Update a product: Coffee Grounds: 2 packs
              </li>
              <li>
                <span class="text-white font-medium">Admin: </span>Update a product: Coffee Grounds: 2 packs
              </li>
            </ul>
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