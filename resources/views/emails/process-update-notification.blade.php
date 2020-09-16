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
                                        <td style="padding: 0 0 26px;" class="mobile-center">
                                            <h1 style="margin: 0 0 26px; font-size: 36px; line-height: 48px; color: #1C486F; font-weight: 300; letter-spacing: 0;" class="mobile-header-title">Headline goes here</h1>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text">Lorem ipsum dolor sit amet, consectetur adipi scing elit. Morbi non tortor mollis leo aliquet eleifend. Nulla non est ac lacus tincidunt pellen tesque. Ut viverra nunc variu.Lorem ipsum dolor sit amet, consectetur adipi scing elit. Morbi non tortor mollis leo aliquet eleifend. Nulla non est.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 50px;" class="mobile-center mobile-padding-bottom-35">
                                            <p style="margin: 0;color: #1C486F; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 28px;">Your listing is approved!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 50px;">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" class="mobile-width">
                                                <tbody><tr>
                                                    <!-- Column : BEGIN -->
                                                    <th valign="middle" width="32%" class="stack-column">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="middle" style="width: 34px; height: 34px;">
                                                                    <div style="text-align: center; background-color: #249318; width: 34px; height: 34px; border-radius: 17px;">
                                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="height: 34px;">
                                                                            <tr>
                                                                                <td valign="middle" style="text-align: center;">
                                                                                    <img src="{!!asset('assets/check.svg')!!}" width="15" height="15" alt="check" border="0" style="height: auto;" />
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                                <td valign="middle" style="font-size: 12px; line-height: 15px; color: #61809B; text-align: left; letter-spacing: 0.25px; padding: 0 0 0 10px;">
                                                                    <div style="font-size: 12px; line-height: 15px; color: #61809B; text-align: left; letter-spacing: 0.25px; font-weight: 600; text-transform: uppercase;">Step One</div>
                                                                    <div style="font-size: 12px; line-height: 15px; color: #61809B; text-align: left; letter-spacing: 0.25px; font-weight: normal; white-space: nowrap;">Listing Submitted</div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </th>
                                                    <!-- Column : END -->
                                                    <th valign="middle" width="25" class="stack-column" >
                                                        <div style="height: 48px; width: 1px; padding: 0 12px;" class="mobile-line-container">
                                                            <div style="height: 48px; width: 1px; background: #DCE6EE;" class="mobile-line"></div>
                                                        </div>
                                                    </th>
                                                    <!-- Column : BEGIN -->
                                                    <th valign="middle" class="stack-column">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="middle" style="width: 34px; height: 34px;">
                                                                    <div style="text-align: center; background-color: #249318; width: 34px; height: 34px; border-radius: 17px;">
                                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="height: 34px;">
                                                                            <tr>
                                                                                <td valign="middle" style="text-align: center;">
                                                                                    <img src="{!!asset('assets/check.svg')!!}" width="15" height="15" alt="check" border="0" style="height: auto;" />
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                                <td valign="middle" style="font-size: 12px; line-height: 15px; color: #249318; text-align: left; letter-spacing: 0.25px; padding: 0 0 0 10px;">
                                                                    <div style="font-size: 12px; line-height: 15px; color: #249318; text-align: left; letter-spacing: 0.25px; font-weight: 600; text-transform: uppercase;">Step Two</div>
                                                                    <div style="font-size: 12px; line-height: 15px; color: #249318; text-align: left; letter-spacing: 0.25px; font-weight: normal; white-space: nowrap;">Listing Approved</div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </th>
                                                    <!-- Column : END -->
                                                    <th valign="middle" width="25" class="stack-column" >
                                                        <div style="height: 48px; width: 1px; padding: 0 12px;" class="mobile-line-container">
                                                            <div style="height: 48px; width: 1px; background: #DCE6EE;" class="mobile-line"></div>
                                                        </div>
                                                    </th>
                                                    <!-- Column : BEGIN -->
                                                    <th valign="middle" class="stack-column">
                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td valign="middle" style="width: 34px; height: 34px;">
                                                                    <div style="text-align: center; background-color: #fff; width: 34px; height: 34px; border-radius: 17px; border: 1px solid #DCE6EE;">
                                                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="height: 34px;">
                                                                            <tr>
                                                                                <td valign="middle" style="text-align: center;">
                                                                                    <p style="color: #C9D3DB; margin: 0; font-size: 16px; font-weight: 600; letter-spacing: 0; line-height: 22px;">3</p>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                                <td valign="middle" style="font-size: 12px; line-height: 15px; color: #BAC3CB; text-align: left; letter-spacing: 0.25px; padding: 0 0 0 10px;">
                                                                    <div style="font-size: 12px; line-height: 15px; color: #BAC3CB; text-align: left; letter-spacing: 0.25px; font-weight: 600; text-transform: uppercase;">Step Three</div>
                                                                    <div style="font-size: 12px; line-height: 15px; color: #BAC3CB; text-align: left; letter-spacing: 0.25px; font-weight: normal; white-space: nowrap;">Listing Live</div>
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
                                        <td>
                                            <!-- Button : BEGIN -->
                                            <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" class="mobile-button-container">
                                                <tbody>
                                                    <tr>
                                                        <td align="center" style="border-radius: 4px; background: #029BDC;">
                                                            <a class="mobile-button" href="#" style="background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">Review My Listing</a>
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