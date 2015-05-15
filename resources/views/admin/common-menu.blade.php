<!-- BEGIN Navlist -->
<ul class="nav nav-list">
    <!-- BEGIN Search Form -->
    <li>
        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                            </span>
        </form>
    </li>
    <!-- END Search Form -->
    <li class="active">
        <a href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a href="{{ url('/category/list-category') }}">
            <i class="fa fa-list-alt"></i>
            <span>Danh mục</span>
        </a>

    </li>

    <li>
        <a href="#" >
            <i class="fa fa-book"></i>
            <span>Sản phẩm</span>

        </a>


    </li>

    <li>
        <a href="#" >
            <i class="fa fa-exclamation-circle"></i>
            <span>Tin tức</span>

        </a>

    </li>



</ul>
<!-- END Navlist -->

<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
    <i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->