@extends('dashboard.header')

@section('main')
        <!-- Mirrored from intez-html.vercel.app/settings-payment-method.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 12:11:58 GMT -->
        <!-- Added by HTTrack -->
        <!-- <meta http-equiv="content-type" content="text/html;charset=utf-8" />/Added by HTTrack -->
        <!-- <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Intez</title> -->
            <!-- Favicon icon -->
            <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> -->
            <!-- Custom Stylesheet -->
            <!-- <link rel="stylesheet" href="css/style.css">
        </head>
        
        <body class="dashboard">
        
        <div id="preloader">
            <i>.</i>
            <i>.</i>
            <i>.</i>
        </div>
        
        <div id="main-wrapper">
        
            <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="header-content">
                        <div class="header-left">
                           <div class="brand-logo"><a class="mini-logo" href="index.php"><img src="images/logoi.png" alt="" width="40"></a></div>
                           <div class="search">
                              <form action="#">
                                 <div class="input-group"><input type="text" class="form-control" placeholder="Search Here"><span class="input-group-text"><i class="ri-search-line"></i></span></div>
                              </form>
                           </div>
                        </div>
                        <div class="header-right">
                           <div class="dark-light-toggle"><span class="dark"><i class="ri-moon-line"></i></span><span class="light"><i class="ri-sun-line"></i></span></div>
                           <div class="nav-item dropdown notification dropdown">
                              <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                 <div class="notify-bell icon-menu"><span><i class="ri-notification-2-line"></i></span></div>
                              </div>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu notification-list dropdown-menu dropdown-menu-right">
                                 <h4>Recent Notification</h4>
                                 <div class="lists">
                                    <a class="" href="index.php#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon success"><i class="ri-check-line"></i></span>
                                          <div>
                                             <p>Account created successfully</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="" href="index.php#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon fail"><i class="ri-close-line"></i></span>
                                          <div>
                                             <p>2FA verification failed</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="" href="index.php#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon success"><i class="ri-check-line"></i></span>
                                          <div>
                                             <p>Device confirmation completed</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="" href="index.php#">
                                       <div class="d-flex align-items-center">
                                          <span class="me-3 icon pending"><i class="ri-question-mark"></i></span>
                                          <div>
                                             <p>Phone verification pending</p>
                                             <span>2020-11-04 12:00:23</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="notification.html">More<i class="ri-arrow-right-s-line"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="dropdown profile_log dropdown">
                              <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                 <div class="user icon-menu active"><span><i class="ri-user-line"></i></span></div>
                              </div>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu dropdown-menu-right">
                                 <div class="user-email">
                                    <div class="user">
                                       <span class="thumb"><img src="images/profile/3.png" alt=""></span>
                                       <div class="user-info">
                                          <h5>Jannatul Maowa</h5>
                                          <span>Intez.inc@gmail.com</span>
                                       </div>
                                    </div>
                                 </div>
                                 <a class="dropdown-item" href="profile.html"><span><i class="ri-user-line"></i></span>Profile</a>
                                 <a class="dropdown-item" href="balance.html"><span><i class="ri-wallet-line"></i></span>Balance</a>
                                 <a class="dropdown-item" href="settings-profile.html"><span><i class="ri-settings-3-line"></i></span>Settings</a>
                                 <a class="dropdown-item" href="settings-activity.html"><span><i class="ri-time-line"></i></span>Activity</a>
                                 <a class="dropdown-item" href="lock.html"><span><i class="ri-lock-line"></i></span>Lock</a>
                                 <a class="dropdown-item logout" href="signin.html"><i class="ri-logout-circle-line"></i>Logout</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
        
            <!-- <div class="sidebar">
            <div class="brand-logo"><a class="full-logo" href="index.php"><img src="images/logoi.png" alt="" width="30"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">
                            <span><i class="ri-home-5-line"></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="balance.html">
                            <span><i class="ri-wallet-line"></i></span>
                            <span class="nav-text">Wallet</span>
                        </a>
                    </li>
                    <li><a href="bill.html">
                            <span><i class="ri-secure-payment-line"></i></span>
                            <span class="nav-text">Payment</span>
                        </a>
                    </li>
                    <li><a href="invoice.html">
                            <span><i class="ri-file-copy-2-line"></i></span>
                            <span class="nav-text">Invoice</span>
                        </a>
                    </li>
                    <li><a href="settings-profile.html">
                            <span><i class="ri-settings-3-line"></i></span>
                            <span class="nav-text">Settings</span>
                        </a>
                    </li>
                    <li class="logout"><a href="signin.html">
                            <span><i class="ri-logout-circle-line"></i></span>
                            <span class="nav-text">Signout</span>
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
        
        
        
            <div class="content-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page-title">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-xl-4">
                                        <div class="page-title-content">
                                            <h3>Deposit Funds</h3>
                                            <p class="mb-2">Welcome to KinxBanking</p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="breadcrumbs"><a href="#">Settings </a><span><i class="ri-arrow-right-s-line"></i></span><a href="#">Payment Method</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Add a Depositing Method</h4>
                                        </div>
                                        <div class="card-body">
                                        
                        <!-- <form action="" class="identity-upload depositForm" method="post"> -->
                                        
                                            <!-- <div class="verify-content">
                                                <div class="d-flex align-items-center">
                                                    <span class="me-3 icon-circle bg-primary text-white"><i
                                                            class="ri-bank-line"></i></span>
                                                    <div class="primary-number">
                                                        <h5 class="mb-0">Bank of America</h5>
                                                        <small>Bank **************5421</small>
                                                        <br>
                                                        <span class="text-success">Verified</span>
                                                    </div>
                                                </div>
                                                <button class=" btn btn-outline-primary">Manage</button>
                                            </div> -->
                                            <!-- <hr class="dropdown-divider my-4">
                                            <div class="verify-content">
                                                <div class="d-flex align-items-center">
                                                    <span class="me-3 icon-circle bg-primary text-white"><i
                                                            class="ri-mastercard-line"></i></span>
                                                    <div class="primary-number">
                                                        <h5 class="mb-0">Master Card</h5>
                                                        <small>Credit Card *********5478</small>
                                                        <br>
                                                        <span class="text-success">Verified</span>
                                                    </div>
                                                </div>
                                                <button class=" btn btn-outline-primary">Manage</button>
                                            </div> -->
        
                                            <div class="mt-5 text-center">
                                                <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                                                    data-target="#addBank">Deposit</button>
                                                <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                                                    data-target="#addCard">Withdraw</button>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        @if(Session::get('good'))

        {{-- <div class="modal fade successBx" id="successBankAccount" tabindex="-1"> --}}
           {{-- <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header"> --}}
                       <h5 class="modal-title">Success</h5>
                       <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                   </div>
                   
                   <div class="modal-body">
                       <div class="auth-form">
                           <div class="card-body">
                               <form action="" class="identity-upload">
                                   <div class="identity-content">
                                       <span class="icon"><i class="icofont-check"></i></span>
                                   <p class="text-dark">{{ Session::get('good') }}</p>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               {{-- </div>
           </div>
       </div> --}}
       
       @endIf
       
        <!-- Modal -->
        @forEach($deposit as $deposit)
        <form action="/deposited" class="identity-upload " id="depositForm" method="post">
        @csrf
        <div class="modal fade" id="addBank" tabindex="-1"> 
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Transfer Funds</h5>
                        <div class="msgMe"></div>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                
                                    <label class="form-label">Transaction Type </label>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                        <select class="form-select TransType"  name="TransType">
                                                            <option value="....">......</option>
                                                            <option value="Others...">Others...</option>
                                                            <option value="Transfer" selected>Transfer</option>
                                                        </select>
                                                    </div>
                                                    @error('TransType')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @endError
                                </div>
                                <div class="col-xl-12">
                                    <label class="form-label">Account number </label>
                                    <input type="text" class="form-control userAcct" name="userAccount" readonly value="{{$deposit->Account_Number}}">
                                    @error('userAccount')
                                    <p class="text-danger">{{$message}}</p>
                                    @endError
                                </div>
                                <p class="text-center">
                                To
                                </p>
                                <div class="col-xl-12">
                                    <label class="form-label">Account number </label>
                                    <input type="text" class="form-control AdminAcct" name="adminAccount"  value="">
                                    @error('adminAccount')
<p class="text-danger">{{$message}}</p>
@endError
                                </div>
                                <div class="col-xl-12">
                                    <label class="form-label">Amount</label>
                                    <input type="text" class="form-control amount" name="amount" placeholder="$10.00">
                                    @error('amount')
<p class="text-danger">{{$message}}</p>
@endError
                                </div>
                                <div class="col-xl-12">
                                    <label class="form-label">Full Name </label>
                                <input type="text" class="form-control fullname" name="fullname" readonly value="{{$deposit->FullName}}">
                                    @error('fullname')
<p class="text-danger">{{$message}}</p>
@endError
<input type="email" class="form-control amount" name="email" placeholder="" value="{{$deposit->Email}}"  hidden>

                                </div>
                                <!-- <div class="col-xl-12">
                                    <img src="images/routing.png" alt="" class="img-fluid">
                                </div> -->
                            </div>
                            <div class="modal-footer">
                        <button type="submit" name="deposited" class="btn btn-primary deposited" data-dismiss="" data-toggle="modal"
                            data-target="#successBankAccount">Confirm</button>
                    </div>
                </form>
                    
                    </div>
                    
                </div>
                
            </div>
        </div>
        @endforeach

     
        <!-- Modal -->
        {{-- <div class="modal fade successBx" id="successBankAccount" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Success</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="auth-form">
                            <div class="card-body">
                                <form action="" class="identity-upload">
                                    <div class="identity-content">
                                        <span class="icon"><i class="icofont-check"></i></span>
                                        <p class="text-dark">Deposited</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        
        <!-- Modal -->
        @forEach($depositWithdraw as $depositWithdraw)
        {{-- <form action="/withdraw" class="identity-upload " id="depositForm" method="post">
        @csrf --}}
        <div class="modal fade" id="addCard" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCardLabel">Withdraw Funds</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <form class="identity-upload"> --}}
                              <form action="/withdraw" class="identity-upload " id="depositForm" method="post">
                                @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <label class="form-label">Account Number </label>
                                <input type="text" class="form-control" name="userAccount" placeholder="0123456789" readonly value="{{$depositWithdraw->UserAccount}}">
                                </div>
                                <div class="col-xl-12">
                                    <label class="form-label">Amount</label>
                                    <input type="text" class="form-control" name="amount" placeholder="$0.00">
                                    @error('amount')
                                    <p class="text-danger">{{$message}}</p>
                                    @endError
                                </div>
                                <input type="email" class="form-control amount" name="email" placeholder="" value="{{$depositWithdraw->Email}}"  hidden>
<input type="text" class="form-control amount" name="time" placeholder="" value="{{$depositWithdraw->UserName}}"  hidden>
{{-- <input type="text" class="form-control amount" name="date" placeholder="" value="{{$depositWithdraw->Date}}"  hidden> --}}
<input type="text" class="form-control amount" name="User_id" placeholder="" value="{{$depositWithdraw->User_id}}"  hidden>
                                <!-- <div class="col-xl-4">
                                    <label class="form-label">Expiration </label>
                                    <input type="text" class="form-control" placeholder="10/22">
                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label">CVC </label>
                                    <input type="text" class="form-control" placeholder="125">
                                </div>
                                <div class="col-xl-4">
                                    <label class="form-label">Postal code </label>
                                    <input type="text" class="form-control" placeholder="2368">
                                </div> -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="withdraw" class="btn btn-success" data-dismiss="" data-toggle="modal"
                            data-target="#successCard">Withdraw</button>
                    </div>
                </div>
            </form>
                
            </div>
        </div>
        @endforeach
        <!-- Modal -->
        {{-- <div class="modal fade" id="successCard" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Success</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="auth-form">
                            <div class="card-body">
                                <form action="https://intez-html.vercel.app/verify-step-2.html" class="identity-upload">
                                    <div class="identity-content">
                                        <span class="icon"><i class="icofont-check"></i></span>
                                        <p class="text-dark">Congratulation. Your bank added</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        @endsection