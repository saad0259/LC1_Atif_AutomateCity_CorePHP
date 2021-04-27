<?php
    define('page_title',"Dashboard");
    include('../includes/functions.php');
    include('includes/header.php');

?>



<div class="main_content_iner default_main_contaner_iner">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_30 f_w_700 text_color_6" >Sales Board</h3>
                        
                    </div>
                    <a href="#" class="btn_1 ">Create Report</a>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Daily Sales</h3>
                            </div>
                            <div class="header_more_tool">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div id="chart-currently"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Summary</h3>
                            </div>
                            <div class="header_more_tool">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body mt_30">
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="25"></span>
                        </div>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="75"></span>
                        </div>
                        <div id="bar3" class="barfiller mb-0">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="34"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Total order</h3>
                            </div>
                            <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">This week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div  class="white_card_body d-flex align-items-center" style="height:140px" >
                        <h4 class="f_w_900 f_s_60 mb-0 mr-2" >356</h4>
                       <div class="w-100" style="height:100px"  >
                        <canvas width="100%" id="page_views" ></canvas>
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 card_height_100 ">
                <div class="white_card mb_20 default_border_1px">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Revenue</h3>
                            </div>
                            <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">This Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Last Week</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Last Month</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body" style="height: 286px;">
                        <canvas  id="bar" ></canvas>
                    </div>
                </div>
                <div class="white_card mb_20 default_border_1px">
                    <div class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                        <div class="renew_report_left">
                            <h4 class="f_s_19 f_w_600 color_theme2 mb-0" >Download your earnings report</h4>
                            <p class="color_gray2 f_s_12 f_w_600" >There are many variations of passages.</p>
                        </div>
                        <div class="create_report_btn">
                            <a href="#" class="btn_1 mt-1 mb-1">Create Report</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px mb_20 ">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Market valus</h3>
                            </div>
                            <div class="single_wrap_input">
                                <select class="nice_Select2 wide" name="" id="">
                                    <option value="1">year</option>
                                    <option value="1">month</option>
                                    <option value="1">day</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body QA_section">
                        <div class="radar-chart">
                            <div id="marketchart"></div>
                          </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px  mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Transaction</h3>
                            </div>
                            <div class="header_more_tool">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="table-responsive">
                            <table class="table bayer_table m-0">
                                <tbody>
                                  <tr>
                                    <td >
                                        <img class="byder_thumb wh_56" src="admin/img/Payment/1.png" alt="">
                                    </td>
                                    <td>
                                        <div class="payment_gatway">
                                            <h5 class="byer_name  f_s_16 f_w_700 color_theme">Electricity Bill</h5>
                                            <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment_gatway text-right">
                                            <h5 class="byer_name  f_s_16 f_w_700 text_color_4">- $ 1254.00</h5>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td >
                                        <img class="byder_thumb wh_56" src="admin/img/Payment/1.png" alt="">
                                    </td>
                                    <td>
                                        <div class="payment_gatway">
                                            <h5 class="byer_name  f_s_16 f_w_700 color_theme">Showroom Rent</h5>
                                            <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment_gatway text-right">
                                            <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00</h5>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td >
                                        <img class="byder_thumb wh_56" src="admin/img/Payment/1.png" alt="">
                                    </td>
                                    <td>
                                        <div class="payment_gatway">
                                            <h5 class="byer_name  f_s_16 f_w_700 color_theme">Iron Costing</h5>
                                            <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment_gatway text-right">
                                            <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00</h5>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td >
                                        <img class="byder_thumb wh_56" src="admin/img/Payment/1.png" alt="">
                                    </td>
                                    <td>
                                        <div class="payment_gatway">
                                            <h5 class="byer_name  f_s_16 f_w_700 color_theme">Packeging Cost</h5>
                                            <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment_gatway text-right">
                                            <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00</h5>
                                        </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px  mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">News & Update</h3>
                            </div>
                            <div class="single_wrap_input">
                                <select class="nice_Select2 wide" name="" id="">
                                    <option value="1">Today</option>
                                    <option value="1">Tomorrow</option>
                                    <option value="1">Yesterday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="single_update_news">
                            <h5 class="byer_name  f_s_16 f_w_600 color_theme2">36% off For pixel lights Couslations Types.</h5>
                            <p class="color_gray f_s_12 f_w_700 ">Sorem Kpsum is simply of the printing..</p>
                        </div>
                        <div class="single_update_news">
                            <h5 class="byer_name  f_s_16 f_w_600 color_theme2">We are produce new product this</h5>
                            <p class="color_gray f_s_12 f_w_700 ">Gorem Rpsum is simply text of the printing...</p>
                        </div>
                        <div class="single_update_news">
                            <h5 class="byer_name  f_s_16 f_w_600 color_theme2">50% off For COVID Couslations Types.</h5>
                            <p class="color_gray f_s_12 f_w_700 ">EoremHpsum is simply dummy...</p>
                        </div>
                        <div class="load_more_button text-center mt_30">
                            <a class="theme_text_btn d-flex align-items-center justify-content-center"  href="#">Load more <i class="ti-angle-down f_s_12 ml-2"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_card card_height_100 default_border_1px  mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Account Info</h3>
                            </div>
                            <div class="header_more_tool">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="monthly_plan_wraper">
                            <div class="single_plan d-flex align-items-center justify-content-between">
                                <h5 class="color_theme2 f_s_14 f_w_700 mb-0" >Monthly Plan</h5>
                                <span class="color_gray2 f_s_16 f_w_700" >$25</span>
                            </div>
                            <div class="single_plan d-flex align-items-center justify-content-between">
                                <h5 class="color_theme2 f_s_14 f_w_700 mb-0" >Taxes</h5>
                                <span class="color_gray2 f_s_16 f_w_700" >$14</span>
                            </div>
                            <div class="single_plan d-flex align-items-start justify-content-between">
                                <div>
                                    <h5 class="color_theme2 f_s_14 f_w_700 mb-0" >Extera</h5>
                                    <p class="f_s_13 f_w_700" >Netflix and other bills in this
                                        month.</p>
                                </div>
                                <span class="color_gray2 f_s_16 f_w_700" >$25</span>
                            </div>
                            <div class="total_blance mt_20 mb_10">
                                <span class="f_s_13 f_w_700 color_gray ">Total balance</span>
                                <div class="total_blance_inner d-flex align-items-center flex-wrap justify-content-between">
                                    <div>
                                        <span class="f_s_40 f_w_700 color_text_3 d-block">$3650</span>
                                        <a class="badge_btn_5" href="#">+1235</a>
                                    </div>
                                    <div>
                                        <div><a class="badge_btn_6 mb_15" href="#">Today</a></div>
                                        <div><a class="badge_btn_7" href="#">This week</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white_card card_height_100 mb_20 default_border_1px">
                    <div class="date_picker_wrapper shadow_none">
                        <div class="default-datepicker">
                            <div class="datepicker-here" data-language='en'></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="white_card card_height_100 default_border_1px  mb_20">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Top Global Sales</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body pb-0">
                        <div id="world-map-markers" class="dashboard_w_map" ></div>
                        <div class="row justify-content-center mt_30">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single_progressbar">
                                            <h6 class="f_s_14 f_w_400" >USA</h6>
                                            <div id="bar4" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="81"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_progressbar">
                                            <h6>Australia</h6>
                                            <div id="bar5" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="58"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_progressbar">
                                            <h6>Brazil</h6>
                                            <div id="bar6" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="42"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single_progressbar">
                                            <h6>Latvia</h6>
                                            <div id="bar7" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="55"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

    include('includes/footer.php');

?>