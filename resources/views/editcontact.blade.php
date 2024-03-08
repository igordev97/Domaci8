@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="{{route("edit.contact",["id"=>$singleContact->id])}}" method="post" class="mt-5" enctype="multipart/form-data">
                @if($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$singleContact->id}}">
                    <label for="email" class="form-label">Enter new Email:</label>
                    <input type="text" name="email" class="form-control" value="{{$singleContact->email}}">
                </div>

                <div class="form-group my-3">
                    <label for="subject" class="form-label">Enter new Subject:</label>
                    <textarea name="subject" class="form-control">{{$singleContact->subject}}
                </textarea>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">New message:</label>
                    <textarea name="message" class="form-control">{{$singleContact->message}}
                </textarea>
                </div>




                <button class="btn btn-outline-info">Edit contact</button>

            </form>
        </div>
    </div>




@endsection
