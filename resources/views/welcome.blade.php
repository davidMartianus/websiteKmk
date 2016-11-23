@extends('/user/navbaruser')
@section('konten')
<div class="jumbotron" id="headerutama">
  <div class="jumbotron-fluid text-center">
      <h2>KMK GUNADARMA</h2>
      <h3>keluarga, karya, kasih</h3>
  </div><!--end jumbotron-fluid--> 
</div><!--end jumbotron-->

<div id="moto">
        <div class="container">
          <h2 class="text-center">KELUARGA MAHASISWA KATOLIK</h2>
          <h3 class="text-center">Keluarga, Karya, Kasih</h3>
          <div class="row">
            <div class="col-xs-6 col-md-4">
              <div class="keluarga text-center">
                <span class="moto-icon ikeluarga img-responsive">&nbsp;</span>
                <h2 class="heading">Keluarga</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut.</p>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="keluarga text-center">
                <span class="moto-icon ikarya img-responsive">&nbsp;</span>
                <h2 class="heading">Karya</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut.</p>
              </div>
            </div>

            <div class="col-xs-6 col-md-4">
              <div class="keluarga text-center">
                <span class="moto-icon ikasih img-responsive">&nbsp;</span>
                <h2 class="heading">Kasih</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut.</p>
              </div>
            </div>
          </div>  
        </div>
      </div>

      <div class="jumbotron event" id="list-kmk">
        <div class="container">
          <h2 class="text-center">List KMK Gunadarma</h2>
          <div class="row">
            <div class="col-xs-6 col-md-4">
              <img src="http://placehold.it/350x200" class="img-responsive">
            </div>

            <div class="col-xs-12 col-md-8">
              <h3 style="color: #fff">Lorem Ipsum</h3>
              <p style="color: #eeeeee">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut.</p>
            </div>

            <button type="button" class="btn-lg btn btn-primary pull-right"><a href="#">Download</a></button>
          </div>      
        </div>
      </div>
  

      <div id="partner">
        <div class="container">
        <h2 class="text-center">Social</h2>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="http://placehold.it/350x400" class="img-responsive">
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="http://placehold.it/350x400" class="img-responsive">
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="http://placehold.it/350x400" class="img-responsive">
            </div>
            </div>
        </div>
      </div>
@endsection