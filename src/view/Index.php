<?php

namespace src\view;

use src\model\Model;

class Index {
  
    public function renderItems($items) {
        
        $items = new Model();


        // HTML template for displaying database information
        // Same content as index.html, but within a PHP method

            echo '<div class="flex justify-center m-3" id="list-container" name="list-container">';

        foreach ($items as $item) {
            echo '<ul class="bg-slate-200 rounded-md border border-slate-700 p-2 w-2/5">
                <div class="flex p-1" id="top-container" name="top-container">
                    <li class="flex-1 w-1/2">
                        <input class="px-2" id="list-checkbox" name="list-checkbox" type="checkbox">
                        <label class="text-gray-700 text-base font-semibold" for="list-checkbox">' . $item['title'] . '</label>
                    </li>
                    <li>' . $item['date'] . '</li>
                </div>
                <div class="flex p-1" id="bottom-container" name="bottom-container">
                    <li class="flex-1 w-1/2">
                        <p class="text-gray-700 text-sm font-normal" id="list-description" name="list-description">' . $item['description'] . '</p>
                    </li>
                    <li class="flex flex-col-reverse">
                        <a href="#" id="edit-btn" name="edit-btn" class="flex-shrink-0 bg-slate-300 hover:bg-slate-400 border-slate-300 hover:border-slate-400 text-sm border-4 text-slate-700 py-1 px-2 rounded">Edit</a>
                    </li>
                </div>
            </ul>';
        }
        
                echo '</div>';
        
        
    }
}
