
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information Personnelle de patient</h1><br>
    @include('flash-message')
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-user"></i> Nouveau Client  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i> Nouveau client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="newline" id="newline" action="{{url('/patients/nouveau')}}">
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
                <label for="email">Address email :</label>
                <input type="email" class="form-control" id="email" placeholder="samir@gmail.com" name="email">
                @if ($errors->has('email'))
                                        <span style="color: red;">{{ $errors->first('email') }}</span>
                                        @endif
                </div>
                <div class="form-group">
                    <label for="tele">Telephone :</label>
                    <input name="tele" id="tele" class="form-control" name="tele">
                    
                    @if ($errors->has('tele'))
                                            <span style="color: red;">{{ $errors->first('tele') }}</span>
                                            @endif
                </div>

                <div class="form-group">
                    <label for="date">Date de naissance :</label>
                    <input type="date" class="form-control" id="date" placeholder="Examination" name="date">
                    
                    @if ($errors->has('date'))
                                            <span style="color: red;">{{ $errors->first('date') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="addr">Address local :</label>
                   <textarea name="addr" id="" class="form-control"></textarea>
                    @if ($errors->has('addr'))
                                            <span style="color: red;">{{ $errors->first('addr') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="genre">Genre : </label>
                    <select class="form-control" name="genre" id="genre" >

                      <option class="packz" id="">Masculin</option>
                      <option class="packz" id="">Feminin</option>
                     
                
                
                    </select>
                    @if ($errors->has('pack_name'))
                                            <span style="color: red;">{{ $errors->first('pack_name') }}</span>
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

                                                    <th>Cin</th>
                                                    <th>Nom complète</th>
                                                    <th>Date de naissance</th>
                                                    <th>Telephone</th>
                                                    <th>Enregistré le</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['patients'] as $line)
                                            <tr>
                                                <td>{{ $line->cin }}</td>
                                                <td>{{ $line->fullname }}</td>
                                                <td>{{ $line->date }}</td>
                                                <td>{{ $line->tele }}</td>
                                                <td>{{ $line->created_at }}</td>

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