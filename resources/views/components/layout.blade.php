<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Position</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">



@vite(['resources/css/app.css', 'resources/js/app.js'])


<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">



</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">

    <div class="">


        <nav class="flex justify-between items-center  py-4 border-b border-white/10 p-3 ">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth



        </nav>





        <main  class="mt-10 max-w-[986px] mx-auto px-5 pt-106">
            @guest
            <div class="flex justify-center font-bold space-x-2">
                <a href="/register" class="btn text-primary ml-2 border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Sign Up</a>
                <a href="/login"  class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500" >Log In</a>
            </div>
            @endguest

            {{$slot}}
        </main>

    </div>





</body>
</html>
