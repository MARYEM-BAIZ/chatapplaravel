@extends('template')
@section('title')
Publier
@endsection

@section('contenu')

<section class="card border-0 shadow rounded-3 mx-auto my-5" >
      <p class="h1 text-muted text-center mt-5"> Publication</p>
      <form  action="#"  class="text-center border border-light p-5" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="description" placeholder="description..." >
      <input type="file" class="form-control mb-4" name="image" >
      <button  class="btn text-light btn-block my-4 btnpubier"  type="submit">publier</button>
    </form>
  </section>

@endsection
