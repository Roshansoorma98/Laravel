<h1>Test Javascript Things with php</h1>

@php
    $name='roshan';
    $car=['maruti','alto','sujuki'];
@endphp

<script>
    // var data=@json($car);
    
    var data={{Js :: from($car)}};
data.forEach(function(entry) {
    console.log(entry);
    });
</script>

