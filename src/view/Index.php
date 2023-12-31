<?php

namespace src\view;

use src\model\Model;

class Index {
  
    public function renderItems() {

        // Get data from DB
        $call = new Model();
        $items = $call->displayData();

        // Load the CSS styles into a variable
        $cssStyles = '<link rel="stylesheet" href="../dist/output.css">';
        $jQuery = '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
    
        // Start the HTML template using Heredoc syntax
        $htmlTemplate = <<<HTML
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Lists</title>
                $cssStyles
                $jQuery
            </head>
            <body>
                <header class="flex justify-center" name="heading-container">
                    <h1 class="bg-slate-200 rounded-full text-4xl font-normal my-5 px-5 pt-1 pb-3" id="heading">To Do Lists</h1>
                </header>
        HTML;
        // Loop through the items and generate HTML for each item
        foreach ($items as $item) {
            $htmlTemplate .= <<<HTML
            <div class="flex flex-col justify-center items-center m-3" id="list-container" name="list-container">
                <ul class="list-disc bg-slate-200 rounded-md border border-slate-700 p-2 w-2/5">
                    <div class="flex p-1" id="top-container" name="top-container">
                        <li class="flex-1 w-1/2">
                            <input class="px-2" id="list-checkbox" name="list-checkbox" type="checkbox">
                            <label class="text-gray-700 text-base font-semibold" for="list-checkbox">{$item['title']}</label>
                        </li>
                        <li>{$item['date']}</li>
                    </div>
                    <div class="flex p-1" id="bottom-container" name="bottom-container">
                        <li class="flex-1 w-1/2">
                            <p class="text-gray-700 text-sm font-normal" id="list-description" name="list-description">{$item['description']}</p>
                        </li>
                        <li class="flex flex-col-reverse">
                            <a href="edit.php?id={$item['id']}" id="edit-btn" name="edit-btn" class="flex-shrink-0 bg-slate-300 hover:bg-slate-400 border-slate-300 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">Edit</a>
                        </li>
                    </div>
                </ul>
            </div>
            HTML;
        }
    
        // Finish the HTML template
        $htmlTemplate .= <<<HTML
                
                <div class="flex justify-center m-3">
                    <div class="flex justify-end  w-2/5">
                        <a href="new.php" id="new-btn" name="new-btn" class="object-left flex-shrink-0 bg-slate-200 hover:bg-slate-400 border-slate-200 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">New</a>
                    </div>
                </div>
            </body>
            </html>
        HTML;
    
        // Output the entire HTML template
        echo $htmlTemplate;
    }

    public function renderNew()
    {
        $HTMLTemplate = <<<HTML

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

                <form id="list-form" name="list-form" action="../src/controller/Controller.php" method="post" class="bg-slate-200 rounded-md border border-slate-700 p-4 w-2/5">

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
        HTML;

        echo $HTMLTemplate;
    }

    public function renderEdit()
    {

        $id = $_GET["id"];

        $call = new Model();
        $item = $call->displayItem($id);

        $HTMLTemplate = <<<HTML
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
                <h1 name="heading" class="bg-slate-200 rounded-full text-4xl font-normal my-5 px-5 pt-1 pb-3">Edit List
                </h1>
            </heading>

            <div name="form-container" class="flex justify-center">

                <form id="list-form" name="list-form" action="../src/controller/Controller.php" method="post" class="bg-slate-200 rounded-md border border-slate-700 p-4 w-2/5">
                    <input type="hidden" id="item_id" name="item_id" value="{$item['id']}">
                    <div>
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                        <input type="text" id="title" name="title" value="{$item['title']}" class="shadow appearance-none border rounded w-full py-2 px-3 mb-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div>
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <input type="text" id="description" name="description" value="{$item['description']}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                </form>

            </div>

            <div class="flex justify-center my-5" id="btn-container" name="btn-container">

                <div class="flex justify-between w-2/5">

                    <a href="index.php" class="flex-shrink-0 border-transparent border-4 text-slate-500 hover:text-slate-800 text-sm py-1 px-2 rounded">Back</a>

                    <input type="submit" id="form-delete" name="form-delete" form="list-form" value="Delete" class="flex-shrink-0 bg-slate-200 hover:bg-slate-400 border-slate-200 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">

                    <input type="submit" id="form-update" name="form-update" form="list-form" value="Update" class="flex-shrink-0 bg-slate-200 hover:bg-slate-400 border-slate-200 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">

                </div>
            </div>
        </body>
        </html> 
        HTML;

        echo $HTMLTemplate;
    }
    
}
