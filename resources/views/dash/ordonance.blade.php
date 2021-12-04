
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Gestion des Ordonnances</h1><br>
    @include('flash-message')
    <br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-fw fa-file"></i> Nouvelle ordonnance  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-fw fa-file"></i> Nouvelle ordonnance</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="newline" id="newline" action="{{url('/ordonnance/nouvelle')}}">
                @csrf
                <div class="form-group">
                    <label for="fullname">Nom complète :</label>
                    <input type="fullname" class="form-control" id="fullname" placeholder="Ahmad el maki" name="fullname">
                    @if ($errors->has('fullname'))
                                            <span style="color: red;">{{ $errors->first('fullname') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="cin">Identité (cin) :</label>
                    <input type="cin" class="form-control" id="cin" placeholder="AE000000" name="cin">
                    @if ($errors->has('cin'))
                                            <span style="color: red;">{{ $errors->first('cin') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="usage">Usage :</label>
                    <input type="usage" class="form-control" id="usage" placeholder="5MG" name="usage">
                    @if ($errors->has('usage'))
                                            <span style="color: red;">{{ $errors->first('usage') }}</span>
                                            @endif
                    </div>
                <div class="form-group">
                <label for="traitment">Traitement :</label>
                <input type="traitment" class="form-control" id="traitment" placeholder="Doliypran" name="traitment">
                @if ($errors->has('traitment'))
                                        <span style="color: red;">{{ $errors->first('traitment') }}</span>
                                        @endif
                </div>
                <div class="form-group">
                    <label for="observation">Observation :</label>
                    <textarea name="observation" id="observation" class="form-control" name="observation"></textarea>
                    
                    @if ($errors->has('observation'))
                                            <span style="color: red;">{{ $errors->first('observation') }}</span>
                                            @endif
                </div>

                <div class="form-group">
                    <label for="date_traitment">Date du traitement :</label>
                    <input type="date" class="form-control" id="date_traitment" name="date_traitment">
                    
                    @if ($errors->has('date_traitment'))
                                            <span style="color: red;">{{ $errors->first('date_traitment') }}</span>
                                            @endif
                </div>
           
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistré</button>
                </div>



            </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Nom complète</th>
                                                    <th>Cin</th>
                                                    <th>Traitment</th>
                                                    <th>Usage</th>
                                                    <th>Observation</th>
                                                    <th>Date traitment</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                          
                                            <tr>
                                                <td>dfgdfg</td>
                                                <td>dffgfd}</td>
                                                <td>dffgdfg</td>
                                                <td>dfgdfgdffgdffgd</td>
                                                <td>dfgdfgdffgdffgd</td>
                                                <td>dfgdfgdffgdffgd</td>
                                                <td>
                                                
                                                    <a href="/ordonnance/edit/" >
                                                        <i title="Modifier" class="fas fa-edit" style="color: green;"></i>
                                                      </a>
                                                 
                                                  <a href="/ordonnance/delete" >
                                                    <i title="supp" class="fas fa-trash" style="color: red;" onclick="return confirm('Vous etes-sur supprimé le client?')"></i>
                                                  </a>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                    <!-- end table-responsive-->
                                    @endsection