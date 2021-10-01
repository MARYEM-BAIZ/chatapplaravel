@extends('template')
@section('title')
Login
@endsection

@section('contenu')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-4 fw-light fs-5">Sign In</h5>
            <form>
            <div class="mb-3">
            <label class="labels mb-2">Email address</label><input style=" border-radius: 30px;"  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>
              

            <div class="mb-3">
            <label class="labels mb-2">Password</label><input style=" border-radius: 30px;" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            </div>
              

              <div class="d-grid">
                <button style="" class="btn" type="submit">Sign
                  in</button>
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection