@extends("TemHome.index")
@section('Content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Layout Demo -->
    <div class="layout-demo-wrapper">
      <div class="col-md-7 col-lg-8 mb-8">
<div class="card">
<div class="card-body">
<blockquote class="blockquote mb-0">
  <div class="row mb-5">

    <div class="col-md-6 col-lg-4 mb-3 text-center">
      <div class="card">
        <div class="card-header">Ticket</div>
        <div class="card-body">
          <h5 class="card-title">
              <i class="fa-solid fa-ticket fa-8x"></i>
          </h5>
          <hr>

          <button type="button" onclick="window.location.href='{{ url('/form') }}'" class="btn btn-primary">Go somewhere</button>
        </div>
      </div>
    </div>
  <div class="col-md-6 col-lg-4 mb-3 text-center">
      <div class="card text-center">
        <div class="card-header">FAQ</div>
        <div class="card-body">
          <h5 class="card-title">
              <i class="fa-solid fa-circle-question fa-8x"></i>
          </h5>
          <hr>
          <button type="button" onclick="window.location.href='{{ url('/faq') }}'" class="btn btn-primary">Go somewhere</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-3 text-center">
      <div class="card">
        <div class="card-header">Status Ticket</div>
        <div class="card-body">
          <h5 class="card-title">
            <i class="fa-solid fa-file-circle-exclamation fa-8x"></i>
          </h5>
          <hr>
          <button type="button" onclick="window.location.href='{{ url('/status') }}'" class="btn btn-primary">Go somewhere</button>
        </div>
      </div>
    </div>
</blockquote>
</div>
</div>
</div>
    </div>
    <!--/ Layout Demo -->
  </div>
  <!-- / Content -->
  @stop
