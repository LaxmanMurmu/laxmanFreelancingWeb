<x-_header />
<x-_navbar />
<style>
    .head_background_image {
        background-image: url("{{ Storage::url('images/a-trending-plant-species-in-cyberspace-with-the-te-2UDCC69.jpg') }}");
        background-color: #000000;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        filter: brightness(0.7);
    }

    #carouselExampleCaptions .carousel-inner .carousel-item {
        height: 530px;
    }

    #carouselExampleCaptions .carousel-inner .carousel-item img {
        height: 100%;
        object-fit: cover;
    }

    .my_btn {
        background: linear-gradient(to right, #16291a, #0cc831);
        color: white;
        padding: 17px 43px;
        border: none;
        border-radius: 35px;
        cursor: pointer;
    }
</style>

<div class="bg-white">



    <!-- ============================================================Heading background============================ -->
    <div class="head_background_image container-fluid d-flex justify-content-center align-items-center">
        <h1 style="font-family: 'Archivo Black', sans-serif; font-size: 60px; font-weight: bold;" class="text-center">
            Service</h1>
    </div>

    <!-- ============================================================Servive Topics============================ -->

    <div class="service_row1_con my-5 container">
        <div class="row">

            <div class=" col-md-4" style="height: 350px;">
                <div class="col-md-12 text-center bg-black text-light p-5" style="border: 22px solid white;">
                    <i class="fa-solid fa-paintbrush mb-2" style="font-size: 30px;"></i>
                    <h3 class="my-2">Design</h3>
                    <p class="text_cut">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis dignissimos lorem Lorem ipsum... Kamal </p>
                    <h6 class="my-3 more_box">
                        <p class="More_text">More ↓</p>
                        <p class="myText">laxman doloribus iste error, eligendi maiores itaque ab voluptas consectetur
                            debitis </p>
                    </h6>
                </div>
            </div>

           
            <div class=" col-md-4" style="height: 350px;">
                <div class="col-md-12 text-center bg-black text-light p-5" style="border: 22px solid white;">
                    <i class="fa-solid fa-paintbrush mb-2" style="font-size: 30px;"></i>
                    <h3 class="my-2">Design</h3>
                    <p class="text_cut">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis dignissimos lorem Lorem ipsum... Kamal </p>
                    <h6 class="my-3 more_box">
                        <p class="More_text">More ↓</p>
                        <p class="myText">laxman doloribus iste error, eligendi maiores itaque ab voluptas consectetur
                            debitis </p>
                    </h6>
                </div>
            </div>

            <div class=" col-md-4" style="height: 350px;">
                <div class="col-md-12 text-center bg-black text-light p-5" style="border: 22px solid white;">
                    <i class="fa-solid fa-paintbrush mb-2" style="font-size: 30px;"></i>
                    <h3 class="my-2">Design</h3>
                    <p class="text_cut">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis dignissimos lorem Lorem ipsum... Kamal </p>
                    <h6 class="my-3 more_box">
                        <p class="More_text">More ↓</p>
                        <p class="myText">laxman doloribus iste error, eligendi maiores itaque ab voluptas consectetur
                            debitis </p>
                    </h6>
                </div>
            </div>


            <div class=" col-md-4" style="height: 350px;">
                <div class="col-md-12 text-center bg-black text-light p-5" style="border: 22px solid white;">
                    <i class="fa-solid fa-paintbrush mb-2" style="font-size: 30px;"></i>
                    <h3 class="my-2">Design</h3>
                    <p class="text_cut">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis dignissimos lorem Lorem ipsum... Kamal </p>
                    <h6 class="my-3 more_box">
                        <p class="More_text">More ↓</p>
                        <p class="myText">laxman doloribus iste error, eligendi maiores itaque ab voluptas consectetur
                            debitis </p>
                    </h6>
                </div>
            </div>


            <div class=" col-md-4" style="height: 350px;">
                <div class="col-md-12 text-center bg-black text-light p-5" style="border: 22px solid white;">
                    <i class="fa-solid fa-paintbrush mb-2" style="font-size: 30px;"></i>
                    <h3 class="my-2">Design</h3>
                    <p class="text_cut">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis dignissimos lorem Lorem ipsum... Kamal </p>
                    <h6 class="my-3 more_box">
                        <p class="More_text">More ↓</p>
                        <p class="myText">laxman doloribus iste error, eligendi maiores itaque ab voluptas consectetur
                            debitis </p>
                    </h6>
                </div>
            </div>

            <div class=" col-md-4" style="height: 350px;">
                <div class="col-md-12 text-center bg-black text-light p-5" style="border: 22px solid white;">
                    <i class="fa-solid fa-paintbrush mb-2" style="font-size: 30px;"></i>
                    <h3 class="my-2">Design</h3>
                    <p class="text_cut">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis dignissimos lorem Lorem ipsum... Kamal </p>
                    <h6 class="my-3 more_box">
                        <p class="More_text">More ↓</p>
                        <p class="myText">laxman doloribus iste error, eligendi maiores itaque ab voluptas consectetur
                            debitis </p>
                    </h6>
                </div>
            </div>


        </div>
    </div>














    <x-_footer />

</div>


<script>
    var myTextElements = document.getElementsByClassName('myText');
    var originalTexts = [];

    for (var i = 0; i < myTextElements.length; i++) {
        originalTexts[i] = myTextElements[i].innerText;
        var truncatedText = originalTexts[i].substring(0, 0);
        myTextElements[i].innerText = truncatedText;

        var showFullTextButtons = document.getElementsByClassName('More_text');
        var isFullTextShown = [];

        showFullTextButtons[i].addEventListener('click', createToggleHandler(i));
    }

    function createToggleHandler(index) {
        return function () {
            var myTextElement = myTextElements[index];
            isFullTextShown[index] = !isFullTextShown[index];
            if (isFullTextShown[index]) {
                myTextElement.innerText = originalTexts[index];
                showFullTextButtons[index].innerText = "Show Less ↑";
            } else {
                var truncatedText = originalTexts[index].substring(0, 0);
                myTextElement.innerText = truncatedText;
                showFullTextButtons[index].innerText = "More ↓";
            }
        };
    }

</script>


<script>
    var paragraphs = document.querySelectorAll('.text_cut');
    paragraphs.forEach(function(paragraph) {
        var text = paragraph.textContent;
        var truncatedText = text.substring(0, 100);
        paragraph.textContent = truncatedText;
    });
</script>