
<?php

require 'config.inc.php';
require'connect.php';
$obj = new Config();

if(!isset($_SESSION['email']) && empty($_SESSION['email'])){

  header("Location:login.php");
  exit();
  }


   $date =$db->prepare('select COUNT(*) AS "Total", Year from searched_movie  group by Year ');
   $date->execute();
    $data = array();
   while ($row= $date->fetch(PDO::FETCH_ASSOC)) {
         $count = $row['Total'];
         $Year = $row['Year'];

         $data[] = array('label' => $Year,'count'=>$count );

   }

     
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Home | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->


	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE CSS ================== -->
	<link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	  <style>
        .bar {
            fill: steelblue;
        }

        .highlight {
            fill: orange;
        }
</style>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Open Movie</b> Dashboard</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline"><?php $obj->getSessionInfo();?></span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="logout.php" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
	    <?php include 'side_nav.php'?>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Home</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Open Movie Dashboard </h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-teal">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">SEARCHED MOVIES</div>
							<div class="stats-number"><?php $obj->MoviesSerached();?></div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70.1%;"></div>
							</div>
					
						</div>
					</div>
				</div>
				<!-- end col-3 -->
									<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">SEARCHED THIS WEEK</div>
							<div class="stats-number"><?php $obj->MoviesSerachedWeeekly();?></div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">MOVIES WITH NO AWARDS</div>
							<div class="stats-number"><?php $obj->MoviesWithNoAwards();?></div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
				
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-gradient-red">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">RATED MOVIES</div>
							<div class="stats-number"><?php $obj->MoviesWithRatings();?></div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 76.3%;"></div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- end col-3 -->

			</div>
			<!-- end row -->
					<!-- begin row -->

			<div class="row">
								<!-- begin col-6 -->
				<div class="col-lg-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">weekly Search</h4>
						</div>
						<div class="panel-body">
							<svg width="1000" height="500" id="weekly"></svg>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-6 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">

			<!-- end row -->
				<!-- begin col-6 -->
				<div class="col-lg-6">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Pie Chart</h4>
						</div>
						<div class="panel-body">
							<div id="chart" ></div>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-6 -->
				<!-- begin col-6 -->
				<div class="col-lg-6">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">Donut Chart</h4>
						</div>
						<div class="panel-body">
							<!--<svg width="600" height="500" id="svg1"></svg>-->
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-6 -->
			</div>

		
		</div>
		<!-- end #content -->
		
		<!-- begin theme-panel -->
	
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/d3/d3.min.js"></script>
	<script src="assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/js/demo/dashboard-v2.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

		<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/d3/d3.min.js"></script>
	<script src="assets/plugins/nvd3/build/nv.d3.js"></script>
	
	<!-- ================== END PAGE LEVEL JS ================== -->
	


	<script data-require="d3@*" data-semver="4.0.0" src="https://d3js.org/d3.v4.min.js"></script>
    <script>
      (function(d3) {
        'use strict';

        var dataset = <?php echo json_encode($data); ?>;

        var width = 500;
        var height = 500;
        var radius = Math.min(width, height) / 2;
        var donutWidth = 75;
        var legendRectSize = 18;                                  // NEW
        var legendSpacing = 4;                                    // NEW

        var color = d3.scaleOrdinal(d3.schemeCategory20b);

        var svg = d3.select('#chart')
          .append('svg')
          .attr('width', width)
          .attr('height', height)
          .append('g')
          .attr('transform', 'translate(' + (width / 2) + 
            ',' + (height / 2) + ')');

        var arc = d3.arc()
          .innerRadius(radius - donutWidth)
          .outerRadius(radius);

        var pie = d3.pie()
          .value(function(d) { return d.count; })
          .sort(null);

        var path = svg.selectAll('path')
          .data(pie(dataset))
          .enter()
          .append('path')
          .attr('d', arc)
          .attr('fill', function(d, i) { 
            return color(d.data.label);
          });

        var legend = svg.selectAll('.legend')                     // NEW
          .data(color.domain())                                   // NEW
          .enter()                                                // NEW
          .append('g')                                            // NEW
          .attr('class', 'legend')                                // NEW
          .attr('transform', function(d, i) {                     // NEW
            var height = legendRectSize + legendSpacing;          // NEW
            var offset =  height * color.domain().length / 2;     // NEW
            var horz = -2 * legendRectSize;                       // NEW
            var vert = i * height - offset;                       // NEW
            return 'translate(' + horz + ',' + vert + ')';        // NEW
          });                                                     // NEW

        legend.append('rect')                                     // NEW
          .attr('width', legendRectSize)                          // NEW
          .attr('height', legendRectSize)                         // NEW
          .style('fill', color)                                   // NEW
          .style('stroke', color);                                // NEW
          
        legend.append('text')                                     // NEW
          .attr('x', legendRectSize + legendSpacing)              // NEW
          .attr('y', legendRectSize - legendSpacing)              // NEW
          .text(function(d) { return d; });                       // NEW

      })(window.d3);
    </script>

	
	<script>
		var svg1 = d3.select("#svg1"),
        margin = 200,
        width = svg1.attr("width") - margin,
        height = svg1.attr("height") - margin;

    svg1.append("text")
       .attr("transform", "translate(100,0)")
       .attr("x", 50)
       .attr("y", 50)
       .attr("font-size", "24px")
       .text("Movies Count Per Release Year")

    var x = d3.scaleBand().range([0, width]).padding(0.4),
        y = d3.scaleLinear().range([height, 0]);

    var g = svg1.append("g")
            .attr("transform", "translate(" + 100 + "," + 100 + ")");

