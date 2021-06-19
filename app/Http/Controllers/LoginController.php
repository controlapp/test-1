<?php

namespace App\Http\Controllers;

//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{

    protected $login_status;
    protected $user;
    protected $products;
    protected $response;
    protected $data;



    public function index()
    {
        return view('login');
    }


    /**
     * Funcion para validar los datos de la vista login
     *La cual validara la autenticacion
     * @param  \Illuminate\Http\Request  $request
     *
     */

    public function login(Request $request)
    {

        $this->validate(request(),[
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Cache::has('login_status'))
            {

                $this->login_status = Cache::get('login_status');
                $this->user = Cache::get('user');
                $this->products = Cache::get('products');
            }else
            {

                $this->response = Http::post('https://serveless.proximateapps-services.com.mx/proximatetools/dev/webadmin/testproximate/login', [
                        'user' => strval($request->username),
                        'password' => strval($request->password),
                    ]);

                  if($this->response['status'])
                    {
                        $this->data =  json_decode($this->response["data"],true);
                        Cache::put('login_status',$this->response['status'],3600);
                        Cache::put('user',$this->data['user'],3600);
                        Cache::put('products',$this->data['products'],3600);
                        $this->login_status = Cache::get('login_status');
                        $this->user = Cache::get('user');
                        $this->products = Cache::get('products');

                    }
                    else
                    {
                            return redirect('/login')
                            ->withErrors(['username'=>$this->response['message']])
                            ->withInput(request(['username']));
                    }

            }

              return view('home',
                [
                    'user' => $this->user,
                    'productos' => $this->products,
                ]);


    }

    /**
     * Funcion para cerrar sesion y borrar los datos almacenados en el cache
     */
    public function logout()
    {
        if(Cache::has('login_status'))
        {
            Cache::flush();
          return view('login');
        }else
        {
            return view('login');
        }
    }
}
