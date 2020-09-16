@extends('emails.layout')

@section('content')
    <!-- Email Body : BEGIN -->
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="700" style="margin: auto;" class="email-container">
        <!-- Clear Spacer : BEGIN -->
        <tr>
            <td aria-hidden="true" height="50" style="font-size: 0px; line-height: 0px;" class="top-space">
            </td>
        </tr>
        <!-- Clear Spacer : END -->

        <!-- Main Body : BEGIN -->
        <tr>
            <td class="outer-padding">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 40px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0;" class="mobile-center">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffffff;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tbody><tr>
                                        <!-- Column : BEGIN -->
                                        <th valign="top" width="50%" class="stack-column mobile-center">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody><tr>
                                                    <td style="background: #029BDC; font-family: Open Sans, sans-serif; color: #ffffff; padding: 40px; text-align: left;" class="center-on-narrow">
                                                        <div style="color: #FFFFFF; font-family: Open Sans, sans-serif; font-size: 16px; font-weight: bold; letter-spacing: 0; line-height: 20px; text-transform: uppercase; margin: 0 0 10px;">Fall Fling</div>
                                                        <div class="mobile-font-size-2" style="color: #FFFFFF; font-family: Open Sans, sans-serif; font-size: 36px; font-weight: 300; letter-spacing: -1px; line-height: 49px; margin: 0;">Enjoy a discount when you submit your listing!</div>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </th>
                                        <!-- Column : END -->
                                        <!-- Column : BEGIN -->
                                        <th valign="top" width="50%" class="stack-column mobile-center">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody><tr>
                                                    <td style="text-align: center">
                                                        <img src="https://via.placeholder.com/350X257" alt="alt_text" style="width: 100%; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;" width="350" height="" border="0">
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </th>
                                        <!-- Column : END -->
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 64px 110px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 44px;">
                                            <h2 style="color: #1C486F; font-size: 28px; font-weight: 300; letter-spacing: 0; line-height: 36px; margin: 0 0 20px;" class="mobile-subheader-title">We’re thankful for a great year</h2>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text">And greatfull for everyone that has been a part of it — to show our appreciation, we are offering a discount! Submit your listing any time this week, and you will receive</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 16px;">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td style="background-color: #F5F8FA;">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tbody><tr>
                                                                <!-- Column : BEGIN -->
                                                                <td valign="middle" width="50%" class="stack-column">
                                                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                        <tr>
                                                                            <td class="mobile-padding-3" style="padding: 25px 0;">
                                                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                    <tr>
                                                                                        <td class="mobile-border-bottom" style="border-right: 1px dashed #c0c9d3; padding: 0 25px;">
                                                                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                                <tbody><tr>
                                                                                                    <td style="text-align: center; opacity: 0.51; color: #8DA3B7;font-size: 16px; font-weight: bold; letter-spacing: 1px; line-height: 20px; text-transform: uppercase;">
                                                                                                        <div style="text-align: center; opacity: 0.51; color: #8DA3B7;font-size: 16px; font-weight: bold; letter-spacing: 1px; line-height: 20px; text-transform: uppercase;">Your Coupon</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="padding-bottom: 8px; text-align: center;color: #249318; font-size: 50px; font-weight: normal; letter-spacing: 0px; line-height: 68px;">
                                                                                                        <div style="text-align: center;color: #249318; font-size: 50px; font-weight: normal; letter-spacing: 0px; line-height: 68px;">20%<sup style="color: #249318; font-size: 21px; line-height: 28px;">off</sup></div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <!-- Button : BEGIN -->
                                                                                                        <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td align="center" style="border-radius: 4px; background: #029BDC;">
                                                                                                                        <a href="#" style="background: #029BDC; border: 0; font-weight: 600; font-size: 14px; line-height: 20px; text-decoration: none; padding: 6px 8px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">Complete my listing</a>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                        <!-- Button : END -->
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody></table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>

                                                                            </td>
                                                                        </tr>
                                                                    </table>

                                                                </td>
                                                                <!-- Column : END -->
                                                                <!-- Column : BEGIN -->
                                                                <td valign="middle" width="50%" class="stack-column">
                                                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                        <tbody><tr>
                                                                            <td style="padding: 25px; color: #8DA3B7; text-align: left; font-size: 16px; letter-spacing: 0; line-height: 26px;">
                                                                                <div style="color: #8DA3B7; text-align: left; font-size: 16px; letter-spacing: 0; line-height: 26px;">Enter the code <span style="display: inline-block; color: #029BDC; text-align: left; font-size: 16px; letter-spacing: 0; line-height: 26px;">THANKFUL2020</span> when you complete your listing to enjoy the discount.</div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                                <!-- Column : END -->
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: #6C7E8D; font-size: 11px; letter-spacing: 0; line-height: 15px; padding: 0 0 44px;" class="mobile-padding-bottom-30">
                                            <div style="margin: 0; color: #6C7E8D; font-size: 11px; letter-spacing: 0; line-height: 15px;">Expires: 02 Dec 2020</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px; padding: 0;">
                                            <p style="margin: 0; color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;">Complete your listing today and have it presented to a vast network of motivated buyers!</p>
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