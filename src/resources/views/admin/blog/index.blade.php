@extends('admin::layouts.starter')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-danger">
                <div class="box-header with-border">
                <h3 class="box-title">Posts</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody><tr>
                            <th>Title</th>
                            <th>Published Date</th>
                            <th>Author</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{ url('admin/blog/' . $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </td>
                                <td>{{ $post->publish_at }}</td>
                                <td>{{ $post->author->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>            
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    
                        {{ $posts->links('admin::partials.pagination') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">                
        </div>
    </div>
@stop
