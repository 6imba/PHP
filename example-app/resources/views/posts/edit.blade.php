@extends("main")

@section('title', '| Edit Blog Post')

@section('content')
    <div class="row">
        {!! Form::model ($postinfo, ['route'=>['posts.update', $postinfo->id], 'method'=>'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title','Title : ')}}
            {{ Form::text('title', null, ["class"=>'form-control'])}}
            {{ Form::label('description','Description : ', ['class' => ['form-spacing-top']])}}
            {{ Form::textarea('description', null, ["class"=>'form-control'])}}
            {{-- {{ Form::textarea('description', null, ["class"=>'form-control', 'readonly'])}} --}}

        </div>
        <div class="col-md-4">
            <div class="well">
                <dl>
                    <dt>Created at : </dt>
                    <dd>{{ date('F j, Y, g:i a', strtotime($postinfo->created_at)) }}</dd>
                </dl>
                <dl>
                    <dt>Last updated : </dt>
                    <dd>{{ date('F j, Y, g:i a', strtotime($postinfo->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', [$postinfo->id], ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {{Form::submit('Save Chnages', ['class' => 'btn btn-success btn-block'])}}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
