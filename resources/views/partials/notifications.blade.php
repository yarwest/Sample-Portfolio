@if(Session::has('message'))
    <div class="site-alerts">
	   <p class="text-center alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger text-center">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
