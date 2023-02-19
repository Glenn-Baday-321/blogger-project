<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
    <section class="w-full h-screen border flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center border w-1/3 h-1/2 bg-purple-500">
            <span class="m-5 border">Welcome User</span>
            <form action="" class="flex flex-col space-y-7 w-2/3 p-3 m-3 border">
                <div class="flex flex-col">
                    <input type="text" id="username" class="border p-1 rounded-lg" placeholder="Username or email">
                </div>
                <div class="flex flex-col">
                    
                    <input type="password" id="password" class="border p-1 rounded-lg" placeholder="Password">
                </div>
                <div class="flex flex-col bg-purple-300 rounded-lg">
                    <button type="submit" class="p-1 ">Login</button>
                </div>
            </form>
        </div>
        <p class="mt-4">Forgot your password? <a href="/">Reset Password</a></p>
    </section>
</body>
</html>