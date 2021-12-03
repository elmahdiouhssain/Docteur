
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur les rendez vous</h1><br>
    @include('flash-message')
    <br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-calendar-check"></i> Nouveau rendez-vous  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-calendar-check"></i> Nouveau rendez-vous</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="newline" id="newline" action="{{url('/rendez-vous/nouveau')}}">
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
                <label for="title">Rendez-vous titre :</label>
                <input type="title" class="form-control" id="title" placeholder="Examination" name="title">
                @if ($errors->has('title'))
                                        <span style="color: red;">{{ $errors->first('title') }}</span>
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
                    <label for="start">Date debut :</label>
                    <input type="date" class="form-control" id="start" placeholder="Examination" name="start">
                    
                    @if ($errors->has('start'))
                                            <span style="color: red;">{{ $errors->first('start') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="end">Date fin :</label>
                    <input type="date" class="form-control" id="end" placeholder="Examination" name="end">
                    
                    @if ($errors->has('start'))
                                            <span style="color: red;">{{ $errors->first('start') }}</span>
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
                                                    <th>Nom complète</th>
                                                    <th>Cin</th>
                                                    <th>Date debut</th>
                                                    <th>Date fin</th>
                                                    <th>Observation</th>
                                                    <th>Enregistré le</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                          
                                            <tr>
                                                @foreach ($data['rendezvous'] as $line)
                                                <td>{{ $line->title }}</td>
                                                <td>{{ $line->name }}</td>
                                                <td>{{ $line->cin }}</td>
                                                <td>{{ $line->start }}</td>
                                                <td>{{ $line->end }}</td>
                                                <td>{{ $line->observation }}</td>
                                                <td>{{ $line->created_at }}</td>

                                                <td>
                                                    <a href="" class="fas fa-user-edit"></a>
                                                   
                                                  <a style="color: red;" href="" class="fas fa-trash">
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