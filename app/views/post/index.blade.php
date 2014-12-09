@extends(Config::get('view.layout'))

@section('content')

    @if (Auth::check())
        <div>
            {{ link_to_route('post.create', 'Create New Post', null, array('class' => 'btn btn-primary')) }}
        </div>
    @endif

    <table class="table table-hover table-striped">
        @foreach ($data as $node)
        <tr>
            <td>
                {{ link_to_route('post.show', $node->title, array('id' => $node->id)) }}
            </td>

            <td>
                {{ $node->body }}
            </td>

            <td>
                {{ $node->created_on }}
            </td>

            <td>

            </td>

            @if (Auth::check())

                <td>
                    {{ link_to_route('post.edit', 'edit' , array('id' => $node->id), array('class' => 'btn btn-primary')) }}
                </td>

                <td>
                    {{ Form::model($node, array('method' => 'DELETE', 'action' => array('post.delete', $node->id))) }}
                        {{ Form::submit('Submit', '', array('class' => 'btn btn-default')) }}
                    {{ Form::close(); }}

                </td>
            @endif
        </tr>
        @endforeach
    </table>
@stop