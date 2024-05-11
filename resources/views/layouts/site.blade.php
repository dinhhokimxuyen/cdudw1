<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="img/favicon.ico" rel="icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet" />
  </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0"
      >
        <div class="navbar-brand-container">
          <a href="index.html" class="navbar-brand ms-lg-5">
            <span class="logo-safe" style="color: green">Xuyen</span
            ><span class="logo-cam" style="color: purple">Shop</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="./product.html" class="nav-item nav-link">Products</a>
            <a href="./product_detail.html" class="nav-item nav-link"
              >Products Detail</a
            >
            <a href="contact.html" class="nav-item nav-link">Contact</a>

            <a href="#" class="nav-item nav-link"
              > </i>Login</a
            >
            <a href="#" class="nav-item nav-link"
              > Cart</a
            >
          </div>
          <div class="nav-item search-container">
            <input
              type="text"
              placeholder="Search..."
              class="search-input py-2 px-4 rounded  "
              style="border: 1px solid black"
            />
            <button
              type="submit"
              class="search-button btn btn-link"
              style="color: blue; border: none; background: none"
            >
              <i class="bi bi-search" style="font-size: 24px"></i>
            </button>
          </div>
        </div>
      </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
      <div class="container-fluid bg-danger text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="mb-md-0">
                &copy; <a href="#">Your Site Name</a>. All Rights Reserved.
              </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="mb-0">
                Designed by <a href="https://htmlcodex.com">HTML Codex</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
