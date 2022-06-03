<?php

namespace App\Http\Controllers\Auth;
use DB;
use App\Models\userImage;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'phonenumber'=>['required', 'string', 'max:255'],
            'country'=>['required', 'string', 'max:255'],
            'age'=>['required', 'integer', 'max:255'],
            'zipcode'=>['required', 'string', 'max:255'],
            'lastname'=>['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'description' => ['required', 'string', 'max:255'],

        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname'=> $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phonenumber'=>$request->phonenumber,
            'country'=>$request->country,
            'age'=>$request->age,
            'zipcode'=>$request->age,
            'description'=>$request->description,
            
        ]);
        foreach ($request->file('images') as $imagefile) {
            $image = new userImage;
            $path = $imagefile->store('/images/resource', ['disk' =>'my_files']);
            // $path = $imagefile->move(public_path('images'),"hallo");
            $image->url = $path;
            $image->user_id = $user->id;
            $image->save();
        // }
    }

    $user->image="/".DB::table('user_image')->where('user_id',$user->id )->value('url');  
    $user->save();
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
