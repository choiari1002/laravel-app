@extends('dashboard.layout.layout')

@section('page-styles')

@endsection

@section('page-contents')

<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow">Testimonials</h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><i class="demo-pli-home"></i></a></li>
            <li><a href="{!! URL::to('dashboard/mentors') !!}">Testimonials</a></li>
            <li class="active">Create</li>
        </ol>
    </div>
    <div id="page-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create a testimonial</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url'=>"dashboard/testimonials", 'class'=>'form-horizontal', 'files'=>true]) !!}
                            @include('dashboard.testimonials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page-scripts')

@endsection