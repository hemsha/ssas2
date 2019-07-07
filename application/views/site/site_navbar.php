<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">SSAS</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('site_static_pages/home');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('site_static_pages/about_us');?>">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('site_static_pages/features');?>">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('site_static_pages/pricing');?>">Pricing</a>
            </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarTogglerDemo03">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item" mr-sm-2>
                <a class="btn btn-outline-primary" href="<?php echo site_url('register_controller/index');?>">Sign In/Up</a>
            </li>
            </ul>
    </div>
</nav>
