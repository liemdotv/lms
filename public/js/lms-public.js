//(function( $ ) {
//	$('input[type="range"]').rangeslider({
//		polyfill : false,
//		onInit : function() {
//			this.output = $( '<div class="range-output" />' ).insertAfter( this.$range ).html( this.$element.val() );
//		},
//		onSlide : function( position, value ) {
//			this.output.html( value );
//		}
//	});
//
//})( jQuery );
jQuery(document).ready(function($){
	jQuery('input[type="range"]').rangeslider({
		polyfill : false,
		onInit : function() {
			this.output = jQuery( '<div class="range-output" />' ).insertAfter( this.$range ).html( this.$element.val() );
		},
		onSlide : function( position, value ) {
			this.output.html( value );
		}
	});

});

$pro_val="";
$info_loan_amt = 0;
$info_loan_tenure = 0;
$info_buc_type = "";
$rate_package = "";
$info_lock_in = "";
$radio_intended_purchase_time_frame = "";

function btn_next_table1(){
	jQuery('.table1').hide();
	jQuery('.table2').show();
	if (jQuery("#pro_type_1").prop("checked")){
		$pro_val = "HDB";
	}else if(jQuery("#pro_type_2").prop("checked")){
		$pro_val = " Private";
	}else{
		$pro_val = "Commercial";
	}
	jQuery('#info_prop_type').html($pro_val);


	$info_loan_amt = jQuery('#slider_loan_amt').val();
	$info_loan_tenure = jQuery('#slider_loan_tenure').val();

	$info_loan_amt_string = jQuery('#slider_loan_amt').val().toString() + "S$";
	$info_loan_tenure_string = jQuery('#slider_loan_tenure').val().toString() + " Years" ;


	if (jQuery("#radio_buc_type1").prop("checked")){
		$info_buc_type = "Under Construction";
	} else{
		$info_buc_type = "Completed";
	}

	jQuery('#rangevalue_money').html($info_loan_amt_string);
	jQuery('#rangevalue').html($info_loan_tenure_string);
	jQuery('#info_buc_type').html( $info_buc_type);
}
function btn_next_table2(){
	jQuery('.table2').hide();
	jQuery('.table3').show();
	if(jQuery("#radio_rate_package_1").prop("checked")){
		$rate_package = "all";
	} else if(jQuery("#radio_rate_package_2").prop("checked")){
		$rate_package = " Fixed";
	}else{
		$rate_package = "Floating";
	}
	if(jQuery("#radio_lock_in1").prop("checked")){
		$info_lock_in = 'Yes';
	}else{
		$info_lock_in = "No";
	}

	if((jQuery("#radio_intended_purchase_time_frame1").prop("checked"))){
		$radio_intended_purchase_time_frame = "OTP in hand";
	}else if(jQuery('#radio_intended_purchase_time_frame2').prop("checked")){
		$radio_intended_purchase_time_frame = "Within 1 month";
	}
	else{
		$radio_intended_purchase_time_frame = "Later than 1 month";
	}


	jQuery('#rate_package').html( $rate_package);
	jQuery('#info_lock_in').html( $info_lock_in);
	jQuery('#intended-purchase-time-frame').html($radio_intended_purchase_time_frame);


	//jQuery.ajax({
	//    url: "/wp-admin/admin-ajax.php",
	//    type: "get",
	//    dataType: "text",
	//    data: {
	//        action: 'get_info_by_id',
	//        tukhoa: $pro_val
	//    },
	//    success: function(data){
	//        jQuery(this).html(data);
	//    }
	//});

	console.log($pro_val);
	console.log($info_loan_amt);
	console.log($info_loan_tenure);
	console.log($info_buc_type);
	console.log($rate_package);
	console.log($info_lock_in);
}
function btn_back_table2(){
	jQuery('.table2').hide();
	jQuery('.table3').hide();
	jQuery('.table1').show();
}
function btn_back_table3() {
	jQuery('.table1').hide();
	jQuery('.table3').hide();
	jQuery('.table2').show();
}