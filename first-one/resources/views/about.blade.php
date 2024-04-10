{{--@include("pages.header")

 <article>
  <h1>Home Page</h1>
  <a href="/">Home</a>
  <a href="/pos">Post</a>
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, amet quas dignissimos nostrum velit nam ipsum laboriosam deserunt neque quasi ducimus sequi pariatur, et eveniet debitis sapiente! Sapiente, ullam. Consectetur non incidunt possimus quisquam necessitatibus rerum minima corporis quia et sapiente voluptas itaque neque atque ipsam consequatur id minus, aut commodi perspiciatis voluptatum placeat fuga reiciendis. Provident repellat perspiciatis illo doloribus corrupti corporis tempora atque saepe dolorum a eveniet quasi dolore assumenda nisi aut nam minus, cumque nihil ab pariatur laboriosam doloremque. Excepturi, temporibus! Facere, odio ipsam ipsa iure maiores voluptatibus quia perferendis! Omnis ducimus consequuntur odit tenetur illo debitis?</h3>
</article>

@include("pages.header")

<style>
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
  <h1>About Page</h1>
  <a href="/">Home</a>
  <a href="/pos">Post</a>
  <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, amet quas dignissimos nostrum velit nam ipsum laboriosam deserunt neque quasi ducimus sequi pariatur, et eveniet debitis sapiente! Sapiente, ullam. Consectetur non incidunt possimus quisquam necessitatibus rerum minima corporis quia et sapiente voluptas itaque neque atque ipsam consequatur id minus, aut commodi perspiciatis voluptatum placeat fuga reiciendis. Provident repellat perspiciatis illo doloribus corrupti corporis tempora atque saepe dolorum a eveniet quasi dolore assumenda nisi aut nam minus, cumque nihil ab pariatur laboriosam doloremque. Excepturi, temporibus! Facere, odio ipsam ipsa iure maiores voluptatibus quia perferendis! Omnis ducimus consequuntur odit tenetur illo debitis?</h6>
</article>

@extends("pages.footer") --}}


@extends("Layouts.masterlayout")

{{-- @section('content')
<h2>About Page</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae corporis iure debitis fugit? Sit delectus quos blanditiis magni atque maiores, beatae ad, libero omnis eveniet illum doloribus voluptates nisi voluptatem!</p>
@endsection --}}

@section('content')
<h2>About Page</h2>
@verbatim
<div id="app">{{ message }}</div>
@endverbatim
@endsection


@section('title')
About
@endsection

@push('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue from js!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush