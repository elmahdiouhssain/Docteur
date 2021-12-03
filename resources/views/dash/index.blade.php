@extends('layouts.dash')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total payments : 0</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>0 €</span></h2>
                    <p class="m-b-0"><span class="f-right"> Today</span></p>

                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total clients : 0</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>0 €</span></h2>
                    <p class="m-b-0"><span class="f-right"> Today</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Analyses</h6>
                    <h2 class="text-right"><i class="fas fa-vial f-left"></i><span>0</span></h2>
                    <p class="m-b-0"><span class="f-right"> Today</span></p>
                   
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Revenus</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>0 €</span></h2>
                    <p class="m-b-0"><span class="f-right"> <a href="">Download report</a></span></p>
                   
                </div>
            </div>
        </div>
    </div>

<div id="calendar"></div>

<div id="calendarModal" class="modal fade">
    <form method="POST" class="apointment" id="apointment" >
        @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                <h4 id="modalTitle" class="modal-title">Régler un rendez vous</h4>
            </div>
            <div id="modalBody" class="modal-body"> 
                <div class="form-group">
                    <label for="name">Nom complete :</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="le nom complete" required="">
                
                          @if ($errors->has('fullname'))
                                            <span style="color: red;">{{ $errors->first('fullname') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="titre">Titre :</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="le titre" required="">
                
                          @if ($errors->has('title'))
                                            <span style="color: red;">{{ $errors->first('title') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="cin">Cin :</label>
                    <input type="text" name="cin" class="form-control" id="cin" placeholder="Identité" required="">
                
                          @if ($errors->has('cin'))
                                            <span style="color: red;">{{ $errors->first('cin') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="observation">Observation :</label>
                    <input type="text" name="observation" class="form-control" id="observation" placeholder="observation" required="">
                
                          @if ($errors->has('observation'))
                                            <span style="color: red;">{{ $errors->first('observation') }}</span>
                                            @endif
                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="sendevent" >Enregistré</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
    </div>
    </div>

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