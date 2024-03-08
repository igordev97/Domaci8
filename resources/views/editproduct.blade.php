@extends("layout")

@section("page-content")
<div class="row">
    <div class="col-6 mx-auto">
        <form action="{{route("edit.product",["id"=>$singleProduct->id])}}" method="post" class="mt-5" enctype="multipart/form-data">
            @if($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
            {{csrf_field()}}
            <div class="form-group">
                <input type="hidden" name="id" value="{{$singleProduct->id}}">
                <label for="name" class="form-label">Enter product name:</label>
                <input type="text" name="name" class="form-control" value="{{$singleProduct->name}}">
            </div>

            <div class="form-group my-3">
                <label for="description" class="form-label">Enter product description:</label>
                <textarea name="description" class="form-control">{{$singleProduct->description}}
                </textarea>
            </div>

            <div class="form-group">
                <label for="price" class="form-label">Enter product price: $</label>
                <input type="number" name="price" class="form-control" value="{{$singleProduct->price}}" >
            </div>

            <div class="form-group my-3">
                <label for="amount" class="form-label">Enter product amount:</label>
                <input type="" name="amount" class="form-control" value="{{$singleProduct->amount}}" >
            </div>



            <button class="btn btn-outline-info">Edit product</button>

        </form>
    </div>
</div>




@endsection
