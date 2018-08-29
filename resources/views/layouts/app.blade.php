<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
         <div class="row">
         <div class = "col-lg-4">
             @if(Auth::check())

             @endif
         <ul class = "list-group">
            <li class= "list-group-item">
              <a href ="{{ route('home')}}" >Home</a>
            </li>
            <li class= "list-group-item">
              <a href ="{{ route('categories')}}" >Categories</a>
            </li>

             <li class= "list-group-item">
              <a href ="{{ route('posts')}}" > All posts </a>
            </li>

            <li class= "list-group-item">
              <a href ="{{ route('category.create')}}" >Create new Category</a>
            </li>
            <li class="list-group-item">
              <a href ="{{ route('post.create')}}">create a new post</a>

            </li>
         </ul>
         </div>

         <div class="col-lg-8">
         @yield('content')
         </div>
         </div>
        </div>
       </main>
    </div>

    <article class="card">
                    <a href="#">
                        <figure class="thumbnail">
                        </figure>
                        <div class="card-content">
                            <h2>The Banana Bird</h2>
                            <p>This banana looks a lot like a bird</p>
                            <button type="button" class="btn btn-primary">Buy Now</button>
                            <h1>price</h1>
                        </div>
                    </a>
</article>
<div id="PwQ-Affilliate-widget">
        <style type="text/css">
            div.pwq-container {
                width: 300px;
                height:380px;
                border: 4px solid #CCC;
            }
            div.pwq-telco {
                height:55px;
                width:95%;
                margin: 5px;
                border-bottom: 1px dotted gainsboro;
                vertical-align:middle;
            }
            h3.pwq-title {
                font-size:15px;
                margin: 0 0px;
                border-bottom: 2px solid #666;
                padding: 6px 6px;
                color: #FFF;
                background-color: #3265D2;
            }
            div.pwq-footer {
               padding:5px 5px 2px 5px;
               color: #1b1b1b;
               background-color: #CCC;
            }
            div.pwq-button {
                height:100%;
                /*border: 1px solid black;*/
                float: right;
                width: 50%;
            }
            div.pwq-footer a {
               text-decoration:none;
            }
        </style>

        <div class="pwq-container">
            <h3 class="pwq-title">RECHARGE HERE</h3>
            <div class="pwq-telco">
                <img src="https://quickteller.com/img/airtel.png" />
                <div class="pwq-button">
                    <a class="quickteller-checkout-anchor" id="90106"></a>
                    <script type="text/javascript">
                        var QTCheckout = QTCheckout || {};
                        QTCheckout.paymentItems = QTCheckout.paymentItems || [];
                        QTCheckout.paymentItems.push({
                            paymentCode: "90106",
                            extraData: {
                                buttonSize: 'small'
                            }
                        });
                        if (!QTCheckout.qtScript) {
                            var qtScript = document.createElement('script'); qtScript.type = 'text/javascript'; qtScript.async = true; qtScript.src = "https:" + "//paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=" + new Date().getDay(); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(qtScript, s); QTCheckout.qtScript = qtScript;
                        } else if (QTCheckout.buildPaymentItemsUI) {
                            QTCheckout.buildPaymentItemsUI();
                        }
                    </script>
                </div>
            </div>
            <div class="pwq-telco">
                <img src="https://quickteller.com/img/etisalat.png" />
                <div class="pwq-button">
                    <a class="quickteller-checkout-anchor" id="90806"></a>
                    <script type="text/javascript">
                        var QTCheckout = QTCheckout || {};
                        QTCheckout.paymentItems = QTCheckout.paymentItems || [];
                        QTCheckout.paymentItems.push({
                            paymentCode: "90806",
                            extraData: {
                                buttonSize: 'small'
                            }
                        });
                        if (!QTCheckout.qtScript) {
                            var qtScript = document.createElement('script'); qtScript.type = 'text/javascript'; qtScript.async = true; qtScript.src = "https:" + "//paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=" + new Date().getDay(); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(qtScript, s); QTCheckout.qtScript = qtScript;
                        } else if (QTCheckout.buildPaymentItemsUI) {
                            QTCheckout.buildPaymentItemsUI();
                        }
                    </script>
                </div>
            </div>
            <div class="pwq-telco">
                <img src="https://quickteller.com/img/glo.png" />
                <div class="pwq-button">
                    <a class="quickteller-checkout-anchor" id="91309"></a>
                    <script type="text/javascript">
                        var QTCheckout = QTCheckout || {};
                        QTCheckout.paymentItems = QTCheckout.paymentItems || [];
                        QTCheckout.paymentItems.push({
                            paymentCode: "91309",
                            extraData: {
                                buttonSize: 'small'
                            }
                        });
                        if (!QTCheckout.qtScript) {
                            var qtScript = document.createElement('script'); qtScript.type = 'text/javascript'; qtScript.async = true; qtScript.src = "https:" + "//paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=" + new Date().getDay(); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(qtScript, s); QTCheckout.qtScript = qtScript;
                        } else if (QTCheckout.buildPaymentItemsUI) {
                            QTCheckout.buildPaymentItemsUI();
                        }
                    </script>
                </div>
            </div>
            <div class="pwq-telco">
                <img src="https://quickteller.com/img/mtn.png" />
                <div class="pwq-button">
                    <a class="quickteller-checkout-anchor" id="10906"></a>
                    <script type="text/javascript">
                        var QTCheckout = QTCheckout || {};
                        QTCheckout.paymentItems = QTCheckout.paymentItems || [];
                        QTCheckout.paymentItems.push({
                            paymentCode: "10906",
                            extraData: {
                                buttonSize: 'small'
                            }
                        });
                        if (!QTCheckout.qtScript) {
                            var qtScript = document.createElement('script'); qtScript.type = 'text/javascript'; qtScript.async = true; qtScript.src = "https:" + "//paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=" + new Date().getDay(); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(qtScript, s); QTCheckout.qtScript = qtScript;
                        } else if (QTCheckout.buildPaymentItemsUI) {
                            QTCheckout.buildPaymentItemsUI();
                        }
                    </script>
                </div>
            </div>
            <div class="pwq-telco">
                <img src="https://quickteller.com/img/visafone.png" />
                <div class="pwq-button">
                    <a class="quickteller-checkout-anchor" id="83509"></a>
                    <script type="text/javascript">
                        var QTCheckout = QTCheckout || {};
                        QTCheckout.paymentItems = QTCheckout.paymentItems || [];
                        QTCheckout.paymentItems.push({
                            paymentCode: "83509",
                            extraData: {
                                buttonSize: 'small'
                            }
                        });
                        if (!QTCheckout.qtScript) {
                            var qtScript = document.createElement('script'); qtScript.type = 'text/javascript'; qtScript.async = true; qtScript.src = "https:" + "//paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=" + new Date().getDay(); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(qtScript, s); QTCheckout.qtScript = qtScript;
                        } else if (QTCheckout.buildPaymentItemsUI) {
                            QTCheckout.buildPaymentItemsUI();
                        }
                    </script>
                </div>
            </div>
            <div class="pwq-footer">
                <em><small>
                    <a href="https://www.quickteller.com" target="_blank"><b>Quickteller</b></a>
                    makes it easy to make payments, buy airtime, send and receive money
                </small></em>
            </div>
        </div>
        </div>

    <article class="card">
                    <a href="#">
                        <figure class="thumbnail">
                        </figure>
                        <div class="card-content">
                            <h2>The Candle Bird</h2>
                            <p>This banana looks a lot like a bird</p>
                            <button href="https://sandbox.interswitchng.com/webpay/pay" class="btn btn-primary">Buy Now</button>
                            <h1>price</h1>
                        </div>
                    </a>
</article>
<div class="container">
    <div class="row">
        <div class=col-md-4>
            <h2> windows</h2>
            <p> 350</p>
        </div>
    </div>
</div>
<article class="card">
                    <a href="#">

                        <div class="card-content">
                            <h2>The nylon Bird</h2>
                            <p>the looks a lot like a bird</p>
                            <h1>price</h1>
                        </div>
                    </a>
</article>



      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/toastr.min.js')}}"</script>

    <script>
          @if(Session::has('success'))

          toastr.success("{{ Session::get('success')}}")

          @endif
          @if(Session::has('info'))

          toastr.info("{{ Session::get('info')}}")

             @endif


    </script>
</body>
</html>
