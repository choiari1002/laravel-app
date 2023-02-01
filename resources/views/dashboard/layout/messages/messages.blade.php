@if( isset( $errors) && $errors->any() )
    @foreach ( $errors->all() as $error )
        <div class="alert alert-danger alert-dismissible">
            {!! $error !!}
        </div>
    @endforeach
@endif
@if( Session::has('success') )
    <div class="alert alert-success alert-dismissible">
        <strong>Well done!</strong> {{ Session::get('success') }}
    </div>
@endif

@if( Session::has('warning') )
    <div class="alert alert-warning alert-dismissible">
        <strong>Warning</strong> {{ Session::get('warning') }}
    </div>
@endif

@if( Session::has('danger') )
    <div class="alert alert-danger alert-dismissible">
        <strong>Oh snap!</strong> {{ Session::get('danger') }}
    </div>
@endif