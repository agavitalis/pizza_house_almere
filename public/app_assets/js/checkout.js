$(document).ready(function () {

    $('#confirm_order').click(function (e) {
        // Stop acting like a button    
        e.preventDefault();

        let p_method = $('input[name="p_method"]:checked').val();

        if (p_method == "flutterwave_pay") {
            payWithRave();
        } else if (p_method == "paystack_pay") {
            payWithPaystack();
        } else if (p_method == "payment_on_delivery") {
            alert("You choose Pay on delivery")
            //registerTransaction('payment_on_delivery');
        }else{
            alert("Choose a payment method to proceed")
            window.location.href = "/prepare_payment";
        }


    });


    const API_publicKey = "FLWPUBK-e21c23b7bcd5b1861061991e4992391f-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: $('#t_email').val(),
            customer_firstname: $('#t_first_name').val(),
            customer_lastname: $('#t_last_name').val(),
            custom_description: "Original and affordable motor parts",
            custom_title: "Partzshop Payment",
            amount: $('#t_amount').val(),

            customer_phone: $('#t_phone').val(),
            country: "NG",
            currency: "NGN",
            txref: $('#t_track_number').val(),
            payment_method: "both",
            onclose: function () { },
            callback: function (response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a 	server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                    registerTransaction('flutterwave');
                } else {
                    alert('Transaction could not be completed');
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }

    function payWithPaystack() {
        var handler = PaystackPop.setup({
            key: 'pk_test_497061cac95adf87f3030c4b986972429b3d153e',
            email: $('#t_email').val(),
            amount: $('#t_amount').val(),
            currency: "NGN",
            ref: $('#t_track_number').val(), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [{
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: $('#t_phone').val()
                }]
            },
            callback: function (response) {
                // alert('success. transaction ref is ' + response.reference);
                registerTransaction('paystack');
            },
            onClose: function () {
                alert('window closed');
            }
        });
        handler.openIframe();
    }

    function registerTransaction(payment_method) {

        let action = "create_transaction";
        $.ajax({
            type: 'post',
            url: '/user_transaction',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': action,
                'payment_method': payment_method,
            },
            success: function (data) {

                if (data.message == "11") {
                    window.location.href = "/user_print_invoice";
                }

            }

        })

    }

});
