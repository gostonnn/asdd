@extends( "layouts.master")

@section( "content" )

<div class="row">
    <div class="col-lg-4 offset-lg-4">

      <form class="form-control" action="/update-car" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$car->id}}">
          <label for="plate">Rendszám</label>
          <input class="form-control" value="{{$car->plate}}" type="text" name="plate">

          <label for="brand">Márka</label>
          <input class="form-control" value="{{$car->brand}}" type="text" name="brand">

          <label for="color">Szín</label>
          <input class="form-control" value="{{$car->color}}" type="text" name="color">

          <label for="price">Ár</label>
          <input class="form-control" value="{{$car->price}}" type="text" name="price">

          <button class="btn btn-outline btn-primary" type="submit">Küldés</button>
      </form>

    </div>
        
</div>

@endsection