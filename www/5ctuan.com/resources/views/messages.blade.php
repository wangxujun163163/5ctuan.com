@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissable fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ $error }}
    </div>
    @endforeach
@endif

@if (session('message'))
    <div class="alert alert-success alert-dismissable fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session('message') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissable fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session('error') }}
    </div>
@endif