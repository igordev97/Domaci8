
@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-6 mx-auto">
            <h1>Contact form</h1>
            <form action="/send-question" method="post" class="mt-5">
                @if($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email" class="form-label">Enter your email:</label>
                    <input type="email" name="email" rplaceholder="example@example.com" class="form-control">
                </div>

                <div class="form-group my-3">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" name="subject" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <button class="btn btn-outline-secondary">Send question</button>

            </form>
        </div>
    </div>


@endsection
