<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/landingPage.js')
    <title>Word Weaver</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="flex flex-row border w-11/12 m-auto py-3">
        <div class="basis-1/3 border">
            <a href="" class="text-3xl font-bold">Word<span class="text-primary">Weaver</span></a>
        </div>
        <div class="flex flex-row w-full justify-center items-center basis-3/4 border">
            <div class="border mx-3"><a href="" class="font-semibold py-1 hover:text-primary hover:border-b-2 hover:border-primary">Home</a></div>
            <div class="border mx-3"><a href="" class="font-semibold py-1 hover:text-primary hover:border-b-2 hover:border-primary">Blog</a></div>
            <div class="border mx-3"><a href="" class="font-semibold py-1 hover:text-primary hover:border-b-2 hover:border-primary">About</a></div>
            <div class="border mx-3"><a href="" class="font-semibold py-1 hover:text-primary hover:border-b-2 hover:border-primary">Contact</a></div>
        </div>
        <div class="flex flex-row w-full justify-end items-center basis-1/3">
            <div class="mx-3"><a href="/login" class="font-semibold py-1 hover:text-primary hover:border-b-2 hover:border-primary">Login</a></div>
            <div class="space-y-4 mx-3"><a href="/register" class="bg-gradient-to-r from-red-600 via-primary to-yellow-400 text-white font-bold py-1 px-4 rounded-full">Register</a></div>
        </div>
    </nav>
    <!-- Navigation end -->
    <!-- Hero section -->
    <div class="h-[90vh] flex flex-row justify-center w-11/12 m-auto">
        <div class="flex flex-col w-full items-start justify-center bg-hero-img bg-cover bg-no-repeat rounded-lg drop-shadow-sm">
            <div class="w-2/3 text-left p-5 space-y-8 bg-gradient-to-r from-black to-black opacity-70 rounded-r-xl">
                <h1 class="text-5xl font-bold text-white"><span class="text-primary">Resources for makers and creatives</span> to learn, sell & grow</h1>
                <p class="text-lg font-bold text-white w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, reprehenderit.</p>
                <button class="bg-gradient-to-r from-red-600 via-primary to-yellow-400 opacity-100 text-lg font-bold text-white bg-primary rounded-xl px-3 py-1 hover:border-white hover:text-white">Sign-up</button>
            </div>
        </div>
    </div>
    <!-- Hero end -->
    <!-- Content -->
    <!-- Stats -->
        <section class="flex flex-col w-11/12 m-auto my-5 bg-black rounded-xl shadow-xl">
            <div class="grid grid-flow-col w-full place-items-center p-7 text-white">
                <div class="col1 text-center">
                    <p class="text-4xl font-bold ">100%</p>
                    <p class="text-lg">Guaranteed!</p>
                </div>
                <div class="col1 text-center">
                    <p class="text-4xl font-bold">500,000</p>
                    <p class="text-lg">Users worldwide</p>
                </div>
                <div class="col1 text-center">
                    <p class="text-4xl font-bold">1M</p>
                    <p class="text-lg">Blogs</p>
                </div>
                <div class="col1 text-center">
                    <p class="text-4xl font-bold">5+</p>
                    <p class="text-lg">Ratings</p>
                </div>
            </div>
        </section>
    <!-- Stats end -->
    <!-- Articles -->
        <section class="grid grid-rows-2 grid-flow-col gap-7 w-11/12 m-auto my-10">
            <div class="shadow-2xl row-span-2 col-span-3 rounded-lg">
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
            <div class="col-span-2 rounded-lg shadow-2xl ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/6826294/pexels-photo-6826294.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">
                    <div class="mt-3 items-start">
                        <p class="font-bold text-xl">
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-2 rounded-lg shadow-2xl ">
                <div class="flex flex-col m-7">
                    <img class="rounded-lg w-full drop-shadow-xl" src="https://images.pexels.com/photos/6826296/pexels-photo-6826296.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">
                    <div class="mt-3 items-start">
                        <p class="font-bold text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
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
                <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex flex-row justify-center w-1/2">
                <input class="rounded-l-full px-3 pl-8 py-2 text-lg w-2/3" type="text" placeholder="Looking for something?">
                <button class="rounded-r-full bg-primary px-4 py-3 text-lg font-bold text-white w-1/4">Search Now</button>
            </div>
        </section>
    <!-- Search blogs end -->
    <!-- Blogs -->
        <section class="flex flex-col w-11/12 m-auto items-center my-10">
            <div class="grid grid-cols-2 gap-8 m-auto">
                <div class="flex">
                    <img class="rounded-lg w-64 drop-shadow-xl " src="https://images.pexels.com/photos/730801/pexels-photo-730801.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="image">
                    <div class="flex flex-col justify-between py-6 ml-6">
                        <a href="" class="text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        <div class="flex flex-row space-x-3">
                            <span class="text-sm font-semibold text-white bg-orange-400 w-fit py-1 px-2 rounded-full">Design</span>
                        </div>
                        <span class="text-sm text-gray-500">20 October 2019</span>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-lg w-64 drop-shadow-xl " src="https://images.pexels.com/photos/574071/pexels-photo-574071.jpeg?auto=compress&cs=tinysrgb&w=600" alt="image">
                    <div class="flex flex-col justify-between py-6 ml-6">
                        <a href="" class="text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        <div class="flex flex-row space-x-3">
                            <span class="text-sm font-semibold text-white bg-orange-400 w-fit py-1 px-2 rounded-full">Design</span>
                            <span class="text-sm font-semibold text-white bg-yellow-400 w-fit py-1 px-2 rounded-full">Web Development</span>
                        </div>
                        <span class="text-sm text-gray-500">20 October 2019</span>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-lg w-64 drop-shadow-xl " src="https://images.pexels.com/photos/583843/pexels-photo-583843.jpeg?auto=compress&cs=tinysrgb&w=600" alt="image">
                    <div class="flex flex-col justify-between py-6 ml-6">
                        <a href="" class="text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        <div class="flex flex-row space-x-3">
                            <span class="text-sm font-semibold text-white bg-pink-400 w-fit py-1 px-2 rounded-full">Music</span>
                            <span class="text-sm font-semibold text-white bg-red-500 w-fit py-1 px-2 rounded-full">Art</span>
                            <span class="text-sm font-semibold text-white bg-green-500 w-fit py-1 px-2 rounded-full">Pop</span>
                        </div>
                        <span class="text-sm text-gray-500 ">20 October 2019</span>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-lg w-64 drop-shadow-xl " src="https://images.pexels.com/photos/3862632/pexels-photo-3862632.jpeg?auto=compress&cs=tinysrgb&w=600" alt="image">
                    <div class="flex flex-col justify-between py-6 ml-6">
                        <a href="" class="text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        <div class="flex flex-row space-x-3">
                            <span class="text-sm font-semibold text-white bg-slate-400 w-fit py-1 px-2 rounded-full">Systems Development</span>
                        </div>
                        <span class="text-sm text-gray-500 ">20 October 2019</span>
                    </div>
                </div>

                <div class="flex">
                    <img class="rounded-lg w-64 drop-shadow-xl " src="https://images.pexels.com/photos/3244513/pexels-photo-3244513.jpeg?auto=compress&cs=tinysrgb&w=600" alt="image">
                    <div class="flex flex-col justify-between py-6 ml-6">
                        <a href="" class="text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        <div class="flex flex-row space-x-3">
                            <span class="text-sm font-semibold text-white bg-amber-700 w-fit py-1 px-2 rounded-full">Nature</span>
                        </div>
                        <span class="text-sm text-gray-500 ">20 October 2019</span>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-lg w-64 drop-shadow-xl " src="https://images.pexels.com/photos/847393/pexels-photo-847393.jpeg?auto=compress&cs=tinysrgb&w=600" alt="image">
                    <div class="flex flex-col justify-between py-6 ml-6">
                        <a href="" class="text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        <div class="flex flex-row space-x-3">
                            <span class="text-sm font-semibold text-white bg-cyan-500 w-fit py-1 px-2 rounded-full">Ocean man</span>
                        </div>
                        <span class="text-sm text-gray-500">20 October 2019</span>
                    </div>
                </div>
            </div>
        </section>
    <!-- Blogs end -->
    <!-- call to action -->
        <section class="flex flex-col w-11/12 m-auto items-center my-10 bg-slate-900 text-white rounded-lg">
            <div class="text-center p-5 w-2/3 m-auto">
                <h2 class="text-4xl font-bold p-3">Get Started</h2>
                <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cupiditate accusamus dolore nam molestiae consectetur.</p>
            </div>
            <div class="grid grid-cols-2 gap-8 w-1/2">
                <div class="py-4 flex flex-col items-center hover:text-primary hover:border-primary text-center m-auto border space-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <h3 class="font-bold text-2xl">Write</h3>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, magni?
                    </p>
                </div>
                <div class="py-4 flex flex-col items-center hover:text-primary hover:border-primary text-center m-auto border space-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    <h3 class="font-bold text-2xl">Edit</h3>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, magni?
                    </p>
                </div>
                <div class="py-4 flex flex-col items-center hover:text-primary hover:border-primary text-center m-auto border space-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>
                    <h3 class="font-bold text-2xl">Upload</h3>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, magni?
                    </p>
                </div>
                <div class="py-4 flex flex-col items-center hover:text-primary hover:border-primary text-center m-auto border space-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h3 class="font-bold text-2xl">Read</h3>
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, magni?
                    </p>
                </div>
            </div>
            <button class="my-10 bg-gradient-to-r from-red-600 via-primary to-yellow-400 px-5 py-2 font-bold text-xl rounded-full drop-shadow-xl hover:bg-gradient-to-r hover:from-red-500 hover:via-primary hover:to-yellow-300">Sign-up Now!</button>
        </section>
    <!-- call to action end -->

    <!-- Testimonial -->
        <section class="flex flex-col w-11/12 m-auto items-center my-10">
            <div class="text-center py-5 w-2/3 m-auto">
                <h2 class="text-4xl font-bold p-3">Loved by people worldwide.</h2>
                <p class="text-lg p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cupiditate accusamus dolore nam molestiae consectetur.</p>
            </div>
            <div class="grid grid-cols-3 gap-4 auto-rows-auto">
                <div class="flex flex-col justify-between space-y-4 shadow-xl p-5 rounded-xl">
                    <p class="font-semibold text-xl">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, reiciendis."</p>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-lg">Sheryl Berge</span>
                            <span class="text-gray-500 ">CEO at Lynch LLC</span>
                        </div>
                        <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-1.c78616b7.png&w=64&q=75" class="w-16 rounded-full" alt="Avatar"/>
                    </div>
                </div>
                <div class="flex flex-col justify-between space-y-4 shadow-xl p-5 rounded-xl">
                    <p class="font-semibold text-lg">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quis numquam dicta enim aliquid dolores molestiae quod at. Corrupti hic beatae voluptatum at eius sunt veniam ab similique rerum quas?"</p>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-lg">Leland Kiehn</span>
                            <span class="text-gray-500 ">Founder of Kiehn and Son</span>
                        </div>
                        <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-5.e7f7faf2.png&w=64&q=75" class="w-16 rounded-full" alt="Avatar"/>
                    </div>
                </div>
                <div class="flex flex-col justify-between space-y-4 shadow-xl p-5 rounded-xl">
                    <p class="font-semibold">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae quam praesentium quos, recusandae magni cupiditate nulla saepe maiores perspiciatis consequuntur sequi veritatis qui blanditiis eum incidunt dolore! Quidem repellendus dolor sunt vero veritatis? Nobis ullam veniam minus. Repellat, dolorum fugit!"</p>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-lg">Peter Renolds</span>
                            <span class="text-gray-500 ">Founder of West Inc</span>
                        </div>
                        <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-3.eaa9ef6f.png&w=64&q=75" class="w-16 rounded-full" alt="Avatar"/>
                    </div>
                </div>
                <div class="flex flex-col justify-between space-y-4 shadow-xl p-5 rounded-xl">
                    <p class="font-semibold">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempora quis aspernatur libero reprehenderit temporibus perspiciatis aliquid, quas accusantium excepturi."</p>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-lg">Amy Hahn</span>
                            <span class="text-gray-500 ">Director at Velocity Industries</span>
                        </div>
                        <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&w=64&q=75" class="w-16 rounded-full" alt="Avatar"/>
                    </div>
                </div>
                <div class="flex flex-col justify-between space-y-4 shadow-xl p-5 rounded-xl">
                    <p class="font-semibold">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo repellat iste odit mollitia! Odio soluta ad veniam facilis asperiores? Dolorem?</p>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-lg">Erin Powlowski</span>
                            <span class="text-gray-500 ">COO at Armstrong Inc</span>
                        </div>
                        <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-2.c72e5a40.png&w=64&q=75" class="w-16 rounded-full" alt="Avatar"/>
                    </div>
                </div>
                <div class="flex flex-col justify-between space-y-4 shadow-xl p-5 rounded-xl">
                    <p class="font-semibold text-xl">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, reiciendis."</p>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-lg">Amy Hahn</span>
                            <span class="text-gray-500 ">Director at Velocity Industries</span>
                        </div>
                        <img src="https://salient.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&w=64&q=75" class="w-16 rounded-full" alt="Avatar"/>
                    </div>
                </div>
            </div>
        </section>
    <!-- Testimonial end -->
    <!-- Content end -->
    <!-- Footer -->
    <footer class="flex flex-col w-full border-t bg-slate-900 text-white">
        <div class="flex flex-row w-11/12 m-auto justify-around items-center py-5">
            <div class="basis-1/3 text-center">
                <a href="" class="text-5xl font-bold">Word<span class="text-primary">Weaver</span></a>
            </div>
            <div class="list-none">
                <span class="font-semibold text-lg">Navigation</span>
                <li class="hover:underline"><a href="">Home</a></li>
                <li class="hover:underline"><a href="">Blog</a></li>
                <li class="hover:underline"><a href="">About</a></li>
                <li class="hover:underline"><a href="">Contact</a></li>
            </div>
            <div class="list-none">
                <span class="font-semibold text-lg">Resources</span>
                <li class="hover:underline"><a href="">dribbble.com</a></li>
                <li class="hover:underline"><a href="">pexels.com</a></li>
                <li class="hover:underline"><a href="">tailwindcss.com</a></li>
                <li class="hover:underline"><a href="">heroicons.com</a></li>
            </div>
            <div class="flex flex-col">
                <span class="font-semibold text-lg">Contact Info</span>
                <span class="">example.email@example.com</span>
                <span class="">577 Golden Star Lane Rome, NY 13440</span>
            </div>
        </div>
        <div class="flex flex-row w-full justify-between items-center m-auto px-10 py-1 border-t">
            <p class="font-semibold text-lg">Copyright @ 2023 Glenn Baday</p>
            <div class="flex flex-row space-x-3">
                <svg fill="#fff" class="w-9 h-9 " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"/>
                </svg>
                <svg fill="#fff" class="w-9 h-9" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 237.832 237.832" xml:space="preserve">
                <path d="M228.977,33.916H8.854C3.969,33.916,0,37.881,0,42.771V195.06c0,4.891,3.969,8.856,8.854,8.856h220.123
                    c4.887,0,8.855-3.965,8.855-8.856V42.771C237.832,37.881,233.864,33.916,228.977,33.916z M221.026,182.184
                    c0,4.063-3.364,7.356-7.512,7.356h-12.339V73.379l-76.693,49.79c-1.687,1.096-3.627,1.641-5.566,1.641s-3.88-0.545-5.566-1.641
                    l-76.692-49.79V189.54h-12.34c-4.147,0-7.512-3.293-7.512-7.356V55.647c0-4.063,3.364-7.356,7.512-7.356h10.176l84.423,54.808
                    l84.423-54.808h10.176c4.147,0,7.512,3.293,7.512,7.356V182.184z"/>
                </svg>
                <svg fill="#fff" class="w-9 h-9" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>github</title>
                    <rect width="24" height="24" fill="none"/>
                    <path d="M12,2A10,10,0,0,0,8.84,21.5c.5.08.66-.23.66-.5V19.31C6.73,19.91,6.14,18,6.14,18A2.69,2.69,0,0,0,5,16.5c-.91-.62.07-.6.07-.6a2.1,2.1,0,0,1,1.53,1,2.15,2.15,0,0,0,2.91.83,2.16,2.16,0,0,1,.63-1.34C8,16.17,5.62,15.31,5.62,11.5a3.87,3.87,0,0,1,1-2.71,3.58,3.58,0,0,1,.1-2.64s.84-.27,2.75,1a9.63,9.63,0,0,1,5,0c1.91-1.29,2.75-1,2.75-1a3.58,3.58,0,0,1,.1,2.64,3.87,3.87,0,0,1,1,2.71c0,3.82-2.34,4.66-4.57,4.91a2.39,2.39,0,0,1,.69,1.85V21c0,.27.16.59.67.5A10,10,0,0,0,12,2Z"/>
                </svg>
            </div>
        </div>
    </footer>
    <!-- Footer end -->
   
</body>
</html>