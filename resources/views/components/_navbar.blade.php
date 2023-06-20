
<div style="background-color: black;">
<nav class="navbar navbar-expand-lg  mode">
  <div class="container-fluid">
    <a class="navbar-brand text-light fs-5 p-4" href="#"><img src="{{ Storage::url('images/logo_Asset-1.png') }}" width="50px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto"> <!-- Added ms-auto class here -->
        <a class="nav-link mx-2 active text-light fs-5" aria-current="page" href="/">Home</a>
        <a class="nav-link mx-2 text-light fs-5" href="{{ URL::to('portfolio') }}">Portfolio</a>
        <a class="nav-link mx-2 text-light fs-5" href="{{ URL::to('project') }}">Projects</a>
        <a class="nav-link mx-2 text-light fs-5" href="{{ URL::to('service') }}">Service</a>
        <a class="nav-link mx-2 text-light fs-5" href="{{ URL::to('contact') }}">Contact</a>
      </div>
    </div>
  </div>
</nav>

</div>