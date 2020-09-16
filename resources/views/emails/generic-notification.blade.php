@extends('emails.layout')

@section('content')
    <!-- Email Body : BEGIN -->
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="700" style="margin: auto;" class="email-container">
        <!-- Clear Spacer : BEGIN -->
        <tr>
            <td aria-hidden="true" height="50" style="font-size: 0px; line-height: 0px;" class="top-space">
                &nbsp;
            </td>
        </tr>
        <!-- Clear Spacer : END -->

        <!-- Main Body : BEGIN -->
        <tr>
            <td class="outer-padding">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 64px 110px 63px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 40px;" class="mobile-center">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 26px;" class="mobile-center">
                                            <h1 style="margin: 0; font-size: 36px; line-height: 49px; color: #1C486F; font-weight: 300; letter-spacing: -1.04px;" class="mobile-header-title mobile-margin-0">You have a new message!</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td dir="ltr" style="padding: 24px 25px 27px 16px; background-color: #F5F8FA; border-radius: 4px;" width="100%" class="stack-row">
                                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <td class="stack-column mobile-padding-bottom-16" width="16%" valign="top">
                                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td dir="ltr" valign="top">
                                                                        <img src="https://via.placeholder.com/53" alt="Avatar" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;" width="53" height="53" border="0">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td class="stack-column" width="83.99%" valign="top">
                                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td dir="ltr" valign="top">
                                                                        <h2 style="color: #1C486F; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 24px; margin: 0;">Peter A.</h2>
                                                                        <p style="opacity: 0.5; color: #1C486F; font-size: 14px; letter-spacing: 0; line-height: 24px; margin: 0;">“Hey Jen! You’re listing looks as though it is exactly what I’ve been searching for! I’d like to talk to you about some details and see if this could be somthing to pursue futher.</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 26px 0 0;">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-bottom: 26px;">
                                                            <p style="margin: 0; font-weight: normal; font-size: 16px; line-height: 24px; color: #8DA3B7;" class="mobile-center mobile-header-text">
                                                                Get started below by logging in and responding in the platform chat area.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0;">
                                                            <!-- Button : BEGIN -->
                                                            <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" class="mobile-button-container">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" style="border-radius: 4px; background: #029BDC;">
                                                                            <a class="mobile-button" href="#" style="background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">Join the Conversation</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Button : END -->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <!-- Main Body : END -->
    </table>
    <!-- Email Body : END -->
@stop