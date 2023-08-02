<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New List</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    <heading name="heading-container" class="flex justify-center">
        <h1 name="heading" class="bg-slate-200 rounded-full text-4xl font-normal my-5 px-5 pt-1 pb-3">Create new list
        </h1>
    </heading>

    <div name="form-container" class="flex justify-center">

        <form id="list-form" name="list-form" action="../src/controller/form_controller.php" method="post" class="bg-slate-200 rounded-md border border-slate-700 p-4 w-2/5">

            <div>
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter the title of the list . . ." class="shadow appearance-none border rounded w-full py-2 px-3 mb-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <input type="text" id="description" name="description" placeholder="Enter the description . . ." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

        </form>

    </div>

    <div class="flex justify-center my-5" id="btn-container" name="btn-container">

        <div class="flex justify-between w-2/5">

            <a href="index.php" class="flex-shrink-0 border-transparent border-4 text-slate-500 hover:text-slate-800 text-sm py-1 px-2 rounded">Back</a>
            <input type="submit" id="form-submit" name="form-submit" form="list-form" value="Create" class="flex-shrink-0 bg-slate-200 hover:bg-slate-400 border-slate-200 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">

        </div>

    </div>

</body>

</html>