@extends ('layout')

@section ('content')
  <div id="wrapper">
    <div 
      id="page"
      class="contanier"
    >
      @foreach ($articles as $article)
        <div class="content">
          <div class="title">
            <h2>
              <a herf="/articles/{{ $article->id }}">
                {{ $article->title }}
              </a>
            </h2>
          </div>

          <p>
            <img 
              src="images/banner.jpg"
              alt=""
              class="image image-full"
            />
          </p>

          {!! $article->expect !!}
        </div>
      @endforeach ($article->tags as $tag)
      <a herf="/articles?tag={{ $name->name }}">{{ $tag->name }}</a>
      @endforeach
    </div>
  </div>
@endsection
