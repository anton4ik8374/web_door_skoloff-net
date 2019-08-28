<!-- Footer
        ============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                <img src="images/logo/logo2.JPG" alt="" class="footer-logo" width="30%">

                Copyrights &copy; 2018 All Skoloff-net Inc.
            </div>

            <div class="col_half col_last tright">
                <div class="copyrights-menu copyright-links fright clearfix" style="clear: both;">
                    @foreach ($data['menu'] as $punkt)
                        <a href="{{$punkt->url}}" class="@if(Route::currentRouteName() === $punkt->name_laravel)active-punck @endif">{{$punkt->name}}</a>/
                    @endforeach
                </div>
                <div class="fright clearfix" style="clear: both;">
                    <a href="https://www.instagram.com/skoloffnet/" target="_blank" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>
                    <a href="https://vk.com/skoloff_net" target="_blank" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                        <i class="icon-vk"></i>
                        <i class="icon-vk"></i>
                    </a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top

============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

@foreach ($data['script'] as $scrip)
    <script src="{{ asset($scrip) }}"></script>
    @endforeach

</body>
</html>