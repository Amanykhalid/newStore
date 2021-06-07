{{-- @if (session()->has('success')) --}}
@if(isset($massage))
<div class="alert alert-{{$type}}">
    {{ session()->get('success') }}
    {{-- {{$massage}} --}}
</div>
@endif

{{-- @if (session()->has('error'))
<div class="alert alert-error">
    {{ session()->get('error') }}
</div>
@endif --}}