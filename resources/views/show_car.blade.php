@extends( "layouts.master" )

@section("content")

<div class="container">
   

        <div class="row">
            <div class="col-8">
            <form action="search-car">
                <select name="color" id="">

                <option selected>Szín</option>
                <option>kék</option>
                <option>sárga</option>
                <option>piros</option>
                <option></option>

                </select>

                <button class="btn-pimary mt-2" type="submit">Keresés</button>

            </form>
                <table class="table table-striped">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Rendszám</th>
                        <th scope="col">Márka</th>
                        <th scope="col">Szín</th>
                        <th scope="col">Ár</th>
                    </thead>
                    <tbody>
                        
                        @foreach( $cars as $car )
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->plate }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->color }}</td>
                                <td>{{ $car->price }}</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>

            <div class="col-2 mt-2">
                <a class="btn btn-outline-primary" href="/new-car">Új autó</a>
            </div>
        </div>
    

</div>
