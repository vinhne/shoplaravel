@extends('admin.layout')

@section('title')
    Create category
@stop


@section('content')



<div class="col-md-12">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/category/add') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">Category parent</label>
                <div class="col-md-6">
                    <?php echo $selectcategory; ?>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Description</label>
                <div class="col-md-6">
                    <script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
                    <script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
                    <script type="text/javascript">
                        editor_config.selector = "textarea";
                        editor_config.language = 'en';
                        tinymce.init(editor_config);
                    </script>

                    <textarea id="description" name="description">{{ old('description') }}</textarea>

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Status</label>
                <div class="col-md-6">
                    <input type="radio" checked="checked" name="status" value="1" />Enabled
                        <input type="radio" checked="checked" name="status" value="0" />Disabled


                </div>
            </div>






            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>


</div>


@stop