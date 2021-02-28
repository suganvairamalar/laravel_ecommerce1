<!DOCTYPE html>
<html lang="en">
   <head>
      <title>PRODUCTS</title>
      <script type="text/javascript" src="{{URL::asset('js/jqueryv3.min.js')}}"></script> 
      <script type="text/javascript" src="{{URL::asset('js/bootstrapv3.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('js/select2.full.js')}}"></script> 
      <link rel="stylesheet" href="{{URL::asset('css/bootstrapv3.min.css')}}" type="text/css"/>
      <link rel="stylesheet" href="{{URL::asset('css/webfonts.css')}}" type="text/css"/>
      <link rel="stylesheet" href="{{URL::asset('css/select2.css')}}" type="text/css"/>
      <!-- CRUD JS -->
      <script type="text/javascript" src="{{URL::asset('js/modules/product_module.js')}}"></script>
      <style>
         /* @import url("https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css");*/
         /* @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans');*/
         .glyphicon {
         position: relative;
         top: 1px;
         display: inline-block;
         font-family: 'Glyphicons Halflings';
         font-style: normal;
         font-weight: normal;
         line-height: 1;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         }
         .glyphicon-asterisk:before {
         content: "\2a";
         }
         body {
         /*font-family: 'Open Sans', sans-serif;
         font-family: 'Montserrat', sans-serif;
         font-family: 'Poppins', sans-serif;*/
         }
         body {
         /*color: #fff;
         background: #63738a;*/
         /*font-family: 'Roboto', sans-serif;*/
         font-family: 'Poppins', sans-serif;
         }

         /*start style product_index.blade.php file */
         img.slider-img{
            height: 400px !important;
         }

         .custom-product{
            height:600px !important;
         }

         .slider-text{
            background-color: #35443585 !important;
         }

         .trending-image{
            height: 100px !important;
         }

         .trending-item{
            float:left;
            width:20%;
         }

         .trending-wrapper{
            margin: 30px !important;
         }
         /*end style product_index.blade.php file */

         /*start style product_detail.blade.php file */
         .detail-img{
            height:200px !important;
         }
         /*end style product_detail.blade.php file */

          /*start style header.blade.php file */
          .search-box{
            width:500px !important;
          }

          .cart-list-divider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
          }


         
      </style>
   </head>
   <body class="">
      <!-- <div class="container"> -->
         @include('header')        
         @yield('content')
         @include('footer') 
      <!-- </div> -->
   </body>
</html>