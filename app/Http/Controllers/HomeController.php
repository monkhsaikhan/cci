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

        $page = $this->pageRepository->findById(1);

        $views = \Config::get('enums.view');

        return view('home', compact('page', 'views'));
    }
}
