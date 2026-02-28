<?php 

    namespace App\Controllers;
    use Illuminate\Http\Request;
    use App\Base\Controller;
    
    class WelcomeController extends Controller
    {
        public function hello()
        {
            
          require_once VIEWS ."/index.php";
        }
    }