<button id="rzp-button1" style="display:none">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{$response['razorpayId']}}", // Enter the Key ID generated from the Dashboard
        "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "{{$response['name']}}",
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        "order_id": "{{$response['orderId']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "callback_url":"{{route('success')}}",
        "handler": function (response){
            alert(response.razorpay_payment_id);
            //alert(response.razorpay_order_id);
            //alert(response.razorpay_signature)
            console.log(response)
        },
        "prefill": {
            "name": "{{$response['name']}}",
            "email": "{{$response['email']}}",
            "contact": "{{$response['phone']}}"
        },
        "notes": {
            "address": "{{$response['address']}}"
        },
        "theme": {
            "color": "#3399cc"
        }
    };

  

    window.onload = function() {
        document.getElementById('rzp-button1').click();
    }

    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }

    rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
    
    });

    rzp1.on('payment.authorized', function(response){

        alert(response);
        console.log('response',response);return;

    });


</script>