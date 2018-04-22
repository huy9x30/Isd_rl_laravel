<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="vi" />
<title>@yield('title')</title>
<meta name="description" content="Chuyên cung cấp các thiết bị an ninh, an toàn & chống sét như: Camera quan sát, thiết bị báo động chống trộm, thiết bị kiểm soát ra vào, kim thu sét, dây dẫn thoát sét, tủ chống sét, tb chống sét lan truyền & các thiết bị PCCC." />
<meta name="google-site-verification" content="" />
<link href="" rel="icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/mycss.css') }}" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hoso_css.css') }}" media="screen">

<link rel="stylesheet" type="text/css" href="http://alicohue.com/css/superfish.css" media="screen">
<link rel="stylesheet" href="http://alicohue.com/css/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://alicohue.com/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://alicohue.com/css/Automatic-ImageSlider.css" type="text/css" media="screen">
<script type="text/javascript" src="http://alicohue.com/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="http://alicohue.com/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="http://alicohue.com/js/superfish.js"></script>
<script type="text/javascript" src="http://alicohue.com/js/Automatic-ImageSlider.js"></script>

<link rel="stylesheet" href="http://alicohue.com/css/imageInDetail-Page.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="http://alicohue.com/css/jquery.ad-gallery.css">
<script type="text/javascript" src="http://alicohue.com/js/jquery.ad-gallery.js"></script>
<script type="text/javascript" src="http://alicohue.com/js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="http://alicohue.com/js/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="http://alicohue.com/css/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
  jQuery(function(){
  jQuery('ul.sf-menu').superfish();
  });
</script>
<body style="background:#468264; background-image: url(http://alicohue.com/bg_library/);background-repeat: repeat; background-position: center top; background-attachment: fixed">
<div id="maincontain">

    <div id="banner_head" style="background: url(http://alicohue.com/banner/313/b.jpg); height:180px">
        <div class="newlogo">
              <img class="newlogo_img" src="http://alicohue.com/logo/313/logo.gif" />            </div>
            <div class="newsection_text" style="height:180px">
              <div class="newsection_text1" style="height:180px;left:0px; top:0px;">
                    <h1 class="newsection_text11" style="margin-bottom:0px; color:#FF0000; font-family:; font-size:35px">
                      {{ $data['contacts']->get(1)->name }}
                    </h1>
                    <div class="newsection_text12" style="color:#FFFF00; font-family:; font-size:18px"><i>
                      {{ $data['contacts']->get(1)->introductionMessage }}
                    </i></div>

                    <div class="newsection_text13" style="margin-top:16px; color:#000000; font-size:; font-family:">
                      Đ/C: {{ $data['contacts']->get(1)->address }}
                    </div>

                     <div class="newsection_text14" style="color:#000000; font-size:; font-family:">

                     Tel: {{ $data['contacts']->get(1)->workplacePhone }}
                     - Fax: {{ $data['contacts']->get(1)->fax }}
                    </div>
                </div>
            </div>
      </div>
