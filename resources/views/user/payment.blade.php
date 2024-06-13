<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Payment</h2>
    <button id="pay-button" class="btn btn-primary">Pay Now</button>
</div>
<script>
    document.getElementById('pay-button').onclick = function () {
        snap.pay('{{ $snapToken }}', {
            onSuccess: function (result) {
                alert("Payment Success");
                window.location.href = "{{ route('order.success', $order->id) }}";
            },
            onPending: function (result) {
                alert("Waiting for Payment");
                window.location.href = "{{ route('order.pending', $order->id) }}";
            },
            onError: function (result) {
                alert("Payment Failed");
                window.location.href = "{{ route('order.failed', $order->id) }}";
            }
        });
    };
</script>
</body>
</html>
