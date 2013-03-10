@layout('templates.main')
@section('content')
    @foreach ($photos as $photo)
        <div class="post">
            <h1>{{ HTML::link('view/'.$photo->id, $photo->title) }}</h1>
            <p>{{ substr($photo->body,0, 120).' [..]' }}</p>
            <p>{{ HTML::link('view/'.$photo->id, 'Read more &rarr;') }}</p>
        </div>
    @endforeach
@endsection