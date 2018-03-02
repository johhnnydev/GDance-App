@section('sidebar')
<div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link color" href="#"><i class="fa fa-home icon-sidebar" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="#"><i class="fa fa-user-circle icon-sidebar" aria-hidden="true"></i>Add user</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="#"><i class="fa fa-empire icon-sidebar" aria-hidden="true"></i>Add violation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="#"><i class="fa fa-calendar icon-sidebar" aria-hidden="true"></i>Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="#"><i class="fa fa-area-chart icon-sidebar" aria-hidden="true"></i>Monthy report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="#"><i class="fa fa-paper-plane icon-sidebar" aria-hidden="true"></i>Message someone</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out icon-sidebar" aria-hidden="true"></i>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
        </ul>      
    </nav> 
</div>
@endsection