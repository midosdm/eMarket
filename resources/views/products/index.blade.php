@extends('layouts.master')

@section('content2')
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Bienvenue sur E-Market</h1>
      <p class="lead my-3">Technologies, Modes, Electromenager, marche d'enfants, vous trouverez tous ici.</p>
    </div>
</div>
@endsection

@section('content')

  @foreach($products as $product)

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
         <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
          <h5 class="mb-0">{{ $product->title }}</h5>
          <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y')}}</div>
          <p class="mb-auto">{{ $product->subtitle }}</p>
          <strong class="mb-auto">{{ $product->getPrice() }}</strong>

          <a href="{{ route('products.show', $product->slug) }}" class="stretched-link btn btn-info">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="{{ asset('storage/'. $product->image) }}" alt="">
        </div>
      </div>
    </div>
    @endforeach
   <?php //<!-- {{ $products->appends(request()->input())->links() }} --> ?>
@endsection
  