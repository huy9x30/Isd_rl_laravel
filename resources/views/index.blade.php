@extends('layouts/master')
@section('title', "CÔNG TY TNTT ẤN LĨNH")
@section('content')
    
      <!-- noi dung chinh -->
        <div id="contentsection_right">
        @foreach($categories as $category)
          <div class="showtilte" style="border-bottom-color:">
            <div class="txtshowtitle">
              <h2 style="margin:0px; color:; font-size:15px">
                {{ $category->name }}
              </h2>
            </div>
          </div>
            <div class="show_sanpham">
          @foreach($category->hasProducts->sortByDesc('created_at')->take(15) as $product)
               <div class="divsanpham">
                <div class="divimgsanpham"><a href="{{ route('products.show', ['id' => $product->id]) }}"><img style="max-width:110px; max-height:110px" alt="{{ $product->name }}" title="{{ $product->name }}" src="{{ asset($product->image) }}" /></a></div>
               <div class="divtensanpham" >{{ $product->name }}</div>
             </div>
          @endforeach
          <p style="clear:both"></p>
            </div>
        @endforeach
        </div>


@endsection
