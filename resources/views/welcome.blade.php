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

@endsection

