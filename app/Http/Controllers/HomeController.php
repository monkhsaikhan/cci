<?php

namespace App\Http\Controllers;

use App\Modules\PageRepositoryInterface;
use App\Post\PostRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * HomeController constructor.
     * @param PageRepositoryInterface $pageRepository
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PageRepositoryInterface $pageRepository, PostRepositoryInterface $postRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page = $this->pageRepository->findHome();

        if(is_null($page))
        {
            return view('errors.404');
        }

        $views = \Config::get('enums.view');

        return view('home', compact('page', 'views'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        $post = $this->postRepository->findById($id);

        return view('post', compact('post'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function page($id)
    {
        $page = $this->pageRepository->findById($id);

        if(is_null($page))
        {
            return view('errors.404');
        }

        if($page->is_current == 1)
        {
            return redirect()->route('home');
        }

        $views = \Config::get('enums.view');

        return view('home', compact('page', 'views'));
    }
}
