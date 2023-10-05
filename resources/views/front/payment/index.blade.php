<form>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <button type="button" onClick="makePayment()">Pay Now</button>
</form>

<script>
  function makePayment() {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-c64a7c70eb9c12b06aa4144bebff271b-X",
      tx_ref: "RX1",
      amount: 10,
      currency: "USD",
      country: "US",
      // payment_options: "account,card,banktransfer,ussd,credit,barter",
      payment_options: "0,1,2,3,8,9,10",
      redirect_url: // specified redirect URL
        "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "cornelius@gmail.com",
        phone_number: "08102909304",
        name: "Flutterwave Developers",
      },
      callback: function (data) {
        console.log(data);
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "My store",
        description: "Payment for items in cart",
        logo: "https://assets.piedpiper.com/logo.png",
      },
    });
  }
</script>
