@include('dashboard.parts.head')
<div class="container-scroller d-flex">
  <div class="row p-0 m-0 proBanner" id="proBanner">
    <div class="col-md-12 p-0 m-0">

    </div>
  </div>
  <!-- partial:./partials/_sidebar.html -->
  @include('dashboard.parts.sidenav')
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:./partials/_navbar.html -->
    @include('dashboard.parts.topnav')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">1,153 Patients</h4>

                <br>
                <button type="button" class="btn btn-primary btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <i class="mdi mdi-plus"></i>
                  Add Records
                </button>

                @include('dashboard.modal.add')
                <br>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Pid
                        </th>
                        <th>
                          Patient name
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          DOB
                        </th>
                        <th>
                          County
                        </th>
                        <th>
                          Sub-County
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1249
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          Male
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                        <td>
                          Tharaka Nithi
                        </td>
                        <td>
                          Ciakariga
                        </td>
                        <td>
                          <a class="btn btn-success btn-rounded btn-sm">
                            Edit
                            <i class="mdi mdi-file-check btn-icon-append"></i>
                          </a>
                          <a class="btn btn-danger btn-rounded btn-sm">
                            Delete
                            <i class="mdi mdi-delete btn-icon-append"></i>
                          </a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        @include('dashboard.parts.footer')