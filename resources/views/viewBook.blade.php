@extends('layout.master')

@section('title')
    View Books
@endsection

@section('needHeader')
    @include('include.header')
@endsection


@section('container')
    <h3>View Books</h3>
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
                <td><a href="https://getbootstrap.com/docs/4.4/content/tables/">Harry Potter and the Goblet of fire</a></td>
                <td><img src="{{ URL::to('asset/HP and TGOF.jpg') }}" alt="Harry Potter and the Goblet of Fire" class="book-image"></td>
                <td>May 29 2020 19:45:50</td>
                <td>May 29 2020 19:45:50</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>

@endsection