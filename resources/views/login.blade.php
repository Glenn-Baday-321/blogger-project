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
    <section class="w-full h-screen flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center w-1/2 h-3/4 ">
            <div class="">
                <a href="" class="text-5xl font-bold">Word<span class="text-primary">Weaver</span></a>
            </div>
            <form action="" class="flex flex-col space-y-3 w-2/3 p-10 m-3 border shadow-xl rounded-xl">    
                <span class="text-xl text-center">Sing in</span>     
                <span class="text-lg text-center">Using your Weaver Account</span>     
                <div class="flex">
                    <span class="inline-flex items-center pl-3 pr-1 text-sm text-gray-900 bg-gray-200 rounded-l-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </span>
                    <input type="text" class="rounded-none rounded-r-lg text-gray-900 block flex-1  w-full text-md p-2.5 bg-gray-200" placeholder="Username or email">
                </div>
                <div class="flex">
                    <span class="inline-flex items-center pl-3 pr-1 text-sm text-gray-900 bg-gray-200 rounded-l-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </span>
                    <input type="password" class="rounded-none rounded-r-lg bg-gray-200 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full text-md p-2.5 " placeholder="Password">
                </div>
                <div class="flex flex-row justify-between">
                    <div class="space-x-2">
                        <input id="remember" type="checkbox"><label for="remember" class="text-md">Remember me</label>
                    </div>
                    <a href="" class="text-md text-blue-500">Forgot password?</a>
                </div>
                <div>
                    <button type="submit" class="bg-primary font-bold text-md text-white p-2.5 rounded-lg w-full">LOGIN</button>
                </div>
            </form>
            <span class="">Dont have an account yet? <a href="/register" class="text-blue-500">Create one</a></span>
        </div>
    </section>
</body>
</html>