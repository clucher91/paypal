<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       

      <div id="paypal-button-container"></div>
        <script src="https://www.paypal.com/sdk/js?client-id=AVsREKZdtgsYyaljQ96c8hNmA_ytzQFPkCxEN9u7pNVHXZTRvBloEB351kAhOYvOpSKb6oeBI2AnfCna&vault=true" data-sdk-integration-source="button-factory"></script>
        <script>
          paypal.Buttons({
              style: {
                  shape: 'pill',
                  color: 'gold',
                  layout: 'horizontal',
                  label: 'subscribe',
                  
              },
              createSubscription: function(data, actions) {
                return actions.subscription.create({
                  'plan_id': 'P-0K831498YV146180AL5LIXFY'
                });
              },
              onApprove: function(data, actions) {
                alert(data.subscriptionID);
              }
          }).render('#paypal-button-container');
        </script>
</html>


