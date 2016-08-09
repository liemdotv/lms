<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://edunetjsc.vn
 * @since      1.0.0
 *
 * @package    Lms
 * @subpackage Lms/admin/partials
 */
function lms_admin_display($post){
    ?>
 <div class="meta-row">
            <table>
                <tbody>
                <tr>
                    <th>Property Type</th>
                    <td>
                        <input type="checkbox" id="pro-hdd" name="pro-hdd">HDD
                        <input type="checkbox" id="pro-private">Private
                        <input type="checkbox" id="pro-co">Commercial
                    </td>
                <tr>
                    <th>Min Loan Amount:</th>
                    <td><input type="text" id="min-loan-amount" name="min-loan-amount"></td>

                </tr>
                <tr>
                    <th>Max Loan Amount:</th>
                    <td><input type="text" id="max-loan-amount"></td>
                </tr>
                <tr>
                    <th>Min Loan Tenure:</th>
                    <td> <input type="text" id="min-loan-tenure"></td>
                </tr>
                <tr>
                    <th>Max Loan Tenure:</th>
                    <td><input type="text" id="max-loan-tenure"></td>
                </tr>
                <tr>
                    <th>
                        Building Status:
                    </th>
                    <td>
                        <input type="checkbox" id="building-stt-under-construction"> Under Construction
                        <input type="checkbox" id="building-stt-completed">Completed
                </tr>
                <tr>
                    <th>
                        Rate Package:
                    </th>
                    <td>
                        <input type="checkbox" id="rate-package-all">ALL
                        <input type="checkbox" id="rate-package-fixed">Fixed
                        <input type="checkbox" id="rate-package-floating">FLOATING
                    </td>
                </tr>
                <tr>
                    <th>
                        Lock In?:
                    </th>
                    <td>
                        <input type="checkbox" id="lock-in-yes">YES
                        <input type="checkbox" id="lock-in-no">NO

                    </td>
                </tr>
                <tr>
                    <th>
                        Intended Purchase Time Frame:
                    </th>
                    <td>
                        <input type="checkbox" id="IPTF-otp-in-hand">  OTP in hand
                        <input type="checkbox" id="IPTF-within-1-month">Within 1 month
                        <input type="checkbox" id="IPTF-later-than-1-month"> Later than 1 month
                    </td>
                </tr>

                </tbody>
            </table>
            <div class="btn-submit" id="save-data">Save</div>
        </div>
</div
    <?php
}


