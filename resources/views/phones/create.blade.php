@section('title')
    New Phone
@endsection

@extends('layouts.master')

@section('main')
    <h1>New Phones</h1><br>
    <div class="col-10 offset-1">
        <form action="/phones" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name" class="form-control"><br>
            <input type="text" name="brand" placeholder="brand" class="form-control" id="brand"><br>
            <input type="number" name="price" placeholder="price" class="form-control" id="price"><br>
            <button type="submit" class="btn btn-success form-control">Save</button>
        </form>
        @if ($errors->any())
            <p class="err">There was an erros, you skipped a field</p>
        @endif
    </div>
@endsection