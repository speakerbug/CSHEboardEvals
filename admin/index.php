<?php

$authorized_users = array("henry", "harsh", "harlan", "ajgajg1134", "faokryn", "jeid", "maxime", "mbillow", "rosehacker", "rossdylan");

if (!in_array($_SERVER['WEBAUTH_USER'], $authorized_users)) {
    echo "You are not authorized to view the admin.";
    die();
}

?>

<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSH Bootstrap Theme -->
	<link href="css/members.min.css" rel="stylesheet">
    <style type="text/css">
    ul>li, a{cursor: pointer;}
    </style>
    <title>CSH | E-Board Evals</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" id="navbar-container">
    <div class="navbar-header">
        <a href="#" class="navbar-brand">
            <ul class="nav navbar-nav navbar-left">
		    <li><a href="../index.html"><span class="glyphicon glyphicon-arrow-left"></span> Back to Eboard Evals</a></li>
		  </ul>  
        </a><!-- /.brand -->
        
    </nav><!-- /.navbar-header -->
    <div class="navbar-header pull-right" role="navigation">
    </div>
    </div>
</div>

<BR><BR><BR>
    
<div ng-controller="evalCtrl" pretty-html>
<div class="container">
<br/>
<br/>
    <div class="row">
        <div class="col-md-2">PageSize:
            <select ng-model="entryLimit" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col-md-3">Filter:
            
            <select ng-model="search" ng-change="filter()" class="form-control">
                <option selected placeholder="None"></option>
                <option>Chairman</option>
                <option>RD</option>
                <option>OpComm</option>
                <option>Evals</option>
                <option>Financial</option>
                <option>Imps</option>
                <option>Social</option>
            </select>
        </div>
        <div class="col-md-4">
            <h5>Filtered {{ filtered.length }} of {{ totalItems}} total Submissions</h5>
        </div>
        <div class="col-md-3"><button type="button" class="btn btn-info" id="expandButton">Expand</button></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12" ng-show="filteredItems > 0">
            <div style="overflow-x:scroll;">
            <table class="table table-striped table-bordered">
            <thead>
            <th>Position&nbsp;<a ng-click="sort_by('position');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 1&nbsp;<a ng-click="sort_by('q1');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 2&nbsp;<a ng-click="sort_by('q2');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 3&nbsp;<a ng-click="sort_by('q3');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 4&nbsp;<a ng-click="sort_by('q4');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 5&nbsp;<a ng-click="sort_by('q5');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 6&nbsp;<a ng-click="sort_by('q6');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 7&nbsp;<a ng-click="sort_by('q7');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 8&nbsp;<a ng-click="sort_by('q8');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 9&nbsp;<a ng-click="sort_by('q9');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 10&nbsp;<a ng-click="sort_by('q10');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Question 11&nbsp;<a ng-click="sort_by('q11');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>What You Like:&nbsp;<a ng-click="sort_by('youLike');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>What You Dislike&nbsp;<a ng-click="sort_by('youDislike');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Comments&nbsp;<a ng-click="sort_by('comments');"><i class="glyphicon glyphicon-sort"></i></a></th>
            <th>Name&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a></th>
                <th>Archive&nbsp;</th>
            </thead>
            <tbody>
                <tr ng-repeat="data in filtered  = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit track by $index ">
                    <td class="prettyHTML">{{data.position}}</td>
                    <td>{{data.q1}}</td>
                    <td>{{data.q2}}</td>
                    <td>{{data.q3}}</td>
                    <td>{{data.q4}}</td>
                    <td>{{data.q5}}</td>
                    <td>{{data.q6}}</td>
                    <td>{{data.q7}}</td>
                    <td>{{data.q8}}</td>
                    <td>{{data.q9}}</td>
                    <td>{{data.q10}}</td>
                    <td>{{data.q11}}</td>
                    <td>{{data.youLike}}</td>
                    <td>{{data.youDislike}}</td>
                    <td>{{data.comments}}</td>
                    <td>{{data.name}}</td>
                    <td><button class="btn btn-default">Archive</button></td>
                </tr>
            </tbody>
            </table>
                </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems == 0">
            <div class="col-md-12">
                <h4>No Evals Found</h4>
            </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems > 0">    
            <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
            
            
        </div>
    </div>
</div>
</div>
    
    
<script src="js/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="js/prettyHTML.js"></script>
<script src="app/app.js"></script>
<script src="js/admin.js"></script>
    </body>
</html>