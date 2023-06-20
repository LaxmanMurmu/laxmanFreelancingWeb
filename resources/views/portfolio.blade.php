<x-_header />
<x-_navbar />

<style>
    ::-webkit-scrollbar {
        display: none;
    }

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
        background-image: url("{{ Storage::url('images/ospan-ali-jg7910ihs7o-unsplash.jpg') }}");
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
        opacity: 0.4;
    }

    .contact_btn {
        background: linear-gradient(to right, #3674bb, #e30eee);
        color: white;
        padding: 17px 43px;
        border: none;
        cursor: pointer;
    }

    .row2_col2 {
        background: linear-gradient(#3674bb, #e30eee);
        transform: scale(1.1);
    }

    .design_bg {
        background-image: url("{{ Storage::url('images/caucasian-man-s-portrait-isolated-purple-studio-neon-light.jpg') }}");
        background-color: black;
        height: 650px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .design_para_colorAndStyle {
        font-size: xx-large;
        color: gray;
    }

    .design_para {
        background-color: black;
        padding: 55px 20px;
        /* border: 2px solid red; */
    }

    @media (max-width: 773px) {
        .row2_col2 {
            transform: scale(0.9);
        }

    }


    /* same meadia in home */
    @media (max-width: 1000px) {
        .design_box {
            position: absolute;
        }

        .para_box {
            left: 0px;

        }

        .design_para {
            background-color: transparent;
        }

        .design_para_colorAndStyle {
            font-size: xx-large;
            color: rgb(158, 158, 158);
            font-weight: bold;
        }

        .row_con {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .founders_con {
            margin-bottom: 100px;
        }
        .footer1{
            display: none;
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
                        <div class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Graphic Designing</h4>
                        </div>
                        <div class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Frontend Development</h4>
                        </div>
                        <div class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Backend Develpment</h4>
                        </div>
                        <div class="portfolio_my_skills col-md-6 d-flex justify-content-center align-items-center">
                            <h4 class="text-light">Graphic Designing</h4>
                        </div>
                    </div>
                </div>

                <!-- contact button -->
                <div class="text-center py-5">
                    <button class="btn contact_btn">Download my CV</button>
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

    <div class="portfolio_row2 container-fluid bg-black my">
        <div class="row">

            <div class="col-md-4 text-center text-light p-5">
                <i class="my-2 fas fa-users" style="font-size:62px;color:white"></i>
                <h1 id="clientsCount" class="my-2" style="font-weight: bold;">0</h1>
                <p class="my-2">Satisfied clients</p>
            </div>

            <div class="col-md-4 text-center text-light p-5 row2_col2">
                <i class="fas fa-award" style="font-size:62px;color:white"></i>
                <h1 id="achievementsCount" class="my-2" style="font-weight: bold;">0</h1>
                <p class="my-2">Achievements</p>
            </div>

            <div class="col-md-4 text-center text-light p-5">
                <i class="fas fa-clock" style="font-size:62px;color:white"></i>
                <h1 id="workingHoursCount" class="my-2" style="font-weight: bold;">0</h1>
                <p class="my-2">Working hours</p>
            </div>

        </div>
    </div>












    <!-- ============================================================ROW 4 (SKILS)============================ -->

    <div class="skills_con container-fluid bg-black">
        <div class="row">
            <div class="skills_box col-md-4  text-center text-light p-5">
                <h1>My Skills</h1>
                <p class="text-start">Vivamus sagittis felis non felis sagittis fringilla.Vivamus sagittis felis non
                    felis sagittis fringilla. In porttitor sem consequat, molestie leo ac, mollis mauris. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique in, voluptatum, adipisci quod doloremque soluta officiis totam earum ipsum sunt voluptate? Suscipit aut ad magni vero facilis, accusantium aliquam omnis.</p>
            </div>


            <div class="skills_box col-md-4  text-light p-5">
                <h2>Design</h2>

                <p class="">Graphic Design</p>
                <div class="col-md-12" style="background-color: gray; border-radius: 22px;">
                    <hr class="py-1">
                </div>
                <p class="">Graphic Design</p>
                <div class="col-md-12" style="background-color: gray; border-radius: 22px;">
                    <hr class="py-1">
                </div>
                <p class="">Graphic Design</p>
                <div class="col-md-12" style="background-color: gray; border-radius: 22px;">
                    <hr class="py-1">
                </div>
            </div>

            <div class="skills_box col-md-4  text-light p-5">
                <h2>Design</h2>

                <p class="">Graphic Design</p>
                <div class="col-md-12" style="background-color: gray; -radius: 22px;">
                    <hr class="py-1">
                </div>
                <p class="">Graphic Design</p>
                <div class="col-md-12" style="background-color: gray; border-radius: 22px;">
                    <hr class="py-1">
                </div>
                <p class="">Graphic Design</p>
                <div class="col-md-12" style="background-color: gray; border-radius: 22px;">
                    <hr class="py-1">
                </div>
            </div>

        </div>
    </div>


        <!-- ============================================================ROW 3 (LOGOS)============================ -->

        <div class="company_logo container-fluid">
            <div id="logoContainer" class="row"
                style="display: flex; flex-wrap: nowrap; justify-content: flex-start; gap: 15px; overflow-x: hidden;">
                <div class="company_logo_box col-md-3"><img class="img-fluid"
                        src="{{ Storage::url('images/logo_Artboard-2.png') }}" alt="NOON"></div>
                <div class="company_logo_box col-md-3"><img class="img-fluid"
                        src="{{ Storage::url('images/logo_Artboard-1.png') }}" alt="NOON"></div>
                <div class="company_logo_box col-md-3"><img class="img-fluid"
                        src="{{ Storage::url('images/logo_Artboard-3.png') }}" alt="NOON"></div>
                <div class="company_logo_box col-md-3"><img class="img-fluid"
                        src="{{ Storage::url('images/logo_Artboard-2.png') }}" alt="NOON"></div>
                <div class="company_logo_box col-md-3"><img class="img-fluid"
                        src="{{ Storage::url('images/logo_Artboard-1.png') }}" alt="NOON"></div>
            </div>
        </div>
    <!-- ================================================DESIGN ROW==================================== -->

    <div class=" design_bg_con container-fluid pt-5 mt-5">
        <div class="row  row_con">
            
            <div class="design_box design_bg col-md-8 "></div>


            <div class="design_box para_box col-md-4 "
                style="display: flex; justify-content: center; align-items: center; position: relative; right: 230px;">
                <div class="container design_para">
                    <h6 class="text-light">HIRE ME NOW</h6>
                    <p class="design_para_colorAndStyle">Lets Started Collaboration With Me Today </p>
                    <p class="text-light" style="font-size: large; font-weight: 500; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                        <h6 class="text-light">LETS MAKE A CALL</h6>
                </div>
            </div>

        </div>
    </div>



















    <x-_footer />

</div>
<script>
    // Increment the numbers from 0 to target count
    let clientsCount = 0;
    let achievementsCount = 0;
    let workingHoursCount = 0;
    const clientsTargetCount = 100; // The final target count for clients
    const achievementsTargetCount = 60; // The final target count for achievements
    const workingHoursTargetCount = 120; // The final target count for working hours

    function incrementNumbers() {
        if (clientsCount <= clientsTargetCount) {
            document.getElementById("clientsCount").innerText = clientsCount;
            clientsCount++;
        }

        if (achievementsCount <= achievementsTargetCount) {
            document.getElementById("achievementsCount").innerText = achievementsCount;
            achievementsCount++;
        }

        if (workingHoursCount <= workingHoursTargetCount) {
            document.getElementById("workingHoursCount").innerText = workingHoursCount;
            workingHoursCount++;
        }

        if (clientsCount <= clientsTargetCount || achievementsCount <= achievementsTargetCount || workingHoursCount <= workingHoursTargetCount) {
            setTimeout(incrementNumbers, 40); // Delay between increments (in milliseconds)
        }
    }

    // Call the incrementNumbers function to start incrementing
    incrementNumbers();




</script>
<script>
    // Auto-scroll the logo container from right to left
    const logoContainer = document.getElementById("logoContainer");
    const scrollSpeed = 1; // Adjust the scrolling speed as needed

    setInterval(function () {
        logoContainer.scrollLeft += scrollSpeed;
    }, 10); // Adjust the interval delay (in milliseconds) for smoother scrolling if needed
</script>