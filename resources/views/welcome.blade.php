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

<div class="bg-light">



  <!-- ============================================================Heading background============================ -->
  <div class="head_background_image container-fluid d-flex justify-content-center align-items-center">
        <h1 style="font-family: 'Archivo Black', sans-serif; font-size: 60px; font-weight: bold;" class="text-center">Welcome</h1>
    </div>

    





            <x-_footer />

        </div>