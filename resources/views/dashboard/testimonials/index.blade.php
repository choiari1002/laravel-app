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
            <li class="active"><a href="{!! URL::to('dashboard/testimonials') !!}">Testimonials</a></li>
        </ol>
    </div>
    <div id="page-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Testimonials</h3>
                    </div>
                    <div class="panel-body">

                        @include('dashboard.layout.messages.messages')

                        <div class="text-right">
                            <a href="{!! URL::to("/dashboard/testimonials/create") !!}" class="btn btn-primary">New Testimonial</a>
                        </div>

                        <table class="table table-striped table-bordered" style="margin-top: 20px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Active</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $testimonial)
                                    <tr>
                                        <td>{!! $testimonial->id !!}</td>
                                        <td>{!! $testimonial->name !!}</td>
                                        <td>{!! strlen($testimonial->content) > 150 ? mb_substr($testimonial->content, 0, 149).'...' : $testimonial->content !!}</td>
                                        <td><p class="{!! $testimonial->is_active ? 'text-success' : 'text-danger' !!}">{!! $testimonial->is_active ? 'Active' : 'Inactive' !!}</td>
                                        <td><a href="{!! $testimonial->get_testimonial_path() . '/edit' !!}">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="text-align: center;">
                            {!! $testimonials->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page-scripts')

@endsection
