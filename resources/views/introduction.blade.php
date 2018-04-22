@extends('layouts/master')
@section('title', 'Giới thiệu')
@section('content')
        <!--noi dung chinh-->
        <div id="contentsection_right">
        <!--slider style 2-->

        <!--End of slide2 anh chay-->
        <!--chia se facebook-->
        <div style="height:18px;">
                <div style="width:190px; float:right; margin-right:23px">
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
         <!--ket thuc facebook-->

            <div style="height: auto; width:718px; margin-left:20px; margin-top:18px;line-height:20px; font-size:13px; text-align:justify; clear:both">
            <img style="float:left; max-width:300px; margin-right:18px; margin-bottom:13px; margin-top:6px;" src="{{ asset($introduction->image) }}"> 
                {!! $introduction->content !!}
            </div>

            <p style="clear: both; height:16px"></p>
        </div>
        <p style="clear:both"></p>
        </div>
        <!--ket thuc phan ben phai noi dung chinh-->
     @endsection
