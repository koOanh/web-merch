<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    /* Custom hover effect */
    .navbar-nav .nav-link h6:hover {
        color: black !important; /* Ensure hover color is black */
    }
    /* Ensure brand text color and remove default margin */
    .navbar-brand h2 {
        color: black !important; /* Keep brand text black */
        margin-bottom: 0; /* Align vertically with other nav items */
    }
    /* Adjust padding for vertical alignment */
    .navbar-nav .nav-link, .navbar-brand {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    /* Ensure consistent text color for active links */
    .nav-link.active {
        color: black !important;
    }
    /* Ensure the navbar takes full width for centering */
    .navbar-collapse {
        width: 100%;
    }
    /* Remove default padding from ul if needed */
    .navbar-nav {
        padding-left: 0;
    }
    /* Ensure list items don't have default styling */
    .nav-item {
       list-style: none;
    }

</style>
</head>
<body style="background-color: white;">

    <nav
      class="navbar navbar-expand-lg"
      style="text-transform: uppercase; background-color: #FFE4E1;"
    >
      <div class="container-fluid" style="background-color: #FFE4E1;">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav w-100 d-flex align-items-center">
              <div class="d-flex"> <li class="nav-item">
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="post.php"
                    >
                      <h6>Products</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="users.php">
                      <h6>Users</h6>
                    </a>
                  </li>
              </div>

              <li class="nav-item mx-auto">
                <a class="navbar-brand" href="../index.php" >
                  <h2 style="font-weight:bold;">SABRINA CAPENTER</h2>
                </a>
              </li>

              <div class="d-flex"> <li class="nav-item">
                    <a class="nav-link active" href="logout.php?">
                      <h6>Logout</h6>
                    </a>
                  </li>
              </div>
          </ul>
        </div>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
