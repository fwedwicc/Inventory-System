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
<!-- Sidebar -->
<?php
include_once './sidebar.php';
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
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">ID</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
            </div>
            <!-- Second row -->
            <div class="grid lg:grid-cols-3 lg:space-x-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Product Name</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Category</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Product Expiration</label>
                <div class="relative max-w-sm">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-brown" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                  </div>
                  <input datepicker datepicker-autohide type="text" class="bg-inputColor border border-inputOutline text-gray-900 text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full ps-10 p-2.5 placeholder-darkPlaceHolder" placeholder="Select date">
                </div>
              </div>
            </div>
            <!-- Third row -->
            <div class="grid lg:grid-cols-3 lg:space-x-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Product Model</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Price</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
            </div>
            <!-- Fourth row -->
            <div class="grid lg:grid-cols-3 lg:space-x-3 grid-cols-1">
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Product Year</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
              <div class="col-span-1 mb-3">
                <label for="first_name" class="block mb-2 text-sm font-medium container-text">Quantity</label>
                <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
              </div>
            </div>
          </form>
        </div>
        <!-- Right side -->
        <div class="h-auto rounded-lg col-span-1 space-y-4">
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-5 h-5 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd" />
            </svg>
            Add
          </button>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-5 h-5 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4" />
            </svg>
            Update
          </button>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-5 h-5 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M17.44 3a1 1 0 0 1 .707.293l2.56 2.56a1 1 0 0 1 0 1.414L18.194 9.78 14.22 5.806l2.513-2.513A1 1 0 0 1 17.44 3Zm-4.634 4.22-9.513 9.513a1 1 0 0 0 0 1.414l2.56 2.56a1 1 0 0 0 1.414 0l9.513-9.513-3.974-3.974ZM6 6a1 1 0 0 1 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7a1 1 0 0 1 1-1Zm9 9a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
              <path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z" />
            </svg>
            Clear
          </button>
          <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
            <svg class="w-5 h-5 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
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
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm font-medium rounded-lg bg-inputColor focus:ring-3 focus:ring-primaryBtn focus:border-primaryBtn border border-sideBar text-darkText placeholder-darkPlaceHolder" placeholder="Search Products" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primaryBtn hover:bg-primaryHover focus:outline-none focus:ring-primaryBtn font-medium rounded text-sm px-4 py-2">Search</button>
          </div>
        </div>
        <!-- Table -->
        <div class="col-span-7">
          <div class="relative overflow-x-auto container-shadow sm:rounded-lg">
            <div class="h-[409px] overflow-y-auto">
              <table class="w-full text-sm font-medium text-left rtl:text-right text-primaryBtn">
                <thead class="text-xs text-darkText uppercase brownn sticky top-0">
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
  <!-- Date Picker cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>