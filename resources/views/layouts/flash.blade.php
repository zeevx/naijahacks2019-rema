@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ $message }}
</div>
@endif

@if($message = Session::get('failure'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ $message }}
</div>
@endif