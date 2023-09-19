@extends('layouts.app')


@section('content')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Stripe Payment') }}
    </h2>
    <h4>manage sub</h4>

    <form action="{{route('sub')}}" method="post">
        {{csrf_field()}}
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{env('STRIPE_KEY')}}"
            data-amount="999"
            data-name="Demo Site"
            data-description="Cashier"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-label="Subscribe Monthly"
            data-panel-label="Subscribe"
        >

        </script>


    </form>
@endsection
