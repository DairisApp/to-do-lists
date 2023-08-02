<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New List</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    <div class="flex justify-center" name="heading-container">
        <h1 class=" bg-slate-200 rounded-full text-4xl font-normal my-5 px-5 pt-1 pb-3" name="heading">Create new list
        </h1>
    </div>

    <div class="flex justify-center" name="form-container">

        <form class="bg-slate-200 rounded-md border border-slate-700 p-4 w-2/5" id="list-form">

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="title" name="title" placeholder="Enter the title of the list . . .">
            </div>

            <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="description" name="description" placeholder="Enter the description . . .">
            </div>

        </form>
        
    </div>
    <div class="flex justify-center my-5" id="button-container">
        <div class="flex justify-between w-2/5">
            <a class="flex-shrink-0 border-transparent border-4 text-slate-500 hover:text-slate-800 text-sm py-1 px-2 rounded" href="index.php">Back</a>
            <input class="flex-shrink-0 bg-slate-200 hover:bg-slate-400 border-slate-200 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded" type="submit" id="form-submit" for="list-form" value="Create">
        </div>
    </div>

</body>

</html>