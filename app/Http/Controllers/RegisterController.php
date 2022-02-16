<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    public function index()
    {
        return view('login-register.register', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255|unique:users',
            'name' => 'required|max:255',
            'slug' => Str::slug($request->username),
            
            'email' => 'required|max:255|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
        

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('pesan', 'registrasi anda telah berhasil, silahkan login');
        
        
    }


    // ------------>googleRegister<----------------

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('google_id', $user->getId())->first();

            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'slug' => Str::slug($user->name),
                    'avatar' => $user->avatar,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => bcrypt('password')
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    

    // --------------->facebook Login<-----------------
    public function redirectTofacebook(){
        return Socialite::driver('facebook')->redirect();
    }



    public function handlefacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            // dd($user);
            $finduser = User::where('facebook_id', $user->getId())->first();

            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'slug' => Str::slug($user->name),
                    'avatar' => $user->avatar_original,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => bcrypt('password')
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
        
}
