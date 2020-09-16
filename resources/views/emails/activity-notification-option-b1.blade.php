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
                            <td style="padding: 64px 104.5px 70px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 40px;" class="mobile-center">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 26px;" class="mobile-padding-bottom-19">
                                            <h1 style="margin: 0 0 26px; font-size: 36px; line-height: 48px; color: #1C486F; font-weight: 300; letter-spacing: 0;" class="mobile-header-title mobile-center">Good news!</h1>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text">Hi Rosalind,</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 16px; line-height: 28px; color: #1C486F; padding-bottom: 26px;" class="mobile-padding-bottom-19">
                                                            <h2 style="color: #1C486F; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 28px; margin: 0;">This week on Tresle you have: </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0 0 26px;" class="mobile-padding-bottom-19">
                                                            <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" width="84%" class="mobile-content-section">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="font-size: 16px; line-height: 24px; color: #8DA3B7; padding: 13.5px 32.5px 13.5px 30.63px; border: 1px solid #EAEDF3; border-left: 3px solid #249318; border-radius: 0 4px 4px 0; background-color: #FFFFFF; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.04);" class="mobile-content-items">
                                                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="stack-column mobile-padding-bottom-13-5">
                                                                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td width="19%"><span style="color: #1C486F; font-size: 36px; letter-spacing: 0; line-height: 38px;">2</span></td>
                                                                                                        <td>
                                                                                                            <div style="color: #8DA3B7; font-size: 11px; font-weight: 600; letter-spacing: 0.25px; line-height: 17px; margin: 0;">PENDING</div>
                                                                                                            <div style="color: #8DA3B7; font-size: 11px; font-weight: 600; letter-spacing: 0.25px; line-height: 17px; margin: 0;">MATCH REQUESTS</div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        <td width="41%" class="stack-column mobile-padding-bottom-13-5">
                                                                                            <a href="#" style="background: transparent; border: 1px solid rgba(36, 147, 24, 0.19); border-radius: 2px; font-size: 13px; font-weight: 600; line-height: 24px; text-decoration: none; padding: 6px; color: #249318; text-transform: capitalize; text-align: center; display: block;">View My Requests</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 16px; line-height: 24px; color: #8DA3B7; padding: 0 0 26px;"class="mobile-padding-bottom-26">
                                                            <p style="margin: 0; font-weight: normal; color: #8DA3B7;" class="mobile-header-text">
                                                                For better chances of selling your business, typical match responses should not take more than <strong style="font-weight: 700;">2 business days</strong>, and messages should not take longer than <strong style="font-weight: 700;">one business day</strong>.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <!-- Button : BEGIN -->
                                                            <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" class="mobile-button-container">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" style="border-radius: 4px; background: #029BDC;">
                                                                            <a class="mobile-button" href="#" style="background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">Visit My Dashboard</a>
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