<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
     <br><br><br><br><br><br>
    <section class= "flex flex-row justify-center items-center h-[100%] w-[100%]">
    <div class="w-full max-w-xs">
  <form action ="updateTAGS.php?action=update" method = "GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
   
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="tag">
        the tag
      </label>
      <input value = "<?=$tags->getNameTag()?>" name ="tag_name" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="tag" type="text" name = "tag" placeholder="the tag">
      </div>
    <div class="flex items-center justify-between">
      <button value ="<?=$tags->getId_tag()?>" name = "submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        update tag
      </button>
      
    </div>
  </form>
 
</div>
  </section>

</body>
</html>