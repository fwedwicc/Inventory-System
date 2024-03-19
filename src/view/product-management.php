<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café de Franz | Product Management</title>
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
      <div class="grid grid-cols-7 gap-5">
        <!-- Left Side -->
        <div class="container-shadow h-auto rounded-lg p-8 col-span-4">
          <form action="">
            <!-- First row -->
            <div class="grid lg:grid-cols-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
            </div>
            <!-- Second row -->
            <div class="grid lg:grid-cols-3 lg:space-x-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
            </div>
            <!-- Third row -->
            <div class="grid lg:grid-cols-3 lg:space-x-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
            </div>
            <!-- Fourth row -->
            <div class="grid lg:grid-cols-3 lg:space-x-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">First name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
              </div>
            </div>
          </form>
        </div>
        <!-- Right side -->
        <div class="h-auto rounded-lg col-span-1 space-y-4">
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-3 h-3 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
            </svg>
            Add
          </button>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-3 h-3 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
            </svg>
            Update
          </button>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-3 h-3 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
            </svg>
            Clear
          </button>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-3 h-3 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
            </svg>
            Delete
          </button>
        </div>
        <div class="h-auto col-span-2 space-y-4">
          <div class="container-shadow rounded-lg w-full h-80">
            <!-- Image of Product -->
          </div>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            Change Picture
          </button>
        </div>
        <!-- Search Bar -->
        <div class="col-span-3">
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm font-medium rounded-lg bg-placeHolder focus:ring-3 focus:ring-primaryBtn focus:border-primaryBtn border-none text-darkText placeholder-darkPlaceHolder" placeholder="Search Products" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primaryBtn hover:bg-primaryHover focus:outline-none focus:ring-primaryBtn font-medium rounded text-sm px-4 py-2">Search</button>
          </div>
        </div>
        <!-- Table -->
        <div class="col-span-7">
          <div class="relative overflow-x-auto container-shadow sm:rounded-lg">
            <div class="max-h-[409px] overflow-y-auto">
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
                    <th scope="col" class="px-6 py-3">
                      Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Expiration
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
                    <td class="px-6 py-4">
                      -
                    </td>
                    <td class="px-6 py-4">
                      -
                    </td>
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
                    <td class="px-6 py-4">
                      -
                    </td>
                    <td class="px-6 py-4">
                      -
                    </td>
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
                    <td class="px-6 py-4">
                      -
                    </td>
                    <td class="px-6 py-4">
                      -
                    </td>
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
                    <td class="px-6 py-4">
                      -
                    </td>
                    <td class="px-6 py-4">
                      -
                    </td>
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
  </div>

  <script src="../../assets/css/tailwind-colors.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>