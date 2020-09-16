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
                            <td style="padding: 64px 110px 60px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 40px;" class="mobile-center">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 51px;" class="mobile-center mobile-padding-bottom-16">
                                            <h1 style="margin: 0 0 14px; font-size: 36px; line-height: 48px; color: #1C486F; font-weight: 300; letter-spacing: 0;" class="mobile-header-title">You’ve been matched</h1>
                                            <p style="margin: 0; font-weight: normal; color: #8DA3B7;">
                                                You have received a match request for your business listing: <strong style="font-weight: 700;">'Weissnat Ltd.'</strong>
                                                <br />
                                                <br />
                                                Don't leave potential buyers waiting, answer the match request now!
                                                <br />
                                                <br />
                                                For better chances of selling your business, typical match responses should not take more than 2 business days.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td style="border: 1px solid rgba(26, 26, 26, 0.1); border-radius: 6px; font-size: 16px; line-height: 24px; color: #8DA3B7; padding: 40px 0 42px; text-align: center;" class="mobile-padding-2">
                                                            <img src="https://via.placeholder.com/100x100" width="100" height="100" alt="Avatar" border="0" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto;" class="g-img">
                                                            <h2 style="color: #1C486F; font-family: 'Source Sans Pro', sans-serif !important; font-size: 24px; font-weight: 600; letter-spacing: 0; line-height: 23px; margin: 20px 0 10px;" class="mobile-content-title2">Jimmy B</h2>
                                                            <p style="margin: 0 0 45px; color: #6C7E8D; font-family: 'Source Sans Pro', sans-serif !important; font-size: 22px; font-weight: normal; line-height: 23px;" class="mobile-content-subtitle">
                                                                Buyer from Denver, CO
                                                            </p>
                                                            <p style="margin: 0 0 47px;" class="mobile-content-action">
                                                                <a class="mobile-button" href="#" style="max-width: 233px; margin: 0 auto; background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize; text-align: center;">View Match Request</a>
                                                            </p>
                                                            <p style="margin: 0;">
                                                                <a href="#" style="border: 0; font-family: 'Source Sans Pro', sans-serif !important; font-size: 19px; line-height: 23px; text-decoration: underline; color: #6C7E8D;">Ignore Request</a>
                                                            </p>
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