<?php

namespace App\Http\Controllers;

use App\Entity\Article;
use App\Entity\Note;

class IndexController extends Controller
{
    protected $articleRepo;
    protected $noteRepo;

    public function __construct()
    {
        $this->articleRepo = new Article();
        $this->noteRepo = new Note();
    }
    /**
     * Paginate articles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = $this->articleRepo->paginate();
        return view('index', compact('articles'));
    }

    /**
     * Paginate notes
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function notes()
    {
        $articles = $this->noteRepo->paginate();
        return view('modules.note.index', compact('articles'));
    }

    /**Get article detail
     *
     * @param $year
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleDetail($year, $slug)
    {
        $article = $this->articleRepo->detail($year, $slug);
        if ($article) {
            return view('modules.article.detail', compact('article'));
        }

        abort(404);
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
        $article = $this->noteRepo->detail($year, $slug);
        if ($article) {
            return view('modules.note.detail', compact('article'));
        }

        abort(404);
    }
}
