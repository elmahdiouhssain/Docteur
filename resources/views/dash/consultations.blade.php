
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Gestion des consultations</h1><br>
    @include('flash-message')
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-fw fa-rocket"></i> Nouvelle consultation  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-rocket"></i> Nouvelle consultation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="newline" id="newline" action="/consultation/nouvelle">
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
                    <label for="genre">Operation : </label>
                    <select class="form-control" name="operation" id="operation" >

                      <option class="packz" id="">Nouvelle controle</option>
                      <option class="packz" id="">Consultation</option>
                     
                
                
                    </select>
                    @if ($errors->has('pack_name'))
                                            <span style="color: red;">{{ $errors->first('pack_name') }}</span>
                                            @endif
                  </div>
                <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="NUMBER" class="form-control" id="prix" placeholder="200DH" name="prix">
                @if ($errors->has('prix'))
                                        <span style="color: red;">{{ $errors->first('prix') }}</span>
                                        @endif
                </div>
                <div class="form-group">
                    <label for="poid">Poind :</label>
                    <input type="poid" class="form-control" id="poid" placeholder="70KG" name="poid">
                    @if ($errors->has('poid'))
                                            <span style="color: red;">{{ $errors->first('poid') }}</span>
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
                    <label for="start">Date operation :</label>
                    <input type="date" class="form-control" id="date_operation"  name="date_operation">
                    
                    @if ($errors->has('date_operation'))
                                            <span style="color: red;">{{ $errors->first('date_operation') }}</span>
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
                                                    <th>Opération</th>
                                                    <th>Date d'opeation</th>
                                                    <th>Poind</th>
                                                    <th>Enregistré le</th>
                                                    <th>Reglage</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['consultations'] as $line)
                                            <tr>
                                                <td>{{ $line->fullname }}</td>
                                                <td>{{ $line->cin }}</td>
                                                <td>{{ $line->operation }}</td>
                                                <td>{{ $line->date_operation }}</td>
                                                <td>{{ $line->poid }}</td>
                                                <td>{{ $line->created_at }}</td>
                                                <td>
                                                
                                                    <a href="/consultation/edit/{{ $line->id }}" >
                                                        <i title="Modifier" class="fas fa-user-edit" style="color: green;"></i>
                                                      </a>
                                                 
                                                  <a href="/consultation/delete/{{ $line->id }}" >
                                                    <i title="supp" class="fas fa-trash" style="color: red;" onclick="return confirm('Vous etes-sur supprimé la consultation?')"></i>
                                                  </a>
                                                </td>
                                            </tr>
                                            </tr>
                                          
                                        </tbody>
                                        @endforeach
                                        </table>
                                        
                                    </div>
                                </div>
                                    <!-- end table-responsive-->
                                    @endsection