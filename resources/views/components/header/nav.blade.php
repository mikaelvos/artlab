@php
    $articles = [['intro', 'Introduction'], ['intro', 'Introduction']];
@endphp
<div class="grid grid-cols-3 md:grid-cols-5 gap-2 pb-2">

    @foreach($articles as $article)
        <div class="row">
            <a href="#{{ $article[0] }}">
                <div class="bg-blue-700/80 hover:bg-blue-800 rounded-md p-auto text-white uppercase  p-2 font-bold">
                    {{ $article[1] }}
                </div>
            </a>
        </div>
    @endforeach

</div>


