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
    <nav class="flex flex-row border w-3/4 m-auto p-3">
        <div class="basis-1/3 border">
            <a href="">Word Weaver</a>
        </div>
        <div class="flex flex-row w-full justify-center basis-3/4 border">
            <div class="border mx-3"><a href="" class=" px-3 py-1 rounded-sm">Item 1</a></div>
            <div class="border mx-3"><a href="" class="px-3 py-1 rounded-sm">Item 1</a></div>
            <div class="border mx-3"><a href="" class="px-3 py-1 rounded-sm">Item 1</a></div>
        </div>
        <div class="flex flex-row w-full justify-center basis-1/2 border">
            <div class="mx-3 border"><a href="/login" class="px-3 py-1 rounded-sm">Login</a></div>
            <div class="px-3 mx-3 border"><a href="" class=" font-bold py-2 px-4 rounded-full">Register</a></div>
        </div>
    </nav>
    <!-- Navigation end -->
    <!-- Hero section -->
    <div class="h-[90vh] flex flex-row justify-center w-11/12 m-auto">
        <div class="border flex flex-col w-full items-center justify-center bg-hero-img bg-cover bg-no-repeat rounded-lg drop-shadow-sm">
            <div class="w-9/12 text-center space-y-5">
                <h3 class="text-2xl font-bold">Our Blog</h3>
                <h1 class="text-6xl font-bold">Resources for makers and creatives to learn, sell and grow</h1>
                <p class="text-lg font-bold text-neutral-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, reprehenderit.</p>
            </div>
        </div>
    </div>
    <!-- Hero end -->
    <!-- Content -->
    <!-- Articles -->
        <section class="grid grid-rows-2 grid-flow-col gap-7 w-11/12 m-auto my-10">
            <div class="row-span-2 col-span-3 rounded-lg shadow-lg">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/796607/pexels-photo-796607.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">   
                    <div class="mt-5 items-start space-y-10">
                        <p class="font-bold text-lg text-green-400">Marketing</p>
                        <h3 class="font-bold text-3xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p>By Lorem Ipsum</p>
                            <p>January 01 2023</p>
                        </div>
                        <p class="text-md font-bold text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores aspernatur sit fugit cupiditate animi! Facere, molestiae? Quos fuga reprehenderit est...
                        </p>
                        <button class="flex rounded-full bg-primary py-2 font-bold text-white px-4">See more
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-2 rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/6826294/pexels-photo-6826294.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">
                    <div class="mt-3 items-start">
                        <p class="font-bold text-xl">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, laudantium?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2 rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/6826296/pexels-photo-6826296.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">
                    <div class="mt-3 items-start">
                        <p class="font-bold text-xl">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, laudantium?
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- Articles end -->
    <!-- Search blogs -->
        <section class="flex flex-col w-11/12 m-auto items-center my-10 rounded-lg p-10 bg-slate-900">
            <div class="text-center text-white w-2/3 m-auto">
                <h2 class="text-4xl font-bold p-3">All blog posts</h2>
                <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ex.</p>
            </div>
            <div class="flex flex-row justify-center w-1/2">
                <input class="rounded-l-full px-3 py-2 text-lg w-2/3" type="text" placeholder="Search blog">
                <button class="rounded-r-full bg-primary px-4 py-3 text-lg font-bold text-white w-1/4">Search Now</button>
            </div>
        </section>
    <!-- Search blogs end -->
    <!-- Blogs -->
        <section class="grid grid-cols-3 gap-5 w-11/12 m-auto">
            <div class=" rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/730801/pexels-photo-730801.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">   
                    <div class="mt-2 items-start space-y-5">
                        <p class="font-bold text-lg text-blue-400">Design</p>
                        <h3 class="font-bold text-2xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p class="font-semibold">By Lorem Ipsum</p>
                            <p class="text-slate-400 font-semibold">January 01 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://media.istockphoto.com/id/1082798390/photo/clipboard-on-colorful-background-with-copy-space-flat-lay-modern-and-minimal-style.jpg?s=612x612&w=0&k=20&c=gwg_MFnCmve3Hp5pQKlrELuFG7Gy3rfhN43JW_j0W34=" alt="image">   
                    <div class="mt-2 items-start space-y-5">
                        <p class="font-bold text-lg text-pink-400">Development</p>
                        <h3 class="font-bold text-2xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p class="font-semibold">By Lorem Ipsum</p>
                            <p class="text-slate-400 font-semibold">January 01 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://media.istockphoto.com/id/965065994/photo/gift-box-with-wedding-ring.jpg?s=612x612&w=0&k=20&c=Occ_ew3qjOtnNvJdzEaKMIm866BzZgctw1eXtXymGIM=" alt="image">   
                    <div class="mt-2 items-start space-y-5">
                        <p class="font-bold text-lg text-pink-400">Music</p>
                        <h3 class="font-bold text-2xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p class="font-semibold">By Lorem Ipsum</p>
                            <p class="text-slate-400 font-semibold">January 01 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/1037998/pexels-photo-1037998.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">   
                    <div class="mt-2 items-start space-y-5">
                        <p class="font-bold text-lg text-green-400">Marketing</p>
                        <h3 class="font-bold text-2xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p class="font-semibold">By Lorem Ipsum</p>
                            <p class="text-slate-400 font-semibold">January 01 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/12969059/pexels-photo-12969059.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">   
                    <div class="mt-2 items-start space-y-5">
                        <p class="font-bold text-lg text-rose-600">Technology</p>
                        <h3 class="font-bold text-2xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p class="font-semibold">By Lorem Ipsum</p>
                            <p class="text-slate-400 font-semibold">January 01 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" rounded-lg shadow-lg ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/3280216/pexels-photo-3280216.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">   
                    <div class="mt-2 items-start space-y-5">
                        <p class="font-bold text-lg text-orange-400">Others</p>
                        <h3 class="font-bold text-2xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, earum?
                        </h3>
                        <div class="flex flex-row justify-between">
                            <p class="font-semibold">By Lorem Ipsum</p>
                            <p class="text-slate-400 font-semibold">January 01 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Blogs end -->
    <!-- call to action -->
        <section class="flex flex-col w-11/12 m-auto items-center my-10 bg-slate-900 text-white rounded-lg">
            <div class="text-center py-5 w-2/3 m-auto">
                <h2 class="text-4xl font-bold p-3">Get Started</h2>
                <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cupiditate accusamus dolore nam molestiae consectetur.</p>
            </div>
            <div class="grid grid-cols-2 grid-flow-row gap-5 m-10">
                <div class="hover:text-primary px-10">
                    <div class="flex flex-row font-bold text-3xl space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <h3>Write</h3>
                    </div>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eveniet beatae commodi culpa impedit excepturi aperiam non. Libero, minima ex.
                    </p>
                </div>
                <div class="hover:text-primary px-10">
                    <div class="flex flex-row font-bold text-3xl space-x-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <h3>Edit</h3>
                    </div>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eveniet beatae commodi culpa impedit excepturi aperiam non. Libero, minima ex.
                    </p>
                </div>
                <div class="hover:text-primary px-10">
                    <div class="flex flex-row font-bold text-3xl space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                        </svg>
                        <h3>Upload</h3>
                    </div>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eveniet beatae commodi culpa impedit excepturi aperiam non. Libero, minima ex.
                    </p>
                </div>
                <div class="hover:text-primary px-10">
                    <div class="flex flex-row font-bold text-3xl space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h3>Read</h3>
                    </div>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eveniet beatae commodi culpa impedit excepturi aperiam non. Libero, minima ex.
                    </p>
                </div>
            </div>
            <button class="bg-primary text-white font-bold py-2 px-4 rounded-full m-10">Start Blogging</button>
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