<table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" width="84%" class="mobile-content-section">
    <tbody>
        <tr>
            <td style="font-size: 16px; line-height: 24px; color: #8DA3B7; padding: 13.5px 32.5px 13.5px 30.63px; border: 1px solid #EAEDF3; border-left: 3px solid {!! $color !!}; border-radius: 0 4px 4px 0; background-color: #FFFFFF; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.04);" class="mobile-content-items">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td class="stack-column mobile-padding-bottom-13-5">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tbody>
                                        @if (isset($badge))
                                        <tr>
                                            <td>
                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p style="margin: 0 0 12.5px; text-align: left; line-height: 16px;" class="mobile-badge">
                                                                    <span style="display: inline-block; padding: 0 7px; border-radius: 28px; background-color: {!! $badge_color !!}; color: {!! $color !!}; font-size: 10px; font-weight: 600; letter-spacing: 0.5px; line-height: 16px; text-align: center; text-transform: uppercase;">&nbsp;{!! $badge !!}&nbsp;</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td>
                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="19%"><span style="color: #1C486F; font-size: 36px; letter-spacing: 0; line-height: 38px;">{!! $count !!}</span></td>
                                                            <td>
                                                                <div style="color: #8DA3B7; font-size: 11px; font-weight: 600; letter-spacing: 0.25px; line-height: 17px; margin: 0;">{!! $text1 !!}</div>
                                                                <div style="color: #8DA3B7; font-size: 11px; font-weight: 600; letter-spacing: 0.25px; line-height: 17px; margin: 0;">{!! $text2 !!}</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="41%" class="stack-column mobile-padding-bottom-13-5">
                                <a href="{!! $url !!}" style="background: transparent; border: 1px solid {!! $border_color !!}; border-radius: 2px; font-size: 13px; font-weight: 600; line-height: 24px; text-decoration: none; padding: 6px; color: {!! $color !!}; text-transform: capitalize; text-align: center; display: block;">{!! $button !!}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>