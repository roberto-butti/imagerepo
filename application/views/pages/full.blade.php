@layout('templates.main')
@section('content')
    <div class="post">
        <h1>{{ HTML::link('view/'.$photo->id, $photo->title) }}</h1>
        <p>{{ $photo->body }}</p>
        <p>{{ HTML::link('view/'.$photo->id, '&larr; Back to index.') }}</p>
    </div>
@endsection