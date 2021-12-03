
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur les rendez vous</h1><br>
    @include('flash-message')

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