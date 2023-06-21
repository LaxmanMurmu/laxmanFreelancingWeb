<x-_header />
<x-_navbar />
<style>
    .head_background_image {
        background-image: url("{{ Storage::url('images/futuristic-leaves-of-a-plant-in-cyberspace-on-a-bl-33JRHLB.jpg') }}");
        background-color: #000000;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        filter: brightness(0.8);
    }

    #carouselExampleCaptions .carousel-inner .carousel-item {
        height: 530px;
    }

    #carouselExampleCaptions .carousel-inner .carousel-item img {
        height: 100%;
        object-fit: cover;
    }

    .btn {
        background: linear-gradient(to right, #16291a, #0cc831);
        color: white;
        padding: 17px 43px;
        border: none;
        border-radius: 35px;
        cursor: pointer;
    }

    .contact_profile_image {
        transform: scale(1.1);
    }
    .contact_icon_links:hover{
        transform: scale(1.4);
    }
</style>

<div class="bg-light">



    <!-- ============================================================Heading background============================ -->
    <div class="head_background_image container-fluid d-flex justify-content-center align-items-center">
        <h1 style="font-family: 'Archivo Black', sans-serif; font-size: 60px; font-weight: bold;"
            class="text-center text-light">Contact</h1>
    </div>

    <!-- ============================================================PRofile Image And Adress Info============================ -->
    <div class="bg-black">
        <div class="contact_row1_con container">
            <div class="row  ">

                <!-- 1st coulmn image -->
                <div class="contact_row1_box col-md-5 text-center ">
                    <div style="padding: 0px 60px;"><img class="img-fluid contact_profile_image"
                            src="{{ Storage::url('images/man-with-headphones-medium-shot.jpg') }}" alt="">
                    </div>
                </div>

                <!-- 2nd coulmn address -->
                <div class="contact_row1_box col-md-7 text-start py-5  text-light">

                    <div class="col-md-12">
                        <p style="font-size: x-large;">Address</p>
                        <h3 class=""> <i class="my-2 fas fa-location-dot px-4" style="font-size:40px;color:white"></i>
                            6737 MarkusRest,WashingtonDC</h3>
                        <hr>
                    </div>

                    <div class="col-md-12">
                        <p style="font-size: x-large;">Email</p>
                        <h3 class=""> <i class="my-2 fas fa-envelope px-4"
                                style="font-size:40px;color:white"></i>laxmanmurmu8201@gmail.com</h3>
                        <hr>
                    </div>

                    <div class="col-md-12">
                        <p style="font-size: x-large;">Phone</p>
                        <h3 class=""> <i class="my-2 fas fa-phone px-4"
                                style="font-size:40px;color:white"></i>1234567890</h3>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- ============================================================LINKS WITH ICONS============================ -->

    <div class="container-fluid my-5 py-5" style="display: flex; align-items: center; justify-content: center;">
        <div
            class="footer_box2 my-4 col-md-8 text-light text-center  d-flex align-items-center justify-content-between" style="gap: 25px;">
            <a href=""><i class="contact_icon_links fab fa-facebook-f" style="font-size:30px;color:black"></i></a>
            <a href=""><i class="contact_icon_links fab fa-youtube" style="font-size:30px;color:black"></i></a>
            <a href=""><i class="contact_icon_links fab fa-twitter" style="font-size:30px;color:black"></i></a>
            <a href=""><i class="contact_icon_links fab fa-instagram" style="font-size:30px;color:black"></i></a>
            <a href=""><i class="contact_icon_links fab fa-linkedin-in" style="font-size:30px;color:black"></i></a>
            <a href=""><i class="contact_icon_links fa-brands fa-github" style="font-size:30px;color:black"></i></a>
            <a href=""><i class="contact_icon_links fab fa-youtube" style="font-size:30px;color:black"></i></a>
        </div>
    </div>


    <!-- ============================================================FORM MESSAGE============================ -->

    <div class="contact_form container-fluid border mt-5 p-5"
        style=" background: linear-gradient(to top, #e3dede, #f5f4f4);">

        <div class="row">

            
            <div class="contact_form_box col-md-2"></div>

            <div class="contact_form_box col-md-8">
                <form class="row">

                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control rounded-0 py-3" id="firstname"
                            aria-describedby="emailHelp" placeholder="First Name">
                    </div>

                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control rounded-0 py-3" id="lastname"
                            aria-describedby="emailHelp" placeholder="Last Name">
                    </div>

                    <div class="mb-3 col-md-12">
                        <input type="email" class="form-control rounded-0 py-3" id="email" aria-describedby="emailHelp"
                            placeholder="Email">
                    </div>

                    <div class="mb-3 col-md-12">
                        <textarea class="form-control rounded-0 py-3" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Message"></textarea>
                    </div>

                    <div class="mb-3 col-md-12">
                        <button type="submit" class="py-2 btn-primary col-md-12 text-dark"
                            style="background-color: gray;">Submit</button>
                    </div>
                </form>

            </div>
            <div class="contact_form_box col-md-2"></div>

        </div>


    </div>
















    <x-_footer />

</div>