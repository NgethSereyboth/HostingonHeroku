<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/34f5032078.js" crossorigin="anonymous"></script>
    <?php echo $__env->yieldContent('styles_scripts'); ?>

</head>
<body>

  <div id="app">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">

      <div class="container px-4 px-lg-5">

        <a
          class="navbar-brand"
          href=<?php echo e(route('home.index')); ?>

        >
          Start Bootstrap
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
            Menu
          <i class="fas fa-bars"></i>
        </button>

        <div
          class="
            collapse
            navbar-collapse
            d-flex
            justify-content-between
            align-items-center
          "
          id="navbarResponsive"
        >

          <ul class="navbar-nav ms-auto py-4 py-lg-0">

            <li class="nav-item">
              <a
                class="nav-link px-lg-3 py-3 py-lg-4"
                href="#who-we-are"
              >
                Who we are
              </a>
            </li>

            <li
              class="nav-item"
            >
              <a
                class="nav-link px-lg-3 py-3 py-lg-4"
                href="#what-we-do"
              >
                What we do
              </a>
            </li>

            <li
              class="nav-item"
            >
              <a
                class="nav-link px-lg-3 py-3 py-lg-4"
                href="#donate"
              >
                Donate
              </a>
            </li>

            <li
              class="nav-item"
            >
              <a
                class="nav-link px-lg-3 py-3 py-lg-4"
                href="#career"
              >
                Career
              </a>
            </li>

            <li
              class="nav-item"
            >
              <a
                class="nav-link px-lg-3 py-3 py-lg-4"
                href=<?php echo e(route('home.contact')); ?>

              >
                Contact
              </a>

            </li>

          </ul>

          <?php if(auth ()-> check()): ?>

              <div
                class="
                  d-flex
                  justify-content-center
                  align-items-center
                "
              >

                <div class="dropdown">

                  <button
                    class="btn btn-secondary dropdown-toggle" type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <?php echo e(auth ()->user ()->name); ?>

                  </button>

                  <div
                    class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <?php if(
                      auth ()->user ()->role->label === "admin" ||
                      auth ()->user ()->role->label === "developer"
                    ): ?>
                      <a
                        class="dropdown-item"
                        href="<?php echo e(route ('admin.index')); ?>"
                      >
                        Admin site
                      </a>
                    <?php endif; ?>

                    <form
                      class="dropdown-item"
                      method="POST"
                      action="<?php echo e(route('logout')); ?>"
                    >
                      <?php echo csrf_field(); ?>

                      <button
                        type="submit"
                        style="
                          background: transparent;
                          border: none;
                        "
                      >
                        Logout
                      </button>

                    </form>

                  </div>

                </div>

              </div>

          <?php endif; ?>

        </div>

      </div>

    </nav>

    <!-- Page Header-->
    <header
      class="masthead"
      style="background-image: url(<?php echo e(asset('/img/home-bg.jpg')); ?>)"
    >

      <div class="container position-relative px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

          <div class="col-md-10 col-lg-8 col-xl-7">

            <div class="site-heading">


              <h1 style= "color:azure;">KhmerTechTalks</h1>

              <span class="subheading">Technology sharing</span>

            </div>

          </div>

        </div>

      </div>

    </header>

    <main class="py-4">
      <?php echo $__env->yieldContent('content'); ?>
    </main>

  </div>
</body>
</html>
<?php /**PATH D:\Code\testing\KhmerTechInsider\resources\views/layouts/app.blade.php ENDPATH**/ ?>