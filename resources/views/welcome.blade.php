@extends('layouts.layout')
@section('content')



@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<form id="search" method="get" action="{{ action('ReferenceController@index') }}">
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <div class="col-md-6">
                    <label for="name">ФИО</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="100" aria-describedby="emailHelp" placeholder="ФИО">
                </div>
                <div class="col-md-6">
                    <label for="number">Номер</label>
                    <input type="text" class="form-control" name="number" id="number" maxlength="20" placeholder="Номер">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary find-button">Найти</button>
        </div>
    </div>
</form>

<div class="col-md-12" id="workarea">
    @include('table')
</div>

@endsection


