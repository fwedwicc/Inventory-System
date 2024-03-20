<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café de Franz | Edit Supplier</title>
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
    <div class="rounded-lg h-auto space-y-5 px-36">
      <!-- Page content -->
      <div class="relative bg-white rounded-lg container-shadow">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-inputOutline">
          <h3 class="text-xl font-bold text-brown">
            Edit Supplier
          </h3>
          <a href="./supplier.php" type="button" class="text-brown bg-transparent hover:bg-inputColor rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </a>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-4">
          <!-- First row -->
          <div class="grid lg:grid-cols-2 grid-cols-1 lg:space-x-4">
            <div class="col-span-1 mb-3">
              <label for="first_name" class="block mb-2 text-sm font-medium container-text">Name</label>
              <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
            </div>
            <div class="col-span-1 mb-3">
              <label for="first_name" class="block mb-2 text-sm font-medium container-text">Mobile No.</label>
              <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
            </div>
          </div>
          <!-- Second row -->
          <div class="grid lg:grid-cols-2 grid-cols-1 lg:space-x-4">
            <div class="col-span-1 mb-3">
              <label for="first_name" class="block mb-2 text-sm font-medium container-text">Address</label>
              <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
            </div>
            <div class="col-span-1 mt-3">
              <label for="first_name" class="block mb-2 text-sm font-medium container-text">Status</label>
              <div class="flex mb-2">
                <div class="flex items-center me-4">
                  <input id="active" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-brown bg-inputColor focus:ring-inputOutline ring-inputOutline focus:ring-1 border-inputOutline cursor-pointer">
                  <label for="active" class="ms-2 text-sm font-medium text-brown">Active</label>
                </div>
                <div class="flex items-center">
                  <input id="inactive" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-brown bg-inputColor focus:ring-inputOutline ring-inputOutline focus:ring-1 border-inputOutline cursor-pointer">
                  <label for="inactive" class="ms-2 text-sm font-medium text-brown">Inactive</label>
                </div>
              </div>
            </div>
          </div>
          <!-- Third row -->
          <div class="grid lg:grid-cols-2 grid-cols-1">
            <div class="col-span-1 mb-3">
              <label for="first_name" class="block mb-2 text-sm font-medium container-text">Remarks</label>
              <input type="text" id="first_name" class="text-sm rounded-lg focus:ring-inputFocus focus:border-inputFocus block w-full p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText font-medium" placeholder="" required />
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-4 md:p-5 border-t rounded-b border-inputOutline">
          <button data-modal-hide="edit-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-1 focus:outline-none focus:ring-primaryBtn">Edit</button>
          <!-- Cancel Button -->
          <button data-modal-hide="edit-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium secondary-btn-1 focus:outline-none bg-inputColor rounded-lg border border-inputOutline hover:bg-logoutBtnHover focus:z-10 focus:ring-4 focus:ring-gray-100">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/css/tailwind-colors.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>