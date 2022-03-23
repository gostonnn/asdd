@extends( "layouts.master")

@section("content")

<div class="row">
    <div class="col-lg-4 offset-lg-4">

      <form class="form-control" action="/store-car" method="post">
      @csrf
          <label for="plate">Rendszám</label>
          <input class="form-control" type="text" name="plate">

          <label for="brand">Márka</label>
          <input class="form-control" type="text" name="brand">

          <label for="color">Szín</label>
          <input class="form-control" type="text" name="color" >

          <label for="price">Ár</label>
          <input class="form-control" type="text" name="price">

          <button class="btn btn-outline btn-primary" type="submit">Küldés</button>
      </form>

    </div>
        
</div>
@endsection