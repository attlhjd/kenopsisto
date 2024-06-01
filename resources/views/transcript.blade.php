<x-base-layout>

    <body class="font-neuebit">
    <style>
        body { background-color: black; color: white; font-size: 32px; }
        .chat { margin: 20px; }
        .message { white-space: pre-wrap; }
        .cursor {
            display: inline-block;
            width: 10px;
            height: 20px;
            background-color: white;
            animation: blink 1s step-end infinite;
        }
        @keyframes blink {
            50% { background-color: transparent; }
        }
        p, span {
            color: #FFF;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        a {
            color: #FF0101;
            text-decoration: underline;
        }
    </style>
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div class="chat mt-16">
        <p class="message" id="message1"></p>
        <p class="message" id="message2"></p>
        <p class="message" id="message3"></p>
        <p class="message" id="message4"></p>
        <p class="message" id="message5"></p>
        <p class="message" id="message6"></p>
        <p class="message" id="message7"></p>
        <p class="message" id="message8"></p>
        <p class="message" id="message9"></p>
        <p class="message" id="message10"></p>
        <span id="superspan" class="hidden">User 47 sent you this message: please click on this <a href='{{route('portail')}}'>link</a> ! Have fun.</span>
    </div>
    <script>
        const messages = [
            "Hey did you have the time to see what I sent to you this morning?",
            "Yeah... I had to call my superior about it, it creeped me out",
            "oh shit, what happened?",
            "they talk about object consciousness, but I have to admit it looks like nothing I have seen before, even in the book.",
            "what are you talking about?",
            "I’m talking about the link you sent this morning, what are you talking about?",
            "I didn’t send you any link, it was just a picture of my cat.",
            "ha ha very funny",
            "I’m not joking, can you send me back my email to see what you received?",
            "sure,"
        ];
        const users = ["USER 30 :", "USER 47 :", "USER 30 :", "USER 47 :", "USER 30 :", "USER 47 :", "USER 30 :", "USER 47 :", "USER 30 :", "USER 47 :"];

        function typeMessage(user, message, index, callback) {
            const messageElement = document.getElementById('message' + (index + 1));
            messageElement.innerHTML = user + " <span class='cursor'></span>"; // Display user immediately
            function sleep (time) {
                return new Promise((resolve) => setTimeout(resolve, time));
            }
            sleep(1000).then(() => {

                let i = 0;
                const cursor = messageElement.querySelector('.cursor');

                function appendNextChar() {
                    if (i >= message.length) {
                        clearInterval(interval);
                        callback();
                        return;
                    }
                    if (message[i] === '<') {
                        // Properly handle HTML tags
                        const tagEnd = message.indexOf('>', i) + 1;
                        const tag = message.slice(i, tagEnd);
                        cursor.insertAdjacentHTML('beforebegin', tag);
                        i = tagEnd;
                    } else {
                        cursor.insertAdjacentText('beforebegin', message[i]);
                    }
                    i++;
                }

                const interval = setInterval(appendNextChar, 50);

            });
        }

        function typeAllMessages(i = 0) {
            if (i < messages.length) {
                typeMessage(users[i], messages[i], i, () => {
                    if (i < messages.length - 1) {
                        setTimeout(() => {
                            const cursor = document.querySelector('.cursor');
                            if (cursor) cursor.remove();
                            typeAllMessages(i + 1);
                        }, 2000); // Pause for 2 seconds at the end
                    } else { // When all messages are typed
                        // Remove the cursor from the last message
                        const cursor = document.querySelector('.cursor');
                        if (cursor) cursor.remove();
                        // Reveal the hidden span
                        const hiddenSpan = document.getElementById('superspan');
                        hiddenSpan.classList.remove('hidden');
                        console.log(hiddenSpan);
                    }
                });
            }
        }

        typeAllMessages();
    </script>
    </body>
</x-base-layout>
