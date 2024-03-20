<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café de Franz | Logs</title>
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
  <div class="sm:ml-64">
    <!-- Main container -->
    <div class="h-screen space-y-5 p-6">
      <!-- Parent container -->
      <div class="grid grid-cols-2 h-[100%] space-x-5">
        <!-- Left side -->
        <div class="col-span-1 container-shadow rounded-lg">
          <div class="rounded-lg w-full p-6">
            <!-- Print Button -->
            <button type="button" class="px-7 py-3 w-[10rem] text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
              <svg class="w-4 h-4 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z" clip-rule="evenodd" />
              </svg>
              Print
            </button>
            <h5 class="text-3xl font-bold tracking-tight text-center my-5 text-brown">Inventory Logs</h5>
            <!-- Table -->
            <div class="col-span-7">
              <div class="relative overflow-x-auto container-shadow sm:rounded-lg">
                <div class="max-h-[480px] overflow-y-auto">
                  <table class="w-full text-sm font-medium text-left rtl:text-right text-primaryBtn">
                    <thead class="text-xs text-darkText uppercase brownn sticky top-0">
                      <tr>
                        <th scope="col" class="px-6 py-3">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Action Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Action Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                          User Name
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                      <tr class="bg-red border-b border-inputOutline">
                        <th scope="row" class="px-6 py-4 font-medium text-darkText whitespace-nowrape">
                          -
                        </th>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                        <td class="px-6 py-4">
                          -
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Actions form / Right side -->
        <div class="col-span-1 rounded-lg grid place-content-center">
          <div class="container-shadow p-12 pr-16 rounded-lg">
            <div class="grid grid-cols-2 space-y-4">
              <!-- First col -->
              <div class="col-span-2">
                <!-- Category -->
                <label for="category" class="block mb-2 text-sm font-medium text-brown">Category</label>
                <div class="grid grid-cols-2 space-x-4">
                  <select id="category" class="bg-inputColor border border-inputOutline text-brown font-medium text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5">
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                  <!-- Show Logs Button -->
                  <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
                    Show Logs
                  </button>
                </div>
              </div>
              <!-- Second col -->
              <div class="col-span-2">
                <!-- Stocks -->
                <label for="stock" class="block mb-2 text-sm font-medium text-brown">Stocks</label>
                <div class="grid grid-cols-2 space-x-4">
                  <select id="stock" class="bg-inputColor border border-inputOutline text-brown font-medium text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5">
                    <option>Stocks 1</option>
                    <option>Stocks 2</option>
                    <option>Stocks 3</option>
                    <option>Stocks 4</option>
                  </select>
                  <!-- Show Logs Button -->
                  <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
                    Show products
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/css/tailwind-colors.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>