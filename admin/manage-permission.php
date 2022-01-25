<?php  



 session_start();  



 if(isset($_SESSION["name"]))  

 {  

    $username = $_SESSION['name'];

 

 }  

 else  

 {  

      header("location:signin.php");  

 }  

 include('../inc/connection.php');

 $conn = DB(); 

 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 



$stmt = $conn->query("SELECT * FROM permission order by id desc ");

$data = $stmt->fetchAll();

// and somewhere later:

if(isset($_GET['id'])){ 

  $id = $_GET['id'];

  $stmt = $conn->prepare("DELETE FROM permission WHERE id=?");

  $stmt->execute([$id]); 

  header('location:http://localhost/infotech/admin/manage-permission.php');

}

 ?> 

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

  <!-- BEGIN: Head-->

  <?php 	
 $conn1 = DB(); 
 $stmtside = $conn1->query("SELECT name FROM section order by id asc ");
 $dataside = $stmtside->fetchAll();

$stmtsidebar = $conn1->query("SELECT role_id FROM admin where name='$username'"); 

$datasidebar = $stmtsidebar->fetch();
$role_id = $datasidebar['role_id'];
?>

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/dt-basic-initialization.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:30:59 GMT -->

<head>

<?php include('tags.php'); ?>

    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">

    <link rel="shortcut icon" type="image/x-icon" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">



    <!-- BEGIN: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">

    <!-- END: Vendor CSS-->



    <!-- BEGIN: Theme CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">

    <!-- END: Theme CSS-->



    <!-- BEGIN: Page CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">

    <!-- END: Page CSS-->



    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- END: Custom CSS-->



  </head>

  <!-- END: Head-->



  <!-- BEGIN: Body-->

  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">



 

    <!-- BEGIN: Header-->

    <?php include('profile.php'); ?>

    <!-- END: Header-->



	<?php include('sidebar.php'); ?>



    <!-- BEGIN: Content-->

    <div class="app-content content">

      <div class="content-wrapper">

        <div class="content-wrapper-before"></div>

        <div class="content-header row">

          <div class="content-header-left col-md-4 col-12 mb-2">

            <h3 class="content-header-title">Manage permission</h3>

          </div>

          <div class="content-header-right col-md-8 col-12">

            <div class="breadcrumbs-top float-md-right">

              <div class="breadcrumb-wrapper mr-1">

                <ol class="breadcrumb">

                  <li class="breadcrumb-item"><a href="http://localhost/infotech/admin/index.php">Home</a>

                  </li>

                  <li class="breadcrumb-item"><a href="http://localhost/infotech/admin/add-permission.php">Add permission</a>

                  </li>

                  <li class="breadcrumb-item active">Manage permission

                  </li>

                </ol>

              </div>

            </div>

          </div>

        </div>

        <div class="content-body"><!-- Zero configuration table -->

<section id="configuration">

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">

                    <h4 class="card-title">permissions</h4>

                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                  

                </div>

                <div class="card-content collapse show">

                    <div class="card-body card-dashboard">

                         <div class="table-responsive">

                            <table class="table table-striped table-bordered zero-configuration">

                                <thead>

                                    <tr>

                                        <th>User Name</th>
                                        <th>User Permissions</th>

                                        

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                              <?php   foreach ($data as $row) { 
							   $rid = $row['user_id'];
							  $stmt1 = $conn->query("SELECT name FROM admin where id =$rid");

								$data1 = $stmt1->fetch();
								
								$pid = $row['section'];
							
							  $stmt2 = $conn->query("SELECT name FROM section where id in ($pid)");

								$section = $stmt2->fetchAll();
								
								$nm =array();
								for($i=0; $i<count($section);$i++){
									$nm[] = $section[$i]['name'];
								}
								
								
							  ?>

                                <tr>

                                        

                                        <td><?php echo $data1['name']; ?></td>
                                        <td><?php echo implode(',',$nm); ?></td>

                                        <td><a href="http://localhost/infotech/admin/add-permission.php?id=<?php echo $row['id']; ?>">Edit<a>  / <a href="http://localhost/infotech/admin/manage-permission.php?id=<?php echo $row['id']; ?>">Delete<a>  </td>

                                        

                                    </tr>

                                    

                                <?php } ?>

                                    

                                </tbody>

                                <tfoot>

                                <tr>

                                       <th>User name</th>

                                           <th>User Permissions</th>

                                        <th>Action</th>

                                        </tr>

                                </tfoot>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--/ Zero configuration table -->

<!-- Default ordering table -->



