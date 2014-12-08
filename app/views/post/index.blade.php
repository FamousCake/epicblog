@extends(Config::get('view.layout'))

@section('content')
    @foreach ($data as $node)
        <div> {{ $node->title }} / {{ $node->body }} / {{ $node->created_at }}</div>
    @endforeach
@stop