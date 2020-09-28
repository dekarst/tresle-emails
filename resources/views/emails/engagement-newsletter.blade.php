@extends('emails.layout')

@section('content')
    <!-- Email Body : BEGIN -->
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="700" style="margin: auto;" class="email-container">
        <!-- Clear Spacer : BEGIN -->
        <tr>
            <td aria-hidden="true" height="50" style="font-size: 0px; line-height: 0px;" class="top-space">
                <p style="text-align: right; font-size: 14px; font-weight: bold; line-height: 20px; color: #61809B; opacity: 0.5;">FEB 20 — FEB 27</p>
            </td>
        </tr>
        <!-- Clear Spacer : END -->

        <!-- Main Body : BEGIN -->
        <tr>
            <td class="outer-padding">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td style="padding: 64px 48px 22px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 0 0 40px; text-align: center;">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 0 44px; text-align: center;" class="mobile-padding-bottom-30">
                                            <h1 style="margin: 0 0 14px; font-size: 36px; line-height: 49px; color: #1C486F; font-weight: 300; letter-spacing: -1px;" class="mobile-header-title">The most popular posts of the last week on Tresle</h1>
                                            <p style="margin: 0;color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px;" class="mobile-header-text">You asked, we listened. Today is the day we finally introduce one of the most requested features into The App.</p>
                                        </td>
                                    </tr>
                                </table>
                                @component('emails.components.newsletter-panel1', [
                                    'image' => 'https://via.placeholder.com/600x260',
                                    'badge' => 'New',
                                    'title' => 'Subject Headline Goes Here',
                                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molesti.',
                                    'url' => '#',
                                    'button' => 'Request A Demo'
                                ])
                                @endcomponent
                                @component('emails.components.newsletter-panel1', [
                                    'image' => 'https://via.placeholder.com/600x260',
                                    'title' => 'Subject Headline Goes Here',
                                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molesti.',
                                    'url' => '#',
                                    'button' => 'Request A Demo'
                                ])
                                @endcomponent
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 8px 0;">
                                            <div class="hr" style="height:1px;border-bottom:1px solid #8DA3B7; opacity: 0.25;">&nbsp;</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 38px 0;">
                                            <p style="margin: 0; color: #029BDC; font-size: 16px; font-weight: bold; letter-spacing: 0; line-height: 20px; text-transform: uppercase; text-align: center;">Popular This Week</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 18px 0 0;" class="mobile-padding-0">
                                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <!-- Column : BEGIN -->
                                                        <td width="50%" valign="top" style="padding: 0 0 41px;" class="stack-column mobile-padding-bottom-14">
                                                            @component('emails.components.newsletter-panel2', [
                                                                'image' => 'https://via.placeholder.com/270X150',
                                                                'title' => 'Subject Headline Goes Here',
                                                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor...',
                                                                'url' => '#',
                                                                'button' => 'Read More',
                                                                'comments' => '24',
                                                                'views' => '4,200'
                                                            ])
                                                            @endcomponent
                                                        </td>
                                                        <!-- Column : END -->
                                                        <!-- Column : BEGIN -->
                                                        <td width="50%" valign="top" style="padding: 0 0 41px;" class="stack-column mobile-padding-bottom-14">
                                                            @component('emails.components.newsletter-panel2', [
                                                                'image' => 'https://via.placeholder.com/270X150',
                                                                'title' => 'Subject Headline Goes Here',
                                                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor...',
                                                                'url' => '#',
                                                                'button' => 'Read More',
                                                                'comments' => '24',
                                                                'views' => '4,200'
                                                            ])
                                                            @endcomponent
                                                        </td>
                                                        <!-- Column : END -->
                                                    </tr>
                                                    <tr>
                                                        <!-- Column : BEGIN -->
                                                        <td width="50%" valign="top" style="padding: 0 0 41px;" class="stack-column mobile-padding-bottom-14">
                                                            @component('emails.components.newsletter-panel2', [
                                                                'image' => 'https://via.placeholder.com/270X150',
                                                                'title' => 'Subject Headline Goes Here',
                                                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor...',
                                                                'url' => '#',
                                                                'button' => 'Read More',
                                                                'comments' => '24',
                                                                'views' => '4,200'
                                                            ])
                                                            @endcomponent
                                                        </td>
                                                        <!-- Column : END -->
                                                        <!-- Column : BEGIN -->
                                                        <td width="50%" valign="top" style="padding: 0 0 41px;" class="stack-column mobile-padding-bottom-14">
                                                            @component('emails.components.newsletter-panel2', [
                                                                'image' => 'https://via.placeholder.com/270X150',
                                                                'title' => 'Subject Headline Goes Here',
                                                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor...',
                                                                'url' => '#',
                                                                'button' => 'Read More',
                                                                'comments' => '24',
                                                                'views' => '4,200'
                                                            ])
                                                            @endcomponent
                                                        </td>
                                                        <!-- Column : END -->
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