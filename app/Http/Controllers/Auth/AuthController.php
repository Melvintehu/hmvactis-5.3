<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Controllers\MailController;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       


        if(isset($data['inschrijven'])){

            if(Auth::check()){
                 return Validator::make($data, [
                'street' => 'required',
                'house_number' => 'required',
                'place' => 'required',
                'phone_number' => 'required',
                'birthdate' => 'required',
                'current_study' => 'required',
                'study_year' => 'required|min:4|max:4|',
                'student_number' => 'required',
                'iban' => 'required',
                'tnv' => 'required'

            ]);
            }


            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
                'street' => 'required',
                'house_number' => 'required',
                'place' => 'required',
                'phone_number' => 'required',
                'birthdate' => 'required',
                'current_study' => 'required',
                'study_year' => 'required|min:4|max:4|',
                'student_number' => 'required',
                'iban' => 'required',
                'tnv' => 'required'

            ]);

        }

        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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

        
        if(!Auth::check()){

            // gebruikers account aanmaken
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

        }else{
            $user = Auth::user();

        }

        // inschrijven voor een activiteit
        if(isset($data['event_id']))
        {
            $user->events()->attach($data['event_id']);
        }
        
        // gebruiker lid worden

        if(isset($data['inschrijven'])){

            $mail = new MailController();
        
            $profile = new Profile();

            $profile->user_id = $user->id;
            $profile->name = $user->name;
            $profile->street = $data['street'];
            $profile->place = $data['place'];
            $profile->house_number = $data['house_number'];
            $profile->phone_number = $data['phone_number'];
            $profile->email_address = $user->email;
            $profile->birthdate = $data['birthdate'];
            $profile->current_study = $data['current_study'];
            $profile->study_year = $data['study_year'];
            $profile->student_number = $data['student_number'];
            $profile->iban = $data['iban'];
            $profile->tnv = $data['tnv'];

            if(isset($data['subscribed'])){
	            $profile->subscribed = $data['subscribed'];
            }
            $profile->admin = false;
            $profile->active = true;

            $profile->save();

            $mail->lidWorden($profile->name, $profile->email_address);
        }

        session()->flash('succeed', 'Succesvol ingeschreven!');
        return $user;
    }
}
