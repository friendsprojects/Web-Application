@extends('layout.master')

@section('title')
    Edit Books
@endsection

@section('needHeader')
    @include('include.header')
@endsection


@section('container')
    <h3>Edit Books</h3>
    <hr>
    <table class="table table-striped table-scroll table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>S. No.</th>
                <th class="col-md-1">Name</th>
                <th>Author</th>
                <th class="col-md-1">Genre</th>
                <th class="col-md-1">Keyword</th>
                <th class="col-md-4">Summary</th>
                <th>Pages</th>
                <th>Released On</th>
                <th>Added By</th>
                <th class="col-md-1">PDF Link</th>
                <th class="col-md-2">FrontPage</th>
                <th>Created At</th>
                <th>Last Modified At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Harry Potter and the Goblet of fire</td>
                <td>J.K. Rowling</td>
                <td>Genre</td>
                <td>Harry Potter, Potter Series, dark lord, goblet of fire</td>
                <td><p>The Triwizard Tournament is to be held at Hogwarts. Only wizards who are over seventeen are allowed to enter - but that doesn't stop Harry dreaming that he will win the competition. Then at Hallowe'en, when the Goblet of Fire makes its selection, Harry is amazed to find his name is one of those that the magical cup picks out. He will face death-defying tasks, dragons and Dark wizards, but with the help of his best friends, Ron and Hermione, he might just make it through - alive! These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers. It's time to PASS THE MAGIC ON .</p></td>
                <td>622</td>
                <td>September 2014</td>
                <td>Arush004</td>
                <td><a href="https://getbootstrap.com/docs/4.4/content/tables/" target="_blank">Harry Potter and the Goblet of fire</a></td>
                <td><img src="{{ URL::to('asset/HP and TGOF.jpg') }}" alt="Harry Potter and the Goblet of Fire" class="book-image"></td>
                <td>May 29 2020 19:45:50</td>
                <td>May 29 2020 19:45:50</td>
                <td>
                    <a href="#" class="icon" id="edit-btn">
                        <i class="far fa-edit"></i>
                    </a>  
                    <a href="" class="icon" id="delete-btn">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>

    <div class="modal" id="edit-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection