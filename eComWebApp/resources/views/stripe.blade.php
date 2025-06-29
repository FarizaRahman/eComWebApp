<!DOCTYPE html>
<html>

<head>
    <title>Stripe Payment Gateway Integration</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Send Payment using Stripe Gateway</h1>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                    <div class="panel-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                {{ Session::get('success') }}
                            </div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-danger text-center">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                        <form id="payment-form" method="POST" action="{{ route('stripe.post') }}">
                            @csrf

                            <div class="form-group">
                                <label for="card-holder-name">Name on Card</label>
                                <input id="card-holder-name" type="text" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="card-element">Card Details</label>
                                <div id="card-element" class="form-control"></div>
                                <div id="card-errors" class="text-danger" role="alert"></div>
                            </div>

                            <input type="hidden" name="fullname" value="{{ $fullname }}">
                            <input type="hidden" name="phone" value="{{ $phone }}">
                            <input type="hidden" name="address" value="{{ $address }}">
                            <input type="hidden" name="bill" value="{{ $bill }}">

                            <button id="card-button" class="btn btn-primary btn-block"
                                data-secret="{{ $intent->client_secret }}">
                                Pay Now (${{ number_format($bill, 2) }})
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const stripe = Stripe("{{ config('services.stripe.key') }}");
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                billing_details: {
                    name: document.getElementById('card-holder-name').value
                }
            }
            );

            if (error) {
                document.getElementById('card-errors').textContent = error.message;
            } else {
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'payment_method');
                hiddenInput.setAttribute('value', paymentMethod.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
    </script>
</body>

</html>