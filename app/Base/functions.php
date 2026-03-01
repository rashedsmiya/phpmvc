<?php 

     function views(string $path, array $data = []): void 
     {
       // extract the data array to variables
       extract($data);

       // Start output buffering
       require_once VIEWS ."/{$path}.php";
     }