@extends('_layout')
@section('content')
    <div>Новости</div>
    <?php foreach ($newsList as $id=>$news): ?>
    <div class="item">
        <div class="text-info">
            <a class=""
               href="/news/category/<?= $news['category'] ?>">
                <?= $categories[$news['category']] ?>
            </a>

        </div>
        <h2>
            <a href="/news/<?= $id ?>"><?= $news['title'] ?></a>
        </h2>
    </div>
    <div>
        <?= $news['description'] ?>
    </div>
    <div class="text-right">
        <?= $news['author'] ?>
    </div>
    <hr>
    <?php endforeach; ?>
@stop
