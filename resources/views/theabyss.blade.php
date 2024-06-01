<x-base-layout>
    <body class="bg-black font-fortyseven-micro">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="grid grid-cols-1 place-items-center  text-4xl text-center">
        <div class="w-[550px] bg-white rounded-lg mt-10 p-2 cursor-pointer" onclick="reply('response1', 'Hello')">
            <p>hello</p>
        </div>
        <p id="response1" class="text-white mt-2 w-[550px]"></p>

        <div class="w-[550px] mt-16 bg-white rounded-lg p-2 cursor-pointer" onclick="reply('response2', 'I am you from the future')">
            <p>who are you?</p>
        </div>
        <p id="response2" class="text-white mt-2 w-[550px]"></p>

        <div></div>
        <div></div>

        <div class="w-[756px] mt-[500px] text-white rounded-lg p-2 cursor-pointer">
            <p>the future must be <span style="color:#FF0101"><a href="{{ route('endoftheworld') }}">nice</a></span></p>
        </div>
    </div>
    <script>
        function reply(responseId, message) {

            if (message === 'I am you from the future') {
                let future = document.createElement('a');
                future.href = '/form1';
                future.innerHTML = 'future';
                future.style.color = '#FF0101';

                message = 'I am you from the ';
                document.getElementById(responseId).innerHTML = message;
                document.getElementById(responseId).appendChild(future);
            } else {
                document.getElementById(responseId).innerHTML = message;
            }

        }
    </script>
    </body>
</x-base-layout>
