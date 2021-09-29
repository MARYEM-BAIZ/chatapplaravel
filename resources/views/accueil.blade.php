@extends('template')
@section('title')
Accueil
@endsection

@section('contenu')

<section class="main">
    <div class="wrapper">
        <div class="left-col">
            <!-- // status wrappers -->

            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="" alt=""></div>
                        <p class="username">modern_web_channel</p>
                    </div>
                    <img src="" class="options" alt="">
                </div>
                <img src="" class="post-image" alt="">
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <img src="" class="icon" alt="">
                        <img src="" class="icon" alt="">
                        <img src="" class="icon" alt="">
                        <img src="" class="save icon" alt="">
                    </div>
                    <p class="likes">1,012 likes</p>
                    <p class="description"><span>username </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur tenetur veritatis placeat, molestiae impedit aut provident eum quo natus molestias?</p>
                    <p class="post-time">2 minutes ago</p>
                </div>
                <div class="comment-wrapper">
                    <img src="" class="icon" alt="">
                    <input type="text" class="comment-box" placeholder="Add a comment">
                    <button class="comment-btn">post</button>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection

