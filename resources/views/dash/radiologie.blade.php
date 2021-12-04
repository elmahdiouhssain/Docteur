
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Gestion des analyses & radioligique</h1><br>
    @include('flash-message')

 <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th>Titre</th>
                                                    <th>Type</th>
                                                    <th>Observation</th>
                                                    <th>Enregistré le</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            <tr>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                                <td>
                                                
                                                    <a href="/patients/edit/" >
                                                        <i title="Modifier" class="fas fa-user-edit" style="color: green;"></i>
                                                      </a>
                                                 
                                                  <a href="/patients/dele" >
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