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
                <div style="color:#333; padding-top:12px; font-size:13px; line-height:21px"><p><span style="font-size: small">&#160Cảm biến hình ảnh&#160VDTECH VDT-126PTW 1.0: 1/3” HD CMOS 1.0 Megapixel Image Sensor.</span></p>
<p><span style="font-size: small">- Hỗ trợ truy cập hình ảnh bằng công nghệ điện toán đám mây.</span><o:p></o:p></p>
<p><span style="font-size: small">- Điểm ảnh: Main stream (luồng mạng chính): 1280 x 720 – 25f/s. Sub stream (luồng mạng phụ): D1 (704 x 576) – 25f/s</span><o:p></o:p></p>
<p><span style="font-size: small">- Ánh sáng tối thiểu: 0.1Lux (màu) / F1.2, 0.01 Lux (trắng đen)/ F1.2</span><o:p></o:p></p>
<p><span style="font-size: small">- Chuẩn nén hình: H.264, AVI (Chuẩn HD 720P).</span><o:p></o:p></p>
<p><span style="font-size: small">- Âm thanh: Hỗ trợ âm thanh 2 chiều (Two way audio), 1 micro (Audio in), 1 Jack 3.5mm (Audio out). Tích hợp sẵn Micro bên trong.</span><o:p></o:p></p>
<p><span style="font-size: small">- Báo động: 1CH input / 1CH output</span><o:p></o:p></p>
<p><span style="font-size: small">- Chế độ ghi hình: Chuẩn HD 720P. Ghi liên tục, ghi theo lịch trình, ghi chuyển động.</span><o:p></o:p></p>
<p><span style="font-size: small">- Lưu trữ: Hỗ trợ ổ chứa card SD, Max 32G, lưu trữ, chụp ảnh</span><o:p></o:p></p>
<p><span style="font-size: small">- Góc quay ngang: 355 độ, dọc: 90 độ.</span><o:p></o:p></p>
<p><span style="font-size: small">- Ống kính: 4-6mm (650)</span><o:p></o:p></p>
<p><span style="font-size: small">- Tầm&#160camera quan sát: 11 đèn IR Led (Φ 4mm), quan sát hồng ngoại xa 15 mét.</span><o:p></o:p></p>
<p><span style="font-size: small">- Hình ảnh: Chống ngược sáng BLC, tự động cân bằng ánh sáng trắng ATW, AGC Auto.</span><o:p></o:p></p>
<p><span style="font-size: small">- IR CUT Filter: Automatic/Color.</span><o:p></o:p></p>
<p><span style="font-size: small">- Mạng: 10/100M Ethernet, RJ45, hỗ trợ DNS/FTP/PPoE/DHCP/RTSP/UPnP/Email/NTP</span><o:p></o:p></p>
<p><span style="font-size: small">- Wifi: IEEE 802.11n, tốc độ xử lý 300Mbps</span><o:p></o:p></p>
<p><span style="font-size: small">- Xem qua Máy tính: Macbook pro: xem 4 kênh độc lập Vmeye,&#160Windows 2000/ XP/Win 7/&#160</span><st1:place w:st="on"><span style="font-size: small">Vista</span></st1:place><o:p></o:p></p>
<p><span style="font-size: small">- Xem qua điện thoại di động iPhone: xem 4 kênh độc lập, VMeyeSuper&#160/&#160vMeyeCloud, ghi hình trực tiếp vào iPhone. iPad: xem 9 kênh độc lập, VMeyeSuper HD/vMeyeCloud HD,&#160ghi hình trực tiếp vào iPad. Android: xem 4 kênh độc lập,&#160VMeyeSuper/ vMeyeCloud.&#160Symbian, WindowMobile, RIM(Blackberry).</span></p></div>
                 
                <div style="padding-top:3px; height:auto">
                
                <p style="clear:both"></p>
                </div>
        </div></div>


@endsection
