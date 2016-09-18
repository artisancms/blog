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
                            <th>Progress</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->published_at }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>            
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $posts->links('admin::partials.pagination') }}
                </div>
            </div>
        </div>
        <div class="col-md-4">                
        </div>
    </div>
@stop
