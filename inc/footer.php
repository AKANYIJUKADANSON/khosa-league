    
    
    <!-- ====================Sponsors======================== -->
    <div class="row mt-4 mx-1" >
        <div class="card-title text-center">
            <h4><b>Club Sponsors</b></h4>
        </div>
        <div class="d-flex justify-content-center bg-white mb-4">

            <div class="slide-container swiper bg-transparent" >
            <div class="slide-content bg-transparent" style="padding-right: 50px;">
                <div class="swiper-wrapper mx-4 bg-transparent">
                <?php 
                $query_sponsors = "SELECT * FROM sponsors  WHERE status= 'Active' ";
                    $query_sponsors_run = mysqli_query($conn, $query_sponsors);
                while ($sponsor = mysqli_fetch_assoc($query_sponsors_run)) { ?>
                    <div class="card swiper-slide bg-transparent">
                        <div class="col">
                            <div class="card-body my-auto pt-4 bg-transparent">
                            <center><img class="rounded-circle" width="100" height="100" src="../assets/img/sponsors/<?= $sponsor['logo']; ?>" alt=""></center>
                                <p class="fs-6 text-center"><?=$sponsor['sponsor'];?> <br> <span class="fs-4"> <?= $sponsor['team'];?> FC </span></p>
                            </div>
                    </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            </div>

        </div>
    </div>
    
    
    <!-- ==================Start of foorter div================== -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container text-white">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center d-block ">
                            <h2 class="footer_title pos_margin">
                                Important Links
                            </h2>
                            <ul class="imprtant-links">
                                <li><a class="important-link" href="../pages/index.php">Home</a> </li>
                                <li><a class="important-link" href="../pages/teams.php">Clubs</a></li>
                                <li><a class="important-link" href="../pages/table.php">Table</a></li>
                                <li><a class="important-link" href="../pages/about.php">About</a> </li>
                                <li><a class="important-link" href="../pages/players.php">Players</a></li>
                                <li><a class="important-link" href="../pages/executive.php">Executive Team</a> </li>
                                <li><a class="important-link" href="../pages/fixresults.php">Fixtures & Results</a></li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <!-- <div class="footer_widget text-center ">
                            <h2 class="footer_title pos_margin">
                                Contact US
                            </h2>
                            <p>Kigezi High School grounds <br>
                                P.O.BOX 8 Kabale, Uganda<br>
                                <span href="#">khosainfo@gmail.com</span>
                            </p>
                            <a class="number" href="tel:+256 788139399"><i class="bi bi-phone"></i> +256 788139399</a>

                        </div> -->
                    </div>

                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget text-center ">
                            <h2 class="footer_title">
                                Stay Connected
                            </h2>

                            <p class="newsletter_text">Stay connect with us to get exclusive news and updates!</p>

                            <form action="#" method="" class="newsletter_form">
                                <input class="px-2" type="email" placeholder="Enter your mail" name="subsription_email" required>
                                <!-- <input type="submit" name="submit" value="SUBSCRIBE"> -->
                                <button class="px-2" type="submit">SUBSCRIBE</button>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="row justify-content-center flexbox">
                    <div class="col-lg-4">
                        <div class="socail_links justify-content-center float-centre">
                            <ul class="d-flex justify-content-center">
                                <!--<li>-->
                                <!--    <a href="+256 788139399">-->
                                <!--        <i class="bi bi-whatsapp fs-1"></i>-->
                                <!--    </a>-->
                                <!--</li>-->
                                <!-- <li>
                                    <a href="#">
                                        <i class="bi bi-instagram fs-1"></i>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="https://twitter.com/KhosaTrolls">
                                        <i class="bi bi-twitter fs-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://maps.app.goo.gl/QgnhRR24HjfM9c1k7">
                                        <i class="bi bi-geo-alt-fill fs-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a href="../admin/" target="blank">admin</a>
            <a href="../pages/gallery.php" target="blank">Gallery</a> -->
        </div>

    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short fw-bolder fs-2"></i></a>


    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>

    <!-- Gallery -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/custom_swiper.js"></script>
    <script src="../assets/js/gallery.js"></script>


    <!-- Data tables js -->
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/js/tabledata.js"></script>

    <!-- custom swiper js -->
    <script src="../assets/js/style.js"></script>

    </body>

    </html>