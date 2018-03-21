<?php session_start();
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>project Expo Certificate Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <form action="tech.php" method="post">
    <div ng-app="myApp" ng-controller="controller">
        <div class="container">
            <br/>
			<h2 align="right" >		
		   Welcome: <?php echo $_SESSION['name'] ?> </br>
		    <a href="index.php">Home</a>
		   <a href="logout.php">Logout</a>
          	   
		 </h2> 
            <h1 align="center">Project Expo Certificate Form</a></h1>
            <br/>
            <div class="row">
                <div class="col-sm-2 pull-left">
                    <label>PageSize:</label>
                    <select ng-model="data_limit" class="form-control">
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
                <div class="col-sm-6 pull-right">
                    <label>Search:</label>
                    <input type="text" ng-model="search" ng-change="filter()" placeholder="Search" class="form-control" />
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12" ng-show="filter_data > 0">
                    <table class="table table-striped table-bordered">
                        <thead>
						    <th>sno&nbsp</th>
                            <th>samyak_id</th>
                            <th>name&nbsp;</th>
                            <th>college_name&nbsp;</th>
                            <th>Project&nbsp;</th>
                            
							<th>  </th>
                        </thead>
                        <tbody>
                            <tr ng-repeat="data in searched = (file | filter:search | orderBy : base :reverse) | beginning_data:(current_grid-1)*data_limit | limitTo:data_limit">
                                <td>{{data.sno}}</td>
								<td>{{data.samyak_id}}</td>
                                <td>{{data.name}}</td>
                                <td>{{data.college_name}}</td>
								<td>{{data.project}}</td>
								<?php echo "<td><a target='_blank' href=\"projectcertview.php?sno={{data.sno}}\">Edit</a>  </td> "?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12" ng-show="filter_data == 0">
                    <div class="col-md-12">
                        <h4>No records found..</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 pull-left">
                        <h5>Showing {{ searched.length }} of {{ entire_user}} entries</h5>
                    </div>
                    <div class="col-md-6" ng-show="filter_data > 0">
                        <div pagination="" page="current_grid" on-select-page="page_position(page)" boundary-links="true" total-items="filter_data" items-per-page="data_limit" class="pagination-small pull-right" previous-text="&laquo;" next-text="&raquo;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.12/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
    <script src="projectmyapp.js"></script>
	</form>
</body>
</html>