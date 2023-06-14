@extends('layouts.admin')
@section('title') Категории! @parent  @stop
@section('adminsection') Категории @parent  @stop
@section('content')
    <?php foreach ($categories as $id=>$cat): ?>
    <a class="btn btn-sm btn-success"
       href="/news/category/<?= $id ?>">
        <?= $cat ?>
    </a>
    <?php endforeach; ?>
@stop