// load the data
d3.json("../pie_data.php", function(error, data) {
	    data.forEach(function(d) {
	        d.label = d.label;
	        d.value = +d.value;
	    });

        x.domain(data.map(function(d) { return d.label; }));
        y.domain([0, d3.max(data, function(d) { return d.value; })]);

        g.append("g")
         .attr("transform", "translate(0," + height + ")")
         .call(d3.axisBottom(x))
         .append("text")
         .attr("y", height - 250)
         .attr("x", width - 100)
         .attr("text-anchor", "end")
         .attr("stroke", "black")
         .text("Year");

        g.append("g")
         .call(d3.axisLeft(y).tickFormat(function(d){
             return "" + d;
         }).ticks(10))
         .append("text")
         .attr("transform", "rotate(-90)")
         .attr("y", 6)
         .attr("dy", "-5.1em")
         .attr("text-anchor", "end")
         .attr("stroke", "black")
         .text("No. of movies");

        g.selectAll(".bar")
         .data(data)
         .enter().append("rect")
         .attr("class", "bar")
         .on("mouseover", onMouseOver) //Add listener for the mouseover event
         .on("mouseout", onMouseOut)   //Add listener for the mouseout event
         .attr("x", function(d) { return x(d.label); })
         .attr("y", function(d) { return y(d.value); })
         .attr("width", x.bandwidth())
         .transition()
         .ease(d3.easeLinear)
         .duration(400)
         .delay(function (d, i) {
             return i * 50;
         })
         .attr("height", function(d) { return height - y(d.value); });
    });
    
    //mouseover event handler function
    function onMouseOver(d, i) {
        d3.select(this).attr('class', 'highlight');
        d3.select(this)
          .transition()     // adds animation
          .duration(400)
          .attr('width', x.bandwidth() + 5)
          .attr("y", function(d) { return y(d.value) - 10; })
          .attr("height", function(d) { return height - y(d.value) + 10; });

        g.append("text")
         .attr('class', 'val') 
         .attr('x', function() {
             return x(d.label);
         })
         .attr('y', function() {
             return y(d.value) - 15;
         })
         .text(function() {
             return [ '' +d.value];  // Value of the text
         });
    }

    //mouseout event handler function
    function onMouseOut(d, i) {
        // use the text label class to remove label on mouseout
        d3.select(this).attr('class', 'bar');
        d3.select(this)
          .transition()     // adds animation
          .duration(400)
          .attr('width', x.bandwidth())
          .attr("y", function(d) { return y(d.value); })
          .attr("height", function(d) { return height - y(d.value); });

        d3.selectAll('.val')
          .remove()
    }

	</script>
	<script>
	var svg3 = d3.select("#weekly"),
        margin = 200,
        width = svg3.attr("width") - margin,
        height = svg3.attr("height") - margin;

    svg3.append("text")
       .attr("transform", "translate(100,0)")
       .attr("x", 50)
       .attr("y", 50)
       .attr("font-size", "24px")
       .text("Movies Count Per Release Year")

    var x = d3.scaleBand().range([0, width]).padding(0.4),
        y = d3.scaleLinear().range([height, 0]);

    var g = svg3.append("g")
            .attr("transform", "translate(" + 100 + "," + 100 + ")");

