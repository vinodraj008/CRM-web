<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Shoes :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<ul>
											<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|
											<li><a href="checkout.html">Delivery information</a></li>
										</ul>
									</div>
									<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">
						
							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="index.html"><img src="images/logo-marmeto-small.png" class="img-responsive" alt=""> </a>
									</div>
										<!-- start header_right -->
									<div class="header_right">
										<div class="rgt-bottom">
											<br><br>
										<div class="create_btn" style="float:right;width:36%">
											<a href="Addlead.html">Add New Lead</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					
				</div>
					<!-- //header-ends -->
				
				<!--content-->
				
			<div class="content">
<div class="women_main">
	<!-- start content -->
   <div class="w_content">
		<div class="women">
			<a href="#"><h4>Total Leads - <span>4449 </span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		
		<?php include 'connection.php';
		$id=$_GET['id'];
		$sql = "SELECT * FROM client where client_id='$id'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			 while($row = $result->fetch_assoc()) 
			 {
				$name=$row['name'];
				$mobile=$row['mobile'];
				$email=$row['email'];
				$billingaddr=$row['Billing_addr'];
				$total=$row['totalpay'];
				$paid=$row['paidpay'];
				$projectdetail=$row['Project_detail'];
				$milestone=$row['milestone'];
				$workstatus=$row['work_status'];
				
				$per=round((($workstatus/$milestone)*100),2);
				
		}
		}

		?>
								
										<form class="form-horizontal" action="clientadddetail.php?id=<?php echo $id ?>" method="post">
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Name:</label>
											<div class="col-sm-8">
												<label for="focusedinput" class="col-sm-2 control-label"><?php echo $name ?></label>
												<!--<input type="text" class="form-control1" id="focusedinput" placeholder="" name="name" value="" required>-->
											</div>
											<div class="col-sm-2">
												
											</div>
										</div>
										
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Email</label>
											<div class="col-sm-8">
											<label for="focusedinput" class="col-sm-2 control-label"><?php echo $email ?></label>
											</div>
										</div>
											<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Mobile</label>
											<div class="col-sm-8">
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Billing Address</label>
											<div class="col-sm-8">
											<label for="focusedinput" class="col-sm-2 control-label"><?php echo $billingaddr ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Project Detail</label>
											<div class="col-sm-8">
											<label for="focusedinput" class="col-sm-2 control-label"><?php echo $projectdetail ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Total Amount</label>
											<div class="col-sm-8">
											<label for="focusedinput" class="col-sm-2 control-label"><?php echo $total ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Paid Amount</label>
											<div class="col-sm-8">
											<label for="focusedinput" class="col-sm-2 control-label"><?php echo $paid ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Milestone</label>
											<div class="col-sm-8">
											<label for="focusedinput" class="col-sm-2 control-label"><?php echo $milestone ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Work Done</label>
											<div class="col-sm-8">
														<div class="progress">
													  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow=""
													  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per?>%">
														<?php echo $per?>% Complete (success)
													  </div>
													</div>
											</div>
										</div>
																			
										
										
										<center>
											<button name="subject" type="submit" value="EDIT" class="btn btn-danger">EDIT</button>
<input type="button" onClick="client.php';" value="Back" class="btn btn-danger" />

											</center>
											
										</form>
		
		<!--
		
		 <div class="accordion">
															<h3 class="inner-tittle two"></h3>
															<div class="panel-group tool-tips graph-form" id="accordion" role="tablist" aria-multiselectable="true">
																  <div class="panel-default">
																	<div class="panel-heading" role="tab" id="headingOne">
																	  <h4 class="panel-title">
																		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
																		  Lead 1
																		</a>
																	  </h4>
																	</div>
																	<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
																	  <div class="panel-body">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
																	  </div>
																	</div>
																  </div>
																  <div class="panel-default">
																	<div class="panel-heading" role="tab" id="headingTwo">
																	  <h4 class="panel-title">
																		<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
																			Lead 2
																		</a>
																	  </h4>
																	</div>
																	<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true">
																	  <div class="panel-body">
																		Eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Anim pariatur cliche reprehenderit, enim  Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
																	  </div>
																	</div>
																  </div>
																  <div class="panel-default">
																	<div class="panel-heading" role="tab" id="headingThree">
																	  <h4 class="panel-title">
																		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																			Lead 3
																		</a>
																	  </h4>
																	</div>
																	<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
																	  <div class="panel-body">
																		3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.  apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
																	  </div>
																	</div>
																  </div>
															  <div class="panel-default">
																<div class="panel-heading" role="tab" id="headingFour">
																  <h4 class="panel-title">
																	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
																		Lead 4
																	</a>
																  </h4>
																</div>
																<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
																  <div class="panel-body">
																	Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
																  </div>
																</div>
															  </div>
															  <div class="panel-default">
																<div class="panel-heading" role="tab" id="headingFive">
																  <h4 class="panel-title">
																	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
																		Lead 5
																	</a>
																  </h4>
																</div>
																<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;">
																  <div class="panel-body">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
																  </div>
																</div>
														  </div>
														</div>
													</div>
		
		<!-- end grids_of_4 -->
		
		
	</div>
   <div class="clearfix"></div>
	<!-- end content -->
	
			<div class="clearfix"> </div>
	
</div>
<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="contact.html">Help Center</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="details.html">How To Buy</a></li>
							<li><a href="checkout.html">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="products.html">Our Stories</a></li>
							<li><a href="products.html">Press</a></li>
							<li><a href="faq.html">Career</a></li>
							<li><a href="contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="register.html">Register</a></li>
							<li><a href="checkout.html">My Cart</a></li>
							<li><a href="checkout.html">Order History</a></li>
							<li><a href="details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
</div>

</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
									<!--	<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Lead</span></a></li>-->
										 <li id="menu-academico" ><a href="index.php"><i class="fa fa-user"></i> <span> Lead</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="index.php">Existing</a></li>
											<li id="menu-academico-avaliacoes" ><a href="Addlead.html">Add New</a></li>
											<!--<li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>-->
										  </ul>
										</li>
										<li id="menu-academico" ><a href="client.php"><i class="fa fa-user"></i> <span> Client</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   
										</li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-user"></i> <span> User</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="#">Add New</a></li>
											<li id="menu-academico-avaliacoes" ><a href="#">Deatil</a></li>
											<!--<li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>-->
										  </ul>
										</li>	
									<!--<li id="menu-academico" ><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
									<li id="menu-academico" ><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
									 <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
									<li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
											<li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>

										  </ul>
									 </li>
									<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>-->
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

    </script>
		   <script src="js/menu_jquery.js"></script>
</body>
</html>
