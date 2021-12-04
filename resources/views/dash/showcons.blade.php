
@extends('layouts.dash')
@section('content')

<div class="container">
    <h1>Information sur la consultation</h1><br>
    @include('flash-message')
    <br>

    <form method="POST" class="newline" id="newline" action="/consultation/edit/<?php echo$rev[0]->id; ?>">
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
            <label for="genre">Operation : </label>
            <select class="form-control" name="operation" id="operation" value="<?php echo$rev[0]->operation; ?>">

              <option class="packz" id="">Nouvelle controle</option>
              <option class="packz" id="">Consultation</option>
             
        
        
            </select>
            @if ($errors->has('pack_name'))
                                    <span style="color: red;">{{ $errors->first('pack_name') }}</span>
                                    @endif
          </div>
        <div class="form-group">
        <label for="prix">Prix :</label>
        <input type="NUMBER" class="form-control" id="prix" placeholder="200DH" name="prix" value="<?php echo$rev[0]->prix; ?>">
        @if ($errors->has('prix'))
                                <span style="color: red;">{{ $errors->first('prix') }}</span>
                                @endif
        </div>
        <div class="form-group">
            <label for="poid">Poind :</label>
            <input type="poid" class="form-control" id="poid" placeholder="70KG" name="poid" value="<?php echo$rev[0]->poid; ?>">
            @if ($errors->has('poid'))
                                    <span style="color: red;">{{ $errors->first('poid') }}</span>
                                    @endif
            </div>
        <div class="form-group">
            <label for="observation">Observation :</label>
            <textarea name="observation" id="observation" class="form-control" name="observation"> <?php echo$rev[0]->observation; ?></textarea>
            
            @if ($errors->has('observation'))
                                    <span style="color: red;">{{ $errors->first('observation') }}</span>
                                    @endif
        </div>

        <div class="form-group">
            <label for="start">Date operation :</label>
            <input type="text" readonly class="form-control" id="date_operation"  name="date_operation" value="<?php echo$rev[0]->date_operation; ?>">
            
            @if ($errors->has('date_operation'))
                                    <span style="color: red;">{{ $errors->first('date_operation') }}</span>
                                    @endif
        </div>
       
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enregistré</button>
        </div>



    </form>

            </div>

 @endsection