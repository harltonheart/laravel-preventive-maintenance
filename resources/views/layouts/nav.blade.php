<nav id="sidebar">
    <div class="sidebar-header">
        <a href="/home" style="text-decoration: none"><h4 class="text-light"> Preventive Maintenance</h4></a>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#schedule" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nounderline">
                <i class="far fa-calendar"></i> Schedules
            </a>
            <ul class="collapse list-unstyled" id="schedule">
                <li>
                    <a href="/defaultschedule" class="nounderline"><i class="fas fa-clipboard-list"></i> Default Schedule <span class="text-danger" style="font-size: 10px">(View only)</span></a>
                </li>
                <li>
                    <a href="/schedule" class="nounderline"><i class="fas fa-search"></i> View Schedule</a>
                </li>
                @if(Auth::user()->username !== 'guest')
                    <li>
                        <a href="/createschedule" class="nounderline"><i class="far fa-calendar-plus"></i> 
                            Create New Schedule
                        </a>
                    </li>
                @endif
            </ul>
        </li>

        @if(Auth::user()->username !== 'guest')
            <li>
                <a href="{{ route('department') }}" class="nounderline">
                    <i class="far fa-plus-square mr-2"></i>Add New Department
                </a>
            </li>
            <li>
                <a href="{{ route('computer') }}" class="nounderline">
                    <i class="fas fa-folder-open mr-2"></i>Add New Preventive
                </a>
            </li>
        @endif

            <li>
                <a href="/search" class="nounderline">
                    <i class="fas fa-search"></i> Find Computer
                </a>
            </li>

        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="nounderline">
                {{ __('Logout') }} <small style="font-size: 11px">({{ Auth::user()->username }})</small>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
