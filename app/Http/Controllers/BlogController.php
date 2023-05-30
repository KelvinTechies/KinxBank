<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\BlogModel;
use App\Models\bankinfoModel;
use App\Models\adminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;




class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('blog.register');
       
    }

    public function adminregister()
    {
        return View('admin.admin');
       
    }

    public function adminLogin()
    {
        return View('admin.adminLogin');
       
    }


    public function Login()
    {
        return View('blog.login');
       
    }

    public function Admindashboard()
    {
        $admin=DB::select('select * from deposit_models limit ?', [3]);
        return View('dashboard.dashboard', [
            'admin'=>$admin
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
        //
// dd($request); 
        
        $account=str_shuffle('0432987165');
        $vericationCode=rand('100000', '999999');
        $customer='customer';
        $form = $request->validate([
            'fullname'=>'required|string',
            'Email'=>'required|string|email',
            'userName'=>'required|string',
            'country'=>'required|string',
            'houseAddress'=>'required',
            'fone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'zipCode'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|confirmed',

        ]);
        
// dd($form); 
        
bankinfoModel::create([
            'FullName'=>$request->input('fullname'),                  
            'Email'=>$request->input('Email'),
            'Password'=>Hash::make($request['password']),
            'UserName'=>$request->input('userName'),
            'Account_Number'=>$account,
            'otp'=>$vericationCode,
            'UserType'=>$customer,
            'zipcode'=>$request->input('zipCode'),
            'Country'=>$request->input('country'),
            'HomeAddress'=>$request->input('houseAddress'),
            'PhoneNumber'=>$request->input('fone')
        ]);

        return view('blog.login');
    }

    public function adminregisterValidate(Request $request)
    {
        //
// dd($request); 
        
        $account=str_shuffle('0432987165');
        $vericationCode=rand('100000', '999999');
        $customer='customer';
        $form = $request->validate([
            'fullname'=>'required|string',
            'Email'=>'required|string|email',
            'userName'=>'required|string',
            'country'=>'required|string',
            'houseAddress'=>'required',
            'fone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'zipCode'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|confirmed',

        ]);
        
// dd($form); 
        
adminModel::create([
            'FullName'=>$request->input('fullname'),                  
            'Email'=>$request->input('Email'),
            'Password'=>Hash::make($request['password']),
            'UserName'=>$request->input('userName'),
            'Account_Number'=>$account,
            'otp'=>$vericationCode,
            'UserType'=>$customer,
            'zipcode'=>$request->input('zipCode'),
            'Country'=>$request->input('country'),
            'HomeAddress'=>$request->input('houseAddress'),
            'PhoneNumber'=>$request->input('fone')
        ]);

        return view('admin.adminLogin');
    }


    public function dashboard()
    {
        // $amount=DB::table('bankinfo_models')->where('Comment_id', $id  )->get('Comment')
        return view('dashboard.index');
       
    }

    public function logout()
    {
      if (Session::has('loggeduser')) {
          session()->pull('loggeduser');
          return redirect('/login');
      }
    }


    public function ValidateLoginPage(Request $request)
    {
       $credentials=$request->validate([
           'email'=>'required|string',
           'password'=>'required'
       ]);

    //    dd($credentials);

       $user= bankinfoModel::where('email', '=', $request->email)->first();
       if (!$user) {
          return back()->with('fail', 'your Email is not recognized');
       } else {
           if (Hash::check($request->password, $user->Password)){
               $request->session()->put('loggeduser', $user->id);
               return redirect('/index');
           }else {
          return back()->with('fail', 'Wrong Password');
              
           }
       }
       


    }


    public function AdminValidateLoginPage(Request $request)
    {
       $credentials=$request->validate([
           'email'=>'required|string',
           'password'=>'required'
       ]);

    //    dd($credentials);

       $user= adminmodel::where('email', '=', $request->email)->first();
       if (!$user) {
          return back()->with('fail', 'your Email is not recognized');
       } else {
           if (Hash::check($request->password, $user->Password)){
               $request->session()->put('loggeduser', $user->id);
               return redirect('/admin/dashboard');
           }else {
          return back()->with('fail', 'Wrong Password');
              
           }
       }
       


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
