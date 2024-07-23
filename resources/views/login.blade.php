<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>login</title>
</head>
<body>
    <section class="section_login">
        <div class="container_login">
            <h1 class="text-white mb-4 text-center">Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-4">
                    <label for="password"  class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"required>
                    </div>
                    
                    <div class="mb-4 form-check">
                       <input type="checkbox" class="form-check-input" id="exampleCheck1">
                       <label class="form-check-label" for="exampleCheck1">remember me</label>
                   </div>
                    <div class="mb-4 d-flex justify-content-between align-items-center w-100">
                            <div class="mb-4 text-white">
                                <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Forgot my password</a></p>


                            </div>
                            <button type="submit" class="btn btn-outline-light">Submit</button>  
                    </div>
            </form>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>