@extends('layouts.master')
@define( $remark_title = ['1','2','3','4','5','6','7','8','9','10'])
@define( $remark_category = ['Excellent','Good','Normal','Average'])
@section('content')
<div class="container top-space">
    <form action="/feedback/create" method="POST" class="">
                {{ csrf_field() }}
    <div class="panel">
        <h4 class="col-md-3">Student Details</h4>
        <div class="panel-body">
            <div class="col-md-12 bottom-space">
                <div class="form-group col-md-3" style="display:inline;">
                     <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id='department'
                                style="background:url ('{{ URL::to('/') }}{{'/assets/images/down-arrow.svg'}}')">
                            Department
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($departments as $dept)
                            <li><a>{{$dept->name}}</a></li>
                            @endforeach
                        </ul>
                    </div> 
                </div>     
                <div class="form-group col-md-3" style="display:inline;">
                     <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id='batch'>
                            Batch
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($batches as $batch)
                            <li><a>{{$batch->year}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="form-group col-md-3" style="display:inline;">
                     <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id='semester'>
                            Semester
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($semester as $sem)
                            <li><a>{{$sem->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="form-group col-md-3" style="display:inline;">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id='section'>
                            Section
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($sections as $section)
                            <li><a>{{$section->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <h4 class="col-md-3">Faculty Details</h4>
        <div class="panel-body">
            <div class="col-md-12 bottom-space">
                <div class="form-group col-md-4">
                    <label>Ramesh Ravichandran</label>
                </div>
                <div class="form-group col-md-4">
                    <label>Web Technology</label>
                </div>
                <div class="form-group col-md-4" style="display:inline;">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id='lab-section'>
                            Lab-Section
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($sections as $section)
                            <li><a>{{$section->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <h4 class="col-md-12">Feedback zone</h4>
        <div class="panel-body text-center">
            <div class="col-md-10 col-md-offset-1  bottom-space">
                <div class="row">
                    <label for="name" class="col-md-4 btn btn-default disabled">Categories</label>
                @foreach($remark_category as $category)
                    <div class="col-md-2 btn btn-default disabled">{{$category}}</div>
                @endforeach
                </div>
                @foreach($remark_title as $title)
                <div class="form-group row nav nav-pills">
                    <div for="name" class="col-md-4 btn btn-default disabled">{{$title}}</div>
                    @foreach($remark_category as $item)
                    <input type="radio" name="{{str_slug($title)}}" class="col-md-2 feedback-grid">
                    @endforeach
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
        <div class="top-space col-md-12 text-center">
            <button class="btn btn-primary btn-xlarge" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection

@section('script')

<script>
 $(function(){

    var caret= ' <span class="caret"></span>';
    
    $("#batch + .dropdown-menu li a").click(function(){
        
      $('#batch')
        .text($(this).text())
        .val($(this).text())
        .addClass('btn-primary').removeClass('btn-default')
        .append(caret);

   });

    $("#department + .dropdown-menu li a").click(function(){
      
      $('#department')
        .text($(this).text())
        .val($(this).text())
        .addClass('btn-primary').removeClass('btn-default')
        .append(caret);
    });
    $("#semester + .dropdown-menu li a").click(function(){
      
      $('#semester')
        .text($(this).text())
        .val($(this).text())
        .addClass('btn-primary').removeClass('btn-default')
        .append(caret);
    });
    
    $("#section + .dropdown-menu li a").click(function(){
      
      $('#section')
        .text($(this).text())
        .val($(this).text())
        .addClass('btn-primary').removeClass('btn-default')
        .append(caret);
    });
    
    $('#lab-section').addClass('disabled');
    $("#lab-section + .dropdown-menu li a").click(function(){
      
      $('#lab-section')
        .text($(this).text())
        .val($(this).text())
        .addClass('btn-primary').removeClass('btn-default')
        .append(caret);
    });

});
</script>
@endsection