// load the data
d3.json("../weekly_search.php", function(error, data) {
	    data.forEach(function(d) {
	        d.label = d.label;
	        d.value = +d.value;
	    });

        x.domain(data.map(function(d) { return d.label; }));
        y.domain([0, d3.max(data, function(d) { return d.value; })]);

        g.append("g")
         .attr("transform", "translate(0," + height + ")")
         .call(d3.axisBottom(x))
         .append("text")
         .attr("y", height - 250)
         .attr("x", width - 100)
         .attr("text-anchor", "end")
         .attr("stroke", "black")
         .text("Year");

        g.append("g")
         .call(d3.axisLeft(y).tickFormat(function(d){
             return "" + d;
         }).ticks(10))
         .append("text")
         .attr("transform", "rotate(-90)")
         .attr("y", 6)
         .attr("dy", "-5.1em")
         .attr("text-anchor", "end")
         .attr("stroke", "black")
         .text("No. of movies");

        g.selectAll(".bar")
         .data(data)
         .enter().append("rect")
         .attr("class", "bar")
         .on("mouseover", onMouseOver) //Add listener for the mouseover event
         .on("mouseout", onMouseOut)   //Add listener for the mouseout event
         .attr("x", function(d) { return x(d.label); })
         .attr("y", function(d) { return y(d.value); })
         .attr("width", x.bandwidth())
         .transition()
         .ease(d3.easeLinear)
         .duration(400)
         .delay(function (d, i) {
             return i * 50;
         })
         .attr("height", function(d) { return height - y(d.value); });
    });
    
    //mouseover event handler function
    function onMouseOver(d, i) {
        d3.select(this).attr('class', 'highlight');
        d3.select(this)
          .transition()     // adds animation
          .duration(400)
          .attr('width', x.bandwidth() + 5)
          .attr("y", function(d) { return y(d.value) - 10; })
          .attr("height", function(d) { return height - y(d.value) + 10; });

        g.append("text")
         .attr('class', 'val') 
         .attr('x', function() {
             return x(d.label);
         })
         .attr('y', function() {
             return y(d.value) - 15;
         })
         .text(function() {
             return [ '' +d.value];  // Value of the text
         });
    }

    //mouseout event handler function
    function onMouseOut(d, i) {
        // use the text label class to remove label on mouseout
        d3.select(this).attr('class', 'bar');
        d3.select(this)
          .transition()     // adds animation
          .duration(400)
          .attr('width', x.bandwidth())
          .attr("y", function(d) { return y(d.value); })
          .attr("height", function(d) { return height - y(d.value); });

        d3.selectAll('.val')
          .remove()
    }

	</script>

	<script>
		$(document).ready(function() {
			App.init();
			DashboardV2.init();
		});
	</script>

</body>

<!-- Mirrored from seantheme.com/color-admin-v4.3/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:58:53 GMT -->
</html>
