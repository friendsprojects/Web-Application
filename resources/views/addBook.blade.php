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
                <div class="form-inline">
                    <input typer="text" class="form-control col" id="author_name1" name="author_name1">
                    <input typer="text" class="form-control multi-btn col" id="author_name2" name="author_name2">
                    <input typer="text" class="form-control col" id="author_name3" name="author_name3">
                </div>
                
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="genre">Geren</label>
                <div class="form-inline">
                    <input typer="text" class="form-control col" id="genre1" name="genre1">
                    <input typer="text" class="form-control multi-btn col" id="genre2" name="genre2">
                    <input typer="text" class="form-control col" id="genre3" name="genre3">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="keywords">Keywords</label>
                <div class="form-inline">
                    <input typer="text" class="form-control col" id="keywords1" name="keywords1">
                    <input typer="text" class="form-control multi-btn col" id="keywords2" name="keywords2">
                    <input typer="text" class="form-control col" id="keywords3" name="keywords3">
                </div>
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