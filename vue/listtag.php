
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
                    tag ID
                </th>
                <th scope="col" class="px-6 py-3">
                    tag name
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
            foreach($tag as $t){
              ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                
                <td class="px-6 py-4">
                    <?=$t->getId_tag()?>
                </td>
                <td class="px-6 py-4">
                    <?=$t->getNameTag()?>
                </td>
                <td class="px-6 py-4">
                    <a href="updateTAGS.php?id=<?=$t->getId_tag()?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                         delete
                </td>
            </tr>
              <?php  
            }
            ?>
            
           
        </tbody>
    </table>
   
    
    </body>
    </html>