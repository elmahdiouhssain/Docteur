
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur les patients</h1><br>
    @include('flash-message')
    <br>

    <form method="POST" class="newline" id="newline" action="/patients/edit/<?php echo$pack[0]->id; ?>">
                @csrf
                <div class="form-group">
                    <label for="fullname">Nom complète :</label>
                    <input type="fullname" class="form-control" id="fullname" placeholder="Ahmad el maki" name="fullname" value="<?php echo$pack[0]->fullname; ?>">
                    @if ($errors->has('fullname'))
                                            <span style="color: red;">{{ $errors->first('fullname') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="cin">Identité (cin) :</label>
                    <input type="cin" class="form-control" id="cin" placeholder="AE000000" name="cin" value="<?php echo$pack[0]->cin; ?>">
                    @if ($errors->has('cin'))
                                            <span style="color: red;">{{ $errors->first('cin') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                <label for="email">Address email :</label>
                <input type="email" class="form-control" id="email" placeholder="samir@gmail.com" name="email" value="<?php echo$pack[0]->email; ?>">
                @if ($errors->has('email'))
                                        <span style="color: red;">{{ $errors->first('email') }}</span>
                                        @endif
                </div>
                <div class="form-group">
                    <label for="tele">Telephone :</label>
                    <input name="tele" id="tele" class="form-control" name="tele" value="<?php echo$pack[0]->tele; ?>">
                    
                    @if ($errors->has('tele'))
                                            <span style="color: red;">{{ $errors->first('tele') }}</span>
                                            @endif
                </div>

                <div class="form-group">
                    <label for="date">Date de naissance :</label>
                    <input type="text" readonly class="form-control" id="date" placeholder="Examination" name="date" value="<?php echo$pack[0]->date; ?>">
                    
                    @if ($errors->has('date'))
                                            <span style="color: red;">{{ $errors->first('date') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="addr">Address local :</label>
                   <textarea name="addr" id="" class="form-control" value=""><?php echo$pack[0]->addr; ?>"</textarea>
                    @if ($errors->has('addr'))
                                            <span style="color: red;">{{ $errors->first('addr') }}</span>
                                            @endif
                </div>
                <div class="form-group">
                    <label for="genre">Genre : </label>
                    <select class="form-control" name="genre" id="genre" value="<?php echo$pack[0]->genre; ?>">

                      <option class="packz" id="">Masculin</option>
                      <option class="packz" id="">Feminin</option>
                     
                
                
                    </select>
                    @if ($errors->has('pack_name'))
                                            <span style="color: red;">{{ $errors->first('pack_name') }}</span>
                                            @endif
                  </div>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Enregistré</button>
                </div>



            </form>
            </div>

 @endsection