<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
    
<body>
    <header class="flex justify-center" name="heading-container">
        <h1 class="bg-slate-200 rounded-full text-4xl font-normal my-5 px-5 pt-1 pb-3" id="heading">To Do Lists</h1>
    </header>

    <div class="flex justify-center m-3" id="list-container" name="list-container">

        <ul class= "bg-slate-200 rounded-md border border-slate-700 p-2 w-2/5">

            <div class="flex p-1" id="top-container" name="top-contianer">
                <li class="flex-1 w-1/2">
                    <input class="px-2" id="list-checkbox" name="list-checkbox" type="checkbox">
                    <label class="text-gray-700 text-base font-semibold" for="list-checkbox">Title</label>
                </li>
                <li>Datums</li>
            </div>

            <div class="flex p-1" id="bottom-container" name="bottom-container">
                <li class="flex-1 w-1/2">
                    <p class="text-gray-700 text-sm font-normal" id="list-description" name="list-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </li>
                <li class="flex flex-col-reverse">
                    <a href="#" id="edit-btn" name="edit-btn" class="flex-shrink-0 bg-slate-300 hover:bg-slate-400 border-slate-300 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">Edit</a>
                </li>
            </div>
        </ul>
    </div>

    <div class="flex justify-center m-3">
        <div class="flex justify-end  w-2/5">
            <a href="new.php" id="new-btn" name="new-btn" class="object-left flex-shrink-0 bg-slate-200 hover:bg-slate-400 border-slate-200 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">New</a>
        </div>
    </div>
</body>
</html>