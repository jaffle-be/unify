<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Modular Template Patterns</title>

    <!--
        This email is an experimental proof-of-concept based on the
        idea that the most common design patterns seen in email can
        be placed in modular blocks and moved around to create
        different designs.

        The same principle is used to build the email templates in
        MailChimp's Drag-and-Drop email editor.

        This email is optimized for mobile email clients, and even
        works relatively well in the Android Gmail App, which does
        not support Media Queries, but does have limited mobile-
        friendly functionality.

        While this coding method is very flexible, it can be more
        brittle than traditionally-coded emails, particularly in
        Microsoft Outlook 2007-2010. Outlook-specific conditional
        CSS is included to counteract the inconsistencies that
        crop up.

        For more information on HTML email design and development,
        visit http://templates.mailchimp.com
    -->


    <!--
        Outlook Conditional CSS

        These two style blocks target Outlook 2007 & 2010 specifically, forcing
        columns into a single vertical stack as on mobile clients. This is
        primarily done to avoid the 'page break bug' and is optional.

        More information here:
        http://templates.mailchimp.com/development/css/outlook-conditional-css
    -->
    <!--[if mso 12]>
    <style type="text/css">
        .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
    <!--[if mso 14]>
    <style type="text/css">
        .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
    <style type="text/css">
        body,#bodyTable,#bodyCell{
            height:100% !important;
            margin:0;
            padding:0;
            width:100% !important;
        }
        table{
            border-collapse:collapse;
        }
        img,a img{
            border:0;
            outline:none;
            text-decoration:none;
        }
        h1,h2,h3,h4,h5,h6{
            margin:0;
            padding:0;
        }
        p{
            margin:1em 0;
        }
        .ReadMsgBody{
            width:100%;
        }
        .ExternalClass{
            width:100%;
        }
        .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
            line-height:100%;
        }
        table,td{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        #outlook a{
            padding:0;
        }
        img{
            -ms-interpolation-mode:bicubic;
        }
        body,table,td,p,a,li,blockquote{
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }
        .flexibleContainerCell{
            padding-top:20px;
            padding-Right:20px;
            padding-Left:20px;
        }
        .flexibleImage{
            height:auto;
        }
        .bottomShim{
            padding-bottom:20px;
        }
        .imageContent,.imageContentLast{
            padding-bottom:20px;
        }
        .nestedContainerCell{
            padding-top:20px;
            padding-Right:20px;
            padding-Left:20px;
        }
        body,#bodyTable{
            background-color:#F5F5F5;
        }
        #bodyCell{
            padding-top:40px;
            padding-bottom:40px;
        }
        #emailBody{
            background-color:#FFFFFF;
            border:1px solid #DDDDDD;
            border-collapse:separate;
            border-radius:4px;
        }
        h1,h2,h3,h4,h5,h6{
            color:#202020;
            font-family:Helvetica;
            font-size:20px;
            line-height:125%;
            text-align:Left;
        }
        .textContent,.textContentLast{
            color:#404040;
            font-family:Helvetica;
            font-size:16px;
            line-height:125%;
            text-align:Left;
            padding-bottom:20px;
        }
        .textContent a,.textContentLast a{
            color:#2C9AB7;
            text-decoration:underline;
        }
        .nestedContainer{
            background-color:#E5E5E5;
            border:1px solid #CCCCCC;
        }
        .emailButton{
            background-color:#2C9AB7;
            border-collapse:separate;
            border-radius:4px;
        }
        .buttonContent{
            color:#FFFFFF;
            font-family:Helvetica;
            font-size:18px;
            font-weight:bold;
            line-height:100%;
            padding:15px;
            text-align:center;
        }
        .buttonContent a{
            color:#FFFFFF;
            display:block;
            text-decoration:none;
        }
        .emailCalendar{
            background-color:#FFFFFF;
            border:1px solid #CCCCCC;
        }
        .emailCalendarMonth{
            background-color:#2C9AB7;
            color:#FFFFFF;
            font-family:Helvetica, Arial, sans-serif;
            font-size:16px;
            font-weight:bold;
            padding-top:10px;
            padding-bottom:10px;
            text-align:center;
        }
        .emailCalendarDay{
            color:#2C9AB7;
            font-family:Helvetica, Arial, sans-serif;
            font-size:60px;
            font-weight:bold;
            line-height:100%;
            padding-top:20px;
            padding-bottom:20px;
            text-align:center;
        }
        @media only screen and (max-width: 480px){
            body{
                width:100% !important;
                min-width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            table[id=emailBody],table[class=flexibleContainer]{
                width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            img[class=flexibleImage]{
                height:auto !important;
                width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            table[class=emailButton]{
                width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            td[class=buttonContent]{
                padding:0 !important;
            }

        }	@media only screen and (max-width: 480px){
            td[class=buttonContent] a{
                padding:15px !important;
            }

        }	@media only screen and (max-width: 480px){
            td[class=textContentLast],td[class=imageContentLast]{
                padding-top:20px !important;
            }

        }	@media only screen and (max-width: 480px){
            td[id=bodyCell]{
                padding-top:10px !important;
                padding-Right:10px !important;
                padding-Left:10px !important;
            }

        }</style></head>
<body>
<center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td align="center" valign="top" id="bodyCell">
                <!-- EMAIL CONTAINER // -->
                <!--
                    The table "emailBody" is the email's container.
                    Its width can be set to 100% for a color band
                    that spans the width of the page.
                -->
                <table border="0" cellpadding="0" cellspacing="0" width="600" id="emailBody">


                    <!-- MODULE ROW // -->
                    <!--
                        To move or duplicate any of the design patterns
                        in this email, simply move or copy the entire
                        MODULE ROW section for each content block.
                    -->
                    <? include(__DIR__ . '/text/intro.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/2col/simple.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/callout/simple.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->

                    <? include(__DIR__ . '/text/intro-bg.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/2col/simple-bg.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/callout/simple-bg.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/img-only/full.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/img-only/2col.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/with-img/full.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/with-img/2col.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/with-img/img-left.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/with-img/img-right.php'); ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/complex/full.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/complex/2col.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/complex/img-left.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/complex/img-right.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/date/date-left.php') ?>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->
                    <? include(__DIR__ . '/date/date-right.php') ?>
                    <!-- // MODULE ROW -->


                </table>
                <!-- // EMAIL CONTAINER -->
            </td>
        </tr>
    </table>
</center>
</body>
</html>