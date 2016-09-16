@extends('template')

@section('body')
    @foreach ($posts as $post)
        <article class="blog">
            <div class="date">
                <time datetime="{{ $post->created_at }}">{{ $post->created_at->format('d/m/Y') }}</time>
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
            <span class="weight-1">paradise</span>
            <span class="weight-1">magic</span>
            <span class="weight-1">grid</span>
            <span class="weight-1">laravel51</span>
            <span class="weight-1">dead</span>
            <span class="weight-1">misdirection</span>
            <span class="weight-5">symblog</span>
            <span class="weight-1">daftpunk</span>
            <span class="weight-2">hacking</span>
            <span class="weight-1">zero</span>
            <span class="weight-1">one</span>
            <span class="weight-1">alive</span>
            <span class="weight-1">leaky</span>
            <span class="weight-1">binary</span>
            <span class="weight-1">pool</span>
            <span class="weight-1">hacked</span>
            <span class="weight-4">movie</span>
            <span class="weight-1">php</span>
            <span class="weight-1">!trusting</span>
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