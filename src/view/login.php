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

<body>
  <div class="flex items-center justify-center h-screen">
    <div class="flex-col flex items-center w-full max-w-md mt-[-3rem]">
      <span class="mb-12">
        <img src="../../assets/image/store-icon.png" alt="Cafe de Franz Logo" class="h-28 w-auto mr-4">
      </span>
      <div class="w-full max-w-sm p-4 container-shadow rounded-lg sm:p-6 md:p-8">
        <!-- Form -->
        <form class="space-y-3" action="#">
          <h1 class="font-bold text-brown text-4xl mb-8 text-center">Welcome, Admin!</h1>

          <!-- Username Input -->
          <label for="user" class="block text-sm font-medium text-brown">Username</label>
          <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-inputOutline rounded-e-0 rounded-s-md">
              <svg class="w-6 h-6 text-logoutBtn" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
              </svg>
            </span>
            <input type="text" id="user" class="rounded-none rounded-e-lg border block flex-1 min-w-0 w-full text-sm  p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText focus:ring-inputFocus focus:border-inputFocus font-medium" placeholder="Your username">
          </div>
          <!-- Password Input -->
          <label for="password" class="block text-sm font-medium text-brown">Password</label>
          <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-inputOutline rounded-e-0 rounded-s-md">
              <svg class="w-6 h-6 text-logoutBtn" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z" clip-rule="evenodd" />
              </svg>
            </span>
            <input type="text" id="password" class="rounded-none rounded-e-lg border block flex-1 min-w-0 w-full text-sm  p-2.5 bg-inputColor border border-inputOutline placeholder-placeHolder text-contText focus:ring-inputFocus focus:border-inputFocus font-medium" placeholder="Your password">
          </div>
          <!-- Show Password -->
          <div class="flex items-start">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" type="checkbox" onclick="togglePasswordVisibility()" value="" class="w-4 h-4 border border-inputOutline rounded bg-inputColor focus:ring-2 focus:ring-inputOutline cursor-pointer" required>
              </div>
              <label for="remember" class="ms-2 text-sm font-medium text-brown">Show Password</label>
            </div>
          </div><br>
          <!-- Login Button -->
          <button type="submit" class="w-full font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white bg-primaryBtn rounded-lg hover:bg-primaryHover focus:ring-4 focus:outline-none focus:ring-primaryBtn">Login</button>
        </form>
      </div>
    </div>
  </div>
  <!-- For password visibility -->
  <script>
    // For password visibility
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    // Footer date
    document.addEventListener('DOMContentLoaded', function() {
      const yearSpan = document.getElementById('year');
      const currentYear = new Date().getFullYear();
      yearSpan.innerHTML = `© ${currentYear} <a href="https://qcu.edu.ph/" data-popover-target="qcu-popover" class="hover:underline" target="_blank">Quezon City University</a>. All Rights Reserved.`;
    });
  </script>
  <script src="../../assets/css/tailwind-colors.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>