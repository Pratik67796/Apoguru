@extends('user.layouts.learnerProfile')
@section('title', 'Create a course')
@section('content')
<style>
    .error-message {
        color: red;
    }

    #upload-videos.loading::after {
        content: "";
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid #fff;
        border-top: 2px solid #007bff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-left: 5px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .progress-container {
        margin-top: 20px;
    }

    .progress-bar {
        width: 0%;
        height: 20px;
        background-color: #007bff;
        border-radius: 5px;
        transition: width 0.3s;
    }

    .text-muted {
        color: red !important;
        margin-bottom: 10px;
    }
    .add-supplementary-file-label{
        padding: 5px;
        border: 1px solid #000;
        border-radius: 13px;
        cursor: pointer;
        margin-top: 5px;
        margin-bottom: 20px;
    }
    .nice-select-scrollable .list {
        max-height: 200px; /* Adjust the value as needed */
        overflow-y: auto;
    }
    .payment{
        cursor: pointer;
    }

</style>

@include('user.profile.i-profile.create-course-forms.course-information-form')
@include('user.profile.i-profile.create-course-forms.add-principle-form')

@include('user.profile.i-profile.listings.principle-topics')


@include('user.profile.i-profile.create-course-forms.course-resources-form')

@include('user.profile.i-profile.listings.topic-videos')

@include('user.profile.i-profile.modals.published')

{{-- Course Publish Modal END Here --}}

@include('user.profile.i-profile.modals.add-supplementary')

@include('user.profile.i-profile.modals.add-question-answer')





<div class="mt-4 px-4 pt-4 d-flex align-items-center justify-content-between flex-wrap" style="background-color: #19875445;border-radius: 20px;">
    <button type="button" class="btn btn-outline-primary mb-4 me-2" data-bs-toggle="modal" data-bs-target="#course-modal">
        Publish 10 USD
    </button>
    <a class="btn btn-outline-primary mb-4 me-2">Create Course Certificate</a>
    <a class="btn btn-outline-primary mb-4">Download my Flyer</a>
</div>

{{-- Lecture Video Modal for add Question and answer file End here --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>

<script>
    var resultFrom;
    var resultTo;
    var searchValue;

    $("#actual-sell-price").keyup(function() {
        var inputValue = $(this).val();
        var numericValue = inputValue.replace(/[^0-9.]/g, '');
        $(this).val(numericValue);

        // Check if the input value is not numeric
        if (inputValue !== numericValue) {
            $('#actual-sell-price-error').text('Please enter only numeric values.');
            return;
        } else {
            $('#actual-sell-price-error').text('');
        }
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        resultFrom = geoplugin_currencyCode();
        window.id = resultFrom;
        console.log(window.id);
        resultTo = "USD";
        searchValue = $('#actual-sell-price').val();
        fetch(`${api}`).then(currency => {
            return currency.json();
        }).then(displayResults);
    });

    function displayResults(currency) {
        let fromRate = currency.rates[resultFrom];
        let toRate = currency.rates[resultTo];
        // console.log(((toRate / fromRate) * searchValue).toFixed(2));
        $('#usd-price-information').val(((toRate / fromRate) * searchValue).toFixed(2));
    }

    var resultFrom_1;
    var resultTo_1;
    var searchValue_1;

    $("#sell-price-type-option").keyup(function() {
        var inputValue = $(this).val();
        var numericValue = inputValue.replace(/[^0-9.]/g, '');
        $(this).val(numericValue);

        // Check if the input value is not numeric
        if (inputValue !== numericValue) {
            $('#sell-price-type-option-error').text('Please enter only numeric values.');
            return;
        } else {
            $('#sell-price-type-option-error').text('');
        }
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        resultFrom_1 = geoplugin_currencyCode();
        resultTo_1 = "USD";
        searchValue_1 = $('#sell-price-type-option').val();
        fetch(`${api}`).then(currency => {
            return currency.json();
        }).then(displayResults_sellprice);
    });

    function displayResults_sellprice(currency) {
        let fromRate_1 = currency.rates[resultFrom_1];
        let toRate_1 = currency.rates[resultTo_1];
        // console.log(((toRate_1 / fromRate_1) * searchValue).toFixed(2));
        $('#sell-price-option').val(((toRate_1 / fromRate_1) * searchValue_1).toFixed(2));
    }


    $(document).ready(function() {
        function getCurrencySymbol(currencyCode) {
            try {
                const formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency'
                    , currency: currencyCode
                , });
                const formattedSymbol = formatter.formatToParts(1).find(part => part.type === 'currency').value;
                return formattedSymbol;
            } catch (error) {
                console.error('Error:', error);
                return currencyCode;
            }
        }
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        const currencyCode = geoplugin_currencyCode();
        const symbol = getCurrencySymbol(currencyCode);
        $('.append_currency_simbol').text(symbol);
    });

</script>
@endsection
