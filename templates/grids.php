<?php require_once('header.php');?>
    
    <!-- main content start-->
		<div class="main-content main-content1">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="templates/images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="templates/images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="templates/images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="templates/js/classie.js"></script>
										<script src="templates/js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="templates/images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="templates/images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="templates/images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Michael<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>				             	
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<div class="md">
						<h3 class="blank1">Grids</h3>
						<div class="form-group">
						  <div class="row">
							<div class="col-md-12">
								<input type="text" class="form-control1" placeholder=".col-md-12">
							</div>
							<div class="clearfix"> </div>
						   </div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control1" placeholder=".col-md-10">
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-3">
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control1" placeholder=".col-md-9">
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-4">
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control1" placeholder=".col-md-8">
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
						<div class="form-group">
							<div class="row">
								<div class="col-md-5 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-5">
								</div>
								<div class="col-md-7">
									<input type="text" class="form-control1" placeholder=".col-md-7">
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-6">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control1" placeholder=".col-md-6">
								</div>
								<div class="clearfix"> </div>
							</div>
						   </div>	
						   <div class="form-group">
						<div class="row">
							<div class="col-md-4 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-4">
							</div>
							<div class="col-md-4 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-4">
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control1" placeholder=".col-md-4">
							</div>
							<div class="clearfix"> </div>
						</div>
						   </div>	
						   <div class="form-group">
						<div class="row">
							<div class="col-md-2 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-2">
							</div>
							<div class="col-md-8 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-8">
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control1" placeholder=".col-md-2">
							</div>
							<div class="clearfix"> </div>
						</div>
						   </div>	
						   <div class="form-group">
						<div class="row">
							<div class="col-md-3 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-3">
							</div>
							<div class="col-md-3 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-3">
							</div>
							<div class="col-md-3 grid_box1">
								<input type="text" class="form-control1" placeholder=".col-md-3">
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control1" placeholder=".col-md-3">
							</div>
							<div class="clearfix"> </div>
						</div>
						   </div>	
						   <div class="form-group mb-n">
						<div class="row">
								<div class="col-md-2 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="col-md-2 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="col-md-2 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="col-md-2 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="col-md-2 grid_box1">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="col-md-2">
									<input type="text" class="form-control1" placeholder=".col-md-2">
								</div>
								<div class="clearfix"> </div>
						</div>
						   </div>	
					</div>
					<div class="col-md-12 grids_bottom">
						<h3 class="blank1">Bootstrap Grid Details</h3>
						<div class="panel panel-default">
							<div class="panel-body grid_table">
								<table class="table table-bordered table-striped no-margin grd_tble">
									<thead>
										<tr>
											<th></th>
											<th>
												Extra small devices
												<small>Phones (&lt;768px)</small>
											</th>
											<th>
												Small devices
												<small>Tablets (≥768px)</small>
											</th>
											<th>
												Medium devices
												<small>Desktops (≥992px)</small>
											</th>
											<th>
												Large devices
												<small>Desktops (≥1200px)</small>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>Max container width</th>
											<td>None (auto)</td>
											<td>750px</td>
											<td>970px</td>
											<td>1170px</td>
										</tr>
										<tr>
											<th>Class prefix</th>
											<td><code>.col-xs-</code></td>
											<td><code>.col-sm-</code></td>
											<td><code>.col-md-</code></td>
											<td><code>.col-lg-</code></td>
										</tr>
										<tr>
											<th># of columns</th>
											<td colspan="4">12</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('footer.php');?>