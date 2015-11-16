@extends('site')

@section('topnav')
    @include('partials.topnav')
@endsection

@section('content')
    <ol>
    @foreach ($repos as $repo)
        <?php //var_dump($repo); ?>
        <li>{{ $repo->name }}</li>
    @endforeach
    </ol>

    <?php var_dump($pagination); ?>
@endsection