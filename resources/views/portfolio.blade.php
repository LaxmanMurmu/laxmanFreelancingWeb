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

    .portfolio_my_skills_row {
        background-image: url("{{ Storage::url('images/thisisengineering-raeng-sbFmoKBK7jU-unsplash.jpg') }}");
        background-color: #000000;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .portfolio_my_skills {
        background-color: black;
        border: 3px solid white;
        cursor: pointer;
    }

    .portfolio_my_skills:hover {
        opacity: 0.6;
    }

    .contact_btn {
        background: linear-gradient(to right, #3674bb, #e30eee);
        color: white;
        padding: 17px 43px;
        border: none;
        cursor: pointer;
    }
    .row2_col2{
        background: linear-gradient(#3674bb, #e30eee);
        transform: scale(1.1);
    }
    @media (max-width: 773px) {
        .row2_col2{
        transform: scale(0.9);
    }
    }
</style>




<div class="bg-light">


    <!-- ============================================================Heading background============================ -->
    <div class="head_background_image container-fluid d-flex justify-content-center align-items-center">
        <h1 style="font-family: 'Archivo Black', sans-serif; font-weight: bolder;" class=" text-center">Portfolio</h1>
    </div>

    <!-- ============================================================ROW 1 (PROFILE IMAGE)============================ -->

    <div class="portfolio_row1 container my-5 py-5">
        <div class="row">


            <!-- column 1 intoduction -->
            <div class="portfolio_row1_box col-md-6 ">
                <div class="col-md-12 p-5">
                    <h5>INTODUCTION</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laudantium nesciunt pariatur
                        alias, incidunt necessitatibus maiores inventore quod ad at eius neque mollitia in magni
                        reprehenderit officiis harum voluptates illo? Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Labore voluptatum eius a neque culpa nam ad temporibus delectus perferendis
                        est libero corporis necessitatibus facere quaerat omnis eum, adipisci aspernatur mollitia?</p>
                </div>

                <!-- 4box -->
                <div class="col-md-12 my-5">
                    <div class="row portfolio_my_skills_row">
                        <div
                            class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Graphic Designing</h4>
                        </div>
                        <div
                            class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Frontend Development</h4>
                        </div>
                        <div
                            class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Backend Develpment</h4>
                        </div>
                        <div
                            class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Graphic Designing</h4>
                        </div>
                    </div>
                </div>

                <!-- contact button -->
                <div class="text-center py-5">
                    <button class="btn contact_btn">Contact me</button>
                </div>
            </div>

            <!-- Cloumn2 of profile -->
            <div class="portfolio_row1_box col-md-6">
                <div class="my_name_box bg-black text-light p-4">
                    <p>HELLO GUYS</p>
                    <h2 style="font-weight: bolder;">I'm Laman Murmu</h2>
                </div>

                <img class="img-fluid"
                    src="{{ Storage::url('images/hapy-black-basketball-player-listening-to-music-we-M5YC4BV-4.jpg') }}"
                    alt="">
            </div>

        </div>
    </div>



     <!-- ============================================================ROW 2 (Achievment )============================ -->

     <div class="portfolio_row2 container-fluid bg-black my-5">
        <div class="row">

            <div class="col-md-4 text-center text-light p-5">
                <i class='my-2 fas fa-users' style='font-size:62px;color:white'></i>
                <h1 class="my-2" style="font-weight: bold;">100 +</h1>
                <p class="my-2 ">Satisfied clients</p>
            </div>

            <div class="col-md-4 text-center text-light p-5 row2_col2">
                <i class='fas fa-award' style='font-size:62px;color:white'></i>
                <h1 class="my-2" style="font-weight: bold;">100 +</h1>
                <p class="my-2 ">Achievments</p>
            </div>

            <div class="col-md-4 text-center text-light p-5">
                <i class='fas fa-clock' style='font-size:62px;color:white'></i>
                <h1 class="my-2" style="font-weight: bold;">100 +</h1>
                <p class="my-2 ">Working hours</p>
            </div>

        </div>
     </div>

























    <x-_footer />

</div>