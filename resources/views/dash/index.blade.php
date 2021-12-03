@extends('layouts.dash')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total payments : 0</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>0 €</span></h2>
                

                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total clients</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>0 </span></h2>
                
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Analyses</h6>
                    <h2 class="text-right"><i class="fas fa-vial f-left"></i><span>0</span></h2>
                   
                   
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total consultations</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>0 </span></h2>
                  
                   
                </div>
            </div>
        </div>
    </div>

<div id="calendar"></div>



<style>#top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
  }

  #calendar {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 10px;
  }
</style>
</div>




@endsection