<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <form action="login_check.php" method="POST" class="card p-4 col-md-4 mx-auto shadow">
        <h4 class="text-center mb-3">Login</h4>
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button type="submit" class="btn btn-primary w-100">OK</button>
    </form>
</div>
</body>
</html>
