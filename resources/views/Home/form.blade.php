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
        @if (session()->has('success'))


        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
<div class="card">
<div class="card-body">
<blockquote class="blockquote mb-0">
  <div class="row mb-5">

          <div class="card-header d-flex align-items-center justify-content-between">

          </div>
        <div class="card-body">
            <form action="{{ route('form') }}" method="post">
                @csrf

                <!-- Add a hidden input field to store the user ID -->
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">


            <!-- name Form -->
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="bx bx-user"></i
                    ></span>
                    @if (Auth::user()->name)
                    <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="John Doe"
                        aria-label="John Doe"
                        aria-describedby="basic-icon-default-fullname2"
                        value="{{ Auth::user()->name }}"
                        readonly
                    />
                @else
                    <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="John Doe"
                        aria-label="John Doe"
                        aria-describedby="basic-icon-default-fullname2"
                    />
                @endif
                  </div>
                </div>
              </div>

            <!-- name radio Form -->
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name Radio</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                      ><i class="bx bx-buildings"></i
                    ></span>
                    @if (Auth::user()->radio)
                    <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="ACME Inc."
                        aria-label="ACME Inc."
                        aria-describedby="basic-icon-default-company2"
                        value="{{ Auth::user()->radio }}"
                        readonly
                    />
                @else
                    <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="ACME Inc."
                        aria-label="ACME Inc."
                        aria-describedby="basic-icon-default-company2"
                    />
                @endif
                  </div>
                </div>
              </div>


            <!-- Email Form -->
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    @if (Auth::user()->email)
                <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="john.doe"
                    aria-label="john.doe"
                    aria-describedby="basic-icon-default-email2"
                    value="{{ Auth::user()->email }}"
                    readonly
                />
            @else
                <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="john.doe"
                    aria-label="john.doe"
                    aria-describedby="basic-icon-default-email2"
                />
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
            @endif
                  </div>
                </div>
              </div>


            <!-- no phone Form -->
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-phone2" class="input-group-text"
                      ><i class="bx bx-phone"></i
                    ></span>
                    @if (Auth::user()->phone)
                    <input
                        type="text"
                        id="basic-icon-default-phone"
                        class="form-control phone-mask"
                        placeholder="658 799 8941"
                        aria-label="658 799 8941"
                        aria-describedby="basic-icon-default-phone2"
                        value="{{ Auth::user()->phone }}"
                        readonly
                    />
                @else
                    <input
                        type="text"
                        id="basic-icon-default-phone"
                        class="form-control phone-mask"
                        placeholder="658 799 8941"
                        aria-label="658 799 8941"
                        aria-describedby="basic-icon-default-phone2"
                    />
                    <span class="text-danger">Please enter your phone number.</span>
                @endif
                  </div>
                </div>
              </div>


            <!-- seletc topic Form -->
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Help Topic</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                        <select id="topic" name="topic_id" class="select2 form-select">
                            <option value="">Select Topic</option>
                            @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- deskripsi Form -->
              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-message2" class="input-group-text"
                      ><i class="bx bx-comment"></i
                    ></span>
                    <textarea
                      id="basic-icon-default-message"
                      class="form-control"
                      placeholder="Hi, Do you have a moment to talk Joe?"
                      aria-label="Hi, Do you have a moment to talk Joe?"
                      aria-describedby="basic-icon-default-message2"
                      name="message"
                    ></textarea>
                  </div>
                </div>
              </div>


              <div class="row mb-3">
                <label class="col-sm-2 form-label" for="file-input">Upload File</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="file-input-icon" class="input-group-text"><i class="bx bx-file"></i></span>
                    <input
                      type="file"
                      id="file-input"
                      class="form-control"
                      aria-label="Upload File"
                      aria-describedby="file-input-icon"
                      name="file"
                    >
                  </div>
                </div>
              </div>




            <!-- seed Form -->
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
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
