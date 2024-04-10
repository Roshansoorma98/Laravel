<H1>PHP code test file in view folder</H1>
{{5+4}}
<br>
{{"Roshan"}}
<br>
{{"<h1> HTML code </h1>"}}
<br>
{!!"<h1>HTML code</h1>"!!}
<br>
{{"<script>Java script</script>"}}
<br>

{{-- {!!"<script>alert('Hello everyone')</script>"!!} --}}

@{{$name}}
<br>

@php
    $names=['Roshan soorma','Deependra soorma','Deepshikha soorma','Bhoopendra yadav','Gourav dhanyase','Ayush raghuwanshi']
@endphp

<ul>
@foreach ($names as $n )
    {{-- <li>{{$n}}</li>  --}}
    {{-- <li>{{$loop->index}}-{{$n}}</li> --}}
    {{-- <li>{{$loop->iteration}}-{{$n}}</li> --}}
    {{-- <li>{{$loop->count}}</li> --}}
    @if ($loop->first)
    <li style="colour:red;">{{$n}}</li>
    @elseif ($loop->last)
    <li style="colour:green;">{{$n}}</li>
    @else
    <li>{{$n}}</li>
    @endif
@endforeach
</ul>

<br>
