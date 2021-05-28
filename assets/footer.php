<footer class="c footer-section section bg-image" data-bg="assets/images/bg/footer-bg.jpg">
    <a href="#">
        <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div>
    </a>



    <div
        class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-85 pb-lg-65 pb-md-60 pb-sm-50 pb-xs-40">
        <div class="container">
            <div class="row">





                <div class="footer-widget col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <h4 class="title"><span class="text">Bits and Pieces </span></h4>
                    <ul>
                        <li><span> You will be satisfy with our work knowing we take the necessary steps to meet your
                            </span></li>
                        <li><span>needs and get the job done right. We also have been working in order to provide help
                                to the needy as much as possible</span></li>
                    </ul>
                </div>


                <div class="footer-widget col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <h4 class="title"><span class="text">Bits and Pieces Office</span></h4>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span> BCE Patna, Patna, Inida.</span></li>
                        <li><i class="fa fa-phone"></i><span><a href="#"> (102) 6666 8888</a></span></li>
                        <li><i class="fa fa-envelope"></i><span><a href="#">info@example.com</a></span></li>
                        <li><i class="fa fa-clock"></i><span><a href="#"> Mon - Sat: 9:00 - 18:00</a></span></li>
                    </ul>
                </div>

                <div class="footer-widget col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <h4 class="title"><span class="text">Contact Us</span></h4>
                    <p>Enter your Email and Some Message here.. </p>
                    <form id="mc-form" class="mc-form footer-newsletter">
                        <input id="mc-email" type="email" autocomplete="off" placeholder="Email Here.." required />
                        <textarea id="mc-email" placeholder="write some message here..."></textarea>

                        <button id="mc-submit">send</button>
                    </form>

                </div>



            </div>
        </div>

    </div>

    <div class="footer-bottom section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p> Made with <i class="fa fa-heart"></i> by
                            Fledgling Coders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/home.js"></script>
<script>
AOS.init();
</script>

<script>
var countDownDate = new Date().setHours(new Date().getHours() + 5);

var x = setInterval(function() {

    var now = new Date().getTime();
    var distance = countDownDate - now;


    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    document.getElementById("timer").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</body>

</html>