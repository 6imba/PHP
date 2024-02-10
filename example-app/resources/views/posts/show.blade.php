@extends("main")

@section('title', '| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $postinfo->title }}</h1> {{-- here $postinfo is a variable holding post_info(i.e : id,title,decription : cloumn_name) , therefore $postinfo->title will display title of post --}}
            <p class="lead"> {{ $postinfo->description }} </p> {{-- here $postinfo is a variable holding post_info(i.e : id,title,decription : cloumn_name) , therefore $postinfo->description will display description body of post --}}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl>
                    <dt>Created at : </dt>
                    <dd>{{ date("F j, Y, g:i a", strtotime($postinfo->created_at)) }}</dd>
                </dl>
                <dl>
                    <dt>Last updated : </dt>
                    <dd>{{ date("F j, Y, g:i a", strtotime($postinfo->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($postinfo->id), array('class' => 'btn btn-primary btn-block') ) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $postinfo->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Html::linkRoute('posts.index', 'Show All Posts', [], ['class' => 'btn btn-default btn-sm btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
