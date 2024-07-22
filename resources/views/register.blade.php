<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Register</title>
</head>
<body>
    <section class="section_Register">
        <div class="container_Register">
            <h1 class="text-white mb-3 text-center">Registration</h1>
            <form action="">
               <div class="mb-3">
                <label for="name" class="w-100 d-flex justify-content-between align-items-center">Name :
                    <input type="text" class="w-80 rounded" >
                </label>
               </div>
               <div class="mb-3">
                <label for="name" class="w-100 d-flex justify-content-between align-items-center">Username:
                    <input type="text" class="w-80 rounded" >
                </label>
               </div>
               <div class="mb-3">
                <label for="name" class="w-100 d-flex justify-content-between align-items-center">Email:
                    <input type="email" class="w-80 rounded" >
                </label>
               </div>
               <div class="mb-3">
                <label for="name" class="w-100 d-flex justify-content-between align-items-center">Password:
                    <input type="password" class="w-80 rounded" >
                </label>
               </div>
               <div class="mb-3">
                <label for="name" class="w-100 d-flex justify-content-between align-items-center ">Confirm password:
                    <input type="password" class="w-80 rounded" >
                </label>
               </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center w-100">
                          
                          <p class="w-50s">Sex :</p>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Men</label>
                            </div>

                            <div class="mb-3 form-check ms-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Women</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-light">Submit</button>  
            </form>
        </div>
        <div class="image ms-5">
            <img src="{{ asset('css/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png') }}" alt="">
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>