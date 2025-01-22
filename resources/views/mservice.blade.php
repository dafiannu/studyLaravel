@extends('master')
@section('title', 'Master Service')
@section('content-title', 'Master service')
@section('content')
<div id="card" class="card-pj">
    <hr>
    <div class="container d-flex gap-3 mt-3">
      <div id="in-card" class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1341415561/vector/web-ui-ux-design-web-development-3d-concept.jpg?s=612x612&w=0&k=20&c=fuQZC3NmQDViKiWOte0e7a54LMmk3st3m2v-sVIS1Ks=" class="card-img-top" alt="wb">
        <div class="card-body">
          <h5 class="card-title">Project 1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-secondary">Maintance</a>
        </div>
      </div>
      <div id="in-card" class="card" style="width: 18rem;">
        <img src="https://media.istockphoto.com/id/1362508194/vector/modern-3d-illustration-of-web-development.jpg?s=612x612&w=0&k=20&c=FzoSgPjIPiPV7wFtCHCFDOehKVgOkDWVdgtZb8N797s=" class="card-img-top" alt="wb">
        <div class="card-body">
          <h5 class="card-title">Project 3</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-secondary">Maintance</a>
        </div>
      </div>
    </div>
  </div>
  
@endsection