<div class="page-header navbar navbar-fixed-top">

            <div class="page-header-inner ">

                <!-- logo start -->

                <div class="page-logo">

                    <a href="index.php"><!-- 

                    <img alt="" src="assets/img/logo.png"> -->

                    <span class="logo-default" >Pitchar Admin</span> </a>

                </div>

                <!-- logo end -->

				<ul class="nav navbar-nav navbar-left in">

					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>

				</ul>

                 <form class="search-form-opened" action="#" method="GET">

                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search..." name="query">

                        <span class="input-group-btn search-btn">

                          <a href="javascript:;" class="btn submit">

                             <i class="icon-magnifier"></i>

                           </a>

                        </span>

                    </div>

                </form>

                

                <!-- start mobile menu -->

                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">

                    <span></span>

                </a>

               <!-- end mobile menu -->

                <!-- start header menu -->

                <div class="top-menu">

                    <ul class="nav navbar-nav pull-right">

                        <!-- start notification dropdown -->

                        <!-- <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">

                            

                            <ul class="dropdown-menu animated swing">

                                

                                <li>

                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">

                                        <li>

                                            <a href="javascript:;">

                                                <span class="time">just now</span>

                                                <span class="details">

                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="javascript:;">

                                                <span class="time">3 mins</span>

                                                <span class="details">

                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>

                                                <b>John Micle </b>is now following you. </span>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="javascript:;">

                                                <span class="time">7 mins</span>

                                                <span class="details">

                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>

                                                <b>Sneha Jogi </b>sent you a message. </span>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="javascript:;">

                                                <span class="time">12 mins</span>

                                                <span class="details">

                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>

                                                <b>Ravi Patel </b>like your photo. </span>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="javascript:;">

                                                <span class="time">15 mins</span>

                                                <span class="details">

                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="javascript:;">

                                                <span class="time">10 hrs</span>

                                                <span class="details">

                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>

                                            </a>

                                        </li>

                                    </ul>

                                    <div class="dropdown-menu-footer">

                                        <a href="javascript:void(0)"> All notifications </a>

                                    </div>

                                </li>

                            </ul>

                        </li> -->

                        <!-- end notification dropdown -->

                        <!-- start message dropdown -->

                 <!--        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">

                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                                <i class="fa fa-envelope-o"></i>

                                <span class="badge headerBadgeColor2 noofunread"> </span>

                            </a>

                            <ul class="dropdown-menu animated slideInDown">

                                <li class="external">

                                    <h3><span class="bold">Messages</span></h3>

                                    <span class="notification-label cyan-bgcolor howmanyunread">New 2</span>

                                </li>

                                <li>

                                    <ul class="dropdown-menu-list small-slimscroll-style" id="showMessage" data-handle-color="#637283">

                                        

                                    </ul>

                                    <div class="dropdown-menu-footer">

                                        <a href="#"> All Messages </a>

                                    </div>

                                </li>

                            </ul>

                        </li> -->

                        <!-- end message dropdown -->

 						<!-- start manage user dropdown -->

<?php 



$admin_name=mysqli_query($conn,"SELECT * FROM admin");



 $name= mysqli_fetch_array($admin_name);



?>

 						<li class="dropdown dropdown-user">

                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />

                                <span class="username username-hide-on-mobile"><?php echo $name['firstname'].' '.$name['lastname'] ; ?></span>

                                <i class="fa fa-angle-down"></i>

                            </a>

                            <ul class="dropdown-menu dropdown-menu-default animated jello">

                                <li>

                                    <a href="user_profile.php">

                                        <i class="icon-user"></i> Profile </a>

                                </li>

<!--                                 <li>

                                    <a href="#">

                                        <i class="icon-settings"></i> Settings

                                    </a>

                                </li>

                                <li>

                                    <a href="#">

                                        <i class="icon-directions"></i> Help

                                    </a>

                                </li>

                                <li class="divider"> </li>

                                <li>

                                    <a href="lock_screen.html">

                                        <i class="icon-lock"></i> Lock

                                    </a>

                                </li> -->

                                <li>

                                    <a href="logout.php">

                                        <i class="icon-logout"></i> Log Out </a>

                                </li>

                            </ul>

                        </li>

                        <!-- end manage user dropdown -->

               <!--          <li class="dropdown dropdown-quick-sidebar-toggler">

                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">

	                           <i class="material-icons">settings</i>

	                        </a>

                        </li> -->

                    </ul>

                </div>

            </div>

        </div>