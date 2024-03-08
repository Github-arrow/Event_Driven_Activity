<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./assets/js/search.js"></script>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/logo.png" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Github_Repository/Event_Driven_Activity/index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Github_Repository/Event_Driven_Activity/registration.php">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="h2 mt-3">Registration</p>
        <p>You can add record for student here.</p>
        <div class="card mt-3">
            <div class="card-header">Registration Form</div>
            <div class="card-body">
               <form action="">
                <div class="row">
                    <div class="col-md-4">
                        <label>TES Award Number: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Enter TES Award Number" class="form-control mt-1">
                    </div>
                    <div class="col-md-4">
                        <label>Application Number: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Enter Application Number Number" class="form-control mt-1">
                    </div>
                    <div class="col-md-4">
                        <label>Student ID: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Enter Student ID" class="form-control mt-1">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label>First Name: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Enter Frist Name" class="form-control mt-1">
                    </div>
                    <div class="col-md-3">
                        <label>Last Name: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Last Name" class="form-control mt-1">
                    </div>
                    <div class="col-md-3">
                        <label>Ext. Name: <small>(Optional)</small></b></Strong>
                        <input type="text" placeholder="Ext. Name" class="form-control mt-1">
                    </div>
                    <div class="col-md-3">
                        <label>Middle Name: <small>(Optional)</small></Strong>
                        <input type="text" placeholder="Middle Name" class="form-control mt-1">
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-3">
                        <label>First Name: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Enter Frist Name" class="form-control mt-1">
                    </div>
                    <div class="col-md-3">
                        <label>Last Name: <b class="text-danger">*</b></Strong>
                        <input type="text" placeholder="Last Name" class="form-control mt-1">
                    </div>
                    <div class="col-md-3">
                        <label>Ext. Name: <small>(Optional)</small></b></Strong>
                        <input type="text" placeholder="Ext. Name" class="form-control mt-1">
                    </div>
                    <div class="col-md-3">
                        <label>Gender: <b class="text-danger">*</b></small></Strong>
                        <select name="" id="" class="form-control">
                            <option value="" disabled selected>--Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
               </form>
            </div>
            <div class="card-footer mt-3">
                -
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>