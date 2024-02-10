@extends('main');

@section('title', '| All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2" style="margin: auto">
            <a href="{{ route('posts.create') }}" class="btn btn-block btn-primary ">Create New Post</a>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ttile</th>
                        <th scope="col">Body</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allposts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->description, 0 ,50) }} {{ strlen($post->description)>50 ? "..." : "" }} </td>
                            <td>{{ date("F j, Y, g:i a", strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-light btn-sm">View</a> 
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-light btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="text-center"> --}}
                {!! $allposts->links() !!}
                {{-- {{ $allposts->render() }} --}}
            {{-- </div> --}}

        </div>
    </div>
@endsection
