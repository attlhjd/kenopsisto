<x-base-layout>

    @php
        $images = [
            'sliders/1 (2).jpg',
            'sliders/1 (3).jpg',
            'sliders/1 (4).jpg',
            'sliders/1 (5).jpg',
            'sliders/1 (6).jpg',
            'sliders/1 (7).jpg',
            'sliders/1 (8).jpg',
            'sliders/1 (9).jpg'
        ]
    @endphp
    <body class="bg-black grid grid-cols-1 place-items-center h-screen items-center justify-center">
    <a href="/homepage" class="text-white font-fortyseven-micro underline underline-offset-4 cursor-pointer absolute top-0 left-0">home</a>
    <div id="slider" class="">
        <div class="flex justify-center items-center">
            <img class="slide" src="{{ asset('sliders/1 (1).jpg') }}" style="width: 20%;" alt="bob">
            @foreach($images as $image)
                    <img class="slide" src="{{ asset($image) }}" style="width: 20%;" alt="$image">
            @endforeach

        </div>
        <div class="grid grid-cols-1 place-items-center">
            <div class="text-8xl">
                <a class="carousel-control left text-white" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right text-white" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            slides.forEach((slide, index) => {
                if (index !== 0) {
                    slide.style.display = "none";
                }
            });
            const carousel = document.querySelector('#slider');
            const left = document.querySelector('.left');
            const right = document.querySelector('.right');
            const totalSlides = slides.length;
            let slideIndex = 0;

            function showSlide(index) {
                slides.forEach((slide) => {
                    slide.style.display = "none";
                });
                slides[index].style.display = "block";
            }

            function nextSlide() {
                slideIndex = (slideIndex + 1) % totalSlides;
                showSlide(slideIndex);
            }

            function prevSlide() {
                slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
                showSlide(slideIndex);
            }

            left.addEventListener('click', prevSlide);
            right.addEventListener('click', nextSlide);
        });
    </script>
    </body>
</x-base-layout>
