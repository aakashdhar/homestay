<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">SB Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#customer"><i class="fa fa-fw fa-users"></i>   Customer <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="customer" class="collapse">
            <li>
                <a href="addcustomer.php">Add Customer</a>
            </li>
            <li>
                <a href="mycustomers.php">My Customers</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#plans"><i class="fa fa-fw fa-bars"></i>   Plans <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="plans" class="collapse">
            <li>
                <a href="newplans.php">Add Plans</a>
            </li>
            <li>
                <a href="viewplans.php">View Plans</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
          <ul id="demo" class="collapse">
              <li>
                  <a href="#">Dropdown Item</a>
              </li>
              <li>
                  <a href="#">Dropdown Item</a>
              </li>
          </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>
