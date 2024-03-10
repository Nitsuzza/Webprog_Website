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

            <div class="col-12">
                <label for="inputAddress2" class="form-label">Input Email:</label>
                <input type="text" class="form-control" id="inputAddress2">
            </div>

            <div class="col-12">
                <label for="inputAddress2" class="form-label">Input Password:</label>
                <input type="password" class="form-control" id="inputAddress2">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12">
                <span>
                    Dont have an Account?        
                    <a href="login.html">Sign Up</a>
                </span>
                <span class="float-end">
                            
                    <a href="design.html">Home</a>
                </span>
            </div>
        </form>
    </section>
</body>

</html>