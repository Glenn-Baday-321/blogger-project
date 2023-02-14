<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Blogger - App</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="flex flex-row border">
        <div class="basis-1/4 border">
            <a href="">LOGO</a>
        </div>
        <div class="flex flex-row w-full justify-center basis-4/5 border">
            <div class="px-3 mx-3 border"><a href="">Item 1</a></div>
            <div class="px-3 mx-3 border"><a href="">Item 1</a></div>
            <div class="px-3 mx-3 border"><a href="">Item 1</a></div>
        </div>
        <div class="flex flex-row w-full justify-center basis-1/4 border">
            <div class="px-3 mx-3 border"><a href="">Login</a></div>
            <div class="px-3 mx-3 border"><a href="">Sign-up</a></div>
        </div>
    </nav>
    <!-- Navigation end -->
    <!-- Hero section -->
    <div class="h-screen flex flex-row justify-center">
        <div class="border flex flex-row w-full items-center justify-center">
            <h1 class="text-2xl font-bold">Hello!</h1>
        </div>
    </div>
    <!-- Hero end -->
    <!-- Content -->
    <section class="flex flex-col">
        <div class="flex flex-col w-full items-center">
            <!-- content title -->
            <h2 class="text-2xl font-bold">Everything you need to take your system to the next level.</h2>
            <p class="text-xl">Lorem ipsum dolor sit amet.</p>
            <!-- content content -->
            <div class="flex flex-row w-max">
                <div class="flex flex-col w-max border-gray-300 border-r-4">
                    <div class="border-r-4 border-blue-900"><a href="">Item</a></div>
                    <div class="">Item</div>
                    <div class="">Item</div>
                </div>
                <div>
                    Tab content
                </div>
            </div>
        </div>
    </section>
    <!-- Content end -->
</body>
</html>