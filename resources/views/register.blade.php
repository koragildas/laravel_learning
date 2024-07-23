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
            <form method="Post" action="{{ route('users.store') }}">
                @csrf
               <div class="mb-3">
                <label for="name" class="w-100 d-flex justify-content-between align-items-center">Name :
                    <input type="text" class="w-80 rounded" name="name" id="name" value="{{ old('name') }}" required autofocus >
                    @error('name')
                        <div >{{ $message }}</div>
                    @enderror
                </label>
               </div>
               <div class="mb-3">
                <label for="username" class="w-100 d-flex justify-content-between align-items-center">Username:
                    <input type="text" class="w-80 rounded" name="username" id="username" value="{{ old('username') }}" required autofocus>
                    @error('username')
                    <div >{{ $message }}</div>
                @enderror
                </label>
               </div>
               <div class="mb-3">
                <label for="email" class="w-100 d-flex justify-content-between align-items-center">Email:
                    <input type="email" class="w-80 rounded" name="email" id="email" value="{{ old('email')  }}" required autofocus>
                    @error('email')
                    <div >{{ $message }}</div>
                @enderror
                </label>
               </div>
               <div class="mb-3">
                <label for="password" class="w-100 d-flex justify-content-between align-items-center">Password:
                    <input type="password" class="w-80 rounded" name="password" id="password" required autofocus>
                    @error('password')
                    <div >{{ $message }}</div>
                @enderror
                </label>
               </div>
               <div class="mb-3">
                <label for="password_confirmation" class="w-100 d-flex justify-content-between align-items-center ">Confirm password:
                    <input type="password" class="w-80 rounded" name="password_confirmation" id="password_confirmation">
                </label>
               </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center w-100">
                          
                          <p class="w-50s">Sex :</p>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sex" value="male">
                                <label class="form-check-label" for="exampleCheck1">Men</label>
                            </div>

                            <div class="mb-3 form-check ms-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sex" value="female">
                                <label class="form-check-label" for="exampleCheck1">Women</label>
                            </div>

                            @error('sex')
                            <div >{{ $message }}</div>
                        @enderror
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