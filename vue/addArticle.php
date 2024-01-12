<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
      
<form method = "POST">
  <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST</h1>
      <div class="space-y-4">
        <div>
          <label for="title" class="text-lx font-serif">Title:</label>
          <input type="text" name = "title" placeholder="title" id="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div>
          <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
          <textarea id="description" name = "description" cols="30" rows="10" placeholder="whrite here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
        </div>
        <div>
        <label for="description" class="block mb-2 text-lg font-serif">category</label>
                  <select  name = "category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                    
                <?php
                    foreach($category as $C){
                        echo "<option value=".$C->getId_category().">".$C->getCategory_name()."</option>"; 
                     }
                ?>
                  </select>
              </div>
              <div>
              <label for="description" class="block mb-2 text-lg font-serif">the tag</label>
                  <select multiple id ="tag" name = "tag[]"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <?php
                             foreach($tags as $T){
                                echo "<option value=".$T->getId_tag().">".$T->getNameTag()."</option>"; 
                             }
                ?>
                  </select>
              </div>
        <button name = "addArticle" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">ADD POST</button>
      </div>
    </div>
  </div>
</form>

</body>
</html>