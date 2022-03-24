<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="{{ Session::get('site_setting') ? Session::get('site_setting')->facebook : '' }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ Session::get('site_setting') ? Session::get('site_setting')->twitter : '' }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ Session::get('site_setting') ? Session::get('site_setting')->linkedin : '' }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ Session::get('site_setting') ? Session::get('site_setting')->instagram : '' }}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright digitalrestaurant .

                    <br>Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </div>
</footer>
