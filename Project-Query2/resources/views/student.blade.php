<h1 style=" font-size: 40px; color:blue">All Students Details</h1>

@foreach ($student as $item)
    <h3>
        {{$item->id}}|
        {{$item->name}}|
        {{$item->email}}|
        {{$item->city_name}}|
        {{$item->age}}
    </h3>
@endforeach