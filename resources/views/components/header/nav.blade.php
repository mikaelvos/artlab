
@php
     $articles = [['intro', 'Introduction'], ['intro', 'Introduction']];
@endphp

@foreach($articles as $article)
    <a href="#{{ $article[0] }}">{{ $article[1] }}</a>
@endforeach


