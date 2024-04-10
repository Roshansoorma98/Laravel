<h1>Users page</h1>

{{-- <h3>Hello {{$user}}</h3>
<h3>City {{$city}}</h3> 
<h3>City: {{!empty($city)? $city : 'No city'}}</h3> --}}

@foreach ($user as $id => $u)
{{-- <h3>{{$u['name']}} | {{$u['phone']}} | {{$u['city']}}</h3> --}}
<h3> {{$id}}  {{$u['name']}}  |  {{$u['phone']}}  |  {{$u['city']}} 
<a href="{{route('view.user', $id)}}">Show</a></h3>
@endforeach