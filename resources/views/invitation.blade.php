@extends('template')
@section('title')
Invitations
@endsection


@section('contenu')
<div class="my-5">
<div class="container mt-2 d-flex justify-content-center">
    <div class="card p-3">
        <div class="d-flex align-items-center">
            <div class="image"> <img src="img/img1.jpg" class="rounded" width="155" height="155"> </div>
            <div style="margin-left:15px" class=" w-100">
                <h4 class="mb-0 mt-0">Alex Morrision</h4> <span>Senior Journalist</span>
                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                    <div class="d-flex flex-column"> <span class="articles">Articles</span> <span class="number1">38</span> </div>
                    <div class="d-flex flex-column"> <span class="followers">Followers</span> <span class="number2">980</span> </div>
                    <div class="d-flex flex-column"> <span class="rating">Rating</span> <span class="number3">8.9</span> </div>
                </div>
                <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btnmessageinvi w-100">Chat</button> <button style="margin-left:15px;" class="btn btn-sm btn-primary w-100" >Follow</button> </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2 d-flex justify-content-center">
    <div class="card p-3">
        <div class="d-flex align-items-center">
            <div class="image"> <img src="img/img1.jpg" class="rounded" width="155" height="155"> </div>
            <div style="margin-left:15px" class=" w-100">
                <h4 class="mb-0 mt-0">Alex Morrision</h4> <span>Senior Journalist</span>
                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                    <div class="d-flex flex-column"> <span class="articles">Articles</span> <span class="number1">38</span> </div>
                    <div class="d-flex flex-column"> <span class="followers">Followers</span> <span class="number2">980</span> </div>
                    <div class="d-flex flex-column"> <span class="rating">Rating</span> <span class="number3">8.9</span> </div>
                </div>
                <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btnmessageinvi w-100">Chat</button> <button style="margin-left:15px;" class="btn btn-sm btn-primary w-100" >Follow</button> </div>
            </div>
        </div>
    </div>
</div>
</div>








@endsection