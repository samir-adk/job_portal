<?php
session_start();

if (isset($_POST['admin_login'])) {
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check if both username and password are not empty
    if (!empty($user_name) && !empty($password)) {
        if($user_name == "admin" && $password == "admin"){
header("Location:admin_panel.php");
        }
echo "Username or Password is wrong";
    }
    else{
        echo "Please provide both username and password.";
    }
}
?>
<?php
include 'header_admin.php';
?>


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Admin Login!</h1>
                                    </div>
                                    <form class="user" method="POST" action="admin_login.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="user_name" aria-describedby="emailHelp"
                                                placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="admin_login" class="btn btn-primary btn-user btn-block">Login </button>
                            
                                        </a>
                                        <hr>
                                       
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</body>
