@if ($errors->any())
    <div class="alert alert-danger mt-2 mb-2">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success mt-2 mb-2">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p>{{Session::get('success')}}</p>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger mt-2 mb-2">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p>{{Session::get('error')}}</p>
    </div>
@endif