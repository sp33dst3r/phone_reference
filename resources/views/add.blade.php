@extends('layouts.layout')
@section('content')

<?php
#dd($errors);

?>

<div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="post" action="{{ action('ReferenceController@save') }}">
        @csrf
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" class="form-control" id="name" name="name" maxlength="100" aria-describedby="emailHelp" placeholder="ФИО">
        </div>
        <div class="form-group">
            <label for="number">Номер</label>
            <input type="text" class="form-control" name="number" id="number" maxlength="20" placeholder="Номер">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

    @endsection
</div>
