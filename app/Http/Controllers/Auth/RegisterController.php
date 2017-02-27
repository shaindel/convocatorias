<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'bio' => 'required|min:30',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['name'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'birthday' => $data['birthday'],
            'genero' => $data['genero'],
            'pais' => $data['pais'],
            'estado' => $data['estado'],
            'ciudad' => $data['ciudad'],
            'foto' => $data['foto'],
            'facebook' => $data['facebook'],
            'twitter' => $data['twitter'],
            'profesion' => $data['profesion'],
            'areas' => $data['areas'],
            'habilidades' => $data['habilidades'],
            'talla' => $data['talla'],
            'bio' => $data['bio']

        ]);
    }

}
