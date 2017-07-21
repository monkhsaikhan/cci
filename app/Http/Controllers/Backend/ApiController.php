<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/18/2017
 * Time: 6:37 PM
 */

namespace App\Http\Controllers\Backend;

use App\Modules\Background;
use App\Modules\BigSlider;
use App\Modules\ImageSlider;
use App\Modules\Page;
use App\Modules\PageItems;
use App\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * ApiController constructor.
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function posts()
    {
        return $this->postRepository->findAllPosts('post')->toJson();
    }

    public function contentBlock()
    {
        return $this->postRepository->findAllPosts('c-block')->toJson();
    }

    public function customText()
    {
        return $this->postRepository->findAllPosts('c-text')->toJson();
    }

    public function imageCollection()
    {
        return ImageSlider::all()->toJson();
    }

    public function bigSlider()
    {
        return BigSlider::all()->toJson();
    }

    public function background() {
        return Background::all()->toJson();
    }

    public function pageSave(Request $request)
    {
        $items = json_decode($request->get('items'));

        $page = Page::create([
            'title' => $request->get('title')
        ]);

        foreach ($items as $key => $item)
        {
            if($item->type == 'post')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Post\Post',
                    'pageable_id' => $item->view->id,
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'c-block')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Post\Post',
                    'pageable_id' => $item->view->id,
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'b-s-show')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Modules\BigSlider',
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'c-text')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Post\Post',
                    'pageable_id' => $item->view->id,
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'i-collection')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Modules\ImageSlider',
                    'pageable_id' => $item->view->id,
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 't-member')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\User\User',
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'background')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Modules\Background',
                    'pageable_id' => $item->view->id,
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'c-form')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'c-offer')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'pageable' => 'App\Modules\Car',
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'status')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }else if($item->type == 'service')
            {
                PageItems::create([
                    'page_id' => $page->getKey(),
                    'type' => $item->type,
                    'sort' => $key
                ]);
            }
        }

        return response()->json([
            'message' => 'Амжилттай'
        ]);
    }


}