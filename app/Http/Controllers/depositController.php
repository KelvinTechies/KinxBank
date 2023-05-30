<?php

namespace App\Http\Controllers;

use App\Models\depositModel;
use Illuminate\Http\Request;
use App\Models\userDepositModel;
// use App\Models\DepositModel;
use App\Models\withdrawmodel;
use App\Models\balancemodel;
use App\Models\bankinfoModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class depositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposit=DB::table('bankinfo_models')->where('id','=', session('loggeduser')  )->get();
        $depositWithdraw=DB::table('user_deposit_models')->where('User_id','=', session('loggeduser')  )->get();
        $admin=DB::table('bankinfo_models')->where('id','=', 1  )->get();
        $allDepos=DB::table('user_deposit_models')->where('id', session('loggeduser')  )->get('Amount');
        // dd($deposit);
        return view('dashboard.deposit', [
            'deposit'=>$deposit,
            'allDepos'=>$allDepos,
            'admin'=>$admin,
            'depositWithdraw'=>$depositWithdraw
        ]);
    }
    
   


    public function indexX()
    {
        $depositAmount=DB::table('user_deposit_models')->where('User_id','=', session('loggeduser')  )->get();
        $allDepos=DB::table('user_deposit_models')->where('User_id','=', session('loggeduser')  )->get('Amount');
        
        // dd($depositAmount);
        
        return view('dashboard.index', [
            'depositAmount'=>$depositAmount,
            'allDepos'=>$allDepos            
        ]);
    }

    public function trasactions()
    {
        $trasactions=DB::table('user_deposit_models')->where('User_id','=', session('loggeduser') )->get();
        // dd($depositAmount);
        
        return view('dashboard.trasactions', [
            'trasactions'=>$trasactions
        ]);
    }

    public function Alltrasactions()
    {
        $trasactions=DB::table('deposit_models')->get();
        // dd($depositAmount);
        
        return view('dashboard.alltrasactions', [
            'trasactions'=>$trasactions
        ]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
         $trasactionId=substr(time(), 0,  15);
        $pending='Pending';
        $time = date("H:i:s");
        $date = date('d:m:y');
        // $email= bankinfoModel::where('id', '=', session('loggeduser'))->first();
        $email=DB::table('bankinfo_models')->where('id','=', session('loggeduser')  )->get();
// $email=bankinfoModel::find($id);
// dd($email);
$logged=session('loggeduser');
// dd($logged);
        $depo=$request->validate([
            'TransType'=>'required|string',
            'userAccount'=>'required|Numeric',
            'amount'=>'required|Numeric',
            'adminAccount'=>'required|Numeric',
            'fullname'=>'required|string',
            
        ]);

        userDepositModel::create([
            'User_id'=>session('loggeduser'),
            'Amount'=>'Pending',
            'Email'=>$request->input('email'),
            'UserName'=>$request->input('fullname'),
            'UserAccount'=>$request->input('userAccount'),
            'SentTo'=>$request->input('adminAccount'),
            'Status'=>'Pending',
            'Method'=>'Pending',
            'TrasactionId'=>'Pending',
            'Time'=>'Pending',
            'Date'=>'Pending'
        ]);
// dd($email);

        DepositModel::create([
            'User_id'=>session('loggeduser'),
            'Amount'=>$request->input('amount'),
            'Email'=>$request->input('email'),
            'UserName'=>$request->input('fullname'),
            'UserAccount'=>$request->input('userAccount'),
            'SentTo'=>$request->input('adminAccount'),
            'Status'=>'Pending',
            'Method'=>$request->input('TransType'),
            'TrasactionId'=>$trasactionId,
            'Time'=>$time,
            'Date'=>$date
        ]);
        return back()->with('good', 'Success');
 
    }


    public function withdrawal(Request $request)
    {
        // dd($request);
        // $d=[3,4,4,2,4];
         $trasactionId=substr(time(), 0,  15);
        // $pending='Pending';
        $time = date("H:i:s");
        $date = date('d:m:y');
        // $email= bankinfoModel::where('id', '=', session('loggeduser'))->first();
        $email=DB::table('bankinfo_models')->where('id','=', session('loggeduser')  )->get();
        $withdrawAmount=DB::table('user_deposit_models')->where('User_id','=', session('loggeduser')  )->get('Amount');
       $d=$withdrawAmount;
       dd($d);
       
        // if ($withdrawAmount->Amount==='Pending') {
        //     return back()->with('failure', 'Insufficient Funds');
        // } else{
        //     $withdrawAmount->sum('Amount');
        // }
        
        dd($d);
        $with=$request->validate([
            'userAccount'=>'required|Numeric',
            'amount'=>'required|Numeric',
            
        ]);

        withdrawmodel::create([
            'User_id'=>session('loggeduser'),
            'Amount'=>$request->input('amount'),           
            'Email'=>$request->input('email'),
            'UserName'=>$request->input('fullname'),
            'UserAccount'=>$request->input('userAccount'),
            'TrasactionId'=>$trasactionId,
            'Time'=>$time,
            'Date'=>$date
        ]);
// dd($email);

        Balancemodel::create([
            'User_id'=>session('loggeduser'),
            'Amount'=>$request->input('amount'),
            'Email'=>$request->input('email'),
            'UserName'=>$request->input('fullname'),
            'UserAccount'=>$request->input('userAccount'),
            'TrasactionId'=>$trasactionId,
            'Time'=>$time,
            'Date'=>$date
        ]);
        return back()->with('good', 'Success');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\depositModel  $depositModel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $depositModel)
    {
    //    dd($depositModel);
    $Approved='Approved';
       $find=depositModel::where('id',  $depositModel )->update([
        'Status'=>$Approved
       ]);
    //    dd($find);

       $user=userDepositModel::where('id',  $depositModel )->update([
        'User_id'=>$request->input('User_id'),
        'Amount'=>$request->input('amount'),
        'Email'=>$request->input('email'),
        'UserName'=>$request->input('fullname'),
        'UserAccount'=>$request->input('userAccount'),
        'SentTo'=>$request->input('adminAccount'),
        'Status'=>$Approved,
        'Method'=>$request->input('TransType'),
       'TrasactionId'=>$request->input('TrasactionId'),
        'Time'=>$request->input('time'),
        'Date'=>$request->input('date')
       ]);
    //    dd($user);
       
       return redirect('/alltrasactions');
    //    dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\depositModel  $depositModel
     * @return \Illuminate\Http\Response
     */
    public function edit($depositModel)
    {
        // dd($depositModel);
        $deposited=depositModel::find($depositModel);
        // dd($deposit);
        return view('dashboard.approve')->with([
                 'deposited'=>$deposited
             ]);
        // $loggedUserInfo=AdminModel::find($id);
        // return view('dashboard.edit')->with([
        //     'loggedUserInfo'=>$loggedUserInfo
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\depositModel  $depositModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depositModel $depositModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\depositModel  $depositModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(depositModel $depositModel)
    {
        //
    }
}
