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


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:./partials/_footer.html -->
                @include('dashboard.parts.footer')