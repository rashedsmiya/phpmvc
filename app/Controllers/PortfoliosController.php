<?php 

    namespace App\Controllers;
    use Illuminate\Http\Request;
    use App\Base\Controller;

    use App\Models\Portfolio;
    use PDO;

    class PortfoliosController extends Controller
    {
        public function index()
        {
            try {
                $pdo = new \PDO("mysql:host=localhost;dbname=phpmvc", "root", "");

                $stmt = $pdo->query("SELECT * FROM portfolios");
                $stmt->execute();
                $portfolios = $stmt->fetchAll();                
            } catch (\Throwable $th) {
                Throw $th;
            }
              return views('portfolios/index.php', ['portfolios' => $portfolios]);
        }
    }