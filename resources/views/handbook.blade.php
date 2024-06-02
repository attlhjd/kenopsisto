<x-base-layout>
<body class="bg-black flex flex-col items-center justify-center h-screen text-white text-center">
<style>
    .gallery-container {
        position: relative;
        text-align: center;
    }
    #prevBtn, #nextBtn {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        padding: 10px;
        color: white;
        background-color: black;
        border: none;
    }
    #prevBtn { left: 10px; }
    #nextBtn { right: 10px; }
</style>
<div class="gallery-container">
    <img id="galleryImage" src="{{ asset('handbook_files/0.jpg') }}" alt="Gallery Image" style="width:100%; max-width:1000px;">
    <button onclick="changeImage(-1)" id="prevBtn">&lt; Prev</button>
    <button onclick="changeImage(1)" id="nextBtn">Next &gt;</button>
</div>
<script>
    var currentImage = 0;
    var totalImages = 12;

    function changeImage(dir) {
        currentImage += dir;
        if (currentImage < 0) {
            currentImage = totalImages; // Loop back to the last image
        } else if (currentImage > totalImages) {
            currentImage = 0; // Loop back to the first image
        }

        var imageSrc = `/handbook_files/${currentImage}.jpg`; // Adjust the path if necessary
        document.getElementById('galleryImage').src = imageSrc;
    }

    window.onload = function() {
        // Optional: Disable buttons on load based on the image
        updateButtonState();
    };

    function updateButtonState() {
        document.getElementById('prevBtn').disabled = currentImage === 1;
        document.getElementById('nextBtn').disabled = currentImage === totalImages;
    }
</script>

</body>
</x-base-layout>
