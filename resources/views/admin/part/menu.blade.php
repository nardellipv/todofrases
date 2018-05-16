<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Categorías</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ url('category') }}">Agregar</a></li>
                    <li><a href="{{ url('list') }}">Listar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-file-text-o"></i>
                    <span>Frases</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ url('phrase') }}">Agregar</a></li>
                    <li><a href="{{ url('list') }}">Listar</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- sidebar menu end-->
</div>