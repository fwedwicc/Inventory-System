<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café de Franz | Product List</title>
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
<!-- Side and navigation bar -->
<?php
include_once './navigation.php';
?>

<body>
  <div class="p-6 sm:ml-64">
    <!-- Main container -->
    <div class="rounded-lg h-auto space-y-5">
      <!-- Page content -->
      <div class="grid grid-cols-9 gap-5">
        <!-- Left side -->
        <div class="col-span-6 space-y-4">
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm font-medium rounded-lg bg-placeHolder focus:ring-3 focus:ring-primaryBtn focus:border-primaryBtn border-none text-darkText placeholder-darkPlaceHolder" placeholder="Search Products" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primaryBtn hover:bg-primaryHover focus:outline-none focus:ring-primaryBtn font-medium rounded text-sm px-4 py-2">Search</button>
          </div>
          <!-- Table -->
          <div class="relative overflow-x-auto container-shadow sm:rounded-lg col-span-2">
            <div class="max-h-[521px] overflow-y-auto">
              <table class="w-full text-sm font-medium text-left rtl:text-right text-primaryBtn">
                <thead class="text-xs text-darkText uppercase bg-placeHolder sticky top-0">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Product Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Product Model
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Product Year
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
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Right side -->
        <div class="col-span-3">
          <div class="h-auto space-y-5">
            <!-- Product Image -->
            <div class="container-shadow rounded-lg w-full h-56"></div>
            <!-- First table -->
            <div class="relative overflow-x-auto container-shadow sm:rounded-lg col-span-2">
              <table class="w-full text-sm font-medium text-left rtl:text-right text-primaryBtn">
                <tr class="border-b border-inputOutline">
                  <th scope="col" class="px-6 py-2.5">
                    Name
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Name
                  </td>
                </tr>
                <tr class="border-b border-inputOutline">
                  <th scope="col" class="px-6 py-2.5">
                    Model
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Model
                  </td>
                </tr>
                <tr class="border-b border-inputOutline">
                  <th scope="col" class="px-6 py-2.5">
                    Category
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Category
                  </td>
                </tr>
                <tr>
                  <th scope="col" class="px-6 py-2.5">
                    Year
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Year
                  </td>
                </tr>
              </table>
            </div>
            <!-- Second table -->
            <div class="relative overflow-x-auto container-shadow sm:rounded-lg col-span-2">
              <table class="w-full text-sm font-medium text-left rtl:text-right text-primaryBtn">
                <tr class="border-b border-inputOutline">
                  <th scope="col" class="px-6 py-2.5">
                    Status
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Status
                  </td>
                </tr>
                <tr class="border-b border-inputOutline">
                  <th scope="col" class="px-6 py-2.5">
                    Expiration Date
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Expiration Date
                  </td>
                </tr>
                <tr class="border-b border-inputOutline">
                  <th scope="col" class="px-6 py-2.5">
                    Category
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Category
                  </td>
                </tr>
                <tr>
                  <th scope="col" class="px-6 py-2.5">
                    Price
                  </th>
                  <td class="px-6 py-2.5 border-l border-inputOutline">
                    Sample Price
                  </td>
                </tr>
              </table>
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