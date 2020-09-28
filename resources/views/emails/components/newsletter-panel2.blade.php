<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td style="padding: 10px 10px 18px; text-align: center">
                <img src="{!! $image !!}" alt="" style="width: 100%; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;" width="270" height="" border="0">
            </td>
        </tr>
        <tr>
            <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;">
                <h2 style="color: #1C486F; font-size: 26px; font-weight: 300; letter-spacing: 0; line-height: 33px; margin: 0 0 18px;" class="mobile-content-title">{!! $title !!}</h2>
                <p style="margin: 0 0 18px; font-weight: normal; color: #8DA3B7;">
                    {!! $description !!}
                </p>
                <p style="margin: 0 0 18px;">
                    <a href="{!! $url !!}" style="font-size: 14px; line-height: 16px; text-decoration: none; color: #029BDC;">{!! $button !!}</a>
                </p>
                <p style="margin: 0; color: #8DA3B7; font-family: 'Source Sans Pro', sans-serif !important; font-size: 14px; letter-spacing: 0; line-height: 23px;">
                    {!! $comments !!} comments&nbsp;·&nbsp;{!! $views !!} views
                </p>
            </td>
        </tr>
    </tbody>
</table>