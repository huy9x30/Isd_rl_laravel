@extends('layouts/master')
@section('title', $product->name)
@section('content')
<!-- noi dung chinh -->
      <div id="contentsection_right">
        <script type="text/javascript">
          $(document).ready(function() {      
            $("#example1").fancybox({
              openEffect  : 'elastic',
              closeEffect : 'elastic',
            });
            
          });
        </script>
              
        <div style="height:18px;">
                <div style="width:190px; float:right">
          <div style="float:left; width:70px; color:#888; font-size:12px;">Chia sẻ lên:</div>
                    <div style=" float:left; width:120px">
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style addthis_16x16_style" style=" float:right;">
                        <a class="addthis_button_facebook" style="margin-left:3px"></a>
                        <a class="addthis_button_google_plusone_share" style="margin-left:3px"></a>
                        <a class="addthis_button_twitter" style="margin-left:3px"></a>
                        <a class="addthis_button_print" style="margin-left:3px"></a>
                        <a class="addthis_button_email" style="margin-left:3px"></a>
                        </div>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                        <!-- AddThis Button END -->
                    </div>                
                </div>
          </div>
         <!--show san pham-->       
          <div id="product_detail">
              
              <div class="box_images">
                <a href="{{ asset($product->image) }}" id="example1" rel='gal1'  title="{{ $product->name }}"><img src="{{ asset($product->image) }}"  alt='{{ $product->name }}' title="{{ $product->name }}" style="border: 2px solid #666;border:none; min-width: 150px; min-height: 150px" class="section_images" ></a>
                </div>
                <div class="section_products">
                  <h1 class="txttensanpham" style="margin:0px">{{ $product->name }}</h1>
                     
                </div>
              <p style="clear:both"></p>
          </div>
            <div style="height: auto; width:738px; margin-left:10px; border-top-color:#DDD; border-top-style: dotted; border-top-width:1px; margin-top:30px;">
                
                <div style="font-size:16px; font-weight:700; color:#333; padding-top:18px;">Mô tả chi tiết</div>
                <div style="color:#333; padding-top:12px; font-size:13px; line-height:21px">
                  {!! $product->description !!}
                </div>
                 
                <div style="padding-top:3px; height:auto">
                
                <p style="clear:both"></p>
                </div>
        </div></div>


@endsection
