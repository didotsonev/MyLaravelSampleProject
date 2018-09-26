<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        body { margin: 0; padding: 0; width: 100%; background-color: #F8F8F8; font-family: Arial, sans-serif; }
        .email-wrapper { width: 100%; margin: 0; padding: 0; background-color: #F8F8F8; }
        .bv_background { text-align: center; background-color: #806D5C; }
        .white_font { margin-top: 0; color: #fff; font-size: 12px; line-height: 1.5em; }
        .img_width { width: 150px; height: 40px; }
        .email-masthead { padding: 25px 0; text-align: center; }
        .email-masthead_name { font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white; }
        .email-body { width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF; }
        .email-body_inner { width: auto; max-width: 570px; margin: 0 auto; padding: 0; }
        .email-body_cell { padding: 35px; }
        .email-footer { width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center; }
        .email-footer_cell { color: #AEAEAE; padding: 35px; text-align: center; }
        .body_action { width: 100%; margin: 30px auto; padding: 0; text-align: center; }
        .body_sub { margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2; }
        .anchor { color: #3869D4; }
        h1, h2 { margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left; }
        p { margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; }
        td { margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em; text-align: left;}
        .paragraph-sub { margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em; }
        .paragraph-center { text-align: center; }
        .button { display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px; margin: 2%; background-color: #41BE92; border-radius: 3px; color: #ffffff; font-size: 15px;line-height: 25px; text-align: center; text-decoration: none; -webkit-text-size-adjust: none; }
        .button--green { background-color: #22BC66; }
        .button--red { background-color: #dc4d2f; }
        .button--blue { background-color: #3869D4; }
        .bordered_table { border-top: 1px solid black; border-left: 1px solid black; }
        .bordered_table th, .bordered_table td { border-bottom: 1px solid black; border-right: 1px solid black; padding: 0 5px 0 5px; }
    </style>
</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class ="email-wrapper" align="center">
            <table width="100%" cellpadding="0" cellspacing="0">

                <!-- Email Body -->
                <tr>
                    <td class="email-body">
                        <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="email-body_cell">
                                    <!-- Greeting -->
                                    <h1>
                                        {{ _i('Hello') }},
                                    </h1>

                                    <!-- Intro -->
                                    <p>
                                        {{ _i("Your company has been added to our application.") }}
                                    </p>

                                    <!-- Outro -->
                                    <p>

                                    </p>
                                    <!-- Salutation -->
                                    <p>
                                        {{ _i('Regards') }},<br>{{ config('app.name') }}
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Footer -->
                <tr class="">
                    <td>
                        <table class="email-footer">
                            <tr>
                                <td class="fontFamily email-footer_cell">
                                    <p class="">
                                        &copy; {{ date('Y') }}
                                        <a class="anchor" href="{{ url('/') }}" style="color: #3869D4;" target="_blank">{{ config('app.name') }}</a>.
                                        {{ _i('All rights reserved') }}.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>