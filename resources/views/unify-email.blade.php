<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Responsive Email Template</title>

    <style type="text/css">
        .ReadMsgBody {width: 100%; background-color: #ffffff;}
        .ExternalClass {width: 100%; background-color: #ffffff;}
        body     {width: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;font-family: Arial, Helvetica, sans-serif}
        table {border-collapse: collapse;}

        @media only screen and (max-width: 640px)  {
            body[yahoo] .deviceWidth {width:440px!important; padding:0;}
            body[yahoo] .center {text-align: center!important;}
        }

        @media only screen and (max-width: 479px) {
            body[yahoo] .deviceWidth {width:280px!important; padding:0;}
            body[yahoo] .center {text-align: center!important;}
        }
    </style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Arial, Helvetica, sans-serif">

<!-- Wrapper -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td width="100%" valign="top" bgcolor="#ffffff" style="padding-top:20px">

            @include('Unify::emails.layout.header')

                    <!-- Start Headliner-->
            <table width="700" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                <tr>
                    <td valign="top" style="padding: 0px " class="center">
                        <a href="#"><img class="deviceWidth" src="{{ theme_asset('img/headliner/headliner_green.jpg') }}"></a>
                    </td>
                </tr>
            </table>
            <!-- stop Headliner-->

            @yield('content')

            @section('footer')
                @include('Unify::emails.layout.footer')
            @show

        </td>
    </tr>
</table>
<!-- End Wrapper -->
</body>
</html>