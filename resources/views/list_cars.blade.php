@extends( "layouts.master" )

@section("content")

<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="">
                <select name="color" id="">

                <option selected>Szín</option>
                <option>Kék</option>
                <option>Sárga</option>
                <option>Piros</option>
                <option></option>

                </select>

                <button class="btn-pimary mt-2" type="submit">Keresés</button>

            </form>

        </div>

        <div class="col-6 mt-1">
            <a class="btn btn-outline" href="/register">Regisztráció</a>
            <a class="btn btn-outline" href="/login">Bejelentkezés</a>
            <a class="btn btn-outline" href="/logout">Kijelentkezés</a>
        </div>

        </div>

        <div class="row">
            <div class="col-10">
                <table class="table table-stripped ">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Rendszám</th>
                        <th scope="col">Márka</th>
                        <th scope="col">Szín</th>
                        <th scope="col">Ár</th>
                        <th scope="col" class="text-end">Műveletek</th>
                    </thead>
                    <tbody>
                        
                        @foreach( $cars as $car )
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->plate }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->color }}</td>
                                <td>{{ $car->price }}</td>
                                    <td class="text-end">
                                        <a class="btn btn-outline-primary btn-sm" href="/edit-car/{{ $car->id }}">Szerkesztés</a>
                                        <a class="btn btn-outline-danger btn-sm" href="/delete-car/{{ $car->id }}">Törlés</a>
                                   </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>

            <div class="col-2">
                <a class="btn btn-primary" href="/new-car">Új autó</a>
            </div>
        </div>
    

</div>
