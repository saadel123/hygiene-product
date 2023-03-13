@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center">
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('danger'))
    <div class="alert alert-success alert-block text-center">
        <strong>{{ $message }}</strong>
    </div>
@endif
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
