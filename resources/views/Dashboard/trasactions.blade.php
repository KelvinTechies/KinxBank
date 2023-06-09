@extends('dashboard.header')

@section('main')

<div class="content-body">
        <div class="container">
            <div class="page-title">
               <div class="row align-items-center justify-content-between">
                  <div class="col-xl-4">
                     <div class="page-title-content">
                        <h3>Trasactions</h3>
                        <p class="mb-2">Welcome to Trasactions page</p>
                     </div>
                  </div>
                  <div class="col-auto">
                     <div class="breadcrumbs"><a href="#">Home </a><span><i class="ri-arrow-right-s-line"></i></span><a href="/trasactions">Trasactions</a></div>
                  </div>
               </div>
            </div>
            <!-- <div class="row">
               <div class="col-xl-8 col-lg-7">
                  <div id="user-activity" class="card" data-aos="fade-up">
                     <div class="card-header">
                        <h4 class="card-title">Expenses</h4>
                     </div>
                     <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                           <div class="chartjs-size-monitor">
                              <div class="chartjs-size-monitor-expand">
                                 <div class=""></div>
                              </div>
                              <div class="chartjs-size-monitor-shrink">
                                 <div class=""></div>
                              </div>
                           </div>
                           <canvas id="activityBar"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-5">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Unpaid Bills</h4>
                     </div>
                     <div class="card-body">
                        <div class="unpaid-content">
                           <ul>
                              <li>
                                 <p class="mb-0">Service</p>
                                 <h5 class="mb-0">Payoneer</h5>
                              </li>
                              <li>
                                 <p class="mb-0">Issued</p>
                                 <h5 class="mb-0">March 17, 2021</h5>
                              </li>
                              <li>
                                 <p class="mb-0">Payment Due</p>
                                 <h5 class="mb-0">17 Days</h5>
                              </li>
                              <li>
                                 <p class="mb-0">Paid</p>
                                 <h5 class="mb-0">0.00</h5>
                              </li>
                              <li>
                                 <p class="mb-0">Amount to pay</p>
                                 <h5 class="mb-0">$ 532.69</h5>
                              </li>
                              <li>
                                 <p class="mb-0">Payment Method</p>
                                 <h5 class="mb-0">Paypal</h5>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div> -->
               <div class="col-xl-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Trasactions</h4>
                     </div>
                     <div class="card-body">
                        <div class="payments-content">
                           <div class="table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </th>
                                       <th>UserName</th>
                                       <th>Method</th>
                                       <th>Amount</th>
                                       <th>TrasactionId</th>
                                       <th>Sent To</th>
                                       {{-- <th>Receiver</th> --}}
                                       <th>Date</th>
                                       <th>Time</th>
                                       <th>Status</th>                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                    //   AllTrasactions()
                                      ?>
                                      @if(count($trasactions)>0)
                                      @forEach($trasactions as $trasaction)
                                    <tr>
                                       <td>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </td>
                                    <td><img src="images/social/facebook.png" alt="" width="22" class="me-3 img-fluid">{{$trasaction->UserName}}</td>
                                       <td>{{$trasaction->Method}}</td>
                                       <td>{{$trasaction->Amount}}</td>
                                       <td>{{$trasaction->TrasactionId}}</td>
                                       <td>{{$trasaction->SentTo}}</td>
                                       {{-- <td>March 21, 2021</td> --}}
                                       <td>{{$trasaction->Date}}</td>
                                       <td>{{$trasaction->Time}}</td>
                                       <td><span class="badge px-3 py-2 bg-danger">Paid</span></td>
                                    </tr> 
                                    <!-- <tr>
                                       <td>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </td>
                                       <td><img src="images/social/youtube.png" alt="" width="22" class="me-3 img-fluid">Youtube Premium</td>
                                       <td>$175</td>
                                       <td>December 26, 2021</td>
                                       <td><span class="badge px-3 py-2 bg-danger">Cancel</span></td>
                                    </tr> -->
                                    <!-- <tr>
                                       <td>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </td>
                                       <td><img src="images/social/dropbox.png" alt="" width="22" class="me-3 img-fluid">Dropbox</td>
                                       <td>$521</td>
                                       <td>February 16, 2021</td>
                                       <td><span class="badge px-3 py-2 bg-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </td>
                                       <td><img src="images/social/google-plus.png" alt="" width="22" class="me-3 img-fluid">Google Plus</td>
                                       <td>$125</td>
                                       <td>June 17, 2021</td>
                                       <td><span class="badge px-3 py-2 bg-warning">Due</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </td>
                                       <td><img src="images/social/spotify.png" alt="" width="22" class="me-3 img-fluid">Spotify</td>
                                       <td>$521</td>
                                       <td>August 01, 2021</td>
                                       <td><span class="badge px-3 py-2 bg-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                       </td>
                                       <td><img src="images/social/skype.png" alt="" width="25" class="me-3 img-fluid">Skype</td>
                                       <td>$234</td>
                                       <td>January 19, 2021</td>
                                       <td><span class="badge px-3 py-2 bg-warning">Due</span></td>
                                    </tr> -->
                                    @endForeach
                                    @else
                                    <div class="alert alert-danger">
                                            No Trasaction History
                                        </div>
                                    @endIf
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
    @endsection
