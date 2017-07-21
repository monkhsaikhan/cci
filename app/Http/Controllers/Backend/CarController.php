<?php

namespace App\Http\Controllers\Backend;

use App\Modules\Car;
use App\Modules\CarRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * @var CarRepositoryInterface
     */
    private $carRepository;

    /**
     * CarController constructor.
     * @param CarRepositoryInterface $carRepository
     */
    public function __construct(CarRepositoryInterface $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = $this->carRepository->findByPaginate(15);

        return view('backend.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->valid($request);

        $parameters = $request->all();

        if($request->hasFile('picture'))
        {
            $image = $request->file('picture');

            $filename = sha1($image->getClientOriginalName().date('Ymd')).'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path().'/images/cars';

            $image->move($destinationPath, $filename);

            $parameters['path'] = 'images/cars/'.$filename;
        }

        Car::create($parameters);

        return redirect()->route('admin.car.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = $this->carRepository->findById($id);

        return view('backend.car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->valid($request);

        $parameters = $request->all();

        $car = $this->carRepository->findById($id);

        if($request->hasFile('picture'))
        {
            $image = $request->file('picture');

            $filename = sha1($image->getClientOriginalName().date('Ymd')).'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path().'/images/cars';

            $image->move($destinationPath, $filename);

            $parameters['path'] = 'images/cars/'.$filename;
        }

        $car->update($parameters);

        return redirect()->route('admin.car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = $this->carRepository->findById($id);

        $car->delete();

        return redirect()->route('admin.car.index');
    }


    private function valid($request)
    {
        $rules = [
            'name' => 'required',
            'link' => 'required'
        ];

        if($request->method() !='PATCH')
        {
            $rules['picture'] = 'required';
        }

        $this->validate($request, $rules);
    }
}
