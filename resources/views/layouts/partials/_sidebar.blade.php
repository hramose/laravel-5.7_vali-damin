<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
      <p class="app-sidebar__user-designation">Tech Geek</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item" href="{{ route('welcome') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Dropdown 1</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item One</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item Two</a></li>
      </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Dropdown 2</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item One</a></li>
        <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item Two</a></li>
      </ul>
    </li>
  </ul>
</aside>