<!-- Menu -->

             <style>
      .sf-menu, .sf-menu * {margin:0; padding:0; list-style:none; background:#468264}
      .sf-sub-indicator {position:absolute;display:block;right:.75em;top:1.05em; width:10px;height:10px;text-indent:-999em;overflow:hidden;background:url(http://alicohue.com/images/arrows-ffffff.png) no-repeat -10px -100px}
      .sf-menu li:hover, .sf-menu li.sfHover,
      .sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active {background:#008686;outline:0;color:#ffffff;-moz-border-radius: 6px;-webkit-border-radius: 6px;}
      </style>
    <div id="menutop" style="background:#468264">

         <div class="menutopletf">
            <div id="menu">
                <ul class="sf-menu">
                <li class="current"><a style="text-transform:uppercase; color:#FFFF00" href="{{ route('home') }}">TRANG CHỦ</a></li>

                <li><a style="text-transform:uppercase; color:#FFFF00" href="{{ route('introduction') }}">GIỚI THIỆU</a></li>

                <!-- Menu san pham -->
                <li>
                    <a style="text-transform:uppercase; color:#FFFF00" href="#">SẢN PHẨM</a>
                    <ul>
                <!-- tim nhom lon san pham -->
                    @foreach($data['categories'] as $category)
                        <li>
                          <a style="text-transform:uppercase; color:#FFFF00" href="#">{{ $category -> name }}</a>
                          <ul>
                              @foreach($category->hasSub as $sub_category)
                             <li><a style="text-transform:uppercase; color:#FFFF00" href="{{ route('products.showBySubCategory', $sub_category->id) }}">{{ $sub_category -> name }}</a></li>
                               @endforeach
                            </ul>
                        </li>
                    @endforeach
                    </ul>
                </li>
                <!-- End menu san pham -->

                <li><a style="text-transform:uppercase; color:#FFFF00" href="{{ route('contact') }}">LIÊN HỆ</a></li>
                <li><a style="text-transform:uppercase; color:#FFFF00" href="{{ route('feedback.show') }}">PHẢN HỒI</a></li>

                </li>
            </ul>
            </div>
         </div>

         <!-- end of menu style1 -->

         <!-- end of menu style2 -->
         <div class="menutopright">

         </div>
    </div>
    <!-- End of menu -->
    <!-- end products -->
        <!--PHAN CONTAIN CHINH-->
    <div id="contentsection">
      <!-- -menu ngang -->
        <div id="contentsectionleft">
                @foreach($data['categories'] as $category)

                <div class="texttilte" style="background:; color:; border-radius: 3px 3px 3px 3px; padding-top:5px; padding-bottom:5px">{{ $category->name }}</div>

                     <div class="linetilte"></div>
                  @foreach($category->hasSub as $sub_category)
                    <div class="divclass">
                        <div class="divimg"><img class="imgarrow" src="http://alicohue.com/images/cate_arrow.png" /></div>
                        <div  class="divtext">

                           <a style="text-transform:capitalize" href="{{ route('products.showBySubCategory', $sub_category->id) }}">{{ $sub_category->name }}</a>

                        </div>
                    </div>
                    <p style="clear: both"></p>
                    <div class="lineclass"></div>
                  @endforeach
                  @endforeach

            <p style="clear: both; height:1px"></p>
             <!-- PHAN CONTACT US -->
            <div class="texttilte">thông tin liên hệ</div>
            <div class="linetilte"></div>

             <div class="contact">
              <div style="height:89px"><img class="contact_img" src="{{ asset($data['contacts']->get(0)->image) }}" alt="CONTACT-IMAGE" /></div>
                <div class="contact_name">
                  {{ $data['contacts']->get(0)->name }}
                </div>
                <div class="contact_chucvu">
                    {{ $data['contacts']->get(0)->position }} - <span style="color:#2194d2">{{ $data['contacts']->get(0)->personalPhone }}</span>

                </div>

                <div class="contact_chucvu" style="font-size:10px">Email: <a style="color:#2194d2" href="mailto:alicohue@yahoo.com.vn">
                  {{ $data['contacts']->get(0)->email }}
                </a></div>

                <p style="clear:both"></p>
          </div>

            <!-- END CONTACT US -->
        </div>

  @yield('content')
  <p style="clear:both"></p>
    </div>
    <!--KET THUC CONTAIN CHINH-->
  <div id="footer">

            <div class="company_name">
              {{ $data['contacts']->get(1)->name }}
            </div>
            <div class="diachi"><strong>Địa chỉ:</strong>
              {{ $data['contacts']->get(1)->address }}
            </div>
            <div class="dienthoai"><strong>Điên thoại:</strong>
              {{ $data['contacts']->get(1)->workplacePhone }}
            </div>
            <div class="dienthoai"><strong>Email:</strong> <a style="color:#0099CC" href="mailto:{{ $data['contacts']->get(1)->email }}">
              {{ $data['contacts']->get(1)->email }}
            </a>  - <strong> Website:</strong> <a style="color:#0099CC" target="_blank" href="{{ route('home') }}">
              {{ $data['contacts']->get(1)->website }}
            </a></div>

            <div class="designby"></div>

             <p style="clear:both"></p>

  </div>
</div>
<p>&#160</p>
</body>
</html>
