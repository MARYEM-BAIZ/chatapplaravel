<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    
  <!-- header -->
   <header>
     
   
    
       
        <!-- Navbar-->
        
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between ">
    <!-- Left elements -->
    <div class="d-flex">
     

      <!-- Search form -->
      <form class="input-group w-auto my-auto d-none d-sm-flex">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder="Search"
          style="min-width: 125px;"
        />
        <span class="input-group-text border-0 d-none d-lg-flex"
          ><i class="fas fa-search"></i
        ></span>
      </form>
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex">
      <li class="nav-item me-3 me-lg-1 active">
        <a class="nav-link" href="{{route('accueil.accueil')}}">
          <span><i class="fas fa-home fa-lg"></i></span>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
      </li>
     

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="{{route('invitation.invitation')}}">
          <span><i class="fas fa-users fa-lg"></i></span>
          <span class="badge rounded-pill badge-notification bg-danger">2</span>
        </a>
        
      </li>
    </ul>


    


    <!-- Center elements -->

    <!-- Right elements -->
    <ul class="navbar-nav flex-row">
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link d-sm-flex align-items-sm-center" href="{{route('profile.profile')}}">
          <img
            src="https://mdbootstrap.com/img/new/avatars/1.jpg"
            class="rounded-circle"
            height="22"
            alt=""
            loading="lazy"
          />
          <strong class="d-none d-sm-block ms-1">John</strong>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-plus-circle fa-lg"></i></span>
        </a>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link"
          href="{{route('discussion.discussion')}}"
        >
          <i class="fas fa-comments fa-lg"></i>

          <span class="badge rounded-pill badge-notification bg-danger">6</span>
        </a>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell fa-lg"></i>
          <span class="badge rounded-pill badge-notification bg-danger">12</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
       
                    <div  id="notif" class="list list-row " >
                        <div class="list-item"  style="">
                        <div><a href="#" data-abc="true"><img style="border-radius:50%; width:40px;height:40px" src="img/img1.jpg" alt="."></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Patrick Linod</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">3 weeks ago</div>
                            </div>
                            
                        </div>
                        <div class="list-item" >
                            <div><a href="#" data-abc="true"><img style="border-radius:50%; width:40px;height:40px" src="img/img1.jpg" alt="."></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Steven Hmpire</a>
                                <div class="item-except text-muted text-sm h-1x">Build a progressive web app using jQuery</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">2 days ago</div>
                            </div>
                            
                        </div>
                        <div class="list-item" style="">
                        <div><a href="#" data-abc="true"><img style="border-radius:50%; width:40px;height:40px" src="img/img1.jpg" alt="."></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Alan musk</a>
                                <div class="item-except text-muted text-sm h-1x">it be advisable for me to think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                            </div>
                            
                        </div>
                        <div class="list-item" >
                            <div><a href="#" data-abc="true"><img style="border-radius:50%; width:40px;height:40px" src="img/img1.jpg" alt="."></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Lawrence Telon</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">02/11 18</div>
                            </div>
                            
                        </div>
                        <div class="list-item" style="">
                            <div><a href="#" data-abc="true"><img style="border-radius:50%; width:40px;height:40px" src="img/img1.jpg" alt="."></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Stuart Clark</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would, i think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">1 day ago</div>
                            </div>
                          
                        </div>
                        <div class="list-item" >
                            <div><a href="#" data-abc="true"><img style="border-radius:50%; width:40px;height:40px" src="img/img1.jpg" alt="."></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Jordan Stephens</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think about business</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">1 hour ago</div>
                            </div>
                            
                        </div>
                    </div>
        </ul>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-chevron-circle-down fa-lg"></i>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="{{route('profile.profile')}}">Paramétres/Profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Déconnexion</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Right elements -->
  </div>
</nav>
<!-- Navbar -->
   </header>


 <!-- main -->
   <main>
   <section>
     @yield('contenu')
   </section>
   </main>






  





   <!-- footer -->
   
   <footer class="text-center text-black bg-light" >
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbootstrap.com/img/new/fluid/city/113.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbootstrap.com/img/new/fluid/city/111.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbootstrap.com/img/new/fluid/city/112.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbootstrap.com/img/new/fluid/city/114.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbootstrap.com/img/new/fluid/city/115.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="https://mdbootstrap.com/img/new/fluid/city/116.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Images -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 bg-primary" >
    © 2020 Copyright:
    <a class="text-light" href="https://mdbootstrap.com/">MaryemBaiz.com</a>
  </div>
  <!-- Copyright -->
</footer>


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
