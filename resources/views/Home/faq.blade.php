@extends("TemHome.index")

@section('navbar')
<button type="button" class="btn btn-outline-primary" onclick="window.location.href='{{ url('/') }}'">
    <span><i class="fa-solid fa-left-long"></i></span>&nbsp; Back
</button>

@stop
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

    <div class="col-12">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingOne">
              <button
                class="accordion-button btn btn-primary me-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample1"
                aria-expanded="true"
                aria-controls="collapseExample1"
              >
                Button with data-bs-target
              </button>
            </h2>
            <div
              id="collapseExample1"
              class="accordion-collapse collapse show"
              aria-labelledby="faqHeadingOne"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                <div class="d-grid d-sm-flex p-3 border">
                  <img
                    src="../assets/img/elements/1.jpg"
                    alt="collapse-image"
                    height="125"
                    class="me-4 mb-sm-0 mb-2"
                  />
                  <span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters.
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- Add spacing here -->
          <div style="margin-top: 20px;"></div>
        </div>
      </div>

      <div class="col-12">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingTwo">
              <button
                class="accordion-button btn btn-primary me-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample2"
                aria-expanded="true"
                aria-controls="collapseExample2"
              >
                Button with data-bs-target
              </button>
            </h2>

            <div
              id="collapseExample2"
              class="accordion-collapse collapse show"
              aria-labelledby="faqHeadingTwo"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                <div style="margin-top: 20px;"></div>



                <div class="col-12">
                    <div class="accordion" id="faqAccordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading1">
                          <button
                            class="accordion-button btn btn-primary me-1"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseExample3"
                            aria-expanded="true"
                            aria-controls="collapseExample3"
                          >
                            Button with data-bs-target
                          </button>
                        </h2>

                        <div
                          id="collapseExample3"
                          class="accordion-collapse collapse show"
                          aria-labelledby="faqHeading1"
                          data-bs-parent="#faqAccordion"
                        >
                          <div class="accordion-body">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


              </div>
            </div>
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
