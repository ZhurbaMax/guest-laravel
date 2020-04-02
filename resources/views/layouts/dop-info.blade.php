@if(Session::has('info'))
    <div class="dop-info">
        {{ Session::get('info') }}
    </div>
@endif
