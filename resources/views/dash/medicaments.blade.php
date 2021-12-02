
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur les médicament</h1><br>
    @include('flash-message')

 <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Observation</th>
                                                    <th>Enregistré le</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                          
                                            <tr>
                                                <td>dfgdfg</td>
                                                <td>dffgfd}</td>
                                                <td>dffgdfg</td>

                                                <td>
                                                    <a href="" class="fas fa-user-edit"></a>
                                                    <a style="color: red;" href="" class="fas fa-user-slash">
                                                  </a>
                                                  <a style="color: red;" href="" class="fas fa-trash">
                                                  </a>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                    <!-- end table-responsive-->
                                    @endsection