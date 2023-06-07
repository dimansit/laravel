@extends('_layout')
@section('content')
    <a href="/news/" class="btn btn-success btn-sm">< Назад</a>
    <h2><?= $news['title']; ?></h2>
    <div>
        <?=  $news['description']; ?>
    </div>
@stop
