@include('dashboard.layout.messages.messages')

<div class="form-group">
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        {!! Form:: text('name', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Slug</label>
    <div class="col-sm-10">
        {!! Form:: text('slug', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
        {!! Form:: textarea('content', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Thumbnail</label>
    <div class="col-sm-10">
        <input name="thumbnail" type="file" class="form-control">
    </div>
</div>
{{-- @if( isset( $mentor->photo) && $mentor->photo !== '' )
    <div class="form-group">
        <label class="col-sm-2 control-label">Current Image</label>
        <div class="col-sm-10">
            <img src="{!! asset("images/uploads/mentors/$mentor->photo") !!}" class="img-responsive">
        </div>
    </div>
@endif --}}

{{-- @if( $questions )
    @foreach($questions as $question)
        <div class="form-group">

            <div class="col-sm-10 col-sm-offset-2">
                <label class="control-label">{!! $question->question !!}</label>
                {!! Form:: text("answers[$question->id]", isset($answers[$question->id]) ? $answers[$question->id] : null, ['class'=>'form-control']) !!}
            </div>
        </div>
    @endforeach
@endif --}}


<div class="form-group">
    <label class="col-sm-2 control-label">Is Active</label>
    <div class="col-sm-10">
        {!! Form::checkbox('is_active', true, isset($testimonial->is_active) ? $testimonial->is_active : true) !!}
    </div>
</div>

<div class="panel-footer">
    <div class="row">
        <div class="col-sm-12 text-right">
            {!! Form:: submit('Submit', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
</div>