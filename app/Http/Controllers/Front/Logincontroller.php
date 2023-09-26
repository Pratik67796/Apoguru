<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use \Illuminate\Support\Facades\Storage;
use Twilio\Rest\Client;


class Logincontroller extends Controller
{
    protected $guardName = 'user_new';
    protected $maxAttempts = 300;
    protected $decayMinutes = 200;
    protected $loginRoute;

    public function __construct()
    {
        $this->middleware('user_login:user_new')->except('postLogout');
        $this->loginRoute = route('login');
    }

    public function login(){
        return view('user.user_auth.login');
    }
    public function postLogin(Request $request){
        request()->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);

        $credential = [
            'phone' => $request->input('phone'),
            'password' => $request->input('password')
        ];
        
        if (Auth::guard($this->guardName)->attempt($credential)) {
            $request->session()->regenerate();
            // return redirect()->route('login');
            // return redirect()->back();
            // redirect()->intended();
            // dd(session()->get('url.intended'));
            // dd(url()->previous());
            return redirect(url()->previous());

        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function registration(){     
        $json = Storage::disk('local')->get('country.json');
        $code = json_decode($json, true);
        return view('user.user_auth.signup',compact('code'));
    }
    public function forgotPassword(){
        $receiverNumber = "9586151257";
        $message = "This is testing from ItSolutionStuff.com";


            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $twilio = new Client($account_sid, $auth_token);

        try {
            $message = $twilio->messages->create(
                $receiverNumber,
                [
                    'from' => '+12513371',
                    'body' => $message,
                ]
            );

            return response()->json(['message' => 'Message sent successfully', 'message_id' => $message->sid]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
  
            dd('SMS Sent Successfully.');
  
        
        dd($account_sid,$auth_token);
        return view('user.user_auth.forgot-password');
    }
    public function reg_post(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone'    => ['required', 'numeric','digits:10' ,'unique:users'], 
            'password' => ['required', 'string', 'min:8'],
        ]);
        $reg_store = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'country_code'=> $request->country_code,
            'phone' => $request->phone,
            'email'  => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        $credentials = $request->only('phone', 'password');
        Auth::guard($this->guardName)->attempt($credentials);
        return redirect()->back();
    }

   
    public function postLogout(){
        Auth::guard($this->guardName)->logout();
        // Session::flush();
        return redirect()->guest($this->loginRoute);
    }
}
