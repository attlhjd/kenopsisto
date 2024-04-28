<x-base-layout title="Maison" >

    <body class="antialiased text-white bg-home bg-auto bg-no-repeat bg-black flex h-screen">

    <main class="text-black bg-white m-auto mt-20 rounded-bl-[63px] rounded-tr-[63px]" style="width: 1239px; height: 1650px;">

        <header class="p-6">
            <img src="{{ url('/images/titre.png') }}" class="invert " style="height: 90px; width: 360px;" alt="Kenopsis">
        </header>
        <nav class="mb-4 ">
            <ul class="grid-cols-6 grid items-center text-center  border-black">
                <li class="border-y border-r border-black font-neuebit text-3xl">
                    <a class="bg-white" href="#">home</a>
                </li>
                <li class="border-y border-r border-black font-neuebit text-3xl">
                    <a class="bg-white" href="{{ route('about') }}">about</a>
                </li>
                <li class="border-y border-r border-black font-neuebit text-3xl">
                    <a class="bg-white" href="#">blog</a>
                </li>
                <li class="border-y border-r border-black font-neuebit text-3xl">
                    <a class="bg-white " href="#">gallery</a>
                </li>
                <li class="border-y border-r border-black font-neuebit text-3xl">
                    <a class="bg-white " href="#">news</a>
                </li>
                <li class="border-y border-black font-neuebit text-3xl">
                    <a class="bg-white" href="#">links</a>
                </li>
            </ul>
        </nav>
        <div class="flex">
            <section class="">
                <div class="flex">
                    <div class="text-center border border-black m-2 font-neuebit " style="width: 236px; height: 236px;">
                        <h3 class="font-bold border-b border-black text-left font-whyte text-2xl">listening to</h3>
                        <div class="items-center">
                            <div class="flex justify-center items-center p-6">
                                <img src="{{ url('/homepages/6af36f7b9c1ac8a7e9d7dbcaa479b616.gif') }}" alt="photo" class="rounded-full" style="width: 113px; height: 112px;">
                            </div>
                            <span class="text-extrabold text-4xl space-y-0">Karma police <br>Radiohead</span>
                        </div>
                    </div>
                    <div class="text-center border border-black m-2" style="width: 186px; height: 236px;">
                        <h3 class="font-bold border-b border-black text-left font-whyte text-2xl">current status</h3>
                        <div class="items-center">
                            <span>gry</span><br>
                            <span>3 day ago</span><br>
                            <span>i wish to look at the clouds</span><br>
                        </div>
                    </div>
                </div>
                <div class="border border-black m-2" style="width: 435px; height: 354px;">
                    <h3 class="font-bold border-b border-black text-left bg-black text-white font-whyte text-2xl">content advisory</h3>
                    <div class="p-2">
                        <span class="font-fortyseven-micro text-3xl">This website may contain mature subject, flashing images. Also some pages might be under construction ! I’ll try my hardest to keep this dumpster fire interesting.</span>
                        <br>
                        <br>
                        <br>
                        <span class="font-fortyseven-micro text-3xl">Not mobile friendly</span>
                    </div>
                </div>
                <div class="border border-black m-2"  style="width: 435px; height: 677px;">
                    <h3 class="font-bold border-b border-black text-left font-whyte text-2xl">latest blog post</h3>
                    <div class="p-2">
                        <span class="font-neuebit text-5xl text-bold">FEELING OVERWHELMED 19/03/2012</span>
                        <br>
                        <span class="font-fortyseven-micro text-3xl">
                         Sometimes i dunno what’s going with my mom, maybe she’s crazy like af.. I know it’s weird but i can’t stop thinking about the fact that maybe she’s not my mom. It’s sound ridiculous lmao but maybe she is someonelse that’s just happend to look like her. <br> <br>I just learn about doppelganger soooo i might be a little obssesive with this term and mixing things up but whatever this creepy though was to cool to not speaking about it with you guys ! :)
                    </span>
                    </div>

                </div>
            </section>
            <section class="col-span-2 border border-black ml-6" style="width: 709px; height:1302px;">
                <div class="bg-black text-white text-center">
                    bandeau à faire
                </div>
                <div class="font-fortyseven-micro relative p-2 text-3xl" style="width: 658px;height:190px;">
                    i don’t realize sometimes that i grew up in a world i don’t recognize anymore, everthing seem so grey... but despite everything it’s still me. I feel like i should do something to escape this world of non sense that’s why i created this blog where i post about my though, my life and my interest <3
                </div>

                <section class="mt-20">
                    <div class="flex">
                        <div class="text-center border border-black m-2" style="width: 323px; height: 357px;">
                            <h3 class="font-bold border-b border-black bg-black text-white text-left font-whyte px-2 text-2xl">latest artwork</h3>
                            <div class="items-center">
                                <img src="{{ url('/homepages/02625f0a7e4d773ce129548d184dac8c.jpg') }}" alt="photo" class="">
                            </div>
                        </div>
                        <div class="text-center border border-black m-2 relative" style="width: 322px; height: 357px;">
                            <div>
                                <img src="{{ url('/homepages/MODIF é.png') }}" alt="personnage" class="absolute top-[-517px] right-[-88px]" style="width: 396px; height: 560px;">
                            </div>
                            <h3 class="font-bold border-b border-black text-left font-whyte px-2 text-2xl">kaomoji box</h3>
                            <div class="items-center space-y-4">
                                <span>copy/paste your favorit</span>
                                <div class="grid grid-cols-2 space-y-4 ">
                                    <span class="mt-4">ヽ(ˇヘˇ)ノ</span>
                                    <span>(^０^)ノ</span>
                                    <span>(￣～￣;)</span>
                                    <span>ヾ(☆▽☆)</span>
                                    <span>( : ౦ ‸ ౦ : )</span>
                                    <span>(｡╯︵╰｡)</span>
                                    <span>(｡•̀ᴗ-)✧</span>
                                    <span>(⁄ ⁄>⁄ ▽ ⁄<⁄ ⁄)</span>
                                    <span>◝( • ω • )◜</span>
                                    <span>♡(｡- ω -)</span>
                                    <span>( ͡• ͜ʖ ͡• )</span>
                                    <span>٩(｡•́‿•̀｡)۶</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="text-center overflow-y-scroll  border border-black m-2" style="width: 324px; height: 559px;">
                            <h3 class="font-bold border-b border-black text-left font-whyte text-2xl">quotes</h3>
                            <div class="items-center text-left  text-2xl font-fortyseven-micro p-2">
                                <h2 class="text-3xl">10/12/12 - Ghost in the shell</h2>
                                <span>“Because death is the only reality, and I'm a realist.” <br>― Shirow Masamune </span>
                                <h2 class="text-3xl">9/11/12 - Full Metal Alchemist</h2>
                                <span>“Looks like it's starting to rain.” <br>― Roy Mustang </span>
                                <h2 class="text-3xl">11/10/12 - Edgar Allan Poe</h2>
                                <span>“I was never really insane except upon occasions when my heart was touched” <br>― a letter to Maria Clemm, 1849</span>
                                <h2 class="text-3xl">7/08/11 - Blade Runner</h2>
                                <span>“Quite an experience to live in fear, isn't it? That's what it is to be a slave.” <br>― Batty </span>
                                <h2 class="text-3xl">14/03/11 - The Thing </h2>
                                <span>“We're gonna draw a little bit of everybody's blood... 'cause we're gonna find out who's The Thing.” <br>― Mac Ready</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-center border border-black m-2"  style="width: 325px; height: 266px;">
                                <h3 class="font-bold border-b border-black text-left font-whyte text-2xl">last updates</h3>
                                <div class="p-2 text-left">
                                    <span class="font-fortyseven-micro text-2xl">13/12/13- i made some mods on the homepage and update the links ! Be sure to check the gallery to see news pics <3</span>
                                </div>
                            </div>
                            <div class="text-center border border-black m-2"  style="width: 325px; height: 293px;">
                                <h3 class="font-bold border-b border-black text-left font-whyte text-2xl">gif of the month</h3>
                                <img src="{{ url('homepages/tQN.gif') }}" alt="eye">
                            </div>
                        </div>

                    </div>
                </section>
            </section>
        </div>
    </main>
    </body>
</x-base-layout>
