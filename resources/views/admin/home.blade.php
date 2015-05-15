@extends('admin.layout')
@section('title')
    Dashboard
@stop

@section('content')


<!-- BEGIN Page Title -->
<div class="page-title">
    <div>
        <h1><i class="fa fa-file-o"></i> Dashboard</h1>
        <h4>Overview, stats, chat and more</h4>
    </div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Home</li>
    </ul>
</div>
<!-- END Breadcrumb -->


<!-- BEGIN Tiles -->
<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <p class="title">FLATY - Responsive Admin Template</p>
                            <p>Based on twitter bootstrap, 9 predefined color, clean and minimal design, easy to change and etc.</p>
                            <div class="img img-bottom">
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 tile-active">
                        <a class="tile tile-pink" data-stop="3000" href="http://codecanyon.net/item/flaty-wp-premium-wordpress-flat-admin-template/5329999">
                            <div class="img img-center">
                                <img src="img/demo/wp-logo.png" />
                            </div>
                            <p class="title text-center">Visit FLATY wp</p>
                        </a>

                        <a class="tile tile-orange" href="http://codecanyon.net/item/flaty-wp-premium-wordpress-flat-admin-template/5329999">
                            <p>FLATY wp is new custom theme designed for the Wordpress admin.</p>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a class="tile tile-red" href="http://themeforest.net/item/flaty-premium-responsive-admin-template/5247864">
                            <div class="img img-center">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <p class="title text-center">Buy FLATY</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 tile-active">
                        <div class="tile tile-magenta">
                            <div class="img img-center">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <p class="title text-center">FLATY Admin</p>
                        </div>

                        <div class="tile tile-blue">
                            <p class="title">FLATY Admin</p>
                            <p>FLATY is the new premium and fully responsive admin dashboard template.</p>
                            <div class="img img-bottom">
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="tile tile-green">
                            <div class="img">
                                <i class="fa fa-copy"></i>
                            </div>
                            <div class="content">
                                <p class="big">+30</p>
                                <p class="title">Ready Page</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="row">
            <div class="col-md-6">
                <div class="tile tile-orange">
                    <div class="img">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="content">
                        <p class="big">128</p>
                        <p class="title">Comments</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile tile-dark-blue">
                    <div class="img">
                        <i class="fa fa-download"></i>
                    </div>
                    <div class="content">
                        <p class="big">+160</p>
                        <p class="title">Downloads</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 tile-active">
                <div class="tile tile-img" data-stop="3500" style="background-image: url(img/demo/gallery/5.jpg);">
                    <p class="title">Gallery</p>
                </div>

                <a class="tile tile-lime" data-stop="5000" href="gallery.html">
                    <p class="title">Gallery page</p>
                    <p>Click on this tile block to see our amazing gallery page. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="img img-bottom">
                        <i class="fa fa-picture-o"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- END Tiles -->


