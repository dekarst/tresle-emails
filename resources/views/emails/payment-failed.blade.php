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
                                            <p style="margin: 0; line-height: 46px;" class="mobile-header-alert">
                                                <span style="background-color: #FDEDEE; color: #CE131E; font-family: Arial !important; font-size: 12px !important; letter-spacing: 0; line-height: 16px; padding: 16px; max-width: 226px !important;">Your payment couldn’t be processed</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 44px;" class="mobile-center mobile-padding-bottom-37">
                                            <h1 style="margin: 0 0 26px; font-size: 36px; line-height: 48px; color: #1C486F; font-weight: 300; letter-spacing: 0;" class="mobile-header-title">Payment unsuccessful</h1>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text mobile-left">
                                                Your automatic payment for your Tresle subscription renewal has failed and your listing will be removed shortly if action is not taken.
                                                <br/>
                                                <br/>
                                                We were unable to process a payment for your Tresle business listing based on the card information provided on your account. This can happen for a number of reasons- such as an expired card or insufficient funds.
                                                <br/>
                                                <br/>
                                                We will attempt to process your payment again- however, you may need to manually update your billing information to continue using the Tresle platform and have your business presented to buyers.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td dir="ltr" style="padding: 20.54px 24px 31px 16px; background-color: #F5F8FA; border-radius: 4px;" width="100%" class="stack-row">
                                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <td class="stack-column" width="16%" valign="top">
                                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td dir="ltr" valign="top" class="mobile-center mobile-padding-bottom-8">
                                                                        <img src="https://via.placeholder.com/54" alt="Avatar" class="center-on-narrow" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;" width="54" height="54" border="0">
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
                                                                        <div style="opacity: 0.95; color: #1C486F; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 24px;">If payment fails, your listing for 'Gerlach, Carter and Bergstrom' will be removed from the platform as your subscription will be canceled.</div>
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
                                        <td style="padding: 50px 0 0;" class="mobile-padding-top-34">
                                            <!-- Button : BEGIN -->
                                            <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" class="mobile-button-container">
                                                <tbody>
                                                    <tr>
                                                        <td align="center" style="border-radius: 4px; background: #029BDC;">
                                                            <a class="mobile-button" href="#" style="background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">Update My Billing</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- Button : END -->
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