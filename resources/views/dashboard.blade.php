<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <form action="/seller/subscribe" method="POST" id="subscribe-form">
            <div class="form-group">
                <div class="row">
                    @foreach($plans as $plan)
                    <div class="col-md-4">
                        <div class="subscription-option">
                            <input type="radio" id="plan-silver" name="plan" value='{{$plan->id}}'>
                            <label for="plan-silver">
                                <span class="plan-price">{{$plan->currency}}{{$plan->amount/100}}<small> /{{$plan->interval}}</small></span>
                                <span class="plan-name">{{$plan->product->name}}</span>
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <input id="card-holder-name" type="text"><label for="card-holder-name">Card Holder Name</label>
            @csrf
            <div class="form-row">
                <label for="card-element">Credit or debit card</label>
                <div id="card-element" class="form-control">
                </div>
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <div class="stripe-errors"></div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </div>
            @endif
            <div class="form-group text-center">
                <button  id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-lg btn-success btn-block">SUBMIT</button>
            </div>
        </form>
    </div>
</x-app-layout>
