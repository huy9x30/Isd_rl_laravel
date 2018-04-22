@extends('layouts/master')
@section('title', "Liên hệ")
@section('content')
        <!--noi dung chinh-->
        <div id="contentsection_right" style="margin-left:45px; width:740px">
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
        <div style=" height:26px; border-bottom-color:#CCCCCC; border-bottom-style:solid; border-bottom-width:1px; color: #333; font-size:17px; font-weight:700">Thông tin liên hệ</div>

        <!--Noi dung chinh-->

        <div style=" height:200px; margin-top:35px;">
            <div style="height:180px; border-right-color:#CCCCCC; border-right-style:dotted; border-right-width:1px; width:318px; float:left">
              <div style="height:120px">
                    <div style="height:110px; width:110px; float:left; margin-right:20px; border:#CCCCCC; border-style:solid; border-width:1px; text-align:center">
                      <img style="max-width:100px; max-height:100px; margin-top:6px" src="{{ asset($data['contacts']->get(0)->image) }}" alt="CONTACT-IMAGE" />
                    </div>
                    <div style="height:100px;width:180px; float:left">
                      <div style="min-height:26px; color:#0066CC; font-size:15px; text-transform:uppercase">
                        {{ $data['contacts']->get(0)->name }}
                      </div>
                      <div style="height:28px; color:#333; font-size:13px;">
                        <strong>Chức vụ:</strong> {{ $data['contacts']->get(0)->position }}
                      </div>
                      <div style="min-height:28px; color:#333; font-size:13px; clear: both">
                        <strong>Di động: </strong> {{ $data['contacts']->get(0)->personalPhone }}</div>

                      <div style="height:28px">

                      </div>
                  </div>
                </div>
            </div>
            <div style="height:150px; margin-left:30px; width:388px; float:left; margin-top:26px; color:#111">
                <div style="height:28px">
                  <div style=" height:25px; font-weight:700; width:90px; float:left;color:#888">Điện Thoại:</div>
                    <div style=" height:25px; width:268px; float:left">
                    {{ $data['contacts']->get(0)->workplacePhone }}
                   </div>
                </div>
                <div style="height:28px">
                  <div style=" height:25px; font-weight:700; width:90px; float:left;color:#888">Fax:</div>
                    <div style=" height:25px; width:268px; float:left">
                      {{ $data['contacts']->get(0)->fax }}
                    </div>
                </div>
                <div style="height:28px">
                  <div style=" height:25px; font-weight:700; width:90px; float:left;color:#888">Email:</div>
                    <div style=" height:25px; width:268px; float:left">
                      <a style="color:#0066CC" href="mailto:{{ $data['contacts']->get(0)->email }}">
                        {{ $data['contacts']->get(0)->email }}
                      </a>
                    </div>
                </div>
                 <div style="height:28px">
                  <div style=" height:25px; font-weight:700; width:90px; float:left;color:#888">Địa chỉ:</div>
                    <div style=" height:25px; width:268px; float:left">
                      {{ $data['contacts']->get(0)->address }}
                    </div>
                </div>

            </div>
        </div>

         <div style=" height:26px; border-bottom-color:#CCCCCC; border-bottom-style:solid; border-bottom-width:1px; color: #111; font-size:17px; font-weight:700">Thông tin công ty</div>
         <div style=" height: auto; margin-top:25px; font-size:13px; color:#333">
          <div style="height:30px; font-size:16px; text-transform:uppercase; color:#111;">
            {{ $data['contacts']->get(1)->name }}
          </div>
            <div style="height:30px">
              <div style="height:30px; float:left; width:90px; font-weight:700; color:#666666">Địa chỉ: </div>
                <div style=" height:30px; float:left">
                   {{ $data['contacts']->get(1)->address }}
                </div>
            </div>
            <div style="height:30px">
              <div style="height:30px; float:left; width:90px; font-weight:700; color:#666666">Điện thoại: </div>
                <div style=" height:30px; float:left">
                  {{ $data['contacts']->get(1)->workplacePhone }}
                </div>
            </div>
            <div style="height:30px">
              <div style="height:30px; float:left; width:90px; font-weight:700; color:#666666">Fax: </div>
                <div style=" height:30px; float:left">
                  {{ $data['contacts']->get(1)->fax }}
                </div>
            </div>
             <div style="height:30px">
              <div style="height:30px; float:left; width:90px; font-weight:700; color:#666666">Email: </div>
                <div style=" height:30px; float:left"><a style="color:#0066CC" href="mailto:{{ $data['contacts']->get(1)->email }}">
                  {{ $data['contacts']->get(1)->email }}
                </a></div>
            </div>
             <div style="height:30px">
              <div style="height:30px; float:left; width:90px; font-weight:700; color:#666666">Website: </div>
                <div style=" height:30px; float:left">
                  <a style="color:#093; font-size:16px" target="_blank" href="{{ route('home') }}">
                    {{ $data['contacts']->get(1)->website }}
                  </a>
                </div>
            </div>
            <p style="clear:both"></p>
             <div style="height: 20px; font-weight:700; color:#FF6600; font-size:14px; margin-top:30px">Bản đồ chỉ đường</div>
             <div style="height: auto">
             <img style="max-width:700px; margin-top:6PX" src="{{ asset($data['contacts']->get(1)->image) }}" alt="Ban do chi duong" />
             </div>
            <p style="clear:both; height:60px"></p>
         </div>
        <!--End dung chinh-->
        </div>
@endsection
