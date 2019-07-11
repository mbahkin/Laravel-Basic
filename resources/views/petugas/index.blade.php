@extends('master.app')

@section('title')
   Template Laravel
@endsection

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.notebookcheck.com/fileadmin/Notebooks/News/_nc3/Samsung_Galaxy_S10_S10e_S10_Plus_Unterschiede.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.techboys.de/wp-content/uploads/2019/02/Samsung-Galaxy-S10-WallpaperNEU-1155x770.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.techboys.de/wp-content/uploads/2019/02/Samsung-Galaxy-S10-WallpaperNEU-1155x770.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="jumbotron">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div> 
</div> 

@endsection


