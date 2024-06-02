<x-base-layout>

    <body class="bg-white">
    <a href="/homepage" class="text-black font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div style="color: #000;
            font-family: Arial;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;" class="flex grid grid-cols-3 text-center justify-center items-center align-middle p-4 place-content-center">
        <p>where normal cows produce normal milk !</p>
        <img style="width:50%; margin-left: 10rem;" src="{{ asset('skinwalkers/img.png') }}" alt="">
        <p>where normal cows produce normal milk !</p>
    </div>
    <div style="border-width: 3px; border-color: black" class="grid grid-cols-5 text-center ">
        <p >milk</p>
        <p style="border-left-width: 3px; border-color: black; padding: 2px;">farms</p>
        <p style="border-left-width: 3px; border-color: black; padding: 2px;">contact</p>
        <p style="border-left-width: 3px; border-color: black; padding: 2px; background-color: black; color: white">news</p>
        <p style="border-left-width: 3px; border-color: black; padding: 2px;">search</p>
    </div>
    <div class="grid grid-cols-5">
        <div></div>
        <div style="grid-column: span 3 / span 3;">
            <h2 style="color: #000;
font-family: Arial;
font-size: 64px;
font-style: normal;
font-weight: 700;
line-height: normal;margin-bottom: 2rem;">COWMILK associate to FataOrgana Institute for a new campaign.</h2>

            <p style="color: #000;
text-align: justify;
font-family: Arial;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: normal;">In an unprecedented move to address the alarming increase in missing persons, Cow Milk has launched  a groundbreaking campaign in partnership with the esteemed Fataorgana Institute. This initiative aims  to leverage the wide reach of Cow Milk's distribution to raise awareness and aid in the search for missing individuals.The past year has seen a troubling surge in disappearances, leaving families and communities desperate for answers. Recognizing the urgent need for action, Cow Milk and Fataorgana Institute have joined forces to create a powerful platform for spreading information about missing persons. Starting this month, Cow Milk will feature profiles of missing individuals on their milk packaging, turning everyday grocery items into beacons of hope.
                <br><br>

                Each carton of Cow Milk will display photographs, names, and key details about missing persons, along with contact information for the Fataorgana Institute's dedicated helpline. This innovative approach ensures that crucial information reaches a vast and diverse audience, increasing the likelihood  of generating leads and locating missing individuals.
                <br><br>
                <span style="color: #000;font-family: 'Times New Roman'; font-size: 36px; font-style: italic; font-weight: 700; line-height: normal;">"We believe that everyone has a role to play in finding missing persons,"</span> said  a spokesperson for Cow Milk. "By placing these profiles on our milk cartons, we hope to engage our consumers in a meaningful way, encouraging them to keep an eye out and report any information that might help reunite families."
                <br><br>
                The Fataorgana Institute, renowned for its expertise in missing persons investigations, will provide  the necessary support and resources for this campaign. They will manage the information printed on  the cartons, ensuring accuracy and sensitivity in each case featured. The institute's helpline will be available 24/7, staffed by trained professionals ready to assist with any tips or inquiries.
                <br><br>
                The campaign has already garnered widespread support from the public, with many expressing appreciation for this creative and compassionate approach. Social media buzz is building as consumers share images of the milk cartons and stories of hope. As the initiative rolls out, both Cow Milk and Fataorgana Institute are optimistic that this campaign will make a tangible difference. With every purchase, consumers are not just buying milk—they are becoming part of a collective effort to address a growing crisis and support families in their time of need.
                <br><br>
                For more information or to report a sighting, please contact the Fataorgana Institute's helpline or visit their website at
                <a href="{{ route('institute') }}"><span class="text-red-500">www.fataorganainstitute.org</span></a>. Together, we can turn the tide and help bring missing loved ones back home</p>
        </div>

    </div>
    <img style="width: 50%; padding: 1rem; margin-left: 35rem;" src="{{asset('skinwalkers/brique def.png')}}" alt="">
    <div>
        <img style="padding: 1rem; margin-left: 50rem;" src="{{ asset('skinwalkers/img_1.png') }}" alt="">
    </div>
    </body>
</x-base-layout>
