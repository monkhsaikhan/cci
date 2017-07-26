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

    public function calculate(Request $request)
    {

        $p = ((30 * $request->get('rate'))/100) / 30;
        $l = $p * pow(1 + $p, $request->get('month'));

        $deducted = str_replace(',', '', $request->get('total')) / (1/$p - 1/$l);

        $results = [];

        $total_loan = str_replace(',', '', $request->get('total'));
        $rate = $request->get('rate');
        $month = $request->get('month');

        $sum_loan = 0;
        $sum_rate = 0;
        $sum = 0;

        for($i = 0; $i < $request->get('month'); $i++)
        {
            $interest_rate = (($total_loan * $rate)/100)/ 30 * 30;

            $result = [
                'loan' => round($deducted - $interest_rate,2,PHP_ROUND_HALF_DOWN),
                'loan_with_rate' => round($total_loan, 2, PHP_ROUND_HALF_DOWN),
                'interest_rate' => round($interest_rate, 2, PHP_ROUND_HALF_DOWN),
                'deducted' => round($deducted, 2, PHP_ROUND_HALF_DOWN)
            ];

            $total_loan = $total_loan - ($deducted - $interest_rate);

            array_push($results, $result);

            $sum_loan += round($deducted - $interest_rate,2,PHP_ROUND_HALF_DOWN);
            $sum_rate += round($interest_rate, 2, PHP_ROUND_HALF_DOWN);
            $sum += round($deducted, 2, PHP_ROUND_HALF_DOWN);
        }

        return view('calculate', compact('results', 'rate', 'month', 'sum', 'sum_rate', 'sum_loan'));

//        dd($results, $rate, $month, $sum_loan, $sum_rate, $sum);

    }
}
