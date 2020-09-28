<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
        <td style="padding: 0 0 43px;" class="mobile-padding-bottom-37">
            <img src="{!! $image !!}" width="600" height="" alt="" border="0" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;" class="g-img">
        </td>
    </tr>
    <tr>
        <td>
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody>
                    <tr>
                        <td style="font-size: 16px; line-height: 24px; color: #8DA3B7; padding-bottom: 18px; text-align: center;">
                            @if (isset($badge))
                            <p style="margin: 0 0 18px; line-height: 16px;" class="mobile-badge">
                                <span style="display: inline-block; padding: 0 7px; border-radius: 16px; background-color: #ECF3FF; color: #029BDC; font-size: 11px; font-weight: 600; letter-spacing: 0.5px; line-height: 16px; text-align: center;">&nbsp;{!! $badge !!}&nbsp;</span>
                            </p>
                            @endif
                            <h2 style="color: #1C486F; font-size: 26px; font-weight: 300; letter-spacing: 0; line-height: 33px; margin: 0 0 18px;" class="mobile-content-title">{!! $title !!}</h2>
                            <p style="margin: 0 0 10px; font-weight: normal; color: #8DA3B7;">
                                {!! $description !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 0 59px;" class="mobile-padding-bottom-34">
                            <!-- Button : BEGIN -->
                            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" class="mobile-button-container">
                                <tbody>
                                    <tr>
                                        <td align="center" style="border-radius: 4px; background: #029BDC;">
                                            <a class="mobile-button" href="{!! $url !!}" style="background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; color: #ffffff; display: block; border-radius: 4px; text-transform: capitalize;">{!! $button !!}</a>
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
