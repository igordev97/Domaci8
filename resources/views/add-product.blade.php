@extends("layout");

@section("page-content")

    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="text-center">{{$title}}</h1>
            <form action="/admin/save-product" method="post" class="mt-5" enctype="multipart/form-data">
                @if($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="form-label">Enter product name:</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group my-3">
                    <label for="description" class="form-label">Enter product description:</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                    <div class="form-group">
                        <label for="price" class="form-label">Enter product price: $</label>
                        <input type="number" name="price" class="form-control">
                    </div>

                    <div class="form-group my-3">
                        <label for="amount" class="form-label">Enter product amount:</label>
                        <input type="" name="amount" class="form-control">
                    </div>

                <div class="form-group mb-3">
                    <label for="fileToUpload" class="form-label">Upload product img:</label>
                    <input type="file" name="fileToUpload">
                </div>

                <button class="btn btn-outline-secondary">Save product</button>

            </form>
        </div>
    </div>


@endsection
