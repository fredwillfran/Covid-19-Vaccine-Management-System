@if (session()->has('success-message'))
    <div class="alert alert-success">
        {!! session()->get('success-message') !!}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
