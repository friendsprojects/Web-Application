@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('needHeader')
    @include('include.header')
@endsection

@section('container')

    <h3>Dashboard</h3>
    <hr>
    <h4>Quick Access</h4>
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ URL::to('asset/view.png') }}" alt="edit" style="width:100%; padding-top: 10px">
                <div class="card-body">
                    <h4>View Books</h4>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <img src="{{ URL::to('asset/edit.png') }}" alt="edit" style="width:100%; padding-top: 10px">
                <div class="card-body">
                    
                    <h4>Edit Books</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ URL::to('asset/add.png') }}" alt="edit" style="width:100%; padding-top: 10px">
                <div class="card-body">
                    <h4>Add Books</h4>
                </div>
            </div>
        </div>
    </div>

    <hr>

@endsection