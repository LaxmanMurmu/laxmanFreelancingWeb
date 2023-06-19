<!-- {{ Storage::url('images/slide (1).jpg') }} -->
<x-_header />
<x-_navbar />

<style>
    /* .line {
        border: 2px solid red;
    } */

    .sider_down_box {
        background: linear-gradient(to bottom, rgb(255 255 255 / 50%), rgb(0 0 0 / 80%));
    }

    .mode {
        background-color: black;
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

    .services_box {
        filter: brightness(0.5);
    }

    .services_box:hover {
        cursor: pointer;
        filter: brightness(1);
        /* transform: scale(1.1); */
    }

    .team:hover {
        transform: scale(1.1);
        cursor: pointer;
    }

    .carousel-caption {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 50%;
    }

    .carousel-item.active img {
        animation: zoomIn 30s 1s;
        /* 30s transition and 1s delay */
    }

    .design_bg {
        background-image: url("{{ Storage::url('images/design.jpg') }}");
        background-color: white;
        height: 650px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    ::-webkit-scrollbar {
            display: none;
        }


    @keyframes zoomIn {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.5);
        }

        100% {
            transform: scale(1.5);
        }
    }


    .design_para {
        background-color: white;
        padding: 55px 20px;
        /* border: 2px solid red; */
    }

    .design_para_colorAndStyle {
        font-size: xx-large;
        color: brown;
    }

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
            color: #6d3131;
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

<!-- ================================================Slider==================================== -->

