<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{$user->avatar}}" class="user-image" alt="User Image">
        <span class="hidden-xs">{{$user->name}}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{$user->avatar}}" class="img-circle" alt="User Image">
            <p>
                {{$user->name}}
                <small>{{$user->created_at}}</small>
            </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="/user/profile" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="/auth/logout" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>

