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
<body class = " mx-10">

<nav class="bg-gray-300 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
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
<div class="m-10 pb-10 ">
<form class="w-full max-w-lg bg-gray-300 p-10 contents"enctype="multipart/form-data" action="" method="post">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
     Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="Name" placeholder="Name">
     
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
      Price
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text"  name="Price"placeholder="Price">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
       Image
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"  type="file"
       name="Image"
       accept="image/png, image/jpeg">
  
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
       Quantity
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" id="tentacles" name="Quantity" placeholder="Quantity" 
       min="0" max="100">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
      Description
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="Description" placeholder=" Description"></br>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
     Genre
      </label>
   
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state"  type="text" name="Genre" placeholder="Genre ">
          <option>Homme</option>
          <option>Femme</option>
        
        </select>
      <input class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"  value='submit' placeholder="submit">
    </div>
  </div>
</form>
</div>











 
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <td scope="col" class="py-3 px-6">
                          Product name
                      </td>
                      <th scope="col" class="py-3 px-6">
                          Price
                      </th>
                      <th scope="col" class="py-3 px-6">
                         Quantity
                      </th>
                      <th scope="col" class="py-3 px-6">
                      Image
                   </th>
                   <th scope="col" class="py-3 px-6">
                  Description
                </th>
                      <th scope="col" class="py-3 px-6">
                         Genre
                      </th>
                      <th scope="col" class="py-3 px-6">
                          id
                      </th>
                  </tr>
              </thead>
              <tbody>
<?php
          foreach($products  as $resulta){
           
            echo '
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $resulta->getName() . '</td>
            <td class="py-4 px-6">' . $resulta->getPrice() . '</td>
            <td class="py-4 px-6" >' . $resulta->getQuantity() . '</td>
            <td class="py-4 px-6">' . $resulta->getImage() . '</td>
            <td class="py-4 px-6">' . $resulta->getDescription() . '</td>
            <td class="py-4 px-6 ">' . $resulta->getGenre() . '</td>
            <td class="py-4 px-6">' . $resulta->getid() . '</td>
            <td><a  class="font-medium text-blue-600 dark:text-blue-500 hover:underline " href="?page=Delete&id='.$resulta->getId().'">Effacer</a></td>
            <td><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline "  href="?page=Modif&id='.$resulta->getId().'">Modifier</a></td>
            </tr>';
          }
          '</table>';
        
          
    ?>
          

</body>
</html>
