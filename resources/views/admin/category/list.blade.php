@extends('admin.layout')

@section('title')
Danh sách danh mục
@stop


@section('content')
    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-list-alt"></i> Danh sách danh mục</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->


<div class="addcategory">
    <button onclick="addcategory()">Thêm danh mục</button>
</div>
<div style="display: none" id="dialog_add">
    @include('admin.category.add',array('selectcategory'=>$selectcategory))
</div>


<?php echo $categorys; ?>

<?php
echo Form::open(['url'=>'', 'method'=>'post', 'class'=>'formcontainer', 'id'=>'leadscreate']);

 echo  Form::label('nomopportunite','Nom du lead');
echo  Form::text('nomopportunite', '', array('id'=>'nomopportunite1', 'class'=>'form-control', 'placeholder'=>'Nom du lead'));

echo Form::label('statut','Statut');
echo  Form::select('statut', array('1' => 'Premier contact', '2' => 'En négociation', '3' => 'Fermé - Gagné', '4' => 'Fermé - Perdu'), '', array('id'=>'statut1')) ;

echo  Form::label('valeur','Valeur');
echo Form::text('valeur', '', array('id'=>'valeur1', 'class'=>'form-control', 'placeholder'=>'Valeur ($)'));

echo  Form::submit('Ajouter', array('class'=>'btn btn-primary'));
echo  Form::close(); ?>



<?php /*
<div class="about-section">
    <div class="text-content">
        <div class="span7 offset1">
            @if(Session::has('success'))
            <div class="alert-box success">
                <h2>{{ Session::get('success') }}</h2>
            </div>
            @endif
            <div class="secure">Upload form</div>
            <?php echo  Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)); ?>
            <div class="control-group">
                <div class="controls">
                    <?php echo  Form::file('image') ?>
                    <p class="errors">{{$errors->first('image')}}</p>
                    @if(Session::has('error'))
                    <p class="errors">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <div id="success"> </div>
            <?php
           // echo Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S');

            echo Form::submit('Submit', array('class'=>'send-btn')) ?>
            <?php  echo  Form::close() ?>
        </div>
    </div>
</div>

*/ ?>

<input type="button" value="Cập nhật thứ tự" class="btn-update" id="serialize" name="serialize">

<script>
    $('ol.sortable').nestedSortable({
        forcePlaceholderSize: true,
        handle: 'div',
        helper:	'clone',
        items: 'li',
        opacity: .6,
        placeholder: 'placeholder',
        revert: 250,
        tabSize: 25,
        tolerance: 'pointer',
        toleranceElement: '> div',
        maxLevels: 4,

        isTree: true,
        expandOnHover: 700,
        startCollapsed: true
    });

    $('#serialize').click(function(){
        var serialized = $('ol.sortable').nestedSortable('serialize');
        $('.err-full').show();
        var url =  '/category/updateorder';
        $.ajax({
            async : false,
            type: 'POST',
            dataType:'html',
            url: url,
            data :   serialized+'&_token=<?php echo  csrf_token(); ?>'  ,
            success : function (r) {
                $('.err-full').hide();
            }
        });
    });
    function addcategory(){

        $("#dialog_add").dialog({modal: true, height: 300, width: 400 });
        $("#dialog_add").dialog('option', 'title', 'Thêm danh mục mới');
    }



</script>








<?php /*
 <script src="{{asset('js/jquery-sortable.js')}}"></script>
<script>
    $(function(){

        var group = $("ol.serialization").sortable({
            group: 'serialization',
            delay: 500,
            onDrop: function (item, container, _super) {
                var data = group.sortable("serialize").get();
                // var data = group.sortable('serialize');
                //var jsonString = JSON.stringify(data, null, ' ');

                // $('#serialize_output2').text(jsonString);
                // _super(item, container)

                var url =  '/category/updateorder';

                $.ajax({
                    type: "POST",
                    url : url,
                    data:{
                        'jsonString':data ,
                        '_token' :'<?php echo  csrf_token(); ?>'
                    },
                    dataType : "html",
                    success : function(data){

                    }
                });

            }
        })
    });
</script>
 */ ?>

@stop