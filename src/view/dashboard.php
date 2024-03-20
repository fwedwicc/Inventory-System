<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café de Franz | Dashboard</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- General css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- Store Icon -->
  <link rel="icon" type="image/png" href="../../assets/image/store-icon.png" />
</head>
<!-- Sidebar -->
<?php
include_once './sidebar.php';
?>

<body>
  <div class="p-6 sm:ml-64">
    <!-- Main container -->
    <div class="rounded-lg h-auto space-y-5">
      <!-- Page content -->
      <div class="grid grid-cols-2 gap-5">
        <!-- Stock and expired items container -->
        <div class="flex items-center justify-center h-auto rounded-lg p-8 flex-col space-y-5 container-shadow">
          <div class="flex items-center justify-between p-5 w-full cards rounded-lg px-8">
            <h5 class="text-2xl font-bold tracking-tight">Stock Items</h5>
            <p class="font-bold">422</p>
          </div>
          <div class="flex items-center justify-between p-5 w-full cards rounded-lg px-8">
            <h5 class="text-2xl font-bold tracking-tight">Expired Items</h5>
            <p class="font-bold">35</p>
          </div>
        </div>
        <div class="flex justify-center h-auto rounded flex-col space-y-4">
          <!-- Time and Date -->
          <div class="flex items-center space-x-4 p-5 w-full h-full container-shadow rounded-lg">
            <!-- Clock Icon -->
            <svg class="w-14 h-14 mx-6 container-text" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div>
              <!-- Time -->
              <label class="block mb-2 text-sm font-medium container-text">Time</label>
              <span class="time-date text-xl font-bold container-text rounded-lg block w-full p-2.5 px-4">11:45am</span>
            </div>
            <div>
              <!-- Date -->
              <label class="block mb-2 text-sm font-medium container-text">Date</label>
              <span class="time-date text-xl font-bold container-text rounded-lg block w-full p-2.5 px-4">03/18/2024</span>
            </div>
          </div>
          <!-- Lists -->
          <div class="flex items-center justify-between p-5 pt-14 w-full h-40 container-shadow rounded-lg overflow-y-auto px-8">
            <ul class="space-y-1 list-none list-inside">
              <li class="container-text">
                <span class="container-text font-bold">Admin: </span>Update a product: Coffee Grounds: 2 Packs
              </li>
              <li class="container-text">
                <span class="container-text font-bold">Admin: </span>Deleted expired product: Fresh Milk
              </li>
              <li class="container-text">
                <span class="container-text font-bold">Admin: </span>Update a product: Coffee Grounds: 2 packs
              </li>
              <li class="container-text">
                <span class="container-text font-bold">Admin: </span>Update a product: Coffee Grounds: 2 packs
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Lower side containers -->
      <div class="grid grid-cols-2 gap-5">
        <!-- 2 container for graph -->
        <div class="flex items-center justify-center h-[360px] rounded-lg container-shadow p-8 flex-col space-y-5">

        </div>
        <div class="flex items-center justify-center h-[360px] rounded-lg container-shadow p-8 flex-col space-y-5">

        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/css/tailwind-colors.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>