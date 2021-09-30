@extends('template')
@section('title')
Profile
@endsection

@section('contenu')
<div style=" box-shadow:  0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="container w-75 rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 "><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            <div  class="p-2 d-flex justify-content-between rounded bg-light  stats">
                    <div class="d-flex flex-column"> <span class="articles">Articles</span> <span class="number1">38</span> </div>
                    <div class="d-flex flex-column"> <span class="followers">Followers</span> <span class="number2">980</span> </div>
                    <div class="d-flex flex-column"> <span class="rating">Following</span> <span class="number3">8.9</span> </div>
                </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Paramétres du profile</h4>
                </div>
               
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nom</label><input type="text" class="form-control "  value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control "  value=""></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control "  value=""></div>
                    <div class="col-md-12"><label class="labels">Groupe</label><input type="text" class="form-control "  value=""></div>
                    <div class="col-md-12"><label class="labels">Filiére</label><input type="text" class="form-control "  value=""></div>
                </div>
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
    
    </div>
</div>
</div>
</div>
@endsection