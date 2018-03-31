@extends('layouts/master')
@section('title', $sub_category)
@section('content')
<!-- noi dung chinh -->
        <div id="contentsection_right">

        <!-- slider style 2 -->

    <!-- End of slide2 anh chay -->
         <div class="showtilte" style="border-bottom-color:">
                <div class="txtshowtitle"><h2 style="margin:0px; color:; font-size:15px">{{ urldecode($sub_category) }} </h2></div>

          </div>
           <div class="show_sanpham">

            @foreach($products as $product)
             <div class="divsanpham">
              <div class="divimgsanpham"><a href="{{ route('products.show', $product->id) }} "><img style="max-width:110px; max-height:110px" alt="PRC 334ZF" title="PRC 334ZF" src="{{ asset($product->image) }}" /></a></div>
             <div class="divtensanpham" >{{ $product->name }}</div>
           </div>
            @endforeach


           <p style="clear:both"></p>
           </div>
        </div>


@endsection
