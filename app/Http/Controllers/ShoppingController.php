<?php

namespace App\Http\Controllers;

use App\Entity\Article;
use App\Entity\Note;
use App\Entity\Product;

class ShoppingController extends Controller
{
    protected $productRepo;
    protected $noteRepo;

    public function __construct()
    {
        $this->productRepo = new Product();
    }
    /**
     * Paginate articles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->productRepo->paginate();
//        var_dump($products);die;
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

    /**
     * Go to about me page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return $this->articleDetail(2016, 'about-me');
    }
}
