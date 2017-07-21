<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/20/2017
 * Time: 12:51 PM
 */

namespace App\Http\ViewComposer;


use App\Modules\PageRepositoryInterface;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;

    /**
     * MenuComposer constructor.
     * @param PageRepositoryInterface $pageRepository
     */
    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('pages', $this->pageRepository->findAll());
    }

}