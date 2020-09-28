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
                            <td style="padding: 64px 57px 20px; background-color: #ffffff;" class="inner-padding">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td align="center" style="padding: 0 0 40px; text-align: center;">
                                            <img src="{!!asset('assets/tresle_icon.svg')!!}" width="48" height="48" alt="logo" border="0" style="height: auto; background: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #1C486F; text-transform: uppercase;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding: 0 0 81px; text-align: center;" class="mobile-padding-bottom-35">
                                            <h1 style="margin: 0 0 14px; font-size: 36px; line-height: 49px; color: #1C486F; font-weight: 300; letter-spacing: -1.04px;" class="mobile-header-title">Negotiating tips — getting the best deal for your business</h1>
                                            <p style="margin: 0; font-weight: normal; font-size: 16px; line-height: 24px; color: #8DA3B7;" class="mobile-header-text">
                                                It's a lot of work negotiating the sale of your business and there may be times where it can be overwhelming. Learn the steps and precautions you can take so your sale process is a stress-free as possible.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td dir="ltr" style="padding: 0 0 81px;" width="100%" class="stack-row2">
                                            @component('emails.components.steps-content-panel', [
                                                'image' => 'https://via.placeholder.com/191X235',
                                                'step' => '01',
                                                'title' => 'The headline goes here',
                                                'description' => 'A delay in response can negatively impact a deal. Change your preferences to receive an email notification when a Buyer sends a message to the Tresle Message Center.',
                                                'button_type' => 'anchor',
                                                'url' => '#',
                                                'button' => 'Read More',
                                                'comments' => '24',
                                                'views' => '4,200'
                                            ])
                                            @endcomponent
                                        </td>
                                    </tr>
                                    <tr>
                                        <td dir="rtl" style="padding: 0 0 81px;" width="100%" class="stack-row2 stack-row-right">
                                            @component('emails.components.steps-content-panel', [
                                                'image' => 'https://via.placeholder.com/191X235',
                                                'step' => '02',
                                                'title' => 'The headline goes here',
                                                'description' => 'A delay in response can negatively impact a deal. Change your preferences to receive an email notification when a Buyer sends a message to the Tresle Message Center.',
                                                'button_type' => 'anchor',
                                                'url' => '#',
                                                'button' => 'Read More',
                                                'comments' => '24',
                                                'views' => '4,200'
                                            ])
                                            @endcomponent
                                        </td>
                                    </tr>
                                    <tr>
                                        <td dir="ltr" style="padding: 0 0 81px;" width="100%" class="stack-row2">
                                            @component('emails.components.steps-content-panel', [
                                                'image' => 'https://via.placeholder.com/191X235',
                                                'step' => '03',
                                                'title' => 'The headline goes here',
                                                'description' => 'A delay in response can negatively impact a deal. Change your preferences to receive an email notification when a Buyer sends a message to the Tresle Message Center.',
                                                'button_type' => 'anchor',
                                                'url' => '#',
                                                'button' => 'Read More',
                                                'comments' => '24',
                                                'views' => '4,200'
                                            ])
                                            @endcomponent
                                        </td>
                                    </tr>
                                    <tr>
                                        <td dir="rtl" style="padding: 0 0 81px;" width="100%" class="stack-row2 stack-row-right">
                                            @component('emails.components.steps-content-panel', [
                                                'image' => 'https://via.placeholder.com/191X235',
                                                'step' => '04',
                                                'title' => 'The headline goes here',
                                                'description' => 'A delay in response can negatively impact a deal. Change your preferences to receive an email notification when a Buyer sends a message to the Tresle Message Center.',
                                                'button_type' => 'button',
                                                'url' => '#',
                                                'button' => 'Get the Ebook'
                                            ])
                                            @endcomponent
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