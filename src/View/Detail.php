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
<body class="mx-10">
<nav class="bg-gray-300 mb-9 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="?page=home" class="flex items-center">
       
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Footlocker</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
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
<div class=" m-8 grid grid-rows-2 flow-root  max-w-sm bg-gray-200 rounded-lg object-top border border-gray-200 content-center shadow-md dark:bg-gray-800 dark:border-gray-700">

<img class="  rounded-t-lg  "   style="" src="./Image/<?= $details->getImage()  ?>" />

<div class="pt-8 object-center p-5" style="text-align:center;">

  <h5 class="  object-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= $details->getName() ?></h5>

  <p class="mb-3  object-center font-normal text-gray-700 dark:text-gray-400">Prix :<?= $details->getPrice() ?> </p>
 
  <p class="mb-3  object-center font-normal text-gray-700 dark:text-gray-400">Description :<?= $details->getDescription() ?> </p>
  <p class="mb-3  object-center font-normal text-gray-700 dark:text-gray-400">Prix :<?= $details->getGenre() ?> </p>
    
 
  
  </a>
</div>
</div>



</div>
</body>
</html>