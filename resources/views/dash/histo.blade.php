
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Gestion des Consultations et des Contrôle</h1><br>
    @include('flash-message')

 <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th>Cin</th>
                                                    <th>Nom complète</th>
                                                    <th>Date d'operation</th>
                                                    <th>Opération</th>
                                                    <th>Enregistré le</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                          
                                            <tr>

                                                <td>dffgdfg</td>
                                                <td>dffgdfg</td>
                                                <td>dffgdfg</td>
                                                <td>dffgdfg</td>
                                                <td>dffgdfg</td>

                                            </tr>
                                          
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                    <!-- end table-responsive-->
                                    @endsection