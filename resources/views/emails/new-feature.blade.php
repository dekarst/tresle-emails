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
                            <td style="padding: 64px 110px 27px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 40px;" class="mobile-center">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 44px;" class="mobile-center">
                                            <h1 style="margin: 0 0 17px; font-size: 36px; line-height: 48px; color: #1C486F; font-weight: 300; letter-spacing: 0;" class="mobile-header-title">New Feature</h1>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text">You asked, we listened. Today is the day we finally introduce one of the most requested features into the platform.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 37px;">
                                            <img src="https://via.placeholder.com/600x300" width="600" height="" alt="alt_text" border="0" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;" class="g-img">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td class="mobile-padding-bottom-18" style="font-size: 16px; line-height: 24px; color: #8DA3B7; padding-bottom: 44px;">
                                                            <p style="margin: 0 0 20px; text-align: left; line-height: 16px;" class="mobile-badge">
                                                                <span style="display: inline-block; padding: 0 7px; border-radius: 16px; background-color: #ECF3FF; color: #029BDC; font-size: 11px; font-weight: 600; letter-spacing: 0.5px; line-height: 16px; text-align: center;">&nbsp;New&nbsp;</span>
                                                            </p>
                                                            <h2 style="color: #1C486F; font-size: 21px; font-weight: 600; letter-spacing: 0; line-height: 24px; margin: 0 0 18px;" class="mobile-content-title">Meet the new Tresle-QuickBooks integration</h2>
                                                            <p style="margin: 0 0 18px; font-weight: normal; color: #8DA3B7;">
                                                                <strong style="font-weight: 700;">Your company's financial data, in one-click —</strong> Say goodbye to manual data entry. With Tresle's new QuickBooks integration, it's easier than ever to import your company's financial data to Tresle and sell faster.
                                                                <br />
                                                                <br />
                                                                Sellers will be able to sync their up-to-date financial information directly from their QuickBooks account to their Tresle listing with ‘one-click’.
                                                                <br />
                                                                <br />
                                                                Here's what you can do with Tresle-QuickBooks integration:
                                                            </p>
                                                            <ul style="padding: 0; margin: 0; list-style: none; font-weight: normal; color: #8DA3B7;">
                                                                <li style="margin:0 0 8px;font-weight: normal;" class="list-item-first"><span style="margin: 0 16px 0 4px; color: #029BDC;">•</span>Gain trust with buyers through increased transparency</li>
                                                                <li style="margin:0 0 8px;font-weight: normal;"><span style="margin: 0 16px 0 4px; color: #029BDC;">•</span>Shorten due diligence time</li>
                                                                <li style="margin:0 0 8px;font-weight: normal;"><span style="margin: 0 16px 0 4px; color: #029BDC;">•</span>Eliminate the need for manual import without sacrificing security</li>
                                                                <li style="margin: 0;font-weight: normal;" class="list-item-last"><span style="margin: 0 16px 0 4px; color: #029BDC;">•</span>Display up-to-date financial information with just one click</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 0 0 44px;">
                                                            <!-- Button : BEGIN -->
                                                            <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" class="mobile-button-container">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" style="border-radius: 4px; background: #029BDC;">
                                                                            <a class="mobile-button" href="#" style="background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">Tell Me More</a>
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
                                    <tr>
                                        <td style="padding: 8px 0;">
                                            <div class="hr" style="height:1px;border-bottom:1px solid #8DA3B7; opacity: 0.25;">&nbsp;</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 18px 0 0;">
                                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 16px; line-height: 24px; color: #8DA3B7; padding-bottom: 18px;">
                                                            <p style="margin: 0 0 20px; text-align: left; line-height: 16px;" class="mobile-badge">
                                                                <span style="display: inline-block; padding: 0 7px; border-radius: 16px; background-color: #ECF3FF; color: #13CE66; font-size: 11px; font-weight: 600; letter-spacing: 0.5px; line-height: 16px; text-align: center; text-transform: uppercase;">&nbsp;Latest Release&nbsp;</span>
                                                            </p>
                                                            <h2 style="color: #1C486F; font-size: 21px; font-weight: 600; letter-spacing: 0; line-height: 24px; margin: 0 0 18px;">Name of Feature</h2>
                                                            <p style="margin: 0; color: #8DA3B7; font-size: 16px; font-weight: normal;">
                                                                This new feature is available to you since you’re on our premium tier! Log in today to see a tutorial for how it works.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="https://via.placeholder.com/600x300" width="600" height="" alt="alt_text" border="0" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;" class="g-img">
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
