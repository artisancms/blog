@extends('admin::layouts.starter')

@section('content-header')
    <h1>
        Blog
    </h1>
@stop

@section('content')
    
    @if (isset($post))
        {!! Form::model($post, ['url' => '/admin/blog/' . $post->id]) !!}
    @else
        
        {!! Form::open(['url' => '/admin/blog/create']) !!}
    @endif
        <div class="row">
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            {!! Form::text('title', old('title'), [
                                    'class' => 'form-control',
                                    'id' => 'title',
                                    'placeholder' => 'Title'
                                ]) !!}
                            
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Sub Title</label>
                            {!! Form::text('subtitle', old('subtitle'), [
                                    'class' => 'form-control',
                                    'id' => 'subtitle',
                                    'placeholder' => 'Sub Title'
                                ]) !!}
                        </div>
                        <div class="form-group">
                            <label>Teaser</label>
                            {!! Form::textarea('teaser', old('teaser'), [
                                    'class' => 'form-control',
                                    'id' => 'teaser',
                                    'placeholder' => 'Brief tease of the post',
                                    'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'
                                ]) !!}
                            
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            {!! Form::textarea('body', old('body'), [
                                    'class' => 'form-control',
                                    'id' => 'post-body',
                                    'placeholder' => 'Your markdown content here',
                                    'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'
                                ]) !!}
                            
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </div>
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Publish Date:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              {!! Form::text('publish_date', old('publish_date'), [
                                    'class' => 'form-control pull-right',
                                    'id' => 'datepicker',
                              ]) !!}
                              
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                            <label>Publish Time:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                              </div>
                              {!! Form::text('publish_time', old('publish_time'), [
                                    'class' => 'form-control pull-right timepicker',
                              ]) !!}
                              
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                            <label>Author:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                              </div>
                              <select
                                class="form-control pull-right"
                                name="author_id"
                              >
                                <option value="1">1</option>
                              </select>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div>
        </div>
    </form>

@stop

@section('styles')
    {{-- <link rel="stylesheet" href="/cms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> --}}
    <link rel="stylesheet" href="/cms/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="/cms/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="/cms/plugins/timepicker/bootstrap-timepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@stop

@section('scripts')
    <!-- Bootstrap WYSIHTML5 -->
    {{-- <script src="/cms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/cms/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="/cms/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="/cms/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("post-body") });
      $(function () {
         //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
        //Timepicker
        $('.timepicker').timepicker();

        // $(".textarea").wysihtml5();
        //Date range picker with time picker
        // $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      });
    </script>

@stop
