{{-- {{-- @extends("pages.header")

<article>
  <h1>Home Page</h1>
  <a href="/about">About</a>
  <a href="/pos">Post</a>
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, amet quas dignissimos nostrum velit nam ipsum laboriosam deserunt neque quasi ducimus sequi pariatur, et eveniet debitis sapiente! Sapiente, ullam. Consectetur non incidunt possimus quisquam necessitatibus rerum minima corporis quia et sapiente voluptas itaque neque atque ipsam consequatur id minus, aut commodi perspiciatis voluptatum placeat fuga reiciendis. Provident repellat perspiciatis illo doloribus corrupti corporis tempora atque saepe dolorum a eveniet quasi dolore assumenda nisi aut nam minus, cumque nihil ab pariatur laboriosam doloremque. Excepturi, temporibus! Facere, odio ipsam ipsa iure maiores voluptatibus quia perferendis! Omnis ducimus consequuntur odit tenetur illo debitis?</h3>
</article>

@extends("pages.footer") 

@extends("pages.header")--}}

{{-- <article>
  <h1>Home Page</h1>
  <a href="/about">About</a>
  <a href="/pos">Post</a>
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, amet quas dignissimos nostrum velit nam ipsum laboriosam deserunt neque quasi ducimus sequi pariatur, et eveniet debitis sapiente! Sapiente, ullam. Consectetur non incidunt possimus quisquam necessitatibus rerum minima corporis quia et sapiente voluptas itaque neque atque ipsam consequatur id minus, aut commodi perspiciatis voluptatum placeat fuga reiciendis. Provident repellat perspiciatis illo doloribus corrupti corporis tempora atque saepe dolorum a eveniet quasi dolore assumenda nisi aut nam minus, cumque nihil ab pariatur laboriosam doloremque. Excepturi, temporibus! Facere, odio ipsam ipsa iure maiores voluptatibus quia perferendis! Omnis ducimus consequuntur odit tenetur illo debitis?</h3>
</article> 

@include("pages.header")

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
  <h1>Post Page</h1>
  <a href="/">Home</a>
  <a href="/about">About</a>
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id placeat veritatis et hic cupiditate odio aliquam fugit tempora quia voluptate?</h3>
</article>

@extends("pages.footer") --}}

@extends("Layouts.masterlayout")

@section('content')
<h2>Post Page</h2>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima eligendi molestias autem aliquam minus reprehenderit mollitia! Necessitatibus molestiae obcaecati doloribus autem doloremque minima rerum asperiores ipsam tempora iure, deserunt provident!
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae corporis iure debitis fugit? Sit delectus quos blanditiis magni atque maiores, beatae ad, libero omnis eveniet illum doloribus voluptates nisi voluptatem!</p>
@endsection
{{-- 
@section('title')
Post
@endsection --}}

@section('sidebar')
@parent
<p>This is for post page only</p>
@endsection