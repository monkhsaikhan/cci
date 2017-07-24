<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/20/2017
 * Time: 12:51 PM
 */

namespace App\Http\ViewComposer;


use App\Modules\Menu;
use App\Modules\PageRepositoryInterface;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;
    /**
     * @var Menu
     */
    private $menu;

    /**
     * MenuComposer constructor.
     * @param PageRepositoryInterface $pageRepository
     * @param Menu $menu
     */
    public function __construct(PageRepositoryInterface $pageRepository, Menu $menu)
    {
        $this->pageRepository = $pageRepository;
        $this->menu = $menu;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view
            ->with('pages', $this->pageRepository->findAll())
            ->with('mainmenu', $this->menu->where('position', 'top')->first())
            ->with('footermenu', $this->menu->where('position', 'footer')->first());
    }

}