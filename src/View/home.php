<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
</head>


<title>Document</title>
</head>

<body class="mx-10 mx-10">

  <nav class="bg-gray-300 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="?page=home" class="flex items-center">

        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Footlocker</span>
      </a>
      <form name="formsearch" method="get" action="">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
          <input type="text" name="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" />
 
        </div>
      </form>
      <!-- <form method="get">
        <h1>Genre</h1>
        <input type="hidden" name="p" value="1">
        <select name="filtre_contrat">
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>

</select> -->
        <!-- <input type="submit" value="Filtrer">
      </form> -->
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="?page=home" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>

          <li>
            <a href="?page=Delete" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Add/Delete</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<div class="mx-10 mx-10">

  <div class=" m-4  flex grid grid-cols-2 flow-root">
    <?php foreach ($homes as $home) : ?>

      <div class=" m-8 grid grid-rows-2 flow-root  max-w-sm bg-gray-200 rounded-lg object-top border border-gray-200 content-center shadow-md dark:bg-gray-800 dark:border-gray-700">

        <img class="  rounded-t-lg  "   style="" src="./Image/<?= $home->getImage()  ?>" />

        <div class="pt-8 object-center p-5" style="text-align:center;">

          <h5 class="  object-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= $home->getName() ?></h5>

          <p class="mb-3  object-center font-normal text-gray-700 dark:text-gray-400">Prix :<?= $home->getPrice() ?> </p>
          <form>
            <a class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="?page=Detail&id=<?= $home->getId() ?>">
              <input  type="button" style="margin-top:3%" value="More info">
            </a>
         
          
          </a>
        </div>
      </div>

<?php endforeach ?>
</div>

</div>




<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>