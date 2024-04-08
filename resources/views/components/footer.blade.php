<div>
    <div class="pg-footer">
        <footer class="footer">
            <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100"
                preserveAspectRatio="none">
                <path class="footer-wave-path"
                    d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z">
                </path>
            </svg>
            <div class="footer-content">
                <div class="footer-content-column">
                    <div class="footer-logo">
                        <a class="footer-logo-link"href="{{ route('home') }}">
                            <img src="{{ asset('Images/LogoPrestoFooter.png') }}" style="width:95px;height:95px;">
                        </a>
                    </div>

                    <div style="display: flex;flex-direction:row;width:1400px;justify-content:center;align-items:center">

                        <div class="footer-menu" style="flex:4;align-items:center; justify-content:center;">
                            <h2 style="margin-bottom: 12px " class="footer-menu-name">{{__('ui.dev')}}</h2>
                            <ul id="menu-get-started" class="footer-menu-list">
                                <li>
                                    <a class="styleAfooter"
                                        href="https://www.linkedin.com/in/vincenzo-tito-junior-developer/" target="blank">Vincenzo
                                        Tito</a>
                                </li>
                                <li>
                                    <a class="styleAfooter" href="https://www.linkedin.com/in/maicol-angelicchio-042579206/" target="blank">Maicol Angelicchio</a>
                                </li>
                                <li>
                                    <a class="styleAfooter" href="https://www.linkedin.com/in/ivan-di-domenicodeveloper/" target="blank">Ivan Di
                                        Domenico</a>
                                </li>
                                <li>
                                    <a class="styleAfooter" href="#" target="blank">Diego Lombardi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6" style="flex:4;align-items:center; justify-content:center;">
                            <div class="footer-content-column">
                                <h2 style=" width:max-content" class="footer-menu-name">{{__('ui.payment')}}</h2>
                                <a style="margin-top: 10px;" href="#"><img style="width: 300px; height:100px" src={{ asset('Images/pagamenti.jpg') }} alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6" style="flex:4;align-items:center; justify-content:center;">
                            <div class="footer-content-column">
                                <h2 style=" width:max-content" class="footer-menu-name">{{__('ui.spedition')}}</h2>
                                <a style="margin-top: 15px;" href="#"><img style="width: 300px; height:100px" src={{ asset('Images/loghi_spedizioni_fin.jpg') }} alt=""></a>
                            </div>
                        </div>

                        <div class="footer-menu" style="flex:8;display:flex;flex-direction:column;align-items:center;">
                            <h2 class="footer-menu-name">{{__('ui.shopping')}}</h2>
                            <ul id="menu-get-started" class="footer-menu-list">
                                <li>
                                   <p>{{__('ui.spe2')}}</p>
                                </li>
                                <li>
                                    <p>{{__('ui.return')}}o</p>
                                </li>
                                <li>
                                    <p>{{__('ui.support')}}</p>
                                </li>
                            </ul>
                        </div>
                        @if (Auth::check() && (Auth::user()->is_revisor === 0 ))
                        <div class="footer-menu" style="flex:3;display:flex;flex-direction:column;align-items:center;">
                            <h2 class="footer-menu-name">{{__('ui.work')}}</h2>
                            <P>{{__('ui.with')}}:</P>
                            <button class="btn btn-success" style="background-color: #6CA7DD"><a href="{{route("work")}}">{{__('ui.us')}}</a></button>
                        </div>
                        @endif

                    </div>
                    

                </div>
                



            </div>


        </footer>
        <div class="footer-copyright">
            <div class="footer-copyright-wrapper">
                <p class="footer-copyright-text">
                    <a class="footer-copyright-link" href="#" target="_self"> ©2024. | Designed By: Echo.
                        | All rights reserved. </a>
                </p>
            </div>
        </div>
    </div>
</div>
