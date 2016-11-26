<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        #feedback {
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;

        }

        #camera {
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 1%;
        }

        .row {
            margin-left: 15%;
            margin-right: 15%;
        }

        .material-icons {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ADMIN PORTAL</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
<!--                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<div class="container" style="display: inline-block;">
    <span style="font-size: 30px; margin-left: 16%;">Current menu</span>
    <button type="button" id="camera" name="camera" class="btn btn-primary text-center"><i style="text-align: center;"
                                                                                           class="material-icons">camera_alt</i>
    </button>
    <button type="button" id="feedback" name="feedback" class="btn btn-primary text-center"><i class="material-icons">feedback</i>
    </button>
</div>

<div class="jumbotron">
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Monday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_1">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tuesday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_2">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Wednesday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_3">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thursday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_4">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Friday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_5">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Saturday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_6">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sunday
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Evening snack</th>
                                <th>Dinner</th>
                            </tr>
                            </thead>
                            <tbody id="table_7">

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
</div>
<div class="container">
    <form class="form-inline" id="myForm">
        <div class="row">
            <h3>Add meal</h3>
            <hr class="hr">
            <label for="item_name">Item name</label>
            <input style="margin-left: 1%;" type="text" class="form-control" id="item_name" placeholder="Example: Rice" required autocomplete="off">
            <br>
            <br>
            <br>
            <div class="col-md-10">
                <label class="col-md-2">

                </label>
                <label class="col-md-1">
                    M
                </label>
                <label class="col-md-1">
                    T
                </label>
                <label class="col-md-1">
                    W
                </label>
                <label class="col-md-1">
                    Th
                </label>
                <label class="col-md-1">
                    F
                </label>
                <label class="col-md-1">
                    S
                </label>
                <label class="col-md-1">
                    Su
                </label>
            </div>
        </div>
        <div class="row">
            <hr class="hr">
            <div class="col-md-10">
                <label class="col-md-2">
                    Breakfast
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox1" value="1" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox2" value="2" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox3" value="3" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox4" value="4" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox5" value="5" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox6" value="6" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox7" value="7" aria-label="...">
                </label>
            </div>
        </div>
        <div class="row">
            <hr class="hr">
            <div class="col-md-10">
                <label class="col-md-2">
                    Lunch
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox8" value="8" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox9" value="9" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox10" value="10" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox11" value="11" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox12" value="12" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox13" value="13" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox14" value="14" aria-label="...">
                </label>
            </div>
        </div>
        <div class="row">
            <hr class="hr">
            <div class="col-md-10">
                <label class="col-md-2">
                    Evening snack
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox15" value="15" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox16" value="16" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox17" value="17" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox18" value="18" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox19" value="19" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox20" value="20" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox21" value="21" aria-label="...">
                </label>
            </div>
        </div>
        <div class="row">
            <hr class="hr">
            <div class="col-md-10">
                <label class="col-md-2">
                    Dinner
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox22" value="22" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox23" value="23" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox24" value="24" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox25" value="25" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox26" value="26" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox27" value="27" aria-label="...">
                </label>
                <label class="form-check-label col-md-1">
                    <input class="form-check-input" type="checkbox" id="blankCheckbox28" value="28" aria-label="...">
                </label>
            </div>
        </div>
        <br>
        <br>
        <div class="row text-center">
            <button type="submit" name="add" id="add" class="btn btn-success"><b style="font-size: 18px;">Add item</b>
            </button>
        </div>
    </form>
</div>
<br>
<br>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="adminScript.js"></script>
</body>
</html>

