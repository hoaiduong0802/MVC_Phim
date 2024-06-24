<?php
require_once 'app/modal/database.php';

class UserController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Render the view based on the category and view name
    function renderView($category, $view, $data = [])
    {
        extract($data);
        $viewPath = 'app/view/' . $category . '/' . $view . '.php';
        require_once $viewPath;
    }

    public function viewSign()
    {
        $error_message = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['id'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                $error_message = "ID hoặc mật khẩu sai.";
                $this->renderView('SignIn', 'signin', compact('error_message'));
            } else {
                $user = $this->checkLogin($username, $password);

                if ($user) {
                    $_SESSION['userID'] = $user['userID'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['role'] = $user['role'];

                    if ($user['role'] == 1) {
                        header('Location: public/admin/index.php?action=adminproduct');
                    } else {
                        header('Location: index.php?page=index');
                    }
                    exit;
                } else {
                    $error_message = 'Tên đăng nhập hoặc mật khẩu không đúng';
                    $this->renderView('SignIn', 'signin', compact('error_message'));
                }
            }
        } else {
            $this->renderView('SignIn', 'signin');
        }
    }


    // Check login credentials
    public function checkLogin($username, $password)
    {
        $sql = 'SELECT userID, name, role, username, password FROM user WHERE username = ? AND password = ?';
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$username, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Render movie genre view
    public function viewMovieGenre($genre)
    {
        $this->renderView('Genre', $genre);
    }

    // Render coming up movies view
    public function viewComingUp($coming)
    {
        $this->renderView('Coming', $coming);
    }

    // Render TV shows view
    public function viewTvShows($tvshow)
    {
        $this->renderView('TvShow', $tvshow);
    }

    // Render blog view
    public function viewBlog($blog)
    {
        $this->renderView('Blog', $blog);
    }

    // Render movies by category
    public function viewMovieByCategory($category)
    {
        $this->renderView('Category', $category);
    }
}
?>