  <?php
   date_default_timezone_set("Asia/Kolkata");
 //session_start();  

 if(isset($_SESSION["name"]))  
 {  
    $username = $_SESSION['name'];
	$userid = $_SESSION["user_id"];
	
 
 }  
 else  
 {  
      header("location:signin.php");  
 }
 $conn1 = DB(); 
 
 $stmt1 = $conn1->query("SELECT count(*) as total FROM task where assign_to = $userid && status=0");
 $data1 = $stmt1->fetch();
 $badge = $data1['total'];
	// $s_data = $conn->query("SELECT * FROM section order by id ");
	// $sidedata = $s_data->fetchAll(PDO::FETCH_OBJ);
	
 ?>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .main-menu.menu-light .navigation>li ul 
  {
    font-size: .94rem;
    margin: -9px;
    padding: 0;
  }
  </style>

  <!-- BEGIN: Main Menu-->

  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">

    <div class="navbar-header">

      <ul class="nav navbar-nav flex-row">

        <li class="nav-item mr-auto"><a class="navbar-brand" href="http://localhost/infotech/admin/index.php"><img class="brand-logo" alt="Chameleon admin logo" src="app-assets/images/logo/logo.png"/>

           <!--  <h3 class="brand-text">Chameleon</h3> --></a></li>

        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="fa fa-times"></i></a></li>

      </ul>

    </div>  <div class="navigation-background"></div>

    <div class="main-menu-content">
    <ul class="navigation navigation-main " id="main-menu-navigation" data-menu="menu-navigation">

      <li class=" nav-item"><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>
    <li class=" nav-item "><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/website_content.png" alt="dashboard" /><span class="menu-title" data-i18n="">Website Content</span></a> 
   
   <!--?php $role_id='';
   if($role_id == 2){?> 
	
      <ul class="menu-content">
    <ul class="navigation navigation-main left_align" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Contact Us</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Contact Page Details</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-contact-details.php">Add Details</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-contact-details.php">Manage Details</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Contact Us Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/query-list.php">Queries list</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/career.png" alt="" /><span class="menu-title" data-i18n="">Career</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Jobs</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-jobs.php">Add Jobs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-jobs.php">Manage Jobs</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Job Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/job-query.php">Job Queries List</a>

                </li>

              </ul>

            </li>

          </ul>

        </li>
 <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/dashboard.png" alt="" /><span class="menu-title" data-i18n="">Marketing Material</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Marketing Material </a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/designs.php">Logo & Designs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/branding-material.php">Branding material</a>

                </li>

              </ul>

            </li>  
		 </ul>
	</li>
      </ul>

 
 <!--?php } elseif($role_id == 3){?>
 
     <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>
  

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Blogs</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Categories</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-blog-cat.php">Add Categories</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-blog-cat.php">Manage Categories</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Blogs</a>

              <ul class="menu-content">

              
                <li><a class="menu-item" href="http://localhost/infotech/admin/add-blogs.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-blogs.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
 <li><a class="menu-item" href="#">Manage FAQ's</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-faq.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-faq.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
          </ul>

        </li>
 <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/dashboard.png" alt="" /><span class="menu-title" data-i18n="">Marketing Material </span></a>
              <ul class="menu-content">
            <li><a class="menu-item" href="http://localhost/infotech/admin/uploads.php">Uploads</a>

                </li>
              <li><a class="menu-item" href="http://localhost/infotech/admin/designs.php">Logo & Designs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/branding-material.php">Branding material</a>

                </li>

              </ul>
	</li>
      </ul>

   
   <!--?php }else{ ?-->
     <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

       <!-- <li class=" nav-item"><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>-->
  
  <?php 
 
  $reg = '/^[0-9\,]+$/';
  
	$stmtside = $conn1->query("SELECT role_id FROM admin where name='$username'"); 
	$dataside = $stmtside->fetch();
	$role_id = $dataside['role_id'];

	if ($role_id != 0){
	$stmtsidebar = $conn1->query("SELECT * FROM permission where user_id = $userid ");
	$datasidebar = $stmtsidebar->fetchAll();
	foreach ($datasidebar as $row) { 
							  	
								$pid = $row['section'];
							
								$stmt2 = $conn1->query("SELECT * FROM section where id in ($pid)");

								$section = $stmt2->fetchAll();
					
	
			foreach ($section as $menu) {
				
				if(preg_match($reg, $menu['link'])){ 
		
		?>
		<li class="nav-item"><a href="#"><img src="<?php echo $menu['icon']; ?>" alt="" /><span class="menu-title" data-i18n=""><?php echo $menu['name']; ?></span></a>

		
          <ul class="menu-content">
		  
		 <?php
							  // $st1 = $conn1->query("SELECT * FROM section where id in ($pid)");
							  // $st_data = $st1->fetchAll();
							  
							  // foreach ($st_data as $st_data1 ) {
							  
								$mid = $menu['link'];
							
								$s_data = $conn1->query("SELECT * FROM sidebar where id in ($mid)");

								$m_data = $s_data->fetchAll();
								
								
								foreach ($m_data as $sub_data) {
									if(preg_match($reg, $sub_data['link'])){ 
				

		?>		 
			
                <li><a class="menu-item" href="<?php echo $sub_data['link']; ?>"><?php echo $sub_data['name']; ?></a>
				<ul class="menu-content">
				
				<?php   
				$sid = $sub_data['link'];
				
				$sub_data = $conn1->query("SELECT * FROM submenu where id in ($sid)");

				$sidedata = $sub_data->fetchAll();
				
				foreach ($sidedata as $side) { ?>
				
					

					<li><a class="menu-item" href="http://localhost/infotech/admin/<?php echo $side['link']; ?>"><?php echo $side['name']; ?></a>

					</li>

				
				
							<?php	
										}
							?>
							</ul>
						</li>
							
							<?php
									}
									else {
								?>
										 <li><a class="menu-item" href="http://localhost/infotech/admin/<?php echo $sub_data['link']; ?>"><?php echo $sub_data['name']; ?></a>
										 </li>
							<?php
									}
								}
								
							  //}
							?>

                <!--li><a class="menu-item" href="http://localhost/infotech/admin/manage-services.php">Manage Services</a>

                </li>

				<li><a class="menu-item" href="http://localhost/infotech/admin/add-services-inner.php">Add Services Inner</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-services-inner.php">Manage Services Inner</a>

                </li-->

          </ul>

        </li>

	<?php } 
	else {
	?>	
	
	<li class="nav-item"><a href="http://localhost/infotech/admin/<?php echo $menu['link']; ?>"><img src="<?php echo $menu['icon']; ?>" alt="" /><span class="menu-title" data-i18n=""><?php echo $menu['name']; ?></span></a>
	</li>
	<?php	
	}
		}
	}
	}
	else {
		$stmt2 = $conn1->query("SELECT * FROM section order by id asc ");
		$section = $stmt2->fetchAll();
		
			foreach ($section as $menu) {
				
				if(preg_match($reg, $menu['link'])){ 
		
		?>
		<li class="nav-item"><a href="#"><img src="<?php echo $menu['icon']; ?>" alt="" /><span class="menu-title" data-i18n=""><?php echo $menu['name']; ?></span></a>

		
          <ul class="menu-content">
		  
		 <?php
							  // $st1 = $conn1->query("SELECT * FROM section where id in ($pid)");
							  // $st_data = $st1->fetchAll();
							  
							  // foreach ($st_data as $st_data1 ) {
							  
								$mid = $menu['link'];
							
								$s_data = $conn1->query("SELECT * FROM sidebar where id in ($mid)");

								$m_data = $s_data->fetchAll();
								
								
								foreach ($m_data as $sub_data) {
									if(preg_match($reg, $sub_data['link'])){ 
				

		?>		 
			
                <li><a class="menu-item" href="<?php echo $sub_data['link']; ?>"><?php echo $sub_data['name']; ?></a>
				<ul class="menu-content">
				
				<?php   
				$sid = $sub_data['link'];
				
				$sub_data = $conn1->query("SELECT * FROM submenu where id in ($sid)");

				$sidedata = $sub_data->fetchAll();
				
				foreach ($sidedata as $side) { ?>
				
					

					<li><a class="menu-item" href="http://localhost/infotech/admin/<?php echo $side['link']; ?>"><?php echo $side['name']; ?></a>

					</li>

				
				
							<?php	
										}
							?>
							</ul>
						</li>
							
							<?php
									}
									else {
								?>
										 <li><a class="menu-item" href="http://localhost/infotech/admin/<?php echo $sub_data['link']; ?>"><?php echo $sub_data['name']; ?></a>
										 </li>
							<?php
									}
								}
								
							  //}
							?>

                <!--li><a class="menu-item" href="http://localhost/infotech/admin/manage-services.php">Manage Services</a>

                </li>

				<li><a class="menu-item" href="http://localhost/infotech/admin/add-services-inner.php">Add Services Inner</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-services-inner.php">Manage Services Inner</a>

                </li-->

          </ul>

        </li>

	<?php } 
	else {
	?>	
	
	<li class="nav-item"><a href="http://localhost/infotech/admin/<?php echo $menu['link']; ?>"><img src="<?php echo $menu['icon']; ?>" alt="" /><span class="menu-title" data-i18n=""><?php echo $menu['name']; ?></span></a>
	</li>
	<?php	
	}
		}
		
		?>


	<?php
	}
	?>

        <!--li class=" nav-item"><a href="#"><img src="app-assets/images/icons/home.png" alt="" /><span class="menu-title" data-i18n="">Home</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Sliders</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-sliders.php">Add Slider</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/manage-sliders.php">Manage Sliders</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Developing Technologies Content</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-developing.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-developing.php">Manage Content</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Choose the best</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-choose-best.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-choose-best.php">Manage Content</a>

                </li>

              </ul>

            </li>  

           

            <li><a class="menu-item" href="#">Quality assurance</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-quality.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-quality.php">Manage Content</a>

                </li>

              </ul>

            </li>  

          </ul>

        </li>   

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Contact Us</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Contact Page Details</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-contact-details.php">Add Details</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-contact-details.php">Manage Details</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Contact Us Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/query-list.php">Queries list</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/career.png" alt="" /><span class="menu-title" data-i18n="">Career</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Jobs</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-jobs.php">Add Jobs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-jobs.php">Manage Jobs</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Job Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/job-query.php">Job Queries List</a>

                </li>

              </ul>

            </li>

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Blogs</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Categories</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-blog-cat.php">Add Categories</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-blog-cat.php">Manage Categories</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Blogs</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-blogs.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-blogs.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
<li><a class="menu-item" href="#">Manage FAQ's</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-faq.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-faq.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
          </ul>

        </li>

      <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/portfolio.png" alt="" /><span class="menu-title" data-i18n="">Portfolio</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Portfolio</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-portfolio.php">Add Portfolio</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-portfolio.php">Manage Portfolio</a>

                </li>

              </ul>

            </li>  

           </ul>

          </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/user.png" alt="" /><span class="menu-title" data-i18n="">Who We Are</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Content</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-who-we-are.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-who-we-are.php">Manage Content</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/case-study.png" alt="" /><span class="menu-title" data-i18n="">Case Studies</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Case Studies</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-case-studies.php">Add Case Studies</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-case-studies.php">Manage Case Studies</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Roles & Permissions</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Sections </a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-sections.php">Add Sections</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-sections.php">Manage Sections</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Roles</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-roles.php">Add Roles</a>

                </li>
                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-roles.php">Manage Roles</a>

                </li>

              </ul>

            </li> 
            <li><a class="menu-item" href="#">Manage Permissions</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-permission.php">Add Permission</a>

                </li>
                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-permission.php">Manage Permission</a>

                </li>

              </ul>

            </li> 

            <li><a class="menu-item" href="#">Manage Users</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-users.php">Add Users</a>

                </li>
                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-users.php">Manage Users</a>

                </li>

              </ul>

            </li> 
			
          </ul>

        </li> 

   
	        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Manage Projects</span></a>
              <ul class="menu-content">
			  <li><a class="menu-item" href="https://www.masterinfotech.com/admin/manage-projects.php">All Projects</a>
                </li>
              <li><a class="menu-item" href="https://www.masterinfotech.com/admin/add-projects.php">Add Projects</a>
                </li>
              </ul>
            
        </li>  
       
  <li class=" nav-item"><a href="https://www.masterinfotech.com/admin/comment.php"><img src="app-assets/images/icons/comment.jpg" alt="" /><span class="menu-title" data-i18n="">Comments </span></a>

</li>

<li class=" nav-item"><a href="https://www.masterinfotech.com/admin/enquiries.php"><img src="app-assets/images/icons/inquiry.png" alt="" /><span class="menu-title" data-i18n="">Enquiries</span></a>

</li-->
      </ul>

   <!--?php } ?-->
     
  
  </li>
   

   
    <!--li class=" nav-item"><a href="#"><img src="app-assets/images/icons/dashboard.png" alt="" /><span class="menu-title" data-i18n="">Marketing Material </span></a>
       <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/uploads.php">Uploads</a>

                </li>
              <li><a class="menu-item" href="http://localhost/infotech/admin/designs.php">Logo & Designs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/branding-material.php">Branding material</a>

                </li>

        </ul>

            
	</li-->
    <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Task Section</span></a>
         
         <ul class="menu-content">
		<li><a class="menu-item" href="http://localhost/infotech/admin/task-details.php">All Task Details</a>
           </li>
         <li><a class="menu-item" href="http://localhost/infotech/admin/task-section.php">Assign Task</a>
           </li>
           <li><a class="menu-item" href="http://localhost/infotech/admin/viewe-task.php">My Task<span class="badge badge badge-pill badge-danger float-right mr-2"><?php echo $badge; ?></span></a>
           </li>
		   
         </ul>
   </li>  
    </ul>
   </div>
  </div>

  <!-- END: Main Menu-->