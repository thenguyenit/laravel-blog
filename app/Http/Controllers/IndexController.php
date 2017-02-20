<?php

namespace App\Http\Controllers;

use App\Entity\Article;
use App\Entity\Note;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Paginate articles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->paginate();
        return view('index', compact('articles'));
    }

    /**
     * Paginate notes
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function notes()
    {
        $articles = Note::paginate();
        return view('index', compact('articles'));
    }

    /**Get article detail
     *
     * @param $year
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleDetail($year, $slug)
    {
        $article = Article::detail($year, $slug);
        return view('modules.article.detail', compact('article'));
    }

    /**
     * Get note detail
     *
     * @param $year
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function noteDetail($year, $slug)
    {
        $article = Note::detail($year, $slug);
        return view('modules.article.detail', compact('article'));
    }
}
