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
                            <td style="padding: 64px 110px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 40px;" class="mobile-center">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 64px;" class="mobile-center">
                                            <h1 style="margin: 0 0 17px; font-size: 36px; line-height: 48px; color: #1C486F; font-weight: 300; letter-spacing: 0;" class="mobile-header-title">Tresle subscription renewed</h1>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text">
                                                Your Tresle business listing for <span style="color: #029BDC;">'Gerlach, Carter and Bergstrom'</span> has been renewed.
                                                <br />
                                                <br />
                                                You have been charged <span style="font-weight: 600;">$50.00 to a card ending in ****0341</span>. See receipt below for more information.
                                                <br />
                                                <br />
                                                Your listing subscription will be renewed automatically at the end of each billing cycle.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 20px;">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <!-- Column : BEGIN -->
                                                    <th valign="top" width="60%" class="stack-column mobile-padding-bottom-26" style="padding: 0 0 40px;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: left; padding: 0 0 12px; border-bottom: 1px solid #DCE6EE; text-transform: uppercase; color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    Invoice Number
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding: 8px 0 0; color: #8CA3B8; font-size: 18px; font-weight: normal; letter-spacing: 0; line-height: 28px;">
                                                                    #3D67E53F-0001
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <!-- Column : END -->
                                                    <!-- Column : BEGIN -->
                                                    <th valign="top" width="40%" class="stack-column mobile-padding-bottom-26" style="padding: 0 0 40px;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: left; padding: 0 0 12px; border-bottom: 1px solid #DCE6EE; text-transform: uppercase; color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    Date Paid
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding: 8px 0 0; color: #8CA3B8; font-size: 18px; font-weight: normal; letter-spacing: 0; line-height: 28px;">
                                                                    Jun 5, 2020
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <!-- Column : END -->
                                                </tr>
                                            </table>
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <!-- Column : BEGIN -->
                                                    <th valign="top" width="60%" class="stack-column mobile-padding-bottom-26" style="padding: 0 0 40px;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: left; padding: 0 0 12px; border-bottom: 1px solid #DCE6EE; text-transform: uppercase; color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    Business Name
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding: 8px 0 0; color: #8CA3B8; font-size: 18px; font-weight: normal; letter-spacing: 0; line-height: 28px;">
                                                                    Gerlach, Carter and Bergstrom
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <!-- Column : END -->
                                                    <!-- Column : BEGIN -->
                                                    <th valign="top" width="40%" class="stack-column mobile-padding-bottom-26" style="padding: 0 0 40px;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: left; padding: 0 0 12px; border-bottom: 1px solid #DCE6EE; text-transform: uppercase; color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    Amount Paid
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding: 8px 0 0; color: #8CA3B8; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    $50.00
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <!-- Column : END -->
                                                </tr>
                                            </table>
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <!-- Column : BEGIN -->
                                                    <th valign="top" width="60%" class="stack-column mobile-padding-bottom-26" style="padding: 0 0 40px;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: left; padding: 0 0 12px; border-bottom: 1px solid #DCE6EE; text-transform: uppercase; color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    Business ID
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding: 8px 0 0; color: #8CA3B8; font-size: 18px; font-weight: normal; letter-spacing: 0; line-height: 28px;">
                                                                    1
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <!-- Column : END -->
                                                    <!-- Column : BEGIN -->
                                                    <th valign="top" width="40%" class="stack-column mobile-padding-bottom-26" style="padding: 0 0 40px;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="text-align: left; padding: 0 0 12px; border-bottom: 1px solid #DCE6EE; text-transform: uppercase; color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    Payment Method
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding: 8px 0 0; color: #8CA3B8; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px;">
                                                                    <img src="{!!asset('assets/visa.svg')!!}" alt="visa" border="0" style="padding: 0 8px 0 0; height: auto; vertical-align: middle;" width="27" height="24" /> ****0341
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <!-- Column : END -->
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 56px;">
                                            <h2 style="color: #1C486F; font-size: 26px; font-weight: 300; letter-spacing: 0; line-height: 33px; margin: 0;">Summary</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td style="padding: 26px 34px 34px; background: #F5F8FA;" class="mobile-padding">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tr>
                                                                <td style="color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px; padding: 0 0 18px; border-bottom: 1px solid #DCE6EE;">Item</td>
                                                                <td width="50" style="color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px; padding: 0 0 18px; border-bottom: 1px solid #DCE6EE;">Qty</td>
                                                                <td width="70" style="color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 28px; padding: 0 0 18px; border-bottom: 1px solid #DCE6EE;">Price</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #8BA3B9; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 19px; padding: 18px 24px 24px 0; border-bottom: 4px solid #E4EAEF;">Tresle Business Listing Fee Monthly</td>
                                                                <td style="color: #8BA3B9; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 19px; padding: 18px 0 24px; border-bottom: 4px solid #E4EAEF;">1</td>
                                                                <td style="color: #8BA3B9; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 19px; padding: 18px 0 24px; border-bottom: 4px solid #E4EAEF;">$50.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #1C486F; font-size: 18px; font-weight: 600; letter-spacing: 0; line-height: 20px; padding: 24px 0 0; text-align: right; text-transform: uppercase;" colspan="3">Total: $50.00</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
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