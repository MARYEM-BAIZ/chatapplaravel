@extends('template')
@section('title')
Accueil
@endsection

@section('contenu')


    <div class="wrapper ">

            <div class="post ">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="img/img1.jpg" alt=""></div>
                        <p class="username">modern_web_channel</p>
                    </div>


                    <a 
             style="text-decoration: none;"       class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
                     href=""><i class="fa fa-ellipsis-h"></i></a>
                    <ul
                     class="dropdown-menu dropdown-menu-end"
                     aria-labelledby="navbarDropdownMenuLink"
                   >
                     <li>
                       <a class="dropdown-item" href="#">Some news</a>
                     </li>
                     <li>
                       <a class="dropdown-item" href="#">Another news</a>
                     </li>
                     <li>
                       <a class="dropdown-item" href="#">Something else here</a>
                     </li>
                   </ul>


                </div>
                <img src="img/img1.jpg" class="post-image" alt="">
                <div class="post-content">
                    <div class="reaction-wrapper">
                   <div  class="container">
                       <div class="row ">
                       <div class="col-2 mx-auto "><a  href=""><i  class="fab fa-gratipay  "></i></a></div>
                       <div class="col-2 mx-auto "></div>
                        <div class="col-2 mx-auto "><a  href=""><i  class="far fa-comments"></i></a></div>
                        <div class="col-2 mx-auto "></div>
                       <div class="col-2 mx-auto "><a   href=""><i  class="far fa-share-square "></i></a></div>
                       </div>
                   </div>
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                     <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <input type="text" class="comment-box" placeholder="Ajouter un commentaire">
                    <button class="comment-btn">post</button>
                </div>
            </div>
            
        
    </div>

    <div class="wrapper ">

            <div class="post ">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="img/img1.jpg" alt=""></div>
                        <p class="username">modern_web_channel</p>
                    </div>
                    <a
               style="text-decoration: none;"    class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
                     href=""><i class="fa fa-ellipsis-h"></i></a>
                    <ul
                     class="dropdown-menu dropdown-menu-end"
                     aria-labelledby="navbarDropdownMenuLink"
                   >
                     <li>
                       <a class="dropdown-item" href="#">Some news</a>
                     </li>
                     <li>
                       <a class="dropdown-item" href="#">Another news</a>
                     </li>
                     <li>
                       <a class="dropdown-item" href="#">Something else here</a>
                     </li>
                   </ul>
                </div>

                 

              <div style="padding-top: 20px; padding-right:20px; padding-left:20px " >
              <p>{{Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quidem molestias est cumque aliquid nostrum, et fuga suscipit officiis accusantium.', 60, $end='.......')}}</p>
                <p >
                <a href="javascript:document.getElementById('re001').style.display='block';document.getElementById('re001').releaseCapture();">
                <u>Lire la suite</u></a>
                </p>
                <div id="re001" style="display: none;">
                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quidem molestias est cumque aliquid nostrum, et fuga suscipit officiis accusantium.</p>
                <a href="javascript:document.getElementById('re001').style.display='none';document.getElementById('re001').releaseCapture();">
                 <u>FERMER</u></a>
                 </div>
              </div>



                
                <div class="post-content">
                    <div class="reaction-wrapper">
                   <div  class="container">
                       <div class="row ">
                       <div class="col-2 mx-auto "><a  href=""><i  class="fab fa-gratipay  "></i></a></div>
                       <div class="col-2 mx-auto "></div>
                        <div class="col-2 mx-auto "><a  href=""><i  class="far fa-comments"></i></a></div>
                        <div class="col-2 mx-auto "></div>
                       <div class="col-2 mx-auto "><a   href=""><i  class="far fa-share-square "></i></a></div>
                       </div>
                   </div>
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                     <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <input type="text" class="comment-box" placeholder="Ajouter un commentaire">
                    <button class="comment-btn">post</button>
                </div>
            </div>
            
        
    </div>

@endsection





