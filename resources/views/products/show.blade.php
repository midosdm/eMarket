@extends('layouts.master')

@section('content')
  <div class="col-md-12">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
        <!--    <strong class="d-inline-block mb-2 text-success">Design</strong> -->
            <h5 class="mb-0">{{ $product->title }}</h5>
            <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y')}}</div>
            <p class="mb-auto">{!! $product->description !!}</p>
            <strong class="mb-auto">{{ $product->getPrice() }}</strong>
            <form action="{{ route('cart.store') }}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <button type="submit" class="btn btn-dark"><i class="fa
              fa-shopping-cart"></i> Ajouter au panier</button>
            </form>
          </div>
        <div class="col-auto d-none d-lg-block">
            <img style="height:200,width:200" src="{{ asset('storage/'. $product->image) }}" alt="" id="mainImage">
            <div class="mt-2">
              @if ($product->images)

                @foreach (json_decode($product->images, true) as $image)
                  <img src="{{ asset('storage/'. $image) }}" width="40" class="img-thumbnail">
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('extra-js')
  <script>
    var mainImage = document.querySelector('$mainImage');
    var thumbnails = document.querySelectorAll('.img-thumbnail');

    thumbnails.foreach((element) =>.addEventListener('click', changeImage));

    function changeImage(e){
      mainImage.src = this.src;
    }
  </script>
@endsection