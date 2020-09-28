<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td class="stack-column stack-column-media stack-column-img" width="38%" valign="top">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td dir="ltr" valign="top">
                                <img src="{!! $image !!}" alt="" class="center-on-narrow" style="height: auto; max-width: 191px; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;" width="100%" height="" border="0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="stack-column stack-column-media" width="61.99%" valign="top">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td dir="ltr" valign="top">
                                <h2 style="color: #1C486F; font-size: 21px; font-weight: 600; letter-spacing: 0; line-height: 28px; margin: 0 0 15px;"><span style="color: #029BDC; font-size: 28px; font-weight: 600; letter-spacing: 2.55px; border-bottom: 2px solid #029BDC ;line-height: 38px; display: inline-block;">{!! $step !!}</span><span class="title">{!! $title !!}</span></h2>
                                <p style="opacity: 0.5; color: #8DA3B7; font-size: 16px; letter-spacing: 0; line-height: 24px; margin: 0 0 15px;">{!! $description !!}</p>
                                <p style="margin: 0 0 16px;">
                                    @if ($button_type === 'anchor')
                                        <a href="{!! $url !!}" style="font-size: 14px; font-weight: 600; line-height: 16px; text-decoration: none; color: #029BDC;">{!! $button !!}</a>
                                    @endif
                                    @if ($button_type === 'button')
                                        <a class="mobile-button" href="{!! $url !!}" style="display: inline-block; min-width: 172px; background: #029BDC; border: 0; font-size: 16px; line-height: 24px; text-decoration: none; padding: 10px 30px; margin-top: 10px; color: #ffffff; border-radius: 4px; text-align: center;">{!! $button !!}</a>
                                    @endif
                                </p>
                                @if (isset($comments) || isset($views))
                                <p style="margin: 0; color: #8DA3B7; font-family: 'Source Sans Pro', sans-serif !important; font-size: 14px; letter-spacing: 0; line-height: 23px;">
                                    @if (isset($comments))
                                        {!! $comments !!} comments
                                    @endif
                                    @if (isset($views))
                                        &nbsp;·&nbsp;{!! $views !!} views
                                    @endif
                                </p>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>