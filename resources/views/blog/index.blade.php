@extends('template')

@section('body')
    @foreach ($posts as $post)
        <article class="blog">
            <div class="date">
                <time datetime="{{ $post->created_at }}">{{ $post->created_at->format('l, F j, Y') }}</time>
            </div>
            <header>
                <h2><a href="#">{{ $post->title }}</a></h2>
            </header>

            <img src="images/{{ $post->image }}" />
            <div class="snippet">
                <p>{!! $post->content !!}</p>
                <p class="continue"><a href="#">Continue reading...</a></p>
            </div>
            <footer class="meta">
                <p>Comments: <a href="#comments">{{ $post->comments->count() }}</a></p>
                <p>Tags:
                    @foreach ($post->tags as $tag)
                        <a href="/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                    @endforeach
                </p>
                <p>Posted by <span class="highlight">{{ $post->author }}</span> at {{ $post->created_at->format('H:i:s') }}
            </footer>   
        </article>            
    @endforeach
@endsection

@section('sidebar')
    <section class="section">
        <header>
            <h3>Tag Cloud</h3>
        </header>
        <p class="tags">
            @foreach ($tags as $tag)
                <span class="weight-1">{{ $tag->name }}</span>
            @endforeach
        </p>
    </section>

    <section class="section">
        <header>
            <h3>Latest Comments</h3>
        </header>
        @foreach ($posts as $post)
            @foreach ($post->comments as $comment) 
                <article class="comment">
                    <header>
                        <p class="small"><span class="highlight">{{ $comment->name }} </span> commented on
                            <a href="/16/a-day-with-laravel51#comment-{{ $comment->id }}">
                                {{ $post->title }}
                            </a>
                            <em><time datetime="{{ $comment->created_at }}">{{ createdAgo($comment->created_at) }}</time></em>
                        </p>
                    </header>
                    <p>{{ $comment->comment }}</p>
                </article>
            @endforeach
        @endforeach
    </section>
@endsection