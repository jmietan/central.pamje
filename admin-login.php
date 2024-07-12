<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRAL - Admin Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminlogin.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 ">
        <div class="card p-4 shadow-lg bg-color" style="width: 400px;">
            <div class="d-flex justify-content-center mb-1">
                <img src="img/central-logo.svg" class="logo"/>
            </div>
            <h5 class="text-center mb-4 text-secondary">ADMIN LOGIN PAGE</h5>
            <form>
                <div class="form-group">
                    <label for="email" class="text-secondary">Email / User ID</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email/User ID">
                </div>
                <div class="form-group">
                    <label for="password" class="text-secondary">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn-signin btn-lg btn-block text-white">Sign in</button>
            </form>

        </div>
    </div>
   
</body>
</html>