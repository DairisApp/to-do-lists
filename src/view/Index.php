<?php

namespace src\view;

use src\model\Model;

class Index {
  
    public function renderItems($items) {
        // Load the CSS styles into a variable
        $cssStyles = '<link rel="stylesheet" href="../dist/output.css">';
    
        // Start the HTML template using Heredoc syntax
        $htmlTemplate = <<<HTML
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Lists</title>
                $cssStyles
            </head>
            <body>
                <header class="flex justify-center" name="heading-container">
                    <h1 class="bg-slate-200 rounded-full text-4xl font-normal my-5 px-5 pt-1 pb-3" id="heading">To Do Lists</h1>
                </header>
                <div class="flex justify-center m-3" id="list-container" name="list-container">
        HTML;
    
        // Loop through the items and generate HTML for each item
        foreach ($items as $item) {
            $htmlTemplate .= <<<HTML
                <ul class="bg-slate-200 rounded-md border border-slate-700 p-2 w-2/5">
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
                            <a href="#" id="edit-btn" name="edit-btn" class="flex-shrink-0 bg-slate-300 hover:bg-slate-400 border-slate-300 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">Edit</a>
                        </li>
                    </div>
                </ul>
            HTML;
        }
    
        // Finish the HTML template
        $htmlTemplate .= <<<HTML
                </div>
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
    
}
