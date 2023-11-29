@extends('auth.layouts')

@section('content')


@guest


<div class="row justify-content-center mt-5 ">
    <div class="col-md-8">
        <div class="card m-4">
            <div class="card-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ex culpa neque! Culpa fuga cum repellendus
                     vero tempora atque deserunt delectus quod, quae iste minus animi natus perspiciatis a soluta!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quae adipisci eum sit, praesentium animi 
                    laborum iure blanditiis quisquam beatae vel quibusdam dolore voluptatem expedita fugit id sequi reprehenderit?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ex culpa neque! Culpa fuga cum repellendus
                    vero tempora atque deserunt delectus quod, quae iste minus animi natus perspiciatis a soluta!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quae adipisci eum sit, praesentium animi 
                    laborum iure blanditiis quisquam beatae vel quibusdam dolore voluptatem expedita fugit id sequi reprehenderit?</p>
            </div>
        </div>
        <div class="card m-4">
            <div class="card-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ex culpa neque! Culpa fuga cum repellendus
                     vero tempora atque deserunt delectus quod, quae iste minus animi natus perspiciatis a soluta!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quae adipisci eum sit, praesentium animi 
                    laborum iure blanditiis quisquam beatae vel quibusdam dolore voluptatem expedita fugit id sequi reprehenderit?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ex culpa neque! Culpa fuga cum repellendus
                    vero tempora atque deserunt delectus quod, quae iste minus animi natus perspiciatis a soluta!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni quae adipisci eum sit, praesentium animi 
                    laborum iure blanditiis quisquam beatae vel quibusdam dolore voluptatem expedita fugit id sequi reprehenderit?</p>
            </div>
        </div>
    </div>    
</div>
@else


<div class="container mt-4">
    <button class="btn btn-primary" id="newPostButton" onclick="togglePostContainer()">Novo Post</button>
</div>

<div id="postContainer" class="container mt-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Novo Post</h5>
        <form>
          <div class="mb-3">
            <label for="postText" class="form-label">O que está acontecendo?</label>
            <textarea class="form-control" id="postText" rows="2" placeholder="Digite seu post aqui..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Postar</button>
        </form>
        <button class="btn btn-secondary mt-2" onclick="closePostContainer()">Fechar</button>
      </div>
    </div>
  </div>




@endguest
@endsection