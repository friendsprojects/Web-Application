@extends('layout.master')

@section('title')
    Add Books
@endsection

@section('needHeader')
    @include('include.header')
@endsection


@section('container')
    <h3>Add Books</h3>
    <hr>
    <form action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="book_name">Book Title</label>
                <input type="text" class="form-control" id="book_name" name="book_name">
            </div>
            <div class="form-group col-md-6">
                <label for="user_name">Admin Name</label>
                <input typer="text" class="form-control" id="user_name" name="user_name" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="author_name">Author Name</label>
                <input typer="text" class="form-control" id="author_name" name="author_name">
                
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="genre">Geren</label>
                <input typer="text" class="form-control" id="genre" name="genre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="keywords">Keywords</label>
                <input typer="text" class="form-control" id="keywords" name="keywords">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="summary">Summary</label>
                <textarea name="summary" id="summary" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pages">Pages</label>
                <input typer="text" class="form-control" id="pages" name="pages">
            </div>
            <div class="form-group col-md-6">
                <label for="released">Relearsed</label>
                <input typer="text" class="form-control" id="released" name="released">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="pdf_file">Document</label>
                <input class="form-control-file" id="pdf_file" type="file">
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right " style="align">Save Details</button>
    </form>
    <br>
    <br>

@endsection