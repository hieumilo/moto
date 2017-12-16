<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Moto;
use App\Image;
use Validator;
use App\Helper\Helper;
use Auth;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motos = Moto::with('images')->with('category')->get();

        return view('admin.moto.index', [
            'motos' => $motos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('admin.moto.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'engine' => $request->engine,
            'drive_train' => $request->drive_train,
            'frame' => $request->frame,
            'suspension' => $request->suspension,
            'brakes' => $request->brakes,
            'dimensions' => $request->dimensions,
            'available' => $request->available ? true : false,
        ];

        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required|numeric',
        ];

        $validator = Validator::make($data, $rules);

        $data['user_id'] = Auth::user()->id;

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $moto = Moto::create($data);

        if ($request->images) {
            foreach ($request->images as $image) {
                $arr_files[] = [
                    'image' => Helper::upload($image),
                    'moto_id' => $moto->id,
                ];
            }

            Image::insert($arr_files);
        }
        
        return redirect()->route('moto.index')->with('message', 'Thêm mới thành công');
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
        $moto = Moto::where('id', $id)
            ->with('images')
            ->with('category')
            ->first();
        $categories = Category::all();

        return view('admin.moto.edit', [
            'moto' => $moto,
            'categories' => $categories,
        ]);
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
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'engine' => $request->engine,
            'drive_train' => $request->drive_train,
            'frame' => $request->frame,
            'suspension' => $request->suspension,
            'brakes' => $request->brakes,
            'dimensions' => $request->dimensions,
            'available' => $request->available ? true : false,
        ];

        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required|numeric',
        ];

        $validator = Validator::make($data, $rules);

        $data['user_id'] = Auth::user()->id;

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $moto = Moto::find($id);
        $moto->update($data);

        if ($request->images) {
            foreach ($request->images as $image) {
                $arr_files[] = [
                    'image' => Helper::upload($image),
                    'moto_id' => $moto->id,
                ];
            }

            Image::insert($arr_files);
        }

        return redirect()->route('moto.index')->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moto = Moto::find($id);

        $moto->delete();

        return redirect()->route('moto.index')->with('message', 'Xóa thành công');
    }
}
