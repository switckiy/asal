@extends("Admin.template.template")
@section('ContentDash')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Layout Demo -->
    <!-- Basic Bootstrap Table -->

    <ul class="nav nav-pills flex-column flex-md-row mb-3">

        <li class="nav-item">
            <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#smallModal"
          >
            Add Topic
          </button>

          </a>
        </li>
      </ul>


      @if (session()->has('success'))


      <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif
      @if (session()->has('error'))


      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif



<!-- Small Form Modal -->
<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form action="{{ route('addtopic') }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col mb-3">
                <label for="nameSmall" class="form-label">Name</label>
                <input type="text" name="name" id="nameSmall" class="form-control" placeholder="Enter Name" />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary">Save</button> <!-- Tombol "Save" akan menyimpan data -->
          </div>
        </form>
      </div>
    </div>
  </div>

       <!-- Bootstrap Table with Caption -->
       <div class="card">
        <h5 class="card-header">Help Topic</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">

            <thead>
              <tr>
                <th>id</th>
                <th>Topic</th>
                <th>Dibuat</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @php
                $id = 1;
                @endphp
                @foreach ($topics as $topic)
              <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $topic->name }}</td>
                <td>{{ $topic->created_at }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="{{ route('deletetopic', ['id' => $topic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                    </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- Bootstrap Table with Caption -->



      </div>
      <!--/ Basic Bootstrap Table -->
    <!--/ Layout Demo -->
  </div>
@stop
