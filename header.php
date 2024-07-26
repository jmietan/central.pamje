<!doctype html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Additional Meta Tags -->
    <meta name="author" content="Jaymie Tan">
    <meta name="description" content="Central - PAMJE">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:wght@100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  
    <!-- Bootstrap Icons Library -->



    <title>Central -PAMJE</title>
  </head>
  <body>

      <header class="pt-3 ">
        <div class="container d-flex flex-wrap align-self-center mb-1 w-100">
          <a href="https://central.pamje.org" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="img/central-logo.svg" alt="Central logo" width="100" height="100">
          </a>

         
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 align-self-end " >
            <input type="search" class="form-control mb-2" placeholder="Search..." aria-label="Search">
          </form>

          <ul class="nav align-self-end mb-2">
            <li class="nav-item mx-1"><button type="button" class="btn btn-primary" onclick="location.href='peer-reviewer-login.php'">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
              </svg> &nbsp; Log in</button>
            </li>
            <li class="nav-item mx-1"><button type="button" class="btn btn-primary ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg>
              &nbsp;
              Register</button></li>
          </ul>
       
        </div>



    <!-- Navigation Container -->
    <nav class="navbar navbar-expand-lg cen-bg-darkblue">
      <div class="container">

        <!-- Toggler Button for Medium and Below -->
        <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon  "></span>
        </button>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse cen-bg-darkblue " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="index.php">HOME</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="#">ABOUT US</a>
            </li>
            <li class="nav-item px-3">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">JOURNALS</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="journals.php">By Alphabetical</a></li>
                  <li><a class="dropdown-item" href="journal-category.php">By Category</a></li>
 
                
                </ul>
 
              </div>
            </li>
            <li class="nav-item px-3">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">RESOURCES
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="for-editors.php">For Editors</a></li>
                  <li><a class="dropdown-item" href="#">For Researchers</a></li>
                  <li><a class="dropdown-item" href="for_authors.php">For Authors</a></li>
                
                </ul>
              </div>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white " href="#">NEWS AND ANNOUNCEMENT</a>
            </li>

            <li class="nav-item px-3">
              <a class="nav-link text-white " href="peer-reviewers.php">PEER REVIEWERS</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white " href="contact.php">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>