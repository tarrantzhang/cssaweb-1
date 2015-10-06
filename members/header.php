<nav>
    <div class="row">
        <img src="../assets/image/shared/icon.png" id="logo_img">
        <div id='cssmenu'>
            <ul>
                <li class="active"><a href='#'><span id='tab_home'></span></a></li>
                <li><a href='#'><span id='tab_events'></span></a>
                </li>
                <li class='has-sub'><a href='#'><span id='tab_memb'></span></a>
                    <ul>
                        <li class='has-sub' ><a href='#'><span id='tab_div'></span></a>
                            <ul>
                                <li><a href='#'><span id='tab_sa'></span></a></li>
                                <li><a href='#'><span id='tab_undergrad'></span></a></li>
                                <li><a href='#'><span id='tab_grad'></span></a></li>
                                <li><a href='#'><span id='tab_sr'></span></a></li>
                                <li><a href='#'><span id='tab_cs'></span></a></li>
                                <li><a href='#'><span id='tab_pr'></span></a></li>
                                <li><a href='#'><span id='tab_publi'></span></a></li>
                                <li><a href='#'><span id='tab_tre'></span></a></li>
                                <li><a href='#'><span id='tab_it'></span></a></li>
                                <li><a href='#'><span id='tab_hr'></span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span id='tab_sub'></span></a>
                            <ul>
                                <li><a href='#'><span id='tab_jour'></span></a></li>
                                <li><a href='#'><span id='tab_pho'></span></a></li>
                                <li><a href='#'><span id='tab_jf'></span></a></li>
                                <li><a href='#'><span id='tab_pp'></span></a></li>
                                <li><a href='#'><span id='tab_dance'></span></a></li>
                            </ul>
                        </li>
                        <li><a href='#'><span id='tab_star'></span></a>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='./about/index.html'><span id='tab_ab'></span></a>
                        <ul>
                            <li><a href='#'><span id='tab_board'></span></a></li>
                            <li><a href='about/vision.html'><span id='tab_vision'></span></a></li>
                            <li><a href='#'><span id='tab_cont'></span></a></li>
                        </ul>
                    </li>
                    <li class='last'><a href='http://bbs.cssa.uiuc.edu/index.php'><span id='tab_bbs'></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <link rel="shortcut icon" href="../assets/image/shared/icon.png">
    
    <script>
        $(document).ready(function(){
            $(".inline").colorbox({inline:true, width:"50%"});
            $("#click").click(function(){ 
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>
