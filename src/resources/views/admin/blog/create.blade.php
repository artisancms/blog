@extends('admin::layouts.starter')

@section('content-header')
    <h1>
        Blog
    </h1>
@stop

@section('content')

    <form action="/admin/blog/create" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input 
                                type="text"
                                class="form-control"
                                id="title"
                                placeholder="Title"
                                name="title"
                                value="{{ old('title') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Sub Title</label>
                            <input 
                                type="text"
                                class="form-control"
                                id="subtitle"
                                placeholder="Sub Title"
                                name="subtitle"
                                value="{{ old('subtitle') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                              
                            <textarea 
                                class="textarea"
                                name="body"
                                placeholder="Your content here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                            >
                                {{ old('body') }}    
                            </textarea>
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
                              <input
                                type="text"
                                class="form-control pull-right"
                                id="datepicker"
                                name="publish_date"
                                value="{{ old('publish_date') }}"
                              >
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                            <label>Publish Time:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                              </div>
                              <input
                                type="text"
                                class="form-control pull-right timepicker"
                                name="publish_time"
                                value="{{ old('publish_time') }}"
                              >
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
        var simplemde = new SimpleMDE();
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
