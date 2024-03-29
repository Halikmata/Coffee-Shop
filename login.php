<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="designs.css">
    <title>Login</title>
</head>
<body>
    <h2 style="text-align: center; margin-top: 30px;">Login</h2>
    <div class="form-container mt-5" >
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">log in</button>
            <button type="button" class="btn btn-secondary" onclick="goBack()"> Cancel </button>
        </form>
    </div>

    <!-- JavaScript to handle exit button -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
