<?php

namespace App\Http\Controllers;

use App\Modules\PageRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;

    /**
     * HomeController constructor.
     * @param PageRepositoryInterface $pageRepository
     */
    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
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

    public function page($id)
    {
        $page = $this->pageRepository->findById($id);

        if(is_null($page))
        {
            return view('errors.404');
        }

        $views = \Config::get('enums.view');

        return view('home', compact('page', 'views'));
    }
}
