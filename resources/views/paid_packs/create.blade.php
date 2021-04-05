@extends('layouts.guest')

@section('content')
    <section class="text-gray-600 min-h-screen body-font pt-32">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="w-full lg:w-8/12 px-4 mt-4">
                    <form id="form" method="POST" action="{{ route('paid.store') }}">
                        @csrf
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0">
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-gray-800 text-xl font-bold">Acheter le {{ $pack->name }}</h6>
                                    {{-- <button class="bg-yellow-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit" >
                                        Acheter
                                    </button> --}}
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <h6 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase" >
                                    Information d'achat
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                htmlFor="grid-password" >
                                                Nom utilisateur
                                            </label>
                                            <input type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" value="{{ Auth::user()->name }}" disabled/>
                                        </div>
                                    </div>
                                    <input type="hidden" name="pack_id" value="{{ $pack->id }}">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                htmlFor="grid-password" >
                                                Adresse Email
                                            </label>
                                            <input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                value="{{ Auth::user()->email }}" disabled/>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-gray-400" />

                                <h6 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase" >
                                    Achat avec PayPal
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div id="paypal-button-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <hr class="mt-6 border-b-1 border-gray-400" />

                    <h6 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase" >
                        Achat avec Perfect Money
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <form action="https://perfectmoney.is/api/step1.asp" method="POST">
                                <input type="hidden" name="PAYEE_ACCOUNT" value="U28569114">
                                <input type="hidden" name="PAYEE_NAME" value="PETROGRATE">

                                <input class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" type="number" name="PAYMENT_AMOUNT" value="{{ $pack->value }}" placeholder="saisissez le montant de votre pack">

                                <input type="hidden" name="PAYMENT_UNITS" value="USD">

                                <input type="hidden" name="STATUS_URL" value="https://www.myshop.com/cgi-bin/xact.cgi">

                                <input type="hidden" name="PAYMENT_URL" value="{{ route('perfect_success', ['pack' => $pack]) }}">

                                <input type="hidden" name="NOPAYMENT_URL" value="{{ route('perfect_fail', ['pack' => $pack]) }}">

                                <input type="hidden" name="BAGGAGE_FIELDS" value="ORDER_NUM CUST_NUM">

                                <div class="pt-4">
                                    <button type="submit" class="bg-yellow-500 text-white active:bg-pink-600 font-bold text-xl w-full py-3 rounded-sm shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" name="PAYMENT_METHOD">Payer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                        <div class="px-6">
                            <div class="p-4 w-full">
                                <div class="h-full p-6 rounded-lg border-2 border-yellow-300 flex flex-col relative overflow-hidden">
                                    <div class="flex justify-center">
                                        <h2 id="description" class="text-sm tracking-widest title-font mb-1 font-medium uppercase">{{ $pack->name }}</h2>
                                    </div>

                                    <div class="flex justify-center">
                                        <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                            <span class="text-lg ml-1 font-normal text-gray-500">$</span>
                                            <span id="price">{{ $pack->value }}</span>
                                        </h1>
                                    </div>

                                    <p class="leading-relaxed text-center text-base pt-6 pb-4">
                                        {{ $pack->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials._footer')
    {{-- <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            env: 'sandbox',
            style: {
                size: 'large',
                color: 'gold',
                shape: 'pill',
            },
            // Set up the payment:
            // 1. Add a payment callback
            payment: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/api/create-payment')
                    .then(function (res) {
                        // 3. Return res.id from the response
                        return res.id;
                    });
            },
            // Execute the payment
            // 1. Add an onAuthorize callback
            onAuthorize: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/api/execute-payment', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                }).then(function (res) {
                    // Show the buyer a confirmation message.
                });
            }
        }, '#paypal-button')
    </script> --}}
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=Ad93tO9iPxu8amzRlTc6Zu5IR78v_0JfyeCqwBYi4vxKCYNTbt2Z3guhYTm0iFNQ0370BBLlgfKOgqxX"></script>
    <script>
        // paypal.Buttons({
        //     createOrder: function(data, actions) {
        //         // This function sets up the details of the transaction, including the amount and line item details.
        //         return actions.order.create({
        //             purchase_units: [{
        //             amount: {
        //                 value: '0.01'
        //             }
        //             }]
        //         });
        //     }
        // }).render('#paypal-button-container');

        let form = document.getElementById('form');

        function initPayPalButton () {
            let orderDescription = '';
            if (orderDescription === '') {
                orderDescription = 'Item';
            }
            let shipping = 0;
            let packDesc = document.getElementById('description')
            let packValue = document.getElementById('price')
            paypal.Buttons({
                createOrder: function(data, actions) {
                    let description = packDesc.innerText
                    let price = parseFloat(packValue.innerText)
                    let tax = (0 === 0) ? 0 : (price * (parseFloat(0) / 100));
                    let quantity = 1;

                    tax *= quantity;
                    tax = Math.round(tax * 100) / 100;
                    let priceTotal = quantity * price + parseFloat(shipping) + tax;
                    priceTotal = Math.round(priceTotal * 100) / 100;
                    let itemTotalValue = Math.round((price * quantity) * 100) / 100;

                    // window.alert(orderDescription)

                    return actions.order.create({
                        purchase_units: [{
                            description: orderDescription,
                            amount: {
                                currency_code: 'USD',
                                value: priceTotal,
                        },]
                    },);
                },
                onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                    return actions.order.capture().then(function(details) {
                        // This function shows a transaction success message to your buyer.
                        alert('Transaction réalisée par ' + details.payer.name.given_name);

                        form.submit();
                    });
                }
            }).render('#paypal-button-container');
            //This function displays Smart Payment Buttons on your web page.
        }

        initPayPalButton()
    </script> --}}

    <script src="https://www.paypal.com/sdk/js?client-id=AX1kxt2iDGcT-w-T4SkumfkQu9dyUklWa3ks1whqVAjuWFzKQCXtIzazOo7ssw40dNSnUtWBp8p-M3RM&currency=USD" data-sdk-integration-source="button-factory"></script>
    <script>
        let form = document.getElementById('form');
    function initPayPalButton() {

        let packValue = document.getElementById('price')
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'pay',
          
        },

        createOrder: function(data, actions) {
            let price = parseFloat(packValue.innerText)
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":price}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');

            form.submit();
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
@endsection
