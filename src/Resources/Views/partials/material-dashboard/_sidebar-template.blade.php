<div class="sidebar"
     data-color="{{ $color }}"
     data-background-color="black"
     data-image="{{ asset("public/{$image}") }}">

    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Company
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            @include('partials.material-dashboard._sidebar')
        </ul>
    </div>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <i class="material-icons">notifications</i>
                            <p class="d-lg-none d-md-block">
                                Notifications
                            </p>
                        </a>
                    </li>
                    <!-- Insert any other Mobile Sidebar Static Links Here. Anything here will automatically be shown only on mobile. Do not include the _sidebar.blade.php partial here as it will duplicate menu items. -->
                </ul>
            </div>
        </div>
    </nav>