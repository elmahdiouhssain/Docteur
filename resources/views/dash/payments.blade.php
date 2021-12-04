
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Gestion des détails de Paiment
    </h1><br>
    @include('flash-message')
    <br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-money-bill-alt"></i> Nouveau paiment  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-money-bill-alt"></i> Nouveau paiment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="newline" id="newline" action="{{url('/payments/nouveau')}}">
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
                <label for="title">Prix :</label>
                <input type="number" class="form-control" id="title" placeholder="200DH" name="prix">
                @if ($errors->has('prix'))
                                        <span style="color: red;">{{ $errors->first('prix') }}</span>
                                        @endif
                </div>
                <div class="form-group">
                    <label for="title">Avance :</label>
                    <input type="number" class="form-control" id="avance" placeholder="200DH" name="avance">
                    @if ($errors->has('avance'))
                                            <span style="color: red;">{{ $errors->first('avance') }}</span>
                                            @endif
                    </div>
                <div class="form-group">
                    <label for="observation">Titre de paiment :</label>
                    <input type="text" class="form-control" id="observation" placeholder="200DH" name="observation">
                    
                    @if ($errors->has('observation'))
                                            <span style="color: red;">{{ $errors->first('observation') }}</span>
                                            @endif
                </div>

                <div class="form-group">
                    <label for="start">Date de payment :</label>
                    <input type="date" class="form-control" id="start" placeholder="Examination" name="start">
                    
                    @if ($errors->has('start'))
                                            <span style="color: red;">{{ $errors->first('start') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="observation">Observation :</label>
                    <input name="text" id="observation" class="form-control" name="observation">
                    
                    @if ($errors->has('observation'))
                                            <span style="color: red;">{{ $errors->first('observation') }}</span>
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
                                                    <th>Titre de payment</th>
                                                    <th>Avance</th>
                                                    <th>Total</th>
                                                    <th>Observation</th>
                                                    <th>Date de payment</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['paiments'] as $line)
                                            <tr>
                                                <td>{{ $line->fullname }}</td>
                                                <td>{{ $line->cin }}}</td>
                                                <td>{{ $line->titre }}</td>
                                                <td>{{ $line->avance }}</td>
                                                <td>{{ $line->prix }}</td>
                                                <td>{{ $line->observation }}</td>
                                                <td>{{ $line->date }}</td>
                                                
                                                <td>
                                                
                                                    <a href="/patients/edit/{{ $line->id }}" >
                                                        <i title="Modifier" class="fas fa-user-edit" style="color: green;"></i>
                                                      </a>
                                                 
                                                  <a href="/patients/delete/{{ $line->id }}" >
                                                    <i title="supp" class="fas fa-trash" style="color: red;" onclick="return confirm('Vous etes-sur supprimé le client?')"></i>
                                                  </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                    <!-- end table-responsive-->
                                    @endsection