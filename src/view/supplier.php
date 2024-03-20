<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café de Franz | Supplier</title>
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
      <div class="grid grid-cols-7 space-y-4">
        <div class="col-start-5 col-span-3 space-y-4">
          <!-- Search bar -->
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm font-medium rounded-lg bg-placeHolder focus:ring-3 focus:ring-primaryBtn focus:border-primaryBtn border-none text-darkText placeholder-darkPlaceHolder" placeholder="Search Products" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primaryBtn hover:bg-primaryHover focus:outline-none focus:ring-primaryBtn font-medium rounded text-sm px-4 py-2">Search</button>
          </div>
          <div class="flex space-x-4">
            <!-- Add supplier -->
            <button type="button" data-modal-target="add-supplier-modal" data-modal-toggle="add-supplier-modal" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
              <svg class="w-4 h-4 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd" />
              </svg>
              Add Supplier
            </button>
            <!-- Add supplier Modal -->
            <div id="add-supplier-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Add Supplier
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-supplier-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                    <!-- First row -->
                    <div class="grid lg:grid-cols-2 grid-cols-1 lg:space-x-4">
                      <div class="col-span-1 mb-3">
                        <label for="first_name" class="block mb-2 text-sm font-medium container-text">Name</label>
                        <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                      </div>
                      <div class="col-span-1 mb-3">
                        <label for="first_name" class="block mb-2 text-sm font-medium container-text">Mobile No.</label>
                        <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                      </div>
                    </div>
                    <!-- Second row -->
                    <div class="grid lg:grid-cols-2 grid-cols-1 lg:space-x-4">
                      <div class="col-span-1 mb-3">
                        <label for="first_name" class="block mb-2 text-sm font-medium container-text">Address</label>
                        <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                      </div>
                      <div class="col-span-1 mb-3">
                        <label for="first_name" class="block mb-2 text-sm font-medium container-text">Status</label>
                        <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                      </div>
                    </div>
                    <!-- Third row -->
                    <div class="grid lg:grid-cols-2 grid-cols-1">
                      <div class="col-span-1 mb-3">
                        <label for="first_name" class="block mb-2 text-sm font-medium container-text">Remarks</label>
                        <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                      </div>
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="add-supplier-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    <button data-modal-hide="add-supplier-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Print -->
            <button type="button" class="px-7 py-3 w-full text-sm font-medium text-center inline-flex items-center justify-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">
              <svg class="w-4 h-4 mr-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z" clip-rule="evenodd" />
              </svg>
              Print
            </button>
          </div>
        </div>
        <!-- Table -->
        <div class="col-span-7">
          <div class="relative overflow-x-auto container-shadow sm:rounded-lg">
            <div class="h-[550px] overflow-y-auto">
              <table class="w-full text-sm font-medium text-left rtl:text-right text-primaryBtn">
                <thead class="text-xs text-darkText uppercase bg-placeHolder sticky top-0">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Mobile No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Remarks
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Action
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
                    <td class="flex items-center px-6 py-4 space-x-3">
                      <!-- Edit -->
                      <button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                        <svg class="w-6 h-6 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                        </svg>
                      </button>
                      <!-- Remove -->
                      <button>
                        <svg class="w-5 h-5 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg>
                      </button>
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
                    <td class="flex items-center px-6 py-4 space-x-3">
                      <!-- Edit -->
                      <button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                        <svg class="w-6 h-6 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                        </svg>
                      </button>
                      <!-- Remove -->
                      <button>
                        <svg class="w-5 h-5 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg>
                      </button>
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
                    <td class="flex items-center px-6 py-4 space-x-3">
                      <!-- Edit -->
                      <button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal">
                        <svg class="w-6 h-6 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                        </svg>
                      </button>
                      <!-- Remove -->
                      <button>
                        <svg class="w-5 h-5 text-darkText" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- Edit Modal -->
              <div id="edit-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit Supplier
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                      </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                      <!-- First row -->
                      <div class="grid lg:grid-cols-2 grid-cols-1 lg:space-x-4">
                        <div class="col-span-1 mb-3">
                          <label for="first_name" class="block mb-2 text-sm font-medium container-text">Name</label>
                          <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                        </div>
                        <div class="col-span-1 mb-3">
                          <label for="first_name" class="block mb-2 text-sm font-medium container-text">Mobile No.</label>
                          <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                        </div>
                      </div>
                      <!-- Second row -->
                      <div class="grid lg:grid-cols-2 grid-cols-1 lg:space-x-4">
                        <div class="col-span-1 mb-3">
                          <label for="first_name" class="block mb-2 text-sm font-medium container-text">Address</label>
                          <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                        </div>
                        <div class="col-span-1 mb-3">
                          <label for="first_name" class="block mb-2 text-sm font-medium container-text">Status</label>
                          <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                        </div>
                      </div>
                      <!-- Third row -->
                      <div class="grid lg:grid-cols-2 grid-cols-1">
                        <div class="col-span-1 mb-3">
                          <label for="first_name" class="block mb-2 text-sm font-medium container-text">Remarks</label>
                          <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="John" required />
                        </div>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                      <button data-modal-hide="edit-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                    </div>
                  </div>
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