<!--css classes: success, info , danger -->
@if(Session::has('flash_message'))
    <div class="alert alert-{{ Session::get('css_class') }} fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        {{ Session::get('flash_message') }}
        @if($errors->count()>0)
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
@endif