<?php

namespace App\Http\Controllers;

use App\Entity\Article;
use App\Entity\Product;

class ShoppingController extends Controller
{
    protected $productRepo;
    protected $articleRepo;

    public function __construct()
    {
        $this->productRepo = new Product();
        $this->articleRepo = new Article();
    }
    /**
     * Paginate articles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->productRepo->paginate();
        return view('modules.shopping.index', compact('products'));
    }

    /**Get article detail
     *
     * @param $brand
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productDetail($brand, $slug)
    {
        $product = $this->productRepo->detail($brand, $slug);
        if ($product) {
            return view('modules.shopping.product-detail', compact('product'));
        }

        abort(404);
    }

    public function faq()
    {
        $article = $this->articleRepo->detail(2018, 'faq');
        if ($article) {
            return view('modules.shopping.faq', compact('article'));
        }

        abort(404);
    }
}
