    <div class="form-group">

        {{ Form::label('title', 'Title')}}
        {{ Form::text('title', null, ['class' => 'form-control form-control-sm'])}}

        @if($errors->has('title'))
        <p class="text-danger">{{ $errors->first('title') }}</p>
        @endif
    </div>
    <div class="form-group">

        {{ Form::label('body', 'Body')}}
        {{ Form::textarea('body', null, ['class' => 'form-control'])}}

        @if($errors->has('body'))
        <p class="text-danger">{{ $errors->first('body') }}</p>
        @endif
    </div>
    <div class="form-row">
        <div class="col-md">

            {{ Form::label('image', 'Image')}}
            {{ Form::file('image') , ['class' => 'form-control-file']}}

            @if($errors->has('image'))
            <p class="text-danger">{{ $errors->first('image') }}</p>
            @endif
        </div>

        <div class="col-md">
            {{ Form::submit(isset($buttonText) ? $buttonText : 'Create Post')}}
        </div>

    </div>