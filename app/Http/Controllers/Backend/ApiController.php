<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/18/2017
 * Time: 6:37 PM
 */

namespace App\Http\Controllers\Backend;

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
        return $this->postRepository->findAll()->toJson();
    }


}