<!-- BEGIN Main Content -->
<div class="row">
    <div class="col-md-7">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bar-chart-o"></i> Visitors Chart</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                asdf
                asdf
                asdf
                asdf
                asd
                fasd
                f
                <div id="visitors-chart" style="margin-top:20px; position:relative; height: 290px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bar-chart-o"></i> Weekly Visitors Stat</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="weekly-stats">
                    <li>
                        <span class="inline-sparkline">134,178,264,196,307,259,287</span>
                        Visits: <span class="value">376</span>
                    </li>
                    <li>
                        <span class="inline-sparkline">89,124,197,138,235,169,186</span>
                        Unique Visitors: <span class="value">238</span>
                    </li>
                    <li>
                        <span class="inline-sparkline">625,517,586,638,669,698,763</span>
                        Page Views: <span class="value">514</span>
                    </li>
                    <li>
                        <span class="inline-sparkline">1.34,2.98,0.76,1.29,1.86,1.68,1.92</span>
                        Pages / Visit: <span class="value">1.43</span>
                    </li>
                    <li>
                        <span class="inline-sparkline">2.34,2.67,1.47,1.97,2.25,2.47,1.27</span>
                        Avg. Visit Time: <span class="value">00:02:34</span>
                    </li>
                    <li>
                        <span class="inline-sparkline">70.34,67.41,59.45,65.43,78.42,75.92,74.29</span>
                        Bounce Rate: <span class="value">73.56%</span>
                    </li>
                    <li>
                        <span class="inline-sparkline">78.12,74.52,81.25,89.23,86.15,91.82,85.18</span>
                        % New Visits: <span class="value">82.65%</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="box box-black">
            <div class="box-title">
                <h3><i class="fa fa-retweet"></i> Thing To Do</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="things-to-do">
                    <li>
                        <p>
                            <i class="fa fa-user"></i>
                            <span class="value">4</span>
                            Accept User Registration
                            <a class="btn btn-success" href="#">Go</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-comments"></i>
                            <span class="value">14</span>
                            Review Comments
                            <a class="btn btn-success" href="#">Go</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-shopping-cart blue"></i>
                            <span class="value">7</span>
                            Pending Orders
                            <a class="btn btn-success" href="#">Go</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-file-text-o"></i>
                            <span class="value">4</span>
                            New Invoice
                            <a class="btn btn-success" href="#">Go</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-gear"></i>
                            <span class="value">3</span>
                            Settings To Change
                            <a class="btn btn-success" href="#">Go</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box box-orange">
            <div class="box-title">
                <h3><i class="fa fa-bar-chart-o"></i> Weekly Changes</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="weekly-changes">
                    <li>
                        <p>
                            <i class="fa fa-arrow-up light-green"></i>
                            <span class="light-green">186</span>
                            New Comments
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-minus light-blue"></i>
                            <span class="light-blue">53</span>
                            New Users
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-down light-red"></i>
                            <span class="light-red">17</span>
                            New Articles
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-up light-green"></i>
                            <span class="light-green">75</span>
                            New Tickets
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-down light-red"></i>
                            <span class="light-red">74</span>
                            New Orders
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="box box-magenta">
            <div class="box-title">
                <h3><i class="fa fa-comment"></i> Last Comments</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="messages slimScroll" style="height: 300px">
                    <li>
                        <img src="img/demo/avatar/avatar2.jpg" alt="">
                        <div>
                            <div>
                                <h5>David</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 26 minutes ago</span>
                            </div>
                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure ...</p>
                            <div class="messages-actions">
                                <a class="show-tooltip" href="#" title="Approve"><i class="fa fa-check green"></i></a>
                                <a class="show-tooltip" href="#" title="Disapprove"><i class="fa fa-times orange"></i></a>
                                <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-trash-o red"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                        <div>
                            <div>
                                <h5>Sarah</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 1 days ago</span>
                            </div>
                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa.</p>
                            <div class="messages-actions">
                                <a class="show-tooltip" href="#" title="Approve"><i class="fa fa-check green"></i></a>
                                <a class="show-tooltip" href="#" title="Disapprove"><i class="fa fa-times orange"></i></a>
                                <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-trash-o red"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar4.jpg" alt="">
                        <div>
                            <div>
                                <h5>Emma</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 4 days ago</span>
                            </div>
                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                            <div class="messages-actions">
                                <a class="show-tooltip" href="#" title="Approve"><i class="fa fa-check green"></i></a>
                                <a class="show-tooltip" href="#" title="Disapprove"><i class="fa fa-times orange"></i></a>
                                <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-trash-o red"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar5.jpg" alt="">
                        <div>
                            <div>
                                <h5>John</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 2 weeks ago</span>
                            </div>
                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem...</p>
                            <div class="messages-actions">
                                <a class="show-tooltip" href="#" title="Approve"><i class="fa fa-check green"></i></a>
                                <a class="show-tooltip" href="#" title="Disapprove"><i class="fa fa-times orange"></i></a>
                                <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-trash-o red"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                        <div>
                            <div>
                                <h5>Penny <span class="label label-info">Admin</span></h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 14 July</span>
                            </div>
                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                            <div class="messages-actions">
                                <a class="show-tooltip" href="#" title="Approve"><i class="fa fa-check green"></i></a>
                                <a class="show-tooltip" href="#" title="Disapprove"><i class="fa fa-times orange"></i></a>
                                <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-trash-o red"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box box-red">
            <div class="box-title">
                <h3><i class="fa fa-tasks"></i> Tasks In Progress</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="tasks-in-progress">
                    <li>
                        <p>
                            Backend Development
                            <span>45%</span>
                        </p>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-warning" style="width:45%"></div>
                        </div>
                    </li>
                    <li>
                        <p>
                            Some Optimization On JS Code
                            <span>63%</span>
                        </p>
                        <div class="progress progress-mini">
                            <div class="progress-bar" style="width:63%"></div>
                        </div>
                    </li>
                    <li>
                        <p>
                            Writing Documentation
                            <span>30%</span>
                        </p>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-danger" style="width:30%"></div>
                        </div>
                    </li>
                    <li>
                        <p>
                            Android App Development
                            <span>80%</span>
                        </p>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-success" style="width:80%"></div>
                        </div>
                    </li>
                    <li>
                        <p>
                            Marketing
                            <span>35%</span>
                        </p>
                        <div class="progress progress-mini progress-striped">
                            <div class="progress-bar" style="width:35%"></div>
                        </div>
                    </li>
                    <li>
                        <p>
                            iOS App Developement
                            <span>55%</span>
                        </p>
                        <div class="progress progress-mini progress-striped">
                            <div class="progress-bar progress-bar-warning" style="width:55%"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="box box-pink">
            <div class="box-title">
                <h3><i class="fa fa-comments"></i> Chat</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="messages messages-chat messages-stripped messages-zigzag slimScroll" style="height:250px">
                    <li>
                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                        <div>
                            <div>
                                <h5>Penny</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 2 minutes ago</span>
                            </div>
                            <p>hey Sarah</p>
                            <p>how R U?</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                        <div>
                            <div>
                                <h5>Sarah</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 1 minutes ago</span>
                            </div>
                            <p>Hi Penny</p>
                            <p>Thanks, how are you ?</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                        <div>
                            <div>
                                <h5>Penny</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 47 seconds ago</span>
                            </div>
                            <p>ey, I'm good</p>
                            <p>what's up?</p>
                            <p>what's your plan for dinner?</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                        <div>
                            <div>
                                <h5>Sarah</h5>
                                <span class="time"><i class="fa fa-clock-o"></i> 12 seconds ago</span>
                            </div>
                            <p>Not much</p>
                            <p>I haven't any plan, why ?</p>
                        </div>
                    </li>
                </ul>

                <div class="messages-input-form">
                    <form method="POST" action="#">
                        <div class="input">
                            <input type="text" name="text" placeholder="Write here..." class="form-control">
                        </div>
                        <div class="buttons">
                            <a class="show-tooltip" href="#" title="Take Picture"><i class="fa fa-camera"></i></a>
                            <a class="show-tooltip" href="#" title="Attach File"><i class="fa fa-paperclip"></i></a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-share"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box box-green">
            <div class="box-title">
                <h3><i class="fa fa-check"></i> Todo List</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="todo-list">
                    <li>
                        <div class="todo-desc">
                            <p><a href="#">Fix some bugs</a></p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-important">Today</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="todo-desc">
                            <p>Add new product's description post</p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-important">Today</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="todo-desc">
                            <p><a href="#">Remove some posts</a></p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-warning">Tommorow</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="todo-desc">
                            <p>Shedule backups</p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-success">This week</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="todo-desc">
                            <p>Weekly sell report</p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-success">This week</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="todo-desc">
                            <p><a href="#">Hire developers</a></p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-info">Next week</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="todo-desc">
                            <p><a href="#">New frontend design</a></p>
                        </div>
                        <div class="todo-actions">
                            <span class="label label-info">Next week</span>
                            <a class="show-tooltip" href="#" title="It's done"><i class="fa fa-check"></i></a>
                            <a class="show-tooltip" href="#" title="Remove"><i class="fa fa-times"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 @stop