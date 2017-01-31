<?php
	include_once('inc/app_config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application | Reports</title>
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
<section class="main container application-home-page tight-form">
    <div class="main row">
		<div class="main col-xs-10 col-md-12 col-centered">
      	<div class="row">
      		<div class="panel panel-default">
				<div class="panel-body">
				<form class="form-horizontal" action="report-template.php" method="post"> 
					<div class="col-xs-12 col-md-12">
						<div class="row">
							<div class="col-xs-12 col-md-7">
							<!--  <div class="form-group">
								<label for="reportName" class="col-sm-4 control-label">Report Options</label>
								<div class="col-sm-7">
									<select name="reportName" class="form-control" id="select-applications-page">
									  <option value="0">Select a report</option>
									  <option value="mcheck-aptc.html">Quick MITC/APTC Business Tool</option>
									  <option value="new-application.php">Enter a New Application</option>
									  <option value="mitc-only.php">MITC check only w/ existing JSON</option>
									  <option value="check-application.html">Enter Json for Application</option>
									  <option value="medi_pass_fail_trunc">Medi Pass/Fail TRUNC</option>
									  <option value="medi_pass_fail">Medi Pass/Fail</option>
									  <option value="pass_fail">Pass Fail Report</option>
									  <option value="mohan_pass_fail_report.php">Mohan Pass Fail Report (test)</option>   
									  <option value="test_report_FIVE">Medicaid Eligibility %</option>
									  <option value="test_report_FOUR">Test Report (Average Monthly APTC)</option>
									  <option value="test_report_THREE">Test Report (Annual Income)</option>
									  <option value="test_report_TWO">Test Report (Monthly Premium)</option>
									  <option value="test_report">Test Report (Monthly APTC)</option>
									</select>
							    </div>
							  </div> -->
<!-- ======= Select Report ======= -->
<?php

include_once('report-options.htm');

?> 
					  		</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-12">
							  <h4 class="text-center">Selection Criteria</h4>
							  <p class="text-center">Please enter data to search for. All selections will be <i>Logically Anded</i> (e.g. First Name = 'Bill' AND Last Name = 'Smith')</p>
							  <!-- <h4>Application Information</h4> -->
					  		</div>
						</div>	
						<div class="spacer-15">&nbsp;</div>						


<!--  ================================================================================================  -->
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="fromDate" class="col-sm-5 control-label">From Date</label>
									<div class="col-sm-7">
										<input name="fromDate" type="text" class="form-control" id="fromDate" placeholder="From Date" />
									</div>						
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="toDate" class="col-sm-5 control-label">To Date</label>
									<div class="col-sm-7">
										<input name="toDate" type="text" class="form-control" id="toDate" placeholder="To Date" />
									</div>						
								</div>
						    </div>
						</div> <!-- first row -->
<!--  ================================================================================================  -->
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="firstName" class="col-sm-5 control-label">First Name</label>
									<div class="col-sm-7">
										<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name" />
									</div>						
								</div>
							</div>
						  <div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label for="lastName" class="col-sm-5 control-label">Last Name</label>
								<div class="col-sm-7">
									<input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name" />
								</div>						
							</div>
						  </div>						  
						</div>  <!-- second row -->
						<div class="row">					 
							<div class="col-xs-12 col-md-6">    
								<div class="form-group">
									<label for="appl_id" class="col-sm-5 control-label">Application ID</label>
									<div class="col-sm-7">
										<input name="appl_id" type="text" class="form-control" id="appl_id" placeholder="Application ID">
									</div>
								</div>						
							</div>
							 <div class="col-xs-12 col-md-6">      
							<div class="form-group">
									<label for="applname" class="col-sm-5 control-label">Application Name</label>
								<div class="col-sm-7">						  
									<input name="applname" type="text" class="form-control" id="applname" placeholder="Application Name" />	
								</div>							  
							</div> 
						  </div>	
						</div>   <!-- row -->
<!--  ================================================================================================  -->
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="personId" class="col-sm-5 control-label">Person ID</label>
									<div class="col-sm-7">
										<input name="personId" type="text" class="form-control" id="personId" placeholder="Person ID" />
									</div>						
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
								  <label for="appYear" class="col-sm-5 control-label">Application Year</label>
									<div class="col-sm-7">
										<select name="appYear" class="form-control">
                                        					<option value=></option>";
<?php

                                  $sqlrequest = "SELECT distinct appyear from application where appyear is not null and appyear != '' order by 1 desc ";
                                  $result = mysqli_query($db, $sqlrequest);

                                  while($row = mysqli_fetch_row($result)) {
     					 echo "<option value=".$row[0].">".$row[0]."</option>";
                                }
?>										
										</select> 
									</div>
								</div>
						    </div>
						</div> <!-- first row -->
<!--  ================================================================================================  -->
						<div class="row">
						  <div class="col-xs-12 col-md-6">      
							<div class="form-group">
							  <label for="appstatus" class="col-sm-5 control-label">Application Status</label>
							  <div class="col-sm-7">
								<select name="appstatus" class="form-control">
   								<option value=></option>";
<?php
                                  $sqlrequest = "select distinct a.status, b.item_description from application a, app_lookup b where a.status = b.item_cd and (b.lookup_table = 'application' and b.lookup_field = 'status') order by b.sort_order";
                                  $result = mysqli_query($db, $sqlrequest);

                                  while($row = mysqli_fetch_row($result)) {
                                        echo "<option value=".$row[0].">".$row[1]."</option>";
                                }
?>										
									</select>
							  </div>	  
							</div> 
						  </div>
						  <div class="col-xs-12 col-md-6">      
							<div class="form-group">
							  <label for="stateCd" class="col-sm-5 control-label">State</label>
							  <div class="col-sm-7">
									<select name="stateCd" class="form-control">
                                        					<option value=></option>";
<?php
                                  $sqlrequest = "SELECT state, state_name from states order by sort_order ";
                                  $result = mysqli_query($db, $sqlrequest);

                                  while($row = mysqli_fetch_row($result)) {
                                        echo "<option value=".$row[0].">".$row[1]."</option>";
                                }
?>										
									</select>
							  </div>	  
							</div> 
						  </div>
						</div> <!-- row -->
						<div class="row">
							<div class="col-xs-12 col-md-6">      
								<div class="form-group">
									<label for="evalFromDate" class="col-sm-5 control-label">Eval From Date</label>
									<div class="col-sm-7">	
										<input name="evalFromDate" type="text" class="form-control" id="evalFromDate" placeholder="MM/DD/YYYY">
									</div>						  
								</div> 
							</div>						 
							<div class="col-xs-12 col-md-6">      
							  <div class="form-group">
									<label for="evalToDate" class="col-sm-5 control-label">Eval To Date</label>
									<div class="col-sm-7">	
										<input name="evalToDate" type="text" class="form-control" id="evalToDate" placeholder="MM/DD/YYYY">
									</div>
							  </div>
							</div>	
						</div> <!-- row -->
						<div class="row">
						  <div class="col-xs-12 col-md-6">      
							<div class="form-group">
							  <label for="reqtype" class="col-sm-5 control-label">Request Type</label>
							  <div class="col-sm-7">
									<select name="reqtype" class="form-control">
                                        					<option value=></option>";
<?php
                                  $sqlrequest = "SELECT distinct reqtype from application where reqtype is not null and reqtype != ''  order by 1 ";
                                  $result = mysqli_query($db, $sqlrequest);

                                  while($row = mysqli_fetch_row($result)) {
                                        echo "<option value=".$row[0].">".$row[0]."</option>";
                                }
?>										
									</select>
							  </div>	  
							</div> 
						  </div>
						  <div class="col-xs-12 col-md-6">      
							<div class="form-group">
							  <label for="determination" class="col-sm-5 control-label">Determination?</label>
							  <div class="col-sm-7">
									<select name="determination" class="form-control">
									  <option value=></option>;
									  <option value="Y">Yes</option>;
									  <option value="N">No</option>;
<?php
                                  $sqlrequest = "SELECT COUNT(DISTINCT applid) FROM application_eval_person WHERE applid is not null and applid != ''  order by 1 ";
                                  $result = mysqli_query($db, $sqlrequest);

                                  while($row = mysqli_fetch_row($result)) {
					

                                       /* echo "<option value=".$row[0].">".$row[0]."</option>"*/;
                                }
?>
									</select>
							  </div>	  
							</div> 
						  </div>
						</div>  <!-- row --> 
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="ic_number_text" class="col-sm-5 control-label">IC Number</label>
									<div class="col-sm-7">						  
										<input type="text" class="form-control" id="ic_number_text" placeholder="IC Number">
									</div>							  
								</div> 
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="cls-number-text" class="col-sm-5 control-label">CSL Number</label>
									<div class="col-sm-7">						  
										<input type="text" class="form-control" id="cls-number-text" placeholder="CSL Number">
									</div>							  
								</div> 
							</div>
						</div> <!-- row -->

						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
							  	<label for="resultType" class="col-sm-5 control-label">Result Type</label>
							  		<div class="col-sm-7">
										<select name="resultType" class="form-control">
									  	<option value=></option>;
									  	<option value="medi">Medicaid</option>;
									  	<option value="aptc">APTC</option>;
									  	<option value="uqhp">UQHP</option>;
									  	<option value="mixed">Mixed</option>;
										</select>
									</div> 
								</div>
							</div>

							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<label for="fileName" class="col-sm-5 control-label">File Name</label>
									<div class="col-sm-7">						  
										<input name="fileName" type="text" class="form-control" id="fileName" placeholder="Download File Name">
									</div>							  
								</div> 
							</div>

						</div> 
<!-- row -->
						<div class="spacer-15">&nbsp;</div>
						<div class="row">						 
						  <div class="col-xs-12 col-md-7 col-centered">
						  	<div class="row">
						  		<div class="col-xs-6 col-md-6">
									<button type="submit" class="btn btn-primary btn-lg btn-block" id="search_btn">Search</button>	
								</div>
								<div class="col-xs-6 col-md-6">  
									<button type="button" class="btn btn-danger btn-lg btn-block">Reset</button>
								</div>
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
   	$(window).load(function() {
         	localStorage.clear();
   	});

	$(document).ready(function(){
	/*	$('#select-applications-page').on('change', function() {
			var val = $('option:selected',this).index();
			if(val != 0){
				window.location.href = $(this).val();
			}
		});*/
		/*$("#search_btn").on('click',function(){
			window.location.href = "application-search-result.html";
		});*/
	});
</script>


  </body>
</html>
