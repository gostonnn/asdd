@extends( "layouts.master")

@section("content")

<div class="row">
    <div class="col-sm-4 offset-sm-4">

      <form class="form-control mt-5 p-3" action="/store-car" method="post">
      @csrf
          <label for="plate">Rendszám</label>
          <input class="form-control" type="text" name="plate">

          <label for="brand">Márka</label>
          <input class="form-control" type="text" name="brand">

          <label for="color">Szín</label>
          <input class="form-control" type="text" name="color" >

          <label for="price">Ár</label>
          <input class="form-control mb-2" type="text" name="price">

          <button class="btn btn-outline btn-primary" type="submit">Küldés</button>
      </form>

    </div>
        
</div>

@endsection