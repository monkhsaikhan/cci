<?php

namespace App\Http\Controllers\Backend;

use App\Modules\Menu;
use App\Modules\MenuItem;
use App\Modules\PageRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuItemController extends Controller
{
    /**
     * @var MenuItem
     */
    private $item;
    /**
     * @var Menu
     */
    private $menu;
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;

    /**
     * MenuItemController constructor.
     * @param MenuItem $item
     * @param Menu $menu
     * @param PageRepositoryInterface $pageRepository
     */
    public function __construct(MenuItem $item, Menu $menu, PageRepositoryInterface $pageRepository)
    {
        $this->item = $item;
        $this->menu = $menu;
        $this->pageRepository = $pageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $menu = $this->menu->findOrFail($id);

        return view('backend.menu.item.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $menu = $this->menu->findOrFail($id);

        $items = $this->item->where('menu_id', $id)->pluck('name', 'id')->toArray();

        $pages = ['' => ''] + $this->pageRepository->findByList('id', 'title')->toArray();

        return view('backend.menu.item.create', compact('menu', 'items', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $parameters = $request->all();

        $parameters['menu_id'] = $id;

        $parameters['link'] = '/page/' .$parameters['link'];

        $this->item->create($parameters);

        return redirect()->route('admin.menu.item.index', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param $item_id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $item_id)
    {
        $item = $this->item->findOrFail($item_id);

        $pages = ['' => ''] + $this->pageRepository->findByList('id', 'title')->toArray();

        $items = [null => ''] + $this->item->where('menu_id', $id)->where('id', '!=', $item_id)->pluck('name', 'id')->toArray();

        return view('backend.menu.item.edit', compact('item', 'items', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param $item_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $item_id)
    {
        $item = $this->item->findOrFail($item_id);

        $parameters = $request->all();

        $parameters['link'] = is_null($parameters['link']) ? '/' : '/page/' .$parameters['link'];

        $item->update($parameters);

        return redirect()->route('admin.menu.item.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param $item_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $item_id)
    {
        $item = $this->item->findOrFail($item_id);

        $item->delete();

        return redirect()->route('admin.menu.item.index', $id);
    }
}
