
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
                    <th>Delete Contact</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($allContacts as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                                <form>
                                    <input type="hidden" name="id" value="{{$contact->id}}">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
