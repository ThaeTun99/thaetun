<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login Form</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center">
    <div class="login relative flex justify-center items-center flex-col">
        <h2 class="text-xl mb-10 leading-6 font-bold">Login</h2>
        <form action="" method="post" class="relative">
            @csrf
            <div class="inputBox">
                <label for="username"></label>
                <input type="text"id="username" name="username" placeholder="Username">
                <i class="fa-regular fa-user mt-5"></i>
            </div>
            <div class="inputBox">
                <label for="password"></label>
                <input type="password"id="password" name="password" placeholder="Password">
                <i class="fa-solid fa-lock mt-5"></i>
            </div>
            <label for="check">
                <input type="checkbox">
                <span>Keep me logged in</span>
            </label>
            <div class="inputBox">
                <input type="submit" value="Log in">
            </div>
        </form>
    </div>
</body>
</html>