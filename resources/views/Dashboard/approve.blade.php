@extends('dashboard.header')

@section('main')
<form action="/approve/{{ $deposited->id }}" class="identity-upload " id="depositForm" method="post">
@csrf
@method('PUT')
<div class="" id="addBank" tabindex="-1"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Approve Funds</h5>
                <div class="msgMe"></div>
                {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-xl-12">
                        
                            <label class="form-label">Transaction Type </label>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <select class="form-select TransType"  name="TransType">
                                                    <option value="....">......</option>
                                                    <option value="Others...">Others...</option>
                                                    <option value="{{$deposited->Method}}" selected>Transfer</option>
                                                </select>
                                            </div>
                                            @error('TransType')
                                            <p class="text-danger">{{$message}}</p>
                                            @endError
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Account number </label>
                            <input type="text" class="form-control userAcct" name="userAccount" readonly value="{{$deposited->UserAccount}}">
                            @error('userAccount')
                            <p class="text-danger">{{$message}}</p>
                            @endError
                        </div>
                        <p class="text-center">
                        To
                        </p>
                        <div class="col-xl-12">
                            <label class="form-label">Account number </label>
                            <input type="text" class="form-control AdminAcct" name="adminAccount" readonly value="Admin">
                            @error('adminAccount')
<p class="text-danger">{{$message}}</p>
@endError
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Amount</label>
                            <input type="text" class="form-control amount" name="amount" placeholder="$10.00" readonly value="{{$deposited->Amount}}">
                            @error('amount')
<p class="text-danger">{{$message}}</p>
@endError
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Full Name </label>
                        <input type="text" class="form-control fullname" name="fullname" readonly value="{{$deposited->UserName}}">
                            @error('fullname')
<p class="text-danger">{{$message}}</p>
@endError
<input type="email" class="form-control amount" name="email" placeholder="" value="{{$deposited->Email}}"  hidden>
<input type="text" class="form-control amount" name="TrasactionId" placeholder="" value="{{$deposited->TrasactionId}}"  hidden>
<input type="text" class="form-control amount" name="time" placeholder="" value="{{$deposited->Time}}"  hidden>
<input type="text" class="form-control amount" name="date" placeholder="" value="{{$deposited->Date}}"  hidden>
<input type="text" class="form-control amount" name="User_id" placeholder="" value="{{$deposited->User_id}}"  hidden>

                        </div>
                        <!-- <div class="col-xl-12">
                            <img src="images/routing.png" alt="" class="img-fluid">
                        </div> -->
                    </div>
                    <div class="modal-footer">
                <button type="submit" name="approve" class="btn btn-primary approve" data-dismiss="" data-toggle="modal"
                    data-target="">Approve</button>
            </div>
        </form>
            
            </div>
            
        </div>
        
    </div>
</div>
@endSection