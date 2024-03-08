
@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-8 mx-auto">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($allContacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td><a href="/admin/delete-contact/{{$contact->id}}" class="btn btn-danger">Delete</a></td>
                        <td>
                            <a href="{{route("single-contact",["id"=>$contact->id])}}" class="btn btn-warning text-light">Edit</a>

                        </td>

                    </tr>


                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
