 <!-- footer -->
 <footer class="footer-content py-3">
        <div class="container py-md-3">
            <div class="footer-top text-center">
                <h2>
                    <a class="navbar-brand pt-3 mb-3" href="index.html">
                        <span class="fa fa-map-signs"></span> Greenlife Tourism
                    </a>
                </h2>
            </div>
            <div class="row footer-top-inner-vv">
                
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">Navigation</h3>
                        <hr>
                        <ul class="list-info-lavi">
                            <li>
                                <a href="index.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="Services.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="Contact.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                   Contact
                                </a>
                            </li>
                            <li>
                                <a href="Enquiry.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Enquiry
                                </a>
                            </li>
                            <li>
                                <a href="Packages.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Packages
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">Package Themes</h3>
                        <hr>
                        <ul class="list-info-lavi">
                            <li>
                                <a href="#about"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Honeymoon
                                </a>
                            </li>
                            <li>
                                <a href="#gallery"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Wildlife
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Beach
                                </a>
                            </li>
                            <li>
                                <a href="#contact"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Desert
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Hill Station
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php if (isset($_SESSION['submit'])) : ?>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">My Account</h3>
                        <hr>
                        <ul class="list-info-lavi">
                            <li>
                                <a href="manageprofile.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#gallery"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Change Password
                                </a>
                            </li>
                            <li><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <a href="#services">
                                    My Tour History
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Issue Tickets
                                </a>
                            </li>
                            <li>
                                <a href="logout.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php else : ?>

                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">Links</h3>
                        <hr>
                        <ul class="list-info-lavi">
                            <li>
                                <a href="#about"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Our Mission
                                </a>
                            </li>
                            <li>
                                <a href="#gallery"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Latest Tours
                                </a>
                            </li>
                            <li><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <a href="#services">
                                    Explore
                                </a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="logout.php"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Gallery
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php endif; ?>

                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="footer-lavi">
                        <h3 class="mb-3 lavi_title">Contact Us</h3>
                        <hr>
                        <div class="last-vv-contact">
                            <p>
                                <a href="mailto:example@email.com">Abcd@gmail.com</a>
                            </p>
                        </div>
                        <div class="last-vv-contact my-2">
                            <p>+(91) 99240 78912</p>
                        </div>
                        <div class="last-vv-contact">
 
                                <p> Ahmedabad 382418.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2020 Greenlife Group of Company | Design by <a href="index.php" target="=_blank"> Greenlife Tourism</a></p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

	
</body>
</html>