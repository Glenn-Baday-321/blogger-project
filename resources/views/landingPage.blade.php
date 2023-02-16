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
            <a href="">Word Weaver</a>
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
    <section class="flex flex-col w-3/4 m-auto my-10">
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
    <!-- Articles -->
    <section class="flex flex-row w-3/4 m-auto my-10">
        <div>
            <h2>Title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quam hic voluptate voluptatibus! Beatae debitis quae aspernatur. Perferendis ab quasi natus! Libero nesciunt possimus harum eligendi eos dolor consequatur hic.</p>
        </div>
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
        </div>
    </section>
    <section class="flex flex-row w-3/4 m-auto my-10">
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
        </div>
        <div>
            <h2>Title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quam hic voluptate voluptatibus! Beatae debitis quae aspernatur. Perferendis ab quasi natus! Libero nesciunt possimus harum eligendi eos dolor consequatur hic.</p>
        </div>
    </section>
    <!-- Articles end -->
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
    <section class="flex flex-col w-3/4 m-auto my-10">
        <div class="text-center py-5 w-2/3 m-auto">
            <h2 class="text-4xl font-bold p-3">Screenshots</h2>
            <p class="text-lg p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus consequuntur nihil, atque maiores tempora!</p>
        </div>
        <div class="flex flex-row border items-center">
            <div class="flex flex-col w-1/2">
                <div class="border ">
                    <button id="v-btn1" class="p-3">Tab1</button>
                </div>
                <div class="border " >
                    <button id="v-btn2" class="p-3">Tab2</button>
                </div>
                <div class="border ">
                    <button id="v-btn3" class="p-3">Tab3</button>
                </div>
                <div class="border ">
                    <button id="v-btn4" class="p-3">Tab4</button>
                </div>
            </div>
            <div class="flex border w-1/2 items-center justify-center">
                <div id="v-tabOneInfo" class="">
                    Tab content 1
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
                <div id="v-tabTwoInfo" class="">
                    Tab content 2
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
                <div id="v-tabThreeInfo" class="">
                    Tab content 3
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
                <div id="v-tabFourInfo" class="">
                    Tab content 4
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- vertical Tabs end -->
    <!-- horizontal tabs-->
    <section class="flex flex-col w-3/4 m-auto my-10">
        <div class="text-center py-5 w-2/3 m-auto">
            <h2 class="text-4xl font-bold p-3">Screenshots</h2>
            <p class="text-lg p-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, consequatur! Sed ut assumenda quaerat optio.</p>
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row">
                <div class="border w-1/3">
                    <button id="h-btn1" class="p-3">Tab1</button>
                </div>
                <div class="border w-1/3" >
                    <button id="h-btn2" class="p-3">Tab2</button>
                </div>
                <div class="border w-1/3">
                    <button id="h-btn3" class="p-3">Tab3</button>
                </div>
            </div>
            <div class="flex border items-center justify-center">
                <div id="h-tabOneInfo" class="">
                    Tab content 1
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
                <div id="h-tabTwoInfo" class="">
                    Tab content 2
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
                <div id="h-tabThreeInfo" class="">
                    Tab content 3
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- horizontal tabs end -->
    <!-- call to action -->
    <section class="flex flex-col w-3/4 m-auto items-center my-10">
        <div class="text-center py-5 w-2/3 m-auto">
            <h2 class="text-4xl font-bold p-3">Get Started</h2>
            <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cupiditate accusamus dolore nam molestiae consectetur.</p>
        </div>
        <div class="grid grid-cols-2 grid-flow-row">
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>
            </div>
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </div>
            </div>
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>
                </div>
            </div>
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
            </div>
        </div>
        <button>Start Blogging</button>
    </section>
    <!-- call to action end -->

    <!-- Testimonial -->
    <section class="flex flex-col w-3/4 m-auto items-center my-10">
        <div class="text-center py-5 w-2/3 m-auto">
            <h2 class="text-4xl font-bold p-3">Loved by people worldwide.</h2>
            <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cupiditate accusamus dolore nam molestiae consectetur.</p>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="grid grid-flow-row gap-4">
            <div class="border">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus amet impedit omnis sunt? Nihil ut voluptates inventore repellendus blanditiis delectus.
                    </p>
                </div>
                <div class="border">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sequi voluptate modi obcaecati ex aliquid labore explicabo at recusandae animi.
                    </p>
                </div>
            </div>
            <div class="grid grid-flow-row gap-4">
                <div class="border">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corrupti, aliquid voluptatem explicabo ad ipsum rem. Voluptate facere dolore iste libero eveniet. Molestias facere atque laboriosam asperiores! Eius, ullam suscipit?
                    </p>
                </div>
                <div class="border">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis velit nam itaque quos pariatur harum laborum, commodi facere aut beatae quis animi, eos corporis id dolorem repellendus dicta eum iusto?
                    </p>
                </div>
            </div>
            <div class="grid grid-flow-row gap-4">
            <div class="border">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus amet impedit omnis sunt? Nihil ut voluptates inventore repellendus blanditiis delectus.
                    </p>
                </div>
                <div class="border">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sequi voluptate modi obcaecati ex aliquid labore explicabo at recusandae animi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->
    <!-- Content end -->


    <!-- Footer -->
    <footer class="flex flex-col w-full">
        <div class="flex flex-row border w-3/4 m-auto justify-around">
            <div>
                LOGO
            </div>
            <div>
                nav
                <li>item 1</li>
                <li>item 2</li>
                <li>item 3</li>
            </div>
            <div>
                reosurces
                <li>item 1</li>
                <li>item 2</li>
                <li>item 3</li>
            </div>
        </div>
        <div class="flex flex-row justify-between border w-3/4 m-auto">
            <p>Copyright @ 2023 Glenn Baday</p>
        </div>
    </footer>
    <!-- Footer end -->
   
</body>
</html>