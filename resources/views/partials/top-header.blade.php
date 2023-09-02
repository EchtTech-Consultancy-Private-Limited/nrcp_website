      <div class="row y-middle">
         <div class="col-md-6 pr-0">
            <ul class="topbar-contact">
               <li>
                  <span class="timezone">{{ date('d F Y') }} &nbsp;  {{ date('H:i:s')}}  &nbsp;  {{ date('T')}} </span>
               </li>
               <li>
                  <a href="javascript:void()" onclick="slipttobottom()"> Skip to Main Content</a> |
                  <a href="{{ url('screen-reader-access') }}"> Screen Reader Access</a>
               </li>
            </ul>
         </div>

         <div class="col-md-6 text-lg-right pl-0">
            <ul class="toolbar-sl-share rs-inner-blog">
               <li class="opening widget-area">
                  <div class="search-widget">
                     <div class="search-wrap">
                        <input type="search" placeholder="Search" name="s" class="search-input"
                           value="">
                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                     </div>
                  </div>
               </li>
               <li class="">
                  <div id="form-wrapper">
                     <form action="" method="" class="font-item">
                        <span class="font-t">A</span>
                        <div id="debt-amount-slider">
                           <!-- <span>A<sup>++</sup> </span> -->
                           <input type="radio" name="debt-amount" id="1" value="1" required onfocus="decreaseFontSize()"  onclick="decreaseFontSize()"
                           title="Decrease Font Size" tabindex="0">
                           <label for="1" tabindex="0"></label>
                           <input type="radio" name="debt-amount" id="2" value="2" checked="checked"
                              required onclick="normaltext()" onfocus="normaltext()" title="Normal Font Size" tabindex="0">
                           <label for="2" tabindex="0"></label>
                           <input type="radio" name="debt-amount" id="3" value="3" required onclick="increaseFontSize()"
                           title="Increase Font Size" tabindex="0" onfocus="increaseFontSize()">
                           <label for="3" tabindex="0"></label>
                           <div id="debt-amount-pos"></div>
                        </div>
                        <span class="font-t">A<sup>++</sup> </span>
                     </form>
                  </div>
               </li>
               <li>
                  <label class="switch mb-0">
                  <input type="checkbox" id="mode" tabindex="0" onclick="setTheme()">
                  
                  <span class="slider round"></span>
                  </label>
               </li>
               <li>
                  <select class="form-control select-lang" onchange="javascript:setlang(value);"tabindex="0">
                     <option value="en" @if (Session::get('Lang') == 'en') selected @endif >English</option>
                     <option value="hi" @if (Session::get('Lang') == 'hi') selected @endif>Hindi</option>
                  </select>
               </li>

            @if(!empty($social_media))

               @if($social_media->facebook  != '')
               <li><a href="{{ url($social_media->facebook) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               @endif

               @if($social_media->twitter  != '')
               <li><a href="{{ url($social_media->twitter) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif  target="_blank" title="twitter"><i class="fa fa-twitter"></i></a>
               </li>
               @endif
               @if($social_media->linkedin  != '')
               <li><a href="{{ url($social_media->linkedin) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif title="Linkedin"><i class="fa fa-linkedin"></i></a>
               </li>
               @endif

            @endif  
                
               <li><a href="{{ route('sitemap') }}" class="sitemap-cl" title="Site Map"><i class="fa fa-sitemap"></i></a>
               </li>
            
            </ul>
         </div>
      </div>   


      
