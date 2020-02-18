@extends('layout.master')
@section('content')
<?php
foreach($site_info as $site_data)
?>
  <!--  Main start -->

  <main>
            <!-- Contact -->
            <div class="container">
                <div class="row contact_row">
                    <!-- Get in Touch -->
                    <div class="row contact_row_title">
                        <h1>Get in Touch</h1>
                        <div class="contact_row_soc">
                            <a href="{{$site_data->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                    <!-- Get in Touch -->

                    <!-- Leave a Reply -->
                    <h4>Leave a Reply</h4>
                    <div class="row form_row">
                        <div class="row message_row">
                        <form class="col-md-12" action="#" id="myform" >
                        <input type="hidden" name="mass_type" value="2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="leable">Message</div>
                            <textarea class="posText" name="msg" id="message"></textarea>
                        </div>
                        <div class="row row-15">
                            <div class="col-3">
                                <div class="leable">Full Name</div>
                                <input class="posName" type="text" name="title" id="name">
                            </div>
                            <div class="col-3">
                                <div class="leable">Email</div>
                                <input class="posEmail" type="email" name="email" id="email">
                            </div>
                            <div class="col-3">
                                <div class="leable">Phone</div>
                                <input class="posTel" type="text" name="phone" id="phone">
                            </div>
                        </div>
                    </div>
                    <!-- Leave a Reply -->

                    <!-- Send button -->
                    <div class="contact_process">
                        <div class="infobox infobox_warning" style="display: none;">
                            <div class="close_button"><i class="fa fa-times"></i></div>
                            <i class="fa fa-exclamation-triangle"></i>
                            <b>Warning</b>
                            <span>
                                <ul>
                                <li>Enter your Name</li><li>Enter your Phone</li><li>Enter your Email</li><li>Enter your message</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="center">
                        <button type="button" class="button send_txt">Send a Message</button>
                    </div>
                    <!-- Send button -->
</form>
                    <!-- Open Hours -->
                    <div class="row open_hours_contact">
                        <h4>Open Hours</h4>
                        <div class="row open_hours_row">
                            <div class="col-3 open_hours_l">
                                <div class="day">Saterday-thursday</div>
                                <div class="row open_hours_block">
                                    <div class="hours">
                                        05:00
                                        <span>pm</span>
                                    </div>
                                    <div class="minute">
                                        - 11:00
                                        <span>pm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-3 open_hours_c">
                                <div class="day">friday</div>
                                <div class="row open_hours_block">
                                    <div class="hours">
                                        Closed
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Open Hours -->
                </div>
            </div>
            <!-- Contact -->
        </main>
        <!--  Main end -->
    </div>
    <!-- Wrapper End -->

@endsection

