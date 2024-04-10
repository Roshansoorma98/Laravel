{{--@include("pages.header")

<body>
  <h1>Home Page</h1>
  <a href="/about">About</a>
  <a href="/pos">Post</a>
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, amet quas dignissimos nostrum velit nam ipsum laboriosam deserunt neque quasi ducimus sequi pariatur, et eveniet debitis sapiente! Sapiente, ullam. Consectetur non incidunt possimus quisquam necessitatibus rerum minima corporis quia et sapiente voluptas itaque neque atque ipsam consequatur id minus, aut commodi perspiciatis voluptatum placeat fuga reiciendis. Provident repellat perspiciatis illo doloribus corrupti corporis tempora atque saepe dolorum a eveniet quasi dolore assumenda nisi aut nam minus, cumque nihil ab pariatur laboriosam doloremque. Excepturi, temporibus! Facere, odio ipsam ipsa iure maiores voluptatibus quia perferendis! Omnis ducimus consequuntur odit tenetur illo debitis?</h3>
</body>
@include("pages.footer")--}}



 {{--@include("pages.header")

<style>
  /* CSS to position header, footer, and center article */
  body {
    position: relative;
    min-height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  article {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
  }

  footer {
    position: absolute;
    bottom: 0;
    left: 0;
  }
</style>

<article>
  <h1>Home Page</h1>
  <a href="/about">About</a>
  <a href="/pos">Post</a>
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, amet quas dignissimos nostrum velit nam ipsum laboriosam deserunt neque quasi ducimus sequi pariatur, et eveniet debitis sapiente! Sapiente, ullam. Consectetur non incidunt possimus quisquam necessitatibus rerum minima corporis quia et sapiente voluptas itaque neque atque ipsam consequatur id minus, aut commodi perspiciatis voluptatum placeat fuga reiciendis. Provident repellat perspiciatis illo doloribus corrupti corporis tempora atque saepe dolorum a eveniet quasi dolore assumenda nisi aut nam minus, cumque nihil ab pariatur laboriosam doloremque. Excepturi, temporibus! Facere, odio ipsam ipsa iure maiores voluptatibus quia perferendis! Omnis ducimus consequuntur odit tenetur illo debitis?</h3>
</article>

@extends("pages.footer")  --}}



@extends("Layouts.masterlayout")

{{-- @section('content')
<h2>Home Page</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum officia voluptatem sed ut rem cumque, provident, molestiae deleniti nostrum illo delectus repellendus iste aspernatur aliquam corporis nam possimus. Libero voluptate tempore sint iusto nobis dolores cum dolorum ex odit, modi corporis quo suscipit perferendis beatae dignissimos a vero vel assumenda error laborum amet voluptatum? Soluta molestias expedita nobis sapiente, magni id. Laborum incidunt neque consequuntur voluptatum vel! Modi delectus ea praesentium autem, hic tempora quae dolorum cum molestiae cupiditate optio, obcaecati, reiciendis fugiat. Dignissimos necessitatibus ad architecto, provident corporis qui odio quibusdam eaque facilis totam, consectetur nemo fugiat sit praesentium?</p>
@endsection --}}

@section('content')
<h2>Home Page</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum officia voluptatem sed ut rem cumque, provident, molestiae deleniti nostrum illo delectus repellendus iste aspernatur aliquam corporis nam possimus. Libero voluptate tempore sint iusto nobis dolores cum dolorum ex odit, modi corporis quo suscipit perferendis beatae dignissimos a vero vel assumenda error laborum amet voluptatum? Soluta molestias expedita nobis sapiente, magni id. Laborum incidunt neque consequuntur voluptatum vel! Modi delectus ea praesentium autem, hic tempora quae dolorum cum molestiae cupiditate optio, obcaecati, reiciendis fugiat. Dignissimos necessitatibus ad architecto, provident corporis qui odio quibusdam eaque facilis totam, consectetur nemo fugiat sit praesentium?</p>
@endsection

@section('content')
 <h2>Home2 Page</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum officia voluptatem sed ut rem cumque, provident, molestiae deleniti nostrum illo delectus repellendus iste aspernatur aliquam corporis nam possimus. Libero voluptate tempore sint iusto nobis dolores cum dolorum ex odit, modi corporis quo suscipit perferendis beatae dignissimos a vero vel assumenda error laborum amet voluptatum? Soluta molestias expedita nobis sapiente, magni id. Laborum incidunt neque consequuntur voluptatum vel! Modi delectus ea praesentium autem, hic tempora quae dolorum cum molestiae cupiditate optio, obcaecati, reiciendis fugiat. Dignissimos necessitatibus ad architecto, provident corporis qui odio quibusdam eaque facilis totam, consectetur nemo fugiat sit praesentium?</p>
@endsection 

@section('title')
Home
@endsection 

@push('script')
<script src="/jaud.js"></script>  
<script src="/jaud1.js"></script> 
<script src="/jaud2.js"></script> 
<script src="/jaud3.js"></script> 
@endpush

 @push('script')
<script src="/jaud2.js"></script> 
<script src="/jaud3.js"></script> 
@endpush

@push('style')
  <link rel="stylesheet" href="css/example.css">
@endpush

@prepend('style')
<style>
  #aside{
    background-color: blueviolet;
  }
    
</style>
@endprepend