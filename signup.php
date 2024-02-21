<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="designs.css">
    <title>Sign Up</title>
</head>
<body>
    <h2 style="text-align: center; margin-top: 30px;">Sign Up</h2>
    <div class="form-container mt-5" >
        <form action="">
            <div class="input-group">
                <span class="input-group-text">First and last name</span>
                <input type="text" placeholder="ex. Juan" aria-label="First name" class="form-control">
                <input type="text" placeholder="ex. Dela Cruz" aria-label="Last name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Mobile number</span>
                <input type="text" class="form-control" placeholder="ex. 09123456789" aria-label="number" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" aria-label="password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                <input type="password" class="form-control" aria-label="confirm_password" aria-describedby="basic-addon1">
            </div>  

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</body>
</html>