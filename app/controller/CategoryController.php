<?php
require_once 'app/modal/ProductModal.php';

class CategoryController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModal();
    }

    public function index()
    {
        $moviesByGenre = $this->filterMoviesByGenre();
        $this->renderView(['categories' => $moviesByGenre]);
    }

    public function showDataMovieByCategory($genre)
    {
        $movies = $this->productModel->getMoviesByGenre($genre);
        $this->renderViewMovieByCategory(['genre' => $genre, 'movies' => $movies]);
    }

    public function filterMoviesByGenre()
    {
        $categories = $this->productModel->getCate();
        $moviesByGenre = [];

        foreach ($categories as $category) {
            $genre = $category['genre'];
            $movies = $this->productModel->getMoviesByGenre($genre);

            if (!isset($moviesByGenre[$genre])) {
                $moviesByGenre[$genre] = [];
            }

            $moviesByGenre[$genre] = array_merge($moviesByGenre[$genre], $movies);
        }

        return $moviesByGenre;
    }

    public function filterMoviesById($id)
    {
        $movie = $this->productModel->getMovieById($id);
        $this->renderView(['movie' => $movie]);
    }

    public function showMoviesByCategoryId($categoryId)
    {
        $movies = $this->productModel->getMoviesByCategoryId($categoryId);
        $category = $this->productModel->getGenreById($categoryId);
        $this->renderViewMovieByCategory(['category_id' => $categoryId, 'category' => $category, 'movies' => $movies]);
    }

    public function renderView($data)
    {
        require_once 'app/view/CategoryMovie/categorymovie.php';
    }

    public function renderViewMovieByCategory($data)
    {
        require_once 'app/view/Category/category.php';
    }
}
?>