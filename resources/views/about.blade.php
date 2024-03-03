@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-8 mx-auto mt-5">
            <div class="d-flex justify-content-between">
                <div class="p-2">
                    <h1>{{$title}}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet eveniet fuga iste magnam minus natus nesciunt, obcaecati omnis optio sed sequi sint sit tempora tempore vel vero voluptas.</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.9733584215337!2d21.952542380598214!3d42.999895537536794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47559db341f13f4f%3A0x5be287a583965313!2sGigatron%20prodavnica%20G57%20-%20Capitol%20Park%20Leskov%D0%B0c!5e0!3m2!1sbs!2srs!4v1709244435620!5m2!1sbs!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <h3>Working time:</h3>
            <h4>Mon-Sat: 10:00 - 21:00</h4>
            <h4 class="text-danger">Sunday - closed</h4>

        </div>
    </div>

@endsection
