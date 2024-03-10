<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Form Design</title>
</head>

<body>
    <div class="container-fluid bg-dark text-light py-3 fixed-top">
        <header class="text-center">
            <h1 class="display-6">SignUp</h1>
        </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
        <form class="row g-3 p-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationDefault01" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Lot/Blk</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Street</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Barangay</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phase/Subdivision</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Country</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Enter Country">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Province</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">City</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-4">
                <label for="inputAddress" class="form-label">Number</label>
                <input type="text" class="form-control" id="inputAddress" >
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Input Password:</label>
                <input type="password" class="form-control" id="inputAddress2">
            </div>

            <div class="col-12">
                <label for="inputAddress2" class="form-label">Repeat Password:</label>
                <input type="password" class="form-control" id="inputAddress2">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <span>
                Already have an Account?        
                <a href="register.html">Return</a>
            </span>
        </form>
    </section>
</body>

</html>