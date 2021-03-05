@extends('Admin.layouts.master')
@section('content')
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>

<div class="page-content-wrapper">
    <div class="page-content">
    <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> View Cashout</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('invoice.index')}}">Invoice</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Cashout</li>
                </ol>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>All Cashout</header>
                    <a class="parent-item pull-right btn btn-primary" href="">Add +</a>
                </div>
                <div class="watermark">
                <img src="" alt="gcn" />
                </div>
                <div class="card-body" id="bar-parent">
                <form action="" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-body">
                    <div class="form-group row">
                        <div class="control-label col-md-11">
                        Company Name: Green Computing Nepal Pvt. Ltd.
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-md-11">
                        Address: Adwait Marg, Bagbazar
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-md-11">
                        Phone: 01-6923449
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-md-11">
                        Email : greencomputingnepal@gmail.com
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-md-11">
                        Website : www.gcn.com.np
                        </div>
                    </div>
                    <hr style="border-width:0;color:black;background-color:black">
                    <br>
                    <div class="mx-auto"><b><u><center>Cashout Slip</b></u></center></div>
                    <div class="form-group-row">
                        <div class="control-label col-md-2">
                            <u>Inv.Date</u>
                        </div>
                        <div class="control-label col-md-10">
                            <u>Inv.Date</u>
                            <br>
                            <u>Due.Date</u>
                        </div>
                    </div>
                    <br>
                
                    <div class="form-group col-md-12">
                            <table class="center" style="width:85%">
                            <tr>
                            <th>S.N.</th>
                            <th>Expense Category</th> 
                            <th>Received By</th>
                            <th>Amount</th>
                            </tr>
                            <td>1</td>
                            <td>expense</td>
                            <td>xyz</td>
                            <td>500</td>
                            </table>
                    </div>
                        <br>
                        <div class="form-group row">
                            <div class="control-label col-md-10">
                                <div>Total: </div>
                                <br>
                                <div>..............................</div>
                                <div>Authorized By</div>
                                <div>Name: </div>
                            </div>
                        </div>
                </div>

            </div>  
        </div>
    </div>
</div>
    
    
    
    
 @endsection










