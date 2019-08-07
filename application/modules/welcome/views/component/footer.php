       <footer id="footer" class="ftr-sec">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="about-info">
                        <div class="logo-ftr"> 
                            <img src="<?php echo base_url(); ?>assets/images/logo.png">
                        </div>
                        <div class="ftr-info">
                            <p>PersonsPlanet.com is an Educational and Advisory service company for investors and
                                active traders founded by
                                John Person. We have a variety of products and services to meet the needs of all
                                individuals interested in learning
                                to trade for the beginner or the advanced students.</p>
                        </div>
                    </div>
                    <div class="listing-ftr">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Learn More</h5>
                                <ul class="list-unstyled quick-links">
                                    <li><a href="javascript:void();">Courses</a>
                                    </li>
                                    <li><a href="javascript:void();">Seminars</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>About Us</h5>
                                <ul class="list-unstyled quick-links">
                                    <li><a href="javascript:void();">About</a></li>
                                    <li><a href="javascript:void();">Persons
                                            Planet</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>Legal</h5>
                                <ul class="list-unstyled quick-links">
                                    <li><a href="javascript:void();">Privacy
                                            Policy</a></li>
                                    <li><a href="javascript:void();">Terms and
                                            condition</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>Contact us</h5>
                                <ul class="list-unstyled quick-links social-ftr">
                                    <li><a href="http://www.youtube.com/personsplanet" target="_blank"
                                            title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="https://www.facebook.com/PersonsPlanet" target="_blank"
                                            title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/PersonsPlanet" target="_blank" title="Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center ftr-text-style">
                        <p>CFTC REQUIRED RISK DISCLOSURE STATEMENT</p>

                        <p>PERSONS PLANET AND ITS EDUCATORS ARE NOT INVESTMENT ADVISORS AND ARE NOT REGISTERED WITH THE
                            U.S. SECURITIES AND EXCHANGE
                            COMMISSION OR THE FINANCIAL INDUSTRY REGULATORY AUTHORITY. FURTHER, OWNERS, EMPLOYEES,
                            AGENTS OR REPRESENTATIVES OF PERSONS PLANET
                            ARE NOT ACTING AS INVESTMENT ADVISORS AND MIGHT NOT BE REGISTERED WITH THE U.S. SECURITIES
                            AND EXCHANGE COMMISSION OR THE FINANCIAL
                            INDUSTRY REGULATORY. PERSONS PLANET EDUCATIONAL TRAINING PROGRAM IS PROVIDED TO IMPROVE
                            FINANCIAL UNDERSTANDING. THE INFORMATION
                            PRESENTED IN THIS SITE IS NOT INTENDED TO BE USED AS THE SOLE BASIS OF ANY INVESTMENT
                            DECISIONS, NOR SHOULD IT BE CONSTRUED AS
                            ADVICE DESIGNED TO MEET THE INVESTMENT NEEDS OF ANY PARTICULAR INVESTOR. NOTHING IN OUR
                            RESEARCH CONSTITUTES LEGAL, ACCOUNTING OR
                            TAX ADVICE OR INDIVIDUALLY TAILORED INVESTMENT ADVICE.</p>

                        <p>HYPOTHETICAL PERFORMANCE RESULTS HAVE MANY INHERENT LIMITATIONS, SOME OF WHICH ARE DESCRIBED
                            BELOW. NO REPRESENTATION IS BEING MADE
                            THAT ANY ACCOUNT WILL OR IS LIKELY TO ACHIEVE PROFITS OR LOSSES SIMILAR TO THOSE SHOWN. IN
                            FACT, THERE ARE FREQUENTLY SHARP
                            DIFFERENCES BETWEEN HYPOTHETICAL PERFORMANCE RESULTS AND THE ACTUAL RESULTS SUBSEQUENTLY
                            ACHIEVED BY ANY PARTICULAR TRADING
                            PROGRAM.</p>

                        <p>ONE OF THE LIMITATIONS OF HYPOTHETITCAL PERFORMANCE RESULTS IS THAT THEY ARE GENERALLY
                            PREPARED WITH THE BENEFIT OF HINDSIGHT.
                            IN ADDITION , HYPOTHETICAL TRADING DOES NOT INVOLVE FINANCIAL RISK, AND NO HYPOTHETICAL
                            TRADING RECORD CAN COMPLETELY ACCOUNT FOR
                            THE IMPACT OF FINANCIAL RISK IN ACTUAL TRADING. FOR EXAMPLE, THE ABILITY TO WITHSTAND LOSSES
                            OR TO ADHERE TO A PARTICULAR TRADING
                            PROGRAM IN SPITE OF TRADING LOSSES ARE MATERIAL POINTS WHICH CAN ALSO ADVERSELY AFFECT
                            ACTUAL TRADING RESULTS. THERE ARE NUMEROUS
                            OTHER FACTORS RELATED TO THE MARKETS IN GENERAL OR TO THE IMPLEMENTATION OF ANY SPECIFIC
                            TRADING PROGRAM WHICH CANNOT BE FULLY
                            ACCOUNTED FOR IN THE PREPARATION OF HYPOTHETICAL PERFORMANCE RESULTS AND ALL OF WHICH CAN
                            ADVERSELY AFFECT ACTUAL TRADING RESULTS.</p>

                        <p>PAST PERFORMANCE IS NOT INDICATIVE OF FUTURE RESULTS. FUTURES, OPTIONS OF FUTURES, STOCKS,
                            FOREX AND OPTIONS INVOLVE SUBSTANTIAL RISK AND RARE NOT SUITABLE FOR ALL INVESTORS.
                        </p>
                        <p>
                            FOR FULL RISK DISCLOSURE, DISCLAIMER, AND USER AGREEMENT CLICK HERE</p>
                        <p>
                            ALL TESTIMONIALS FROM STUDENTS AND GRADUATES OF THE COURSE ARE BELIEVED TO BE TRUE BASED ON
                            REPRESENTATION OF THE PERSONS PROVIDING THE TESTIMONIALS, BUT FACTS
                            STATED IN TESTIMONIALS HAVE NOT BEEN INDEPENDENTLY AUDITED OR VERIFIED. NOR THERE BEEN ANY
                            ATTEMPT TO DETERMINE WHETHER ANY TESTIMONIALS
                            ARE REPRESENTATIVE OF THE EXPERIENCES OF ALL PERSONS USING THE METHODS DESCRIBED HEREIN OR
                            TO COMAPRE THE EXPERIENCES OF THE PERSONS GIVING
                            THE TESTIMONIALS AFTER THE TESTIMONIALS WERE GIVEN. THE AVERAGE READER SHOULD EXPECT THE
                            SAME OR SIMILAR RESULTS. NO PERSON WAS COMPENSATED
                            FOR PROVIDING A TESTIMONIAL.</p>


                        <div class="ftr-last">
                            <img src="<?php echo base_url(); ?>assets/images/ftr-img.png" alt="footer-image">
                        </div>
                    </div>
                    </hr>
                </div>
            </div>
        </footer>
    </div>


    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".testimponial-slider").slick({

                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                autoplay: true,
            })
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });</script>
    <script>
        $('.navbar-toggler').click(function () {
            $('#navbarSupportedContent').toggle();
        });
    </script>
</body>

</html>