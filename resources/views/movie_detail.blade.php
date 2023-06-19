@extends('layouts.main')

@section('title')
    Dettagli
@endsection

@section('content')

<main>

    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cum quis, blanditiis quidem sed recusandae aspernatur officiis harum quod unde laboriosam ullam dolor dicta sequi eos eveniet, aliquid optio aliquam et, quasi porro perspiciatis nisi mollitia quia. Et cumque modi quo doloribus quibusdam consequuntur nulla iste, atque quod dolorum quaerat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam voluptatibus ea modi doloremque sequi accusantium, distinctio temporibus mollitia quidem fuga labore impedit dolore sed qui magni error libero blanditiis dignissimos. Blanditiis recusandae, molestiae odit qui beatae explicabo facere ducimus nostrum totam illo ab necessitatibus dolorem quo est in dolor animi atque voluptas voluptate nemo veniam! Facilis, odit eveniet in sapiente sequi, dolor omnis eius nemo repellat, asperiores nostrum ratione consectetur voluptatum mollitia eum natus animi? Vel eos neque sapiente laborum, excepturi ullam minus itaque rem ipsa sunt error eaque modi voluptatum voluptatem alias esse vitae maxime aperiam quidem aliquam omnis corrupti odio animi libero. Illo illum tempore atque in, rem, natus tenetur, laudantium pariatur molestias possimus eum impedit obcaecati quasi. Nam sunt deleniti architecto eius corrupti iure nesciunt qui iste, adipisci quisquam nisi pariatur voluptatibus. Unde corporis doloremque asperiores nihil nisi, eius aliquam cum at velit veniam quis dolore consectetur!</p>
        <div>Data: {{ $movie->date }}</div>
        <span>Voto: {{ $movie->vote }}</span>

        <div class="return"><a href="{{ route('movies') }}" class="btn btn-dark">Torna alla lista</a></div>
    </div>

</main>

@endsection
