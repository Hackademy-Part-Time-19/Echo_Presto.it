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
                            <img src="{{ asset('Images/LogoPresto4.png') }}" style="width:100px;height:100px;">
                        </a>
                    </div>

                    <div style="display: flex;flex-direction:row;width:1300px;justify-content:center;align-items:center">

                        <div class="footer-menu" style="flex:3;align-items:center;">
                            <h2 class="footer-menu-name">TEAM DI SVILUPPO</h2>
                            <ul id="menu-get-started" class="footer-menu-list">
                                <li>
                                    <a class="styleAfooter"
                                        href="https://www.linkedin.com/in/vincenzo-tito-junior-developer/">Vincenzo
                                        Tito</a>
                                </li>
                                <li>
                                    <a class="styleAfooter" href="#">Maicol Angelicchio</a>
                                </li>
                                <li>
                                    <a class="styleAfooter" href="www.linkedin.com/in/ivan-di-domenicodeveloper">Ivan Di
                                        Domenico</a>
                                </li>
                                <li>
                                    <a class="styleAfooter" href="#">Diego Lombardi</a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-menu" style="flex:8;display:flex;flex-direction:column;align-items:center;">
                            <h2 class="footer-menu-name">CONTATTI</h2>
                            <ul id="menu-get-started" class="footer-menu-list">
                                <li>
                                    <P>vincenzotito@icloud.com</P>
                                </li>
                                <li>
                                    <p>maicolangelicchio@gmail.com</p>
                                </li>
                                <li>
                                    <p>ivanlajoya10@gmail.com</p>
                                </li>
                                <li>
                                    <p>diegolombardi199@gmail.com</p>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-menu" style="flex:3;display:flex;flex-direction:column;align-items:center;">
                            <h2 class="footer-menu-name">Lavora con noi</h2>
                            <P>Registrati e clicca qui:</P>
                            <button class="btn btn-success"><a href="{{route("work")}}">DIVENTA REVISORE</a></button>        
                        </div>

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
