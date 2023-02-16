<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/landingPage.js')
    <title>Blogger - App</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="flex flex-row border w-3/4 m-auto">
        <div class="basis-1/3 border">
            <a href="">LOGO</a>
        </div>
        <div class="flex flex-row w-full justify-center basis-3/4 border">
            <div class="px-3 mx-3 border"><a href="">Item 1</a></div>
            <div class="px-3 mx-3 border"><a href="">Item 1</a></div>
            <div class="px-3 mx-3 border"><a href="">Item 1</a></div>
        </div>
        <div class="flex flex-row w-full justify-center basis-1/3 border">
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
    <!-- Stats -->
    <section class="flex flex-col w-3/4 m-auto">
        <div class="grid grid-flow-col w-full place-items-center p-7 border">
            <div class="col1 border text-center">
                <p class="text-4xl font-bold ">100%</p>
                <p class="text-lg">Stats</p>
            </div>
            <div class="col1 border text-center">
                <p class="text-4xl font-bold">P 500,000</p>
                <p class="text-lg">Stats</p>
            </div>
            <div class="col1 border text-center">
                <p class="text-4xl font-bold">1M</p>
                <p class="text-lg">Stats</p>
            </div>
            <div class="col1 border text-center">
                <p class="text-4xl font-bold">5+</p>
                <p class="text-lg">Stats</p>
            </div>
        </div>
    </section>
    <!-- Stats end -->

    <!-- Cards -->
    <!-- <section class="flex flex-col w-3/4 m-auto">
        <div class="flex flex-row border">
            <div class="w-1/2 border">
                <p>Blogging</p>
                <h2>Title</h2>
            </div>
            <div class="flex flex-row w-1/2 border justify-end">
                <button class="border">next</button>
            </div>
        </div>
    </section> -->
    <!-- Cards end -->

    <!-- vertical Tabs -->
    <section class="flex flex-col w-3/4 m-auto">
        <div class="text-center py-5">
            <h2 class="text-4xl font-bold">Screenshots</h2>
            <p class="text-lg">blablabla</p>
        </div>
        <div class="flex flex-row">
            <div class="flex flex-col w-1/2">
                <div class="border ">
                    <button id="btn1" class="p-3">Tab1</button>
                </div>
                <div class="border " >
                    <button id="btn2" class="p-3">Tab2</button>
                </div>
                <div class="border ">
                    <button id="btn3" class="p-3">Tab3</button>
                </div>
            </div>
            <div class="flex border w-1/2 items-center justify-center">
                <div id="tabOneInfo" class="">Tab content 1</div>
                <div id="tabTwoInfo" class="">Tab content 2</div>
                <div id="tabThreeInfo" class="">Tab content 3</div>
            </div>
        </div>
    </section>
    <!-- vertical Tabs end -->
    <!-- horizontal tabs-->
    <section class="flex flex-col w-3/4 m-auto">
        <div class="text-center py-5">
            <h2 class="text-4xl font-bold">Screenshots</h2>
            <p class="text-lg">blablabla</p>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row">
                <div class="border w-1/3">
                    <button id="btn1" class="p-3">Tab1</button>
                </div>
                <div class="border w-1/3" >
                    <button id="btn2" class="p-3">Tab2</button>
                </div>
                <div class="border w-1/3">
                    <button id="btn3" class="p-3">Tab3</button>
                </div>
            </div>
            <div class="flex border items-center justify-center">
                <div id="tabOneInfo" class="">Tab content 1</div>
                <div id="tabTwoInfo" class="">Tab content 2</div>
                <div id="tabThreeInfo" class="">Tab content 3</div>
            </div>
        </div>
    </section>
    <!-- horizontal tabs end -->
    <!-- call to action -->
    <section class="flex flex-col w-3/4 m-auto items-center py-5">
        <h1>Get started today</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ratione!</p>
        <button>Get started</button>
    </section>
    <!-- call to action end -->
    <!-- Testimonial -->
    <!-- Testimonial end -->
    <!-- Content end -->
    <!-- Footer -->
    <!-- Footer end -->
   
</body>
</html>