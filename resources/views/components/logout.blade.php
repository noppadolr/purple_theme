
<div>
    <!-- item-->
    <form method="post" action="{{route('logout')}}">
        @csrf
        <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault();
                                                this.closest('form').submit();" >
            <i class="fe-log-out"></i>
            <span>{{ $slot }}</span>
        </a>
    </form>
</div>
