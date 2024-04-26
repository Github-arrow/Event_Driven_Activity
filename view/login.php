<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagolaon TES</title>

    <script src="../assets/js/search.js"></script>

    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #ecf0f1;
            padding-top: 60px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="../assets/img/logo.png" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Back to Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <hr>
    <main>
        <div class="card-body">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <form id="registrationForm" action="">
                                    <div class="form-group mt-2">
                                        <label for="email">
                                            Email
                                        </label>
                                        <input type="email" class="form-control mt-2" id="email" placeholder="Email"
                                            required />
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="password">
                                            Password
                                        </label>
                                        <input type="password" class="form-control mt-2" id="password"
                                            placeholder="Password" required />
                                    </div>
                                    <button class="btn btn-success mt-3">
                                        Login
                                    </button>
                                </form>
                                <p class="mt-3">
                                    <center>
                                        Not registered?
                                        <a href="#">Create an
                                            account</a>
                                    </center>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <p>
                <center>TCC-2024&#174;</center>
            </p>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>