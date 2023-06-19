@extends('layouts.main')

@section('title')
    Movies
@endsection

@section('content')

<main>

    <div class="container">
        <h1>La mia lista</h1>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Voto</th>
                    <th scope="col">View</th>

                </tr>
            </thead>
            <tbody>
                @foreach ( $movies as $movie )

                    <tr>
                            <th scope="row">{{ $movie->id }}</th>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->date }}</td>
                            <td>{{ $movie->vote }}</td>
                            <td>
                                <a href="{{ route('movie_detail' , ['slug' => $movie->slug]) }}" class="btn btn-dark">Vai alla copertina</a>
                            </td>

                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>

</main>

@endsection
