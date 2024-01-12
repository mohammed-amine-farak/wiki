<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body >
    <br><br><br><br>

    <br><br><br><br>
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    category ID
                </th>
                <th scope="col" class="px-6 py-3">
                    category name
                </th>
                <th scope="col" class="px-6 py-3">
                    update
                </th>
                <th scope="col" class="px-6 py-3">
                    delete
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($category as $c){
              ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                
                <td class="px-6 py-4">
                    <?=$c->getId_category()?>
                </td>
                <td class="px-6 py-4">
                    <?=$c->getCategory_name()?>
                </td>
                <td class="px-6 py-4">
                    <a href="updatecategory.php?id=<?=$c->getId_category()?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    <form method = "GET">
                    <button  name="delete" value="<?=$c->getId_category()?>" class="inline-flex bg-white items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    
                    </button>
                    </form>
                
                </td>
            </tr>
              <?php  
            }
            ?>
            
           
        </tbody>
    </table>
   
    
    </body>
    </html>
</body>
</html>