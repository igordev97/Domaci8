@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-12 mx-auto mt-5">
            <h1>{{$title}}</h1>
            @if($currentHour >= 0 && $currentHour  <=12)
                <p>Dobro jutro Srbijo, trenutno vreme je {{$currentTime}}</p>
            @elseif($currentHour > 12 && $currentHour <=19)
                <p>Dobro dan Srbijo, trenutno vreme je {{$currentTime}}</p>
            @else
                <p>Dobro vece Srbijo, trenutno vreme je {{$currentTime}}</p>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex flex-wrap">

            @foreach($products as $product)
                <div class="col-3 p-2 product-item">
                    <h5>{{$product->name}}</h5>
                    <h6><small>Price : ${{$product->price}}</small></h6>
                    <img src="{{ asset('images/' . $product->image) }}" alt="" class="border img-fluid my-2" height="200px">
                    <form>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button class="btn btn-warning">Add to Cart</button>
                    </form>
                </div>

            @endforeach
        </div>
    </div>

@endsection

