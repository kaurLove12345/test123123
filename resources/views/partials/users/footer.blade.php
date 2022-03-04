<footer class="FtrMn" id="NewFtr">
    <div class="FooterTp">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrLogo">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('images/footer_logo.png') }}" alt="" title="Ultimate Collections Company" /></a>
                        </div>
                        <div class="FtrScl">
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/ultimatecollectionscompany"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/ultimatecollco"><i class="fab fa-twitter"></i></a></li>
                                <!--li><a target="_blank" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li-->
                                <li><a target="_blank" href="https://www.instagram.com/ultimate_collections_company/?hl=en"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrTtl">
                            <h3>Useful links</h3>
                        </div>
                        <div class="FtrDsc">
                            @guest
                            <ul>
                                <li><a href="{{ route('product.index') }}"><i class="fas fa-chevron-right"></i> Browse</a></li>
                                <li><a href="{{ route('userproduct.index') }}"><i class="fas fa-chevron-right"></i> My Collection</a></li>
                                <li><a href="{{ route('feedback') }}"><i class="fas fa-chevron-right"></i> Feedback</a></li>
                                <li><a href="{{ route('marketplace.index') }}"><i class="fas fa-chevron-right"></i> More</a></li>
                                <li><a href="{{ route('policies') }}"><i class="fas fa-chevron-right"></i> Policies</a></li>
                            </ul>
                            @else
                            <ul>
                                <li><a href="{{ route('product.index') }}"><i class="fas fa-chevron-right"></i> Browse</a></li>
                                <li><a href="{{ route('userproduct.index') }}"><i class="fas fa-chevron-right"></i> My Collection</a></li>
                                <li><a href="{{ route('feedback') }}"><i class="fas fa-chevron-right"></i> Feedback</a></li>
                                <li><a href="{{ route('marketplace.index') }}"><i class="fas fa-chevron-right"></i> More</a></li>
                                <li><a href="{{ route('policies') }}"><i class="fas fa-chevron-right"></i> Policies</a></li>
                            </ul>
                            @endguest
                        </div>
                    </div>
                </div>
                <!--div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrTtl">
                            <h3>Categories</h3>
                        </div>
                        <div class="FtrDsc">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Toys</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Records</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Stamps</a></li>
                                <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i> Lego</a></li>
                            </ul>
                        </div>
                    </div>
                </div-->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="FooterTp_1">
                        <div class="FtrTtl">
                            <h3>Download apps </h3>
                        </div>
                        <div class="FtrGoogleBtns">
                            <ul>
                                <li><a target="_blank" href="{{ route('guest.apps.coming.soon') }}"><img src="{{ asset('images/gp.png') }}" alt="" /></a></li>
                                <li><a target="_blank" href="{{ route('guest.apps.coming.soon') }}"><img src="{{ asset('images/app.png') }}" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="FooterBtm">
        <p>Copyright  {{  date('Y') }}, Ultimate Collections Company . All Rights Reserved.</p>
    </div>
</footer>
<!-- Click To Top -->
<div class="Click_Top">
    <a id="button"><i class="fas fa-chevron-up"></i></a>
</div>
<!--
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
-->

<script defer src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script defer src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>