<div class="mode">
    <div class="sider_down_box">
        <div class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ Storage::url('images/slide (1).jpg') }}" class=" d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h1>First slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p>
                            <button class="btn btn-success">Learn more</button>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ Storage::url('images/slide (2).jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h1>First slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p>
                            <button class="btn btn-success">Learn more</button>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ Storage::url('images/slide (3).jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h1>First slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p>
                            <button class="btn btn-success">Learn more</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- ================================================SERVICE BOXES==================================== -->

        <div class="container line" style="position: relative; top: -100px;">

            <div class="row" style="display: flex; justify-content: space-between; ">

                <div class="service_box mb-3 col-md-4 line text-light text-center px-4 ">
                    <img class="img-fluid services_box" src="{{ Storage::url('images/a971.jpg') }}" alt=""
                        style="border-radius: 13px 13px 0px 0px ;">
                    <div
                        style="border: 1px solid rgb(86, 86, 86); border-width: 0 1px 1px 1px; border-radius: 0px 0px 13px 13px;">
                        <h3 class="my-3">Web & App Design</h3>
                        <p style="color: rgb(158, 158, 158);">Pellentesque sed pellentesque felis. Nam tristique ipsum
                            eget
                            magna scelerisque interdum. Fusce at lorem eget lacus congue tristique.</p>
                    </div>
                </div>

                <div class="service_box mb-3 col-md-4 line text-light text-center px-4">
                    <img class="img-fluid services_box" src="{{ Storage::url('images/2214992.jpg') }}" alt=""
                        style="border-radius: 13px 13px 0px 0px ;">
                    <div
                        style="border: 1px solid rgb(86, 86, 86); border-width: 0 1px 1px 1px; border-radius: 0px 0px 13px 13px;">
                        <h3 class="my-3">Web Development</h3>
                        <p style="color: rgb(158, 158, 158);">Pellentesque sed pellentesque felis. Nam tristique ipsum
                            eget
                            magna scelerisque interdum. Fusce at lorem eget lacus congue tristique.</p>
                    </div>
                </div>

                <div class="service_box mb-3 col-md-4 line text-light text-center px-4">
                    <img class="img-fluid services_box" src="{{ Storage::url('images/1103.jpg') }}" alt=""
                        style="border-radius: 13px 13px 0px 0px ;">
                    <div
                        style="border: 1px solid rgb(86, 86, 86); border-width: 0 1px 1px 1px; border-radius: 0px 0px 13px 13px;">
                        <h3 class="my-3">Digital Marketing</h3>
                        <p style="color: rgb(158, 158, 158);">Pellentesque sed pellentesque felis. Nam tristique ipsum
                            eget
                            magna scelerisque interdum. Fusce at lorem eget lacus congue tristique.</p>
                    </div>
                </div>
            </div>

        </div>
        <hr class="mb-5" style="color: black;">
    </div>

    <!-- ================================================What We do==================================== -->

    <div class="container pb-5">
        <div class="row">

            <div class="what_we_do_con col-md-6 text-light ">
                <p style="font-size: 20px;">What We Do</p>
                <h1 class="mb-4" style="font-family: 'Unbounded', cursive;">Answer a few questions to discover a trove
                    of insights
                    customized for you. Answer questions to discover a </h1>
            </div>
            <div class="what_we_do_con col-md-6 text-light ">

                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-color:#3a3a3a; border-radius: 9px;">
                            <img src="..." class="d-block w-100" alt="">
                            <h1 class="text-light text-center">
                                <p style="font-size: 20px; padding: 60px 80px;">Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptates eaque asasd laskk heelo helaojas this how we do work
                                    this how we do work this how we do workthis how we do work this how we do work</p>
                            </h1>
                        </div>
                        <div class="carousel-item" style="background-color:#3a3a3a; border-radius: 9px;">
                            <img src="..." class="d-block w-100" alt="">
                            <h1 class="text-light text-center">
                                <p style="font-size: 20px; padding: 70px 80px;">Lorem, ipsum dolor sit amet consectetur
                                    adipisici elit. Voluptates eaque asasng elit. Voluptates eaque asasd laskk </p>
                            </h1>
                        </div>
                        <div class="carousel-item" style="background-color:#3a3a3a; border-radius: 9px;">
                            <img src="..." class="d-block w-100" alt="">
                            <h1 class="text-light text-center">
                                <p style="font-size: 20px; padding: 70px 80px;">Lorem, ipsum dolor sit amet consectetur
                                    adipisicin elit. Voluptates eaque asasg elit. Voluptates eaque asasd laskk </p>
                            </h1>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================TEAM==================================== -->

    <hr class="my-5" style="color: white;">

    <div class="container mt-5">
        <h5 class="text-light my-5 py-4">Meet With Our Team</h5>
        <div class="row team_box_con">
            <div class="team_box text-light text-center col-md-3 line mb-4">
                <img class="img-fluid team" src="{{ Storage::url('images/team-4.jpg') }}" alt=""
                    style="border-radius: 50%; object-fit: cover; width: 300px; height: 300px; border: 2px dotted white; padding: 15px;">
                <h3 class="mt-2">Hedry Thomsan</h3>
                <p>ux designer</p>
            </div>

            <div class="team_box text-light text-center col-md-3 line mb-4">
                <img class="img-fluid team" src="{{ Storage::url('images/team-3.jpg') }}" alt=""
                    style="border-radius: 50%; object-fit: cover; width: 300px; height: 300px; border: 2px dotted white; padding: 15px;">
                <h3 class="mt-2">Hedry Thomsan</h3>
                <p>ux designer</p>
            </div>

            <div class="team_box text-light text-center col-md-3 line mb-4">
                <img class="img-fluid team" src="{{ Storage::url('images/team-2.jpg') }}" alt=""
                    style="border-radius: 50%; object-fit: cover; width: 300px; height: 300px; border: 2px dotted white; padding: 15px;">
                <h3 class="mt-2">Hedry Thomsan</h3>
                <p>ux designer</p>
            </div>

            <div class="team_box text-light text-center col-md-3 line mb-4">
                <img class="img-fluid team" src="{{ Storage::url('images/team-8.png') }}" alt=""
                    style="border-radius: 50%; object-fit: cover; width: 300px; height: 300px; border: 2px dotted white; padding: 15px;">
                <h3 class="mt-2">Hedry Thomsan</h3>
                <p>ux designer</p>
            </div>
        </div>

        <div class="text-center my-5 pb-5">
            <button class="btn">All team Member</button>
        </div>
    </div>


    <!-- ================================================Founder/Co-Founder==================================== -->


    <div class="container founders_con my-5"
        style="border: 2px dotted white; border-radius: 9px; background-color: #272727;">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">

            <div class="carousel-inner my-5">

                <div class="carousel-item active"
                    style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <img src="{{ Storage::url('images/team-4.jpg') }}" class="  d-block mt-5" alt="..."
                        style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                    <h3 class="text-light mt-4">Laxman Murmu</h3>
                    <h6 class="text-light mb-4">Founder</h6>
                    <div class="" style="display: flex; justify-content: space-between; gap: 20px;">
                        <div class="info"><a href=""><i class="fa fa-whatsapp"
                                    style="font-size:40px;color:#2e8827;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-telegram"
                                    style="font-size:40px;color:#c4c4cc;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-envelope"
                                    style="font-size:40px;color:#e18c8c;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-linkedin"
                                    style="font-size:40px;color:#2031ab;"></i></a></div>
                    </div>
                    <p class="text-light text-center" style="padding: 20px 100px;"> Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Officia eum hic modi dolor quaerat assumenda ipsa repudiandae,
                        rem, soluta enim expedita blanditiis iusto facere. Unde sapiente eaque ducimus libero nesciunt.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id tenetur ipsa totam excepturi harum
                        qui veritatis, repellendus voluptas reiciendis nostrum, asperiores sunt fugiat officia fugit
                        cumque nulla, voluptatum molestiae. Vel? Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Alias quos blanditiis pariatur porro dolorum ullam modi, dolore repellendus, voluptatem
                        expedita debitis asperiores, a odio eius doloremque veniam ducimus! Sit, porro. Lorem, ipsum
                        dolor sit amet consectetur adipisicing elit. Aliquid hic esse similique tempore, consectetur ex,
                        asperiores voluptatum itaque eaque voluptatem quas dolor maiores ipsam rem debitis suscipit
                        labore enim alias!</p>
                </div>

                <div class=" carousel-item "
                    style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <img src="{{ Storage::url('images/team-8.png') }}" class="  d-block mt-5" alt="..."
                        style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                    <h3 class="text-light mt-4">Jenifer Lorenz</h3>
                    <h6 class="text-light mb-4">Founder</h6>
                    <div class="" style="display: flex; justify-content: space-between; gap: 20px;">
                        <div class="info"><a href=""><i class="fa fa-whatsapp"
                                    style="font-size:40px;color:#2e8827;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-telegram"
                                    style="font-size:40px;color:#c4c4cc;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-envelope"
                                    style="font-size:40px;color:#e18c8c;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-linkedin"
                                    style="font-size:40px;color:#2031ab;"></i></a></div>
                    </div>
                    <p class="text-light text-center" style="padding: 20px 100px;"> modi dolor quaerat assumenda ipsa
                        repudiandae, rem, soluta enim expedita blanditiis iusto facere. Unde sapiente eaque ducimus
                        libero nesciunt. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id tenetur ipsa totam
                        excepturi harum qui veritatis, repellendus voluptas reiciendis nostrum, asperiores sunt fugiat
                        officia fugit cumque nulla, voluptatum molestiae. Vel? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Alias quos blanditiis pariatur porro dolorum ullam modi, dolore repellendus,
                        voluptatem expedita debitis asperiores, a odio eius doloremque veniam ducimus! Sit, porro.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid hic esse similique tempore,
                        consectetur ex, asperiores voluptatum itaque eaque voluptatem quas dolor maiores ipsam rem
                        debitis suscipit labore enim alias!</p>
                </div>

                <div class=" carousel-item "
                    style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <img src="{{ Storage::url('images/team-2.jpg') }}" class="  d-block mt-5" alt="..."
                        style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                    <h3 class="text-light mt-4">Lerf Herisam</h3>
                    <h6 class="text-light mb-4">Founder</h6>
                    <div class="" style="display: flex; justify-content: space-between; gap: 20px;">
                        <div class="info"><a href=""><i class="fa fa-whatsapp"
                                    style="font-size:40px;color:#2e8827;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-telegram"
                                    style="font-size:40px;color:#c4c4cc;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-envelope"
                                    style="font-size:40px;color:#e18c8c;"></i></a></div>
                        <div class="info"><a href=""><i class="fa fa-linkedin"
                                    style="font-size:40px;color:#2031ab;"></i></a></div>
                    </div>
                    <p class="text-light text-center" style="padding: 20px 100px;"> Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Officia eum hic modi dolor quaerat assumenda ipsa repudiandae,
                        rem, soluta enim expedita blanditiis iusto facere. Unde sapiente eaque ducimus libero nesciunt.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id tenetur ipsa totam excepturi harum
                        qui veritatis, repellendus voluptas reiciendis nostrum, asperiores sunt fugiat officia fugit
                        cumque nulla, voluptatum molestiae. Vel? Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Alias quos blanditiis pariatur porro dolorum ullam modi, dolore repellendus, voluptatem
                        expedita debitis asperiores, a odio eius doloremque veniam ducimus! Sit, porro. Lorem, ipsum
                        dolor sit amet consectetur adipisicing elit. Aliquid hic esse similique tempore, consectetur ex,
                        asperiores voluptatum itaque eaque voluptatem quas dolor maiores ipsam rem debitis suscipit
                        labore enim alias!</p>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

  
    <!-- ================================================BLOGS==================================== -->


    <div class="container-fluid blogs bg-white  py-5">
        <div class="pt-4 mb-5 px-5">
            <p style="font-size: xx-large; font-family: 'Courier New', Courier, monospace;">Blogs</p>
        </div>

        <div class="row  blog_row_con" style="display: flex; flex-wrap: nowrap; justify-content: flex-start; gap: 15px; overflow-x: scroll;">


            <div class="blogs_box "
                style="width: 450px; display: flex; justify-content: center; align-items: flex-end; position: relative;">
                <div class="text-light" style="position: absolute; z-index: 1;">
                    <h2 class="px-5">Gaining Momentum<br> With AI</h2>
                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequuntur a illo
                        asperiores voluptatum, recusandae porro quae fugit debitis necessitatibus, magnam beatae,</p>
                    <h5 class="px-5 pb-2" style="color: white; font-weight: bold;">Read more..</h5>
                </div>
                <img class="img-fluid" style="border-radius: 4px; object-fit: cover; filter: brightness(0.6);"
                    src="{{ Storage::url('images/blogs (4).jpg') }}" alt="">
            </div>


            <div class="blogs_box "
                style="width: 450px; display: flex; justify-content: center; align-items: flex-end; position: relative;">
                <div class="text-light" style="position: absolute; z-index: 1;">
                    <h2 class="px-5">Gaining Momentum<br> With AI</h2>
                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequuntur a illo
                        asperiores voluptatum, recusandae porro quae fugit debitis necessitatibus, magnam beatae,</p>
                    <h5 class="px-5 pb-2" style="color: white; font-weight: bold;">Read more..</h5>
                </div>
                <img class="img-fluid" style="border-radius: 4px; object-fit: cover; filter: brightness(0.6);"
                    src="{{ Storage::url('images/blogs (1).jpg') }}" alt="">
            </div>

            <div class="blogs_box"
                style="width: 450px; display: flex; justify-content: center; align-items: flex-end; position: relative;">
                <div class="text-light" style="position: absolute; z-index: 1;">
                    <h2 class="px-5">Gaining Momentum<br> With AI</h2>
                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequuntur a illo
                        asperiores voluptatum, recusandae porro quae fugit debitis necessitatibus, magnam beatae,</p>
                    <h5 class="px-5 pb-2" style="color: white; font-weight: bold;">Read more..</h5>
                </div>
                <img class="img-fluid" style="border-radius: 4px; object-fit: cover; filter: brightness(0.6);"
                    src="{{ Storage::url('images/blogs (3).jpg') }}" alt="">
            </div>

            <div class="blogs_box"
                style="width: 450px; display: flex; justify-content: center; align-items: flex-end; position: relative;">
                <div class="text-light" style="position: absolute; z-index: 1;">
                    <h2 class="px-5">Gaining Momentum<br> With AI</h2>
                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequuntur a illo
                        asperiores voluptatum, recusandae porro quae fugit debitis necessitatibus, magnam beatae,</p>
                    <h5 class="px-5 pb-2" style="color: white; font-weight: bold;">Read more..</h5>
                </div>
                <img class="img-fluid" style="border-radius: 4px; object-fit: cover; filter: brightness(0.6);"
                    src="{{ Storage::url('images/blogs (2).jpg') }}" alt="">
            </div>

            <div class="blogs_box"
                style="width: 450px; display: flex; justify-content: center; align-items: flex-end; position: relative;">
                <div class="text-light" style="position: absolute; z-index: 1;">
                    <h2 class="px-5">Gaining Momentum<br> With AI</h2>
                    <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequuntur a illo
                        asperiores voluptatum, recusandae porro quae fugit debitis necessitatibus, magnam beatae,</p>
                    <h5 class="px-5 pb-2" style="color: white; font-weight: bold;">Read more..</h5>
                </div>
                <img class="img-fluid" style="border-radius: 4px; object-fit: cover; filter: brightness(0.6);"
                    src="{{ Storage::url('images/blogs (5).jpg') }}" alt="">
            </div>
        </div>
    </div>



      <!-- ================================================DESIGN ROW==================================== -->

      <div class=" design_bg_con container-fluid pt-5" style="background-color: white;">
        <div class="row  row_con">
            <div class="design_box design_bg col-md-8 "></div>


            <div class="design_box para_box col-md-4 "
                style="display: flex; justify-content: center; align-items: center; position: relative; right: 230px;">
                <div class="container design_para ">
                    <h6>WHAT WE DO</h6>
                    <p class="design_para_colorAndStyle">TCS is an IT services, consulting and business solutions
                        organization that has been partnering
                        with many of the world’s Largest</p>
                    <p style="font-size: large; font-weight: 500;">Get to Know us</p>
                </div>
            </div>
        </div>
    </div>

  






<x-_footer />

</div>