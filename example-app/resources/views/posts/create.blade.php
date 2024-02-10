@extends('main')

@section('title', '| Create Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
                {{Form::label('title', 'Title :')}}
                {{Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '30'))}}
                {{Form::label('description', 'Post Description :')}}
                {{Form::text('description', null, array('class' => 'form-control', 'required' => ''))}}
                {{Form::submit('Create Post', array('class' => "btn btn-success btn-lg btn-block", 'style' => 'margin-top:15px;'))}}
            {!! Form::close() !!}

            {{-- {!! Form::open(['route' => 'posts.store',]) !!}
                {{Form::label('title', 'Title :')}}
                {{Form::text('title', null, array('class' => 'form-control',))}}
                {{Form::label('description', 'Post Description :')}}
                {{Form::text('description', null, array('class' => 'form-control'))}}
                {{Form::submit('Create Post', array('class' => "btn btn-success btn-lg btn-block", 'style' => 'margin-top:15px;'))}}
            {!! Form::close() !!}  --}}

        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js')  !!}
    {{-- {{!! Html::script('js/parsley.min.js')  !!}} youtube shows curly braces --}}
@endsection