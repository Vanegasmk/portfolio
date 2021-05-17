<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Portfolio</title>
</head>

<body>

    <div class="sticky top-0">
        <nav class="flex items-center justify-between flex-wrap bg-madison p-9">
            <div class="text-white">
                <a href="#me" class="font-bold text-xl">Kevin Vanegas Medina</a>
            </div>

            <div class="block lg:hidden ">
                <button id='boton'
                    class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 text-white hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div id="menu" class="w-full block text-white lg:flex lg:items-center lg:w-auto">
                <div class="lg:flex-grow-0">
                    <a class="block font-bold text-xl mr-4 mt-4 hover:text-green-500 uppercase lg:inline-block lg:mt-0 "
                        href="#portfolio">Portfolio
                    </a>
                    <a class="block font-bold text-xl mr-4 mt-4 hover:text-green-500 uppercase lg:inline-block lg:mt-0"
                        href="#about">About
                    </a>
                    <a class="block font-bold text-xl mr-4 mt-4 hover:text-green-500 uppercase lg:inline-block lg:mt-0"
                        href="#contact">Contact
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <section>
        <div id="me" class="grid justify-center bg-ocean-green text-white flex-wrap p-44">
            <!--Me-->
            <div>
                <img class="rounded-full border-2 border-white border-opacity-75  m-auto" width="200" height="200"
                    src="{{ asset('img/me1.jpg') }}" alt="Kevin Vanegas Medina">
            </div>
            <h2 class="text-center text-2xl text-center mt-3">Kevin Vanegas Medina</h2>
            <div class="flex items-stretch mt-3 m-auto">
                <div class="bg-white w-24 m-5 h-1 rounded-2xl flex justify-center items-center"></div>
                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    style="fill:rgb(255, 255, 255);transform:;-ms-filter:">
                    <path
                        d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z">
                    </path>
                </svg>
                <div class="bg-white w-24 m-5 rounded-2xl flex justify-center  items-center"></div>
            </div>
            <h2 class="text-center text-2xl text-center mt-3">Junior Developer</h2>
            <h2 class="text-center text-2xl text-center mt-3">Backend - Frontend</h2>
        </div> <!-- Me -->

        <div id="portfolio" class="grid justify-center flex-wrap p-28 ">
            <!--Portfolio-->
            <h2 class="text-center text-4xl text-center font-bold uppercase text-madison">Portfolio</h2>
            <div class="flex items-stretch m-auto ">
                <div class="bg-madison w-24 m-5 h-1 rounded-2xl flex justify-center items-center"></div>
                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    style="fill:rgb(44,62,80);transform:;-ms-filter:">
                    <path
                        d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z">
                    </path>
                </svg>
                <div class="bg-madison w-24 m-5 rounded-2xl flex justify-center items-center"></div>
            </div>

            <div class="container pt-8">
                <div class="flex flex-wrap justify-around ">
                    <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-12">
                        <a href="https://bit.ly/3hu9C5C">
                            <img class="mx-auto rounded" src="{{ asset('img/notes.png') }}" alt="to-do-list">
                        </a>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-madison">To Do List</div>
                            <p class="text-grey-darker text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#.NetCore</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#Vue</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#PosgreSQL</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Bootstrap</span>
                        </div>
                    </div>

                    <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-12">
                        <a href="https://bit.ly/33MzGki">
                            <img class="mx-auto rounded" src="{{ asset('img/upload.png') }}" alt="pirate-bay">
                        </a>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-madison">Youtube Downloader</div>
                            <p class="text-grey-darker text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#Lavavel</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#RabbitMQ</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#PosgreSQL</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Vagrant</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Bootstrap</span>
                        </div>
                    </div>

                    <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-12">
                        <a href="https://bit.ly/3ojgy6V">
                            <img class="mx-auto" src="{{ asset('img/store.png') }}" alt="track-your-money">
                        </a>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-madison">Track Your Money</div>
                            <p class="text-grey-darker text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#Laravel</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#PosgreSQL</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#ChartJS</span>
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Bootstrap</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- About -->
        <div id="about" class="grid justify-center bg-ocean-green text-white flex-wrap p-28">
            <h2 class="text-center text-4xl text-center font-bold uppercase text-white">About</h2>
            <div class="flex items-stretch m-auto ">
                <div class="bg-white w-24 m-5 h-1 rounded-2xl flex justify-center items-center"></div>
                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    style="fill:rgb(255,255,255);transform:;-ms-filter:">
                    <path
                        d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z">
                    </path>
                </svg>
                <div class="bg-white w-24 m-5 rounded-2xl flex justify-center items-center"></div>
            </div>

            <div class="container p-8">
                <div class="flex justify-center flex-wrap">
                    <p class="text-white text-xl font-medium mx-5 w-72 max-w-md">
                        Kevin is a new software developer. He loves the web and backend
                        technologies. Also, he enjoys learning about new tools and technologies and he always tries
                        to
                        figure out the best way to solve a problem.
                    </p>
                    <p class="text-white text-xl font-medium mx-5 w-72 max-w-md">
                        He is a responsible, reliable, proactive, respectful, friendly, fast learner and he can work
                        under
                        pressure. In addition, he is not afraid to changes and he can do teamwork in an effective
                        way.
                    </p>
                </div>
            </div>

        </div>
        <!-- Contact -->
        <div id="contact" class="grid justify-center bg-white text-white flex-wrap p-28">
            <h2 class="text-center text-4xl text-center font-bold uppercase text-madison">Contact Me</h2>
            <div class="flex items-stretch m-auto ">
                <div class="bg-madison w-24 m-5 h-1 rounded-2xl flex justify-center items-center"></div>
                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    style="fill:rgb(44,62,80);transform:;-ms-filter:">
                    <path
                        d="M21.947,9.179c-0.129-0.378-0.47-0.645-0.868-0.676L15.378,8.05l-2.467-5.461C12.75,2.23,12.393,2,12,2 s-0.75,0.23-0.911,0.588L8.622,8.05L2.921,8.503C2.53,8.534,2.193,8.791,2.06,9.16s-0.039,0.782,0.242,1.056l4.213,4.107 l-1.49,6.452c-0.092,0.399,0.069,0.814,0.406,1.047C5.603,21.94,5.801,22,6,22c0.193,0,0.387-0.056,0.555-0.168L12,18.202 l5.445,3.63c0.348,0.232,0.805,0.223,1.145-0.024c0.338-0.247,0.487-0.68,0.372-1.082l-1.829-6.4l4.536-4.082 C21.966,9.976,22.075,9.558,21.947,9.179z">
                    </path>
                </svg>
                <div class="bg-madison w-24 m-5 rounded-2xl flex justify-center items-center"></div>
            </div>

            <!-- component -->
            <form action="">
                <div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-4 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-madison text-xs font-bold mb-2"
                                for="grid-first-name">
                                Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-madison border border-red rounded py-3 px-5 mb-3"
                                id="grid-first-name" type="text">
                            <p class="text-red text-xs italic">Please fill out this field.</p>
                        </div>
                        <div class="md:w-1/2 px-4">
                            <label class="block uppercase tracking-wide text-madison text-xs font-bold mb-2"
                                for="grid-last-name">
                                Email
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-madison border border-grey-lighter rounded py-3 px-5"
                                id="grid-last-name" type="email">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-madison text-xs font-bold mb-2"
                                for="grid-password">
                                Message
                            </label>
                            <textarea
                                class="appearance-none block w-full bg-grey-lighter text-madison border border-grey-lighter rounded py-3 px-4 mb-3"
                                id="message" cols="30" rows="10">

                            </textarea>
                        </div>
                    </div>
                    <button
                        class="px-5 py-4 mb-4 text-base font-semibold rounded-sm border-purple-300 bg-madison  text-white">
                        Send
                    </button>
                </div>
            </form>

        </div>

        <div class="flex flex-wrap justify-around bg-madison p-20">
            <div>
                <p class="text-xl text-white text-bold uppercase text-center">Location</p>
                <p class="text-xl text-white text-bold text-center mt-2">San Carlos, Alajuela, Costa Rica</p>
            </div>
            <div>
                <p class="text-xl text-white text-bold uppercase">Around the web</p>
                <div class="flex justify-around mt-2">
                    <a href="https://bit.ly/3eTtf5r">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgb(255,255,255);transform:;-ms-filter:">
                                <path
                                    d="M20.892,9.889c-0.006-0.029-0.015-0.059-0.025-0.087l-2.104-6.479c-0.116-0.342-0.438-0.572-0.8-0.57 c-0.361-0.002-0.681,0.231-0.789,0.575l-2.006,6.175H8.834L6.826,3.327C6.718,2.984,6.398,2.751,6.04,2.752H6.034 c-0.361,0-0.682,0.232-0.795,0.575L3.133,9.815c0,0.005-0.005,0.01-0.007,0.016l-1.067,3.281c-0.161,0.494,0.013,1.034,0.435,1.34 l9.227,6.706c0.167,0.121,0.393,0.12,0.558-0.003l9.229-6.703c0.419-0.306,0.596-0.846,0.435-1.34L20.892,9.889z M17.97,3.936 l1.809,5.566H16.16L17.97,3.936z M6.03,3.936l1.812,5.566H4.228L6.03,3.936z M3.048,13.688c-0.09-0.064-0.127-0.18-0.093-0.284 l0.793-2.437l5.817,7.456L3.048,13.688z M4.547,10.449h3.601l2.573,7.916L4.547,10.449z M11.999,19.243l-2.856-8.798h5.718 l-1.792,5.515L11.999,19.243z M13.281,18.366l2.467-7.588l0.106-0.329h3.604l-5.586,7.156L13.281,18.366z M20.952,13.688 l-6.519,4.733l0.022-0.029l5.794-7.425l0.792,2.436C21.078,13.509,21.04,13.624,20.952,13.688z">
                                </path>
                            </svg>
                        </p>
                    </a>
                    <a href="https://bit.ly/33L4Kkx">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgb(255,255,255);transform:;-ms-filter:">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                                </path>
                            </svg>
                        </p>
                    </a>
                    <a href="https://bit.ly/3oo7Zrj">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgb(255,255,255);transform:;-ms-filter:">
                                <path
                                    d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667 v-8.59h2.672V18.337z M7.003,8.574c-0.856,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548 S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39,0-1.601,1.086-1.601,2.207v4.248 h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z">
                                </path>
                            </svg>
                        </p>
                    </a>
                </div>
            </div>
        </div>


    </section>

    <script src="{{ asset('js/portfolio.js')}}"></script>

</body>

</html>