<?php
foreach($site_info as $sitesetting)
//$teams_form= DB::table('teams')->where('view', '1')->get();
?>
	

    <!-- Start Contact Us -->
    <div class="contact_map">
        <div class="container">
            <div class="row">
                <h4>Contact Us</h4>
                <div class="contact_map_content">
			<?= $sitesetting->map?>
                    <div class="contact_map_info row">
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">Phone</div>
                            <div class="contact_map_info__phone">{{$sitesetting->phone}}</div>
                        </div>
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">Email</div>
                            <div class="contact_map_info__email">
                                <a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}</a>
                            </div>
                        </div>
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">Address</div>
                            <div class="contact_map_info__address">{{$sitesetting->address_ar}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->


	<footer>
        <div class="svg_blue">
            <svg width="100%" height="100%" viewBox="0 0 653 46.107558"><defs><path d="M0 30a1789 1789 0 0 1 653 0v304a1823 1823 0 0 1-653 0z" id="a"/><clipPath  ><path stroke-width="1.00255799" d="M-1-1h656v47H-1z"/></clipPath></defs><use xlink:href="#a" width="100%" height="100%" fill-rule="evenodd"/></svg>
        </div>
        <div class="footer_row background_blue row">
            <div class="container">


                <!-- Start bottom_footer -->
                <div class="bottom_footer">
                    <div class="bottom_footer_link popup">
                        <a href="#step1" data-effect="mfp-zoom-in" class="step1">Book Now</a>
                        <a href="contact.html">Write Us</a>
                    </div>
                    <!-- Start copyright -->
                    <div class="copyright">
                        © 2019 <a class="copy_power" href="https://codista.co/">Codista.</a> All Rights Reserved
                    </div>
                    <!-- End copyright -->
                </div>
                <!-- End bottom_footer -->
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Back to top -->
    <div id="back-to-top" title="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    <!-- Back to top end-->

    <form class="fofm" id="fofm" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="drname_id" id="drname_id">
	<input type="hidden" name="reason_id" id="reason_id">
        <!-- Popup Step 1 -->
        <div id="step1" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Choose a Dentist -->
                <div class="row step1_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Choose a Dentist</h3>
                            <div class="row">
                                <!-- Any Dentist -->
                                <input type="radio" id="radio9" class="radio_name" name="drname" value="Any Dentist">
                                <label for="radio9">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="doctor_name">Any Dentist</span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Any Dentist -->

                                <!-- Dr.Tarek A.Aziz -->
                                <input type="radio" id="radio1" class="radio_name" name="drname" value="Dr. Tarek A.Aziz">
                                <label for="radio1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Tarek A.Aziz</span>
                                                <span class="doctor_position">Oral & Dental Surgeon</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr.Tarek A.Aziz -->

                                <!-- Dr.Mohamed Osama -->
                                <input type="radio" id="radio2" class="radio_name" name="drname" value="Dr. Mohamed Osama">
                                <label for="radio2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Mohamed Osama</span>
                                                <span class="doctor_position">Oral & Dental Surgeon</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr.Mohamed Osama -->

                                <!-- Dr.Yara Mamdouh -->
                                <input type="radio" id="radio3" class="radio_name" name="drname" value="Dr. Yara Mamdouh">
                                <label for="radio3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Yara Mamdouh</span>
                                                <span class="doctor_position">Pediatric Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr.Yara Mamdouh -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step-next step2">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at {{$sitesetting->phone}}
                        <span>© 2019 <a class="copy_power" href="https://codista.co/">Codista.</a> All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Choose a Dentist -->
            </div>
        </div>
        <!-- Popup Step 1 -->

        <!-- Popup Step 2 -->
        <div id="step2" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Please Provide a Visit Reason -->
                <div class="row step2_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Please Provide a Visit Reason</h3>
                            <div class="row">
                                <!-- Broken Tooth -->
                                <input type="radio" id="radio10" class="radio_service" name="radio_service" value="Broken Tooth">
                                <label for="radio10">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Broken Tooth
                                        </span>
                                    </span>
                                </label>
                                <!-- Broken Tooth -->

                                <!-- Check-up and Cleaning -->
                                <input type="radio" id="radio11" class="radio_service" name="radio_service" value="Check-up and Cleaning">
                                <label for="radio11">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Check-up and Cleaning
                                        </span>
                                    </span>
                                </label>
                                <!-- Check-up and Cleaning -->

                                <!-- Dental Check-up and X-Rays -->
                                <input type="radio" id="radio12" class="radio_service" name="radio_service" value="Dental Check-up and X-Rays">
                                <label for="radio12">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Dental Check-up and X-Rays
                                        </span>
                                    </span>
                                </label>
                                <!-- Dental Check-up and X-Rays -->

                                <!-- General Consultation -->
                                <input type="radio" id="radio13" class="radio_service" name="radio_service" value="General Consultation">
                                <label for="radio13">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            General Consultation
                                        </span>
                                    </span>
                                </label>
                                <!-- General Consultation -->

                                <!-- Jaw Joint Pain -->
                                <input type="radio" id="radio14" class="radio_service" name="radio_service" value="Jaw Joint Pain">
                                <label for="radio14">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Jaw Joint Pain
                                        </span>
                                    </span>
                                </label>
                                <!-- Jaw Joint Pain -->

                                <!-- Teeth Whitening -->
                                <input type="radio" id="radio15" class="radio_service" name="radio_service" value="Teeth Whitening">
                                <label for="radio15">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Teeth Whitening
                                        </span>
                                    </span>
                                </label>
                                <!-- Teeth Whitening -->

                                <!-- Veneers -->
                                <input type="radio" id="radio16" class="radio_service" name="radio_service" value="Veneers">
                                <label for="radio16">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Veneers
                                        </span>
                                    </span>
                                </label>
                                <!-- Veneers -->

                                <!-- Wisdom Teeth Extractions -->
                                <input type="radio" id="radio17" class="radio_service" name="radio_service" value="Wisdom Teeth Extractions">
                                <label for="radio17">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Wisdom Teeth Extractions
                                        </span>
                                    </span>
                                </label>
                                <!-- Wisdom Teeth Extractions -->

                                <!-- Other -->
                                <input type="radio" id="radio18" class="radio_service" name="radio_service" value="Other">
                                <label for="radio18">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Other
                                        </span>
                                    </span>
                                </label>
                                <!-- Other -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step1" class="btn step1">Prev</a>
                        <a href="#step3" class="btn step-next step3">Next</a>
                    </div>
                    <!-- Prev and next step button -->
                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at +201064564694
                        <span>© 2019 <a class="copy_power" href="https://codista.co/">Codista.</a> All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Please Provide a Visit Reason -->
            </div>
        </div>
        <!-- Popup Step 2 -->

        <!-- Popup Step 3 -->
        <div id="step3" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input date -->
                <div class="step3_row datepicker_row row">
                    <div class="datepicker_row_title">
                        <h3>Choose a Date</h3>
                        <div class="btn_white">Available Time:{{$sitesetting->works_hrs}}</div>
                    </div>
                    <div class="row datepicker">
                        <div id="datepicker"></div>
                        <input class="reserv_input posDate" id="temp_date_start" type="hidden" name="posDate">
                    </div>

                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step2">Prev</a>
                        <a href="#step4" class="btn step-next step4">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at {{$sitesetting->phone}}
                        <span>© 2019 <a class="copy_power" href="https://codista.co/">Codista.</a> All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- End input date -->
            </div>
        </div>
        <!-- Popup Step 3 -->

        <!-- Popup Step 4 -->
        <div id="step4" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input time -->
                <div class="row step4_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Choose a Time</h3>
                            <div class="row">
                                <!-- 05:00 pm -->
                                <input type="radio" id="radio_time1" class="radio_time" name="radio_time" value="05:00 pm">
                                <label for="radio_time1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            05:00 pm
                                        </span>
                                    </span>
                                </label>
                                <!-- 05:00 pm -->

                                <!-- 06:00 pm -->
                                <input type="radio" id="radio_time2" class="radio_time" name="radio_time" value="06:00 pm">
                                <label for="radio_time2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            06:00 pm
                                        </span>
                                    </span>
                                </label>
                                <!-- 06:00 pm -->

                                <!-- 07:00 pm -->
                                <input type="radio" id="radio_time3" class="radio_time" name="radio_time" value="07:00 pm">
                                <label for="radio_time3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            07:00 pm
                                        </span>
                                    </span>
                                </label>
                                <!-- 07:00 pm -->

                                <!-- 08:00 pm -->
                                <input type="radio" id="radio_time4" class="radio_time" name="radio_time" value="08:00 pm">
                                <label for="radio_time4">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            08:00 pm
                                        </span>
                                    </span>
                                </label>
                                <!-- 08:00 pm -->

                                <!-- 09:00 pm -->
                                <input type="radio" id="radio_time5" class="radio_time" name="radio_time" value="09:00 pm">
                                <label for="radio_time5">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            09:00 pm
                                        </span>
                                    </span>
                                </label>
                                <!-- 09:00 pm -->

                                <!-- 10:00 pm -->
                                <input type="radio" id="radio_time6" class="radio_time" name="radio_time" value="10:00 pm">
                                <label for="radio_time6">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            10:00 pm
                                        </span>
                                    </span>
                                </label>
                                <!-- 10:00 pm -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step3" class="btn step3">Prev</a>
                        <a href="#step5" class="btn step-next step5">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at {{$sitesetting->phone}}
                        <span>© 2019 <a class="copy_power" href="https://codista.co/">Codista.</a> All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- end input time -->
            </div>
        </div>
        <!-- Popup Step 4 -->

        <!-- Popup Step 5 -->
        <div id="step5" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Almost There -->
                <div class="row step5_row almost_there">
                    <h3>Almost There!</h3>

                    <div class="row almost_select">
                        <div class="col-3">
                            <div class="almost_select_img radius_right">
                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/dentist_photo_4l.png" data-srcset="img/dentist_photo_4l.png, img/dentist_photo_4l@2x.png 2x" alt="DiDent">
                            </div>
                            <div class="almost_details">
                                <div class="almost_doc_position">Dentist</div>
                                <div class="almost_doc_name">Dr. Jennifer Wilson</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">Reason</div>
                                <div class="almost_reason">Check-up and Cleaning</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">Date & Time</div>
                                <div class="almost_date">April 19 at 05:00 pm</div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="row contact_information_row">
                        <h4>Contact Information</h4>
                        <p>Reach us with your questions. We are looking forward hearing form you!</p>

                        <div class="row form_row">
                            <div class="row row-15">
                                <div class="col-2">
                                    <div class="leable">Full Name</div>
                                    <input class="posName" type="text" name="yourphone">
                                </div>
                                <div class="col-2">
                                    <div class="leable">Phone</div>
                                    <input class="posTel" type="text" name="yourphone">
                                </div>
                            </div>

                        </div>

                        <div class="process"></div>
                        <div class="center btn_popup">
                            <a href="#step4" class="btn step4">Prev</a>
                            <button type="button" class="button reservation">Submit</button>
                        </div>
                    </div>
                    <!-- Contact Information -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at {{$sitesetting->phone}}
                        <span>© 2019 <a class="copy_power" href="https://codista.co/">Codista.</a> All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Almost There -->
            </div>
        </div>
        <!-- Popup Step 5 -->
    </form>
    <!-- JS -->
    <script src="{{url('/')}}/resources/them/js/compress/modernizr.custom.js"></script>
    <!-- Jquery -->
    <script src="{{url('/')}}/resources/them/js/compress/jquery-3.2.1.js"></script>
    <script src="{{url('/')}}/resources/them/js/compress/jquery-ui.js"></script>
    <script async src="{{url('/')}}/resources/them/js/compress/jquery.viewportchecker.js"></script>
    <!-- Sidebar menu -->
    <script src="{{url('/')}}/resources/them/js/compress/jquery.dlmenu.js"></script>
    <!-- Image lazy load -->
    <script src="{{url('/')}}/resources/them/js/compress/lozad.js"></script>
    <!-- Owl carousel -->
    <script async src="{{url('/')}}/resources/them/js/compress/owl.carousel.js"></script>
    <!-- Magnific-popup js -->
    <script async src="{{url('/')}}/resources/them/js/compress/jquery.magnific-popup.js"></script>
    <!-- After-Before Script -->
    <script async src="{{url('/')}}/resources/them/js/compress/jquery.event.move.js"></script>
    <script src="{{url('/')}}/resources/them/js/compress/jquery.twentytwenty.js"></script>
    <!-- Custom JS -->
    <script async src="{{url('/')}}/resources/them/js/custom.js"></script>
</body>

</html>

    <script type="text/javascript" src="{{url('/')}}/resources/them/toastr/toastr.min.js"></script>
    <link href="{{url('/')}}/resources/them/toastr/toastr.min.css" rel="stylesheet">
@if(session()->has('msg'))
<script>
$(document).ready(function(e) {
	toastr.info("{{ session()->get('msg') }}",  {timeOut: 5000})
});
</script>
@endif
