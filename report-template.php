<?php
session_start();
include_once('inc/app_config1.php');

?>
<?php

// if ($create_report or (1 == 1)) {
if ( (1 == 1)) {

$create_report = "";
$search_where = "";

$search_where = " AND ";
$_SESSION['search_where'] = $search_where ;

$userlevel = 4;
$sql = "select r.report_url, p.report_parameter, p.report_parameter_value FROM report_menu r, report_menu_parameter p WHERE r.report_name = '".$_POST['reportName']."' AND r.report_name = p.report_name and r.user_level <=".$userlevel;

$result = mysqli_query( $db, $sql);
	while ($row = mysqli_fetch_array($result)) {

		$report_url = $row[0];
		$report_param = $row[1];
		$$report_param = $row[2];

		$rownum = $rownum + 1;
	}
 
if ($_POST['fromDate'] AND !$_POST['toDate'] AND $report_date) {
        $search_where.= "( ".$report_date." >= '".$_POST['fromDate']."') AND ";
	$searchcriteria.= "&ctms=".$_POST['fromDate'];
}
if ($_POST["toDate"] AND !$_POST["fromDate"] AND $report_date) {
        $search_where.= "( ".$report_date." <= '".$_POST["toDate"]."') AND ";
}
if ($_POST["toDate"] AND $_POST["fromDate"] AND $report_date) {
        $search_where.= "( ".$report_date." <= '".$_POST["toDate"]."' AND ".$report_date." >= '".$_POST["fromDate"]."') AND ";
}
if ($account_type AND $report_account_type) {
        $search_where.= "( ".$report_account_type." = '".$account_type."') AND ";
}
if ($_POST['status'] AND $report_status) {
        $search_where.= "( ".$report_status." = '".$_POST['status']."') AND ";
}
/*
if ($gt_amt AND !$lt_amt AND $report_amount) {
        $search_where.= "( ".$report_amount."  >= ".$gt_amt.") AND ";
}
if ($lt_amt AND !$gt_amt AND $report_amount) {
        $search_where.= "( ".$report_amount." <= ".$lt_amt.") AND ";
}
if ($gt_amt AND $lt_amt AND $report_amount) {
        $search_where.= " (".$report_amount." >= ".$gt_amt." AND ".$report_amount." <= ".$lt_amt.") AND ";
}
if ($pay_method AND $report_pay_method) {
        $search_where.= "( ".$report_pay_method." = '".$pay_method."') AND ";
}
if ($employee_id AND $report_employee_id) {
        $search_where.= "( ".$report_employee_id." = '".$employee_id."') AND ";
	$searchcriteria.="&ei=".$employee_id;
}
if ($department_id AND $report_department_id) {
        $search_where.= "( ".$report_department_id." = '".$department_id."') AND ";
	$searchcriteria.="&di=".$department_id;
}*/


if ($_POST['appl_id'] AND $report_appl_id) {
        $search_where.= "( ".$report_appl_id." = '".$_POST['appl_id']."') AND ";
}
if ($_POST['applname'] AND $report_appl_name) {
        $search_where.= "( upper(".$report_appl_name.") like  upper('%".$_POST['applname']."%')) AND ";
}
if ($_POST['appstatus'] AND $report_app_status) {
        $search_where.= "( ".$report_app_status." =  '".$_POST['appstatus']."') AND ";
}
if ($_POST['appYear'] AND $report_appyear) {
        $search_where.= "( ".$report_appyear." =  '".$_POST['appYear']."') AND ";
}
if ($_POST['reqtype'] AND $report_reqtype) {
        $search_where.= "( ".$report_reqtype." =  '".$_POST['reqtype']."') AND ";
}
if ($_POST['resultid'] AND $report_resultid) {
        $search_where.= "( ".$report_resultid." =  '".$_POST['resultid']."') AND ";
}
if ($_POST['firstName'] AND $report_firstName) {
        $search_where.= "( ".$report_firstName." =  '".$_POST['firstName']."') AND ";
}
if ($_POST['lastName'] AND $report_lastName) {
        $search_where.= "( ".$report_lastName." =  '".$_POST['lastName']."') AND ";
}
if ($_POST['stateCd'] AND $report_stateCd) {
        $search_where.= "( ".$report_stateCd." =  '".$_POST['stateCd']."') AND ";
}
if ($_POST['personId'] AND $report_personId) {
        $search_where.= "( ".$report_personId." =  '".$_POST['personId']."') AND ";
}
if ($_POST['evalFromDate'] AND !$_POST['evalToDate'] AND $report_eval_date) {
        $search_where.= "( ".$report_eval_date." >= '".$_POST['evalFromDate']."') AND ";
        $searchcriteria.= "&ctms=".$_POST['evalFromDate'];
}
if ($_POST["evalToDate"] AND !$_POST["evalFromDate"] AND $report_eval_date) {
        $search_where.= "( ".$report_eval_date." <= '".$_POST["evalToDate"]."') AND ";
}
if ($_POST["evalToDate"] AND $_POST["evalFromDate"] AND $report_eval_date) {
        $search_where.= "( ".$report_eval_date." <= '".$_POST["evalToDate"]."' AND ".$report_eval_date." >= '".$_POST["evalFromDate"]."') AND ";
}

if ($_POST['determination'] AND $report_determination) {
	$search_where.= "( ".$report_determination." = '".$_POST['determination']."') AND "; 
}

if ($search_where) {
        $_SESSION['search_where'] = substr($search_where,0,-5);
}
/*
if ($resulttype) {
		header("Location: ".$report_url."?resulttype=".$resulttype."&outputfilename=".$outputfilename);
} else {
		header("Location: ".$report_url."?repparam=".$repparam."&outputfilename=".$outputfilename);
}
*/
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application | Home</title>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
<?php
include_once('header-only.htm');
?>
<section class="main container-fluid application-home-page tight-form" style= "width: 90%">
    <div class="main row">
		<div class="main col-xs-10 col-md-12 col-centered">
      	<div class="row">
      		<div class="panel panel-default">
				<div class="panel-body">
				<form class="form-horizontal" > 
					<div class="col-xs-12 col-md-12">

                                  <div class="form-group table-responsive">
                                                <table class="table table-hover table-bordered table-striped-no">
                                                  <thead>

<?php

                                  $sqlrequest = "SELECT search, search_from, search_where, search_group, search_order, report_url FROM report_menu WHERE (report_menu.report_name='".$_POST['reportName']."') ";
// echo $sqlrequest."<br><br>";
                                  $result = mysqli_query($db, $sqlrequest);
                                  $row = mysqli_fetch_array($result);


// echo $row[5]."<br><br>";
			if ($row[5]) {
				include_once($row[5]);

			} else {

				  $sqlrequest2 = " SELECT ".$row[0]." FROM ".$row[1]." WHERE ".$row[2];
					if ($_SESSION['search_where']) {
					$sqlrequest2.= $_SESSION['search_where'];
					}
					$sqlrequest2.=" ".($row[3]=='null'?'':$row[3])." ".($row[4]=='null'?'':$row[4]) ;
//  echo $sqlrequest2."<br><br>";
                                  $result2 = mysqli_query($db, $sqlrequest2); 
			          $numrows = mysqli_num_rows($result2);
				  if ($numrows > 0) {
        				$numfields = mysqli_num_fields($result2);
				  } else {
				        echo ("<tr><td><b>No Rows Returned</b></td></tr>");
				  }

				if ($numrows > 0) {
        				echo("<TR BGCOLOR=\"f5f5f5\">");
        				for ($i=0;$i<$numfields;$i++) {
        					$fldname = mysqli_fetch_field_direct($result2,$i);
        					$fldname = ereg_replace("_"," ",$fldname->name);
        					echo ("<Td><b>".(ucwords($fldname))."</b></Td>");
					}

				echo ("</TR>");
				}

                                  while($row = mysqli_fetch_row($result2)) {
					echo "<tr>";
        				for ($i=0;$i<$numfields;$i++) {
						echo "<td>".$row[$i]."</td>";
					}
					echo "</tr>";
				}

			}
?>
                                                  </thead>
                                                </table>
                                         </div>

						</div>  <!-- second row -->
<!--  ================================================================================================  -->
						<div class="spacer-15">&nbsp;</div>
						<div class="row">						 
						  <div class="col-xs-12 col-md-7 col-centered">
						  	<div class="row">
							</div>			
						  </div>
						</div> <!-- row -->
						<div class="spacer-15">&nbsp;</div>
					</div> <!-- 12 cols -->
				</form>
				</div> <!-- panel body -->
			</div> <!-- panel -->	
		</div> <!-- row -->
        </div><!--  main cols  -->
    </div><!--  main row -->
  </section> <!-- main container class -->
<?php
include ('footer-only.htm');
?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#select-applications-page').on('change', function() {
			var val = $('option:selected',this).index();
			if(val != 0){
				window.location.href = $(this).val();
			}
		});
		/*$("#search_btn").on('click',function(){
			window.location.href = "application-search-result.html";
		});*/
	});
</script>


  </body>
</html>

