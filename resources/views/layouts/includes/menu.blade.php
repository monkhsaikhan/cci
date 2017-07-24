<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Удирдлага</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Нийтлэл</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.post.index') }}"><i class="fa fa-circle-o"></i> Нийтлэл</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Төрөл</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-user"></i> <span>Хэрэглэгч</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file"></i> <span>Тохиргоо</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.menu.index') }}"><i class="fa fa-circle-o"></i> Цэс</a></li>
                    <li><a href="{{ route('admin.page.index') }}"><i class="fa fa-circle-o"></i> Хуудас</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>