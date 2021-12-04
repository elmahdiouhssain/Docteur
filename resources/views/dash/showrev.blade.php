
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur les rendez vous</h1><br>
    @include('flash-message')
    <br>

    <form method="POST" class="newline" id="newline" action="/rendez-vous/edit/<?php echo$rev[0]->id; ?>">
                @csrf
                <div class="form-group">
                    <label for="fullname">Nom complète :</label>
                    <input type="fullname" class="form-control" id="fullname" placeholder="Ahmad el maki" name="fullname" value="<?php echo$rev[0]->fullname; ?>">
                    @if ($errors->has('fullname'))
                                            <span style="color: red;">{{ $errors->first('fullname') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="cin">Identité (cin) :</label>
                    <input type="cin" class="form-control" id="cin" placeholder="AE000000" name="cin" value="<?php echo$rev[0]->cin; ?>">
                    @if ($errors->has('cin'))
                                            <span style="color: red;">{{ $errors->first('cin') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                <label for="title">Rendez-vous titre :</label>
                <input type="title" class="form-control" id="title" placeholder="Examination" name="title" value="<?php echo$rev[0]->title; ?>">
                @if ($errors->has('title'))
                                        <span style="color: red;">{{ $errors->first('title') }}</span>
                                        @endif
                </div>
                <div class="form-group">
                    <label for="observation">Observation :</label>
                    <textarea name="observation" id="observation" class="form-control" name="observation" value="<?php echo$rev[0]->observation; ?>"></textarea>
                    
                    @if ($errors->has('observation'))
                                            <span style="color: red;">{{ $errors->first('observation') }}</span>
                                            @endif
                </div>

                <div class="form-group">
                    <label for="start">Date debut :</label>
                    <input type="text" readonly class="form-control" id="start" placeholder="Examination" name="start" value="<?php echo$rev[0]->start; ?>">
                    
                    @if ($errors->has('start'))
                                            <span style="color: red;">{{ $errors->first('start') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="end">Date fin :</label>
                    <input type="text" readonly class="form-control" id="end" placeholder="Examination" name="end" value="<?php echo$rev[0]->end; ?>">
                    
                    @if ($errors->has('start'))
                                            <span style="color: red;">{{ $errors->first('start') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistré</button>
                </div>



            </form>
            </div>

 @endsection