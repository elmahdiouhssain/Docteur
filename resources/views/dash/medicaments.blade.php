
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur les médicament</h1><br>
    @include('flash-message')
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-file"></i> Nouveau medicament  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-file"></i> Nouveau medicament</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="newline" id="newline" action="{{url('/medicaments/nouveau')}}">
                @csrf
                <div class="form-group">
                    <label for="titre">Titre :</label>
                    <input type="text" class="form-control" id="titre" placeholder="Dolypran" name="titre">
                    @if ($errors->has('titre'))
                                            <span style="color: red;">{{ $errors->first('titre') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="cin">Prix (DH) :</label>
                    <input type="number" class="form-control" id="prix" placeholder="800DH" name="prix">
                    @if ($errors->has('prix'))
                                            <span style="color: red;">{{ $errors->first('prix') }}</span>
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
                                                    <th>Titre</th>
                                                    <th>Prix</th>
                                                    <th>Observation</th>
                                                    <th>Enregistré le</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['medicaments'] as $line)
                                            <tr>
                                                <td>{{ $line->titre }}</td>
                                                <td>{{ $line->prix }} DH</td>
                                                <td>{{ $line->observation }}</td>
                                                <td>{{ $line->created_at }}</td>

                                               
                                                <td>

                                                  <a href="/medicaments/delete/{{ $line->id }}" >
                                                    <i title="supp" class="fas fa-trash" style="color: red;" onclick="return confirm('Vous etes-sur supprimé le client?')"></i>
                                                  </a>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                        @endforeach
                                        </table>
                                        
                                    </div>
                                </div>
                                    <!-- end table-responsive-->
                                    @endsection