<!--/ Language - Comma decimal place table -->



        </div>

      </div>

    </div>

    <!-- END: Content-->





    <!-- BEGIN: Customizer-->

    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><div class="customizer-content p-2">

	<h5 class="mt-1 mb-1 text-bold-500">Navbar Color Options</h5>

	<div class="navbar-color-options clearfix">

		<div class="gradient-colors mb-1 clearfix">

			<div class="bg-gradient-x-purple-blue navbar-color-option" data-bg="bg-gradient-x-purple-blue" title="bg-gradient-x-purple-blue"></div>

			<div class="bg-gradient-x-purple-red navbar-color-option" data-bg="bg-gradient-x-purple-red" title="bg-gradient-x-purple-red"></div>

			<div class="bg-gradient-x-blue-green navbar-color-option" data-bg="bg-gradient-x-blue-green" title="bg-gradient-x-blue-green"></div>

			<div class="bg-gradient-x-orange-yellow navbar-color-option" data-bg="bg-gradient-x-orange-yellow" title="bg-gradient-x-orange-yellow"></div>

			<div class="bg-gradient-x-blue-cyan navbar-color-option" data-bg="bg-gradient-x-blue-cyan" title="bg-gradient-x-blue-cyan"></div>

			<div class="bg-gradient-x-red-pink navbar-color-option" data-bg="bg-gradient-x-red-pink" title="bg-gradient-x-red-pink"></div>

		</div>

		<div class="solid-colors clearfix">

			<div class="bg-primary navbar-color-option" data-bg="bg-primary" title="primary"></div>

			<div class="bg-success navbar-color-option" data-bg="bg-success" title="success"></div>

			<div class="bg-info navbar-color-option" data-bg="bg-info" title="info"></div>

			<div class="bg-warning navbar-color-option" data-bg="bg-warning" title="warning"></div>

			<div class="bg-danger navbar-color-option" data-bg="bg-danger" title="danger"></div>

			<div class="bg-blue navbar-color-option" data-bg="bg-blue" title="blue"></div>

		</div>

	</div>



	<hr>



	<h5 class="my-1 text-bold-500">Layout Options</h5>

	<div class="row">

		<div class="col-12">

			<div class="d-inline-block custom-control custom-radio mb-1 col-4">

				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="default-layout" checked>

				<label class="custom-control-label" for="default-layout">Default</label>

			</div>

			<div class="d-inline-block custom-control custom-radio mb-1 col-4">

				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="fixed-layout">

				<label class="custom-control-label" for="fixed-layout">Fixed</label>

			</div>

			<div class="d-inline-block custom-control custom-radio mb-1 col-4">

				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="static-layout">

				<label class="custom-control-label" for="static-layout">Static</label>

			</div>

			<div class="d-inline-block custom-control custom-radio mb-1">

				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="boxed-layout">

				<label class="custom-control-label" for="boxed-layout">Boxed</label>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-12">

			<div class="d-inline-block custom-control custom-checkbox mb-1">

				<input type="checkbox" class="custom-control-input bg-primary" name="right-side-icons" id="right-side-icons">

				<label class="custom-control-label" for="right-side-icons">Right Side Icons</label>

			</div>

		</div>

	</div>



	<hr>



	<h5 class="mt-1 mb-1 text-bold-500">Sidebar menu Background</h5>

	<!-- <div class="sidebar-color-options clearfix">

		<div class="bg-black sidebar-color-option" data-sidebar="menu-dark" title="black"></div>

		<div class="bg-white sidebar-color-option" data-sidebar="menu-light" title="white"></div>

	</div> -->

	<div class="row sidebar-color-options ml-0">

		<label for="sidebar-color-option" class="card-title font-medium-2 mr-2">White Mode</label>

		<div class="text-center mb-1">

			<input type="checkbox" id="sidebar-color-option" class="switchery" data-size="xs"/>

		</div>

		<label for="sidebar-color-option" class="card-title font-medium-2 ml-2">Dark Mode</label>

	</div>



	<hr>



	<label for="collapsed-sidebar" class="font-medium-2">Menu Collapse</label>

	<div class="float-right">

		<input type="checkbox" id="collapsed-sidebar" class="switchery" data-size="xs"/>

	</div>

	

	<hr>



	<!--Sidebar Background Image Starts-->

	<h5 class="mt-1 mb-1 text-bold-500">Sidebar Background Image</h5>

	<div class="cz-bg-image row">

		<div class="col mb-3">

			<img src="app-assets/images/backgrounds/04.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">

		</div>

		<div class="col mb-3">

			<img src="app-assets/images/backgrounds/01.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">

		</div>

		<div class="col mb-3">

			<img src="app-assets/images/backgrounds/02.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">

		</div>

		<div class="col mb-3">

			<img src="app-assets/images/backgrounds/05.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">

		</div>

	</div>

	<!--Sidebar Background Image Ends-->



	<!--Sidebar BG Image Toggle Starts-->

	<div class="sidebar-image-visibility">

		<div class="row ml-0">

			<label for="toggle-sidebar-bg-img" class="card-title font-medium-2 mr-2">Hide Image</label>

			<div class="text-center mb-1">

				<input type="checkbox" id="toggle-sidebar-bg-img" class="switchery" data-size="xs" checked/>

			</div>

			<label for="toggle-sidebar-bg-img" class="card-title font-medium-2 ml-2">Show Image</label>

		</div>

	</div>

	<!--Sidebar BG Image Toggle Ends-->



	<hr>



	<div class="row mb-2">

		<!-- <div class="col">

			<a href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" class="btn btn-danger btn-block box-shadow-1" target="_blank">Buy Now</a>

		</div> -->

		<div class="col">

			

		</div>

	</div>

	<div class="text-center">

		<button id="twitter" class="btn btn-social-icon btn-twitter sharrre mr-1"><i class="la la-twitter"></i></button>

		<button id="facebook" class="btn btn-social-icon btn-facebook sharrre mr-1"><i class="la la-facebook"></i></button>

		<button id="google" class="btn btn-social-icon btn-google sharrre"><i class="la la-google"></i></button>

	</div>

</div>

    </div>

    <!-- End: Customizer-->





    <?php include('begin-footer.php'); ?>





    <!-- BEGIN: Vendor JS-->

    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>

    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>

    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>

    <!-- BEGIN Vendor JS-->



    <!-- BEGIN: Page Vendor JS-->

    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

    <!-- END: Page Vendor JS-->



    <!-- BEGIN: Theme JS-->

    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>

    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>

    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>

    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>

    <!-- END: Theme JS-->



    <!-- BEGIN: Page JS-->

    <script src="app-assets/js/scripts/tables/datatables/datatable-basic.min.js" type="text/javascript"></script>

    <!-- END: Page JS-->



  </body>

  <!-- END: Body-->



<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/dt-basic-initialization.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:31:00 GMT -->

</html>