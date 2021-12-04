
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Gestion des droits d'accée</h1><br>
    @include('flash-message')
 <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Fonction</th>
                                                    <th>Enregistré le</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['allusers'] as $line)
                                            <tr>
                                                <td>{{ $line->email }}</td>
                                                <td>{{ $line->name }}</td>
                                                @if($line->is_admin =='1')
                                                <td style="color: green">Docteur</td>
                                                @else
                                                <td style="color: indigo">Assistant</td>
                                                @endif
                                                <td>{{ $line->created_at }}</td>
                                                <td>
                                                
                                                    <a href="/access/edit/{{ $line->id }}" >
                                                        <i title="Modifier" class="fas fa-user-edit" style="color: green;"></i>
                                                      </a>
                                                 
                                                  <a href="/access/delete/{{ $line->id }}" >
                                                    <i title="supp" class="fas fa-trash" style="color: red;" onclick="return confirm('Vous etes-sur supprimé le client?')"></i>
                                                  </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                    <!-- end table-responsive-->
                                </div>
                                    @endsection