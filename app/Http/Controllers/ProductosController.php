<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    protected $productos;
    protected $user;

     function __construct()
    {

    }
    /**
     * Funcion para mostrar cargar los datos del producto en la vista
     *
     * @return \Illuminate\Http\Response
     */
    public function index($path=null)
    {
         $this->productos = Cache::get('products');
         $this->user = Cache::get('user');
         foreach ($this->productos as $key => $value) {

             if($value['path']==="/".$path)
             {
                return view('productos',
                    [
                        'producto' => $value,
                        'user' => $this->user,
                    ]);
             }
         }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
