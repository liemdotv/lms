<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://edunetjsc.vn
 * @since      1.0.0
 *
 * @package    Lms
 * @subpackage Lms/public/partials
 */

?>

<div id="wap_lms row">
    <div class="col-lg-4">
        <ul class="step row">
            <li class="col-lg-12">
                <span class="h_step">1</span>
                <span class="c_step">General Info</span>
            </li>
            <li class="col-lg-12">
                <span class="h_step">2</span>
                <span class="c_step">Preference</span>
            </li>
            <li class="col-lg-12">
                <span class="h_step">3</span>
                <span class="c_step">Property Loans</span>
            </li>
            <li class="col-lg-12">
                <span class="h_step">4</span>
                <span class="c_step">Enquire</span>
            </li>
        </ul>


        <div class="selected-info">
            <table>
                <tbody>
                <tr>
                    <td class="h_info">Property Type:</td>
                    <td class="c_info" id="info_prop_type">-</td>
                </tr>

                <tr>
                    <td class="h_info">Loan Amount:</td>
                    <td class="c_info" id="rangevalue_money">1000000 S$</td>
                </tr>

                <tr>
                    <td class="h_info">Loan Tenure:</td>
                    <td class="c_info" id="rangevalue">25 Years</td>
                </tr>

                <tr>
                    <td class="h_info">Building Status:</td>
                    <td class="c_info" id="info_buc_type">-</td>
                </tr>

                <tr>
                    <td class="h_info">Rate Package:</td>
                    <td class="c_info" id="rate_package">-</td>
                </tr>

                <tr>
                    <td class="h_info">Lock In?:</td>
                    <td class="c_info" id="info_lock_in">-</td>
                </tr>

                <tr>
                    <td class="h_info">Intended Purchase Time <br />Frame</td>
                    <td class="c_info" id="intended-purchase-time-frame">-</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="new-loan-wizard col-lg-8">
        <div class="table1">
            <div class="tb-title">General Info</div>
            <div class="div-radio" id="pro_type_1_clicker">
                <input type="radio" id="pro_type_1" value="1" name="pro-type" checked> <span>HDD</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="pro-type-2" value="2"  name="pro-type"> <span>Private</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="pro-type-3" value="3"  name="pro-type"> <span>Commercial</span>
            </div>
            <div>
                <p class="decription">Please select the type of your property.</p>
            </div>


            <div class="tb-title">Loan Amount</div>
            <div>
                <input class="input_change" type="text" id="slider_loan_amt" value="1000000 S$"><input type="button" value="change">
                <input class="rangeslider rangeslider--horizontal" id="loan_amt"  type="range"  onchange="slider_loan_amt.value=value" min="50000" max="8000000" step="10000" value="1000000">
                <output id="output_loan_amt"></output>
            </div>
            <div>
                <p class="decription">Please select the type of your property.</p>
            </div>

            <div class="tb-title">Loan Tenure</div>
            <div>
                <input class="input_change" type="text" id="slider_loan_tenure" value="25"><input type="button" value="change">
                <input class="rangeslider rangeslider--horizontal" id="loan_tenure"  type="range"  onchange="slider_loan_tenure.value=value" min="0" max="50" step="1" value="25">
            </div>
            <div>
                <p class="decription">Please select the number of years of loan for the property.</p>
            </div>
            <!---->
            <div class="tb-title">Building Under Construction?</div>
            <div class="div-radio" id="radio_buc_type_clicker">
                <input type="radio" id="radio_buc_type1" value="1" name="buc_type" checked> <span>Under Construction</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="radio_buc_type2" value="2"  name="buc_type"> <span>Completed</span>
            </div>
            <div>
                <p class="decription">	 Under Construction Completed
                    Please select "Under Construction" if the property has yet to obtain Temporary Occupation Permit (TOP). And "Completed" if the Property has obtained TOP.</p>
            </div>

            <div class="btn_lms">
                <input class="button_lms" type="button" value="Next" id="btn_next-table1" onclick="btn_next_table1()">
            </div>
        </div>
        <!--table2-->
        <div class="table2">
            <div class="tb-title">Rate Package</div>
            <div class="div-radio" id="radio_rate_clicker">
                <input type="radio" id="radio_rate_package_1" value="1" name="rate_package" checked> <span>ALL</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="radio_rate_package_2" value="2"  name="rate_package"> <span>FIXED</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="radio_rate_package_3" value="3"  name="rate_package"> <span>FLOATING</span>
            </div>
            <div>
                <p class="decription">Choose your preferred home loan package. Fixed or Floating. Floating includes SOR or Sibor and Variable rate packages. Or just show them all.</p>
            </div>
            <!---->
            <div class="tb-title">Lock In?</div>
            <div class="div-radio" id="radio_lock_in_clicker">
                <input type="radio" id="radio_lock_in1" value="1" name="lock_in" checked> <span>Yes</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="radio_lock_in2" value="2"  name="lock_in"> <span>No</span>
            </div>
            <div>
                <p class="decription">Choose your preferred home loan package. Fixed or Floating. Floating includes SOR or Sibor and Variable rate packages. Or just show them all.</p>
            </div>
            <!---->
            <div class="tb-title">Intended Purchase Time Frame</div>
            <div class="div-radio" id="radio_intended_purchase_time_frame_clicker">
                <input type="radio" id="radio_intended_purchase_time_frame1" value="1" name="intended_purchase_time_frame" checked> <span>OTP in hand</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="radio_intended_purchase_time_frame2" value="2"  name="intended_purchase_time_frame"> <span>Within 1 month</span>
            </div>
            <div class="div-radio">
                <input type="radio" id="radio_intended_purchase_time_frame3" value="3"  name="intended_purchase_time_frame"> <span>Later than 1 month</span>
            </div>
            <div>
                <p class="decription">Choose your preferred home loan package. Fixed or Floating. Floating includes SOR or Sibor and Variable rate packages. Or just show them all.</p>
            </div>

            <div class="btn_lms">
                <input class="button_lms" type="button" value="Back" id="btn_back_table2" onclick="btn_back_table2()">
                <input class="button_lms" type="button" value="Next" id="btn_next_table2" onclick="btn_next_table2()">
            </div>
        </div>
        <!--table3-->
        <div class="table3">
            <p>
                Below are the available loan packages according to your preference.
                To enquire, please select at least 1 package, and click the "Enquire these Packages" button.
            </p>
            <p>Banker from the respective banks will get in touch with you within 1 working day, but often faster.</p>
            <div class="btn_lms">
                <input class="button_lms" type="button" value="Back" id="btn_back_table2" onclick="btn_back_table3()">
            </div>
        </div>
    </div>

</div>
