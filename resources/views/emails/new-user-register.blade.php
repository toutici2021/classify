<div id="wrapper" dir="ltr"
     style="background-color: #f7f7f7; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td align="center" valign="top">
                <table id="template_container"
                       style="background-color: #ffffff; border: 1px solid #dedede; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); border-radius: 3px;"
                       border="0" width="600" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td align="center" valign="top">
                            <table id="template_header"
                                   style="background-color: #6C63FF; color: #ffffff; border-bottom: 0; font-weight: bold; line-height: 100%; vertical-align: middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; border-radius: 3px 3px 0 0;"
                                   border="0" width="600" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td id="header_wrapper" style="padding: 36px 48px; display: block;">
                                        <h1 style="font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-size: 30px; font-weight: 300; line-height: 150%; margin: 0; text-align: left; text-shadow: 0 1px 0 #626363; color: #ffffff;">
                                            Verify your account</h1>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table id="template_body" border="0" width="600" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td id="body_content" style="background-color: #ffffff;" valign="top">
                                        <table border="0" width="100%" cellspacing="0" cellpadding="20">
                                            <tbody>
                                            <tr>
                                                <td style="padding: 48px 48px 32px;" valign="top">
                                                    <div id="body_content_inner"
                                                         style="color: #636363; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; font-size: 14px; line-height: 150%; text-align: left;">
                                                        <p style="margin: 0 0 5px;">
                                                            Hi, {{$user_name}},</p>
                                                        <p style="margin: 0 0 10px;">Thank you
                                                            for registering your account on {{get_option('site_name')}}.
                                                            You need to
                                                            verify your email address first to continue using it.
                                                        <p style="margin:0 0 10px">Please click the link below to verify
                                                            your email address.</p>
                                                        <p style="margin:0 0 10px"><a style="color:#6C63FF;"
                                                                                      href="{{ route('verifyMemberEmailAddress',$activation_code) }}"
                                                                                      target="_blank">Click here to
                                                                verify</a>
                                                        </p>

                                                    </div>
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
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top"></td>
        </tr>
        </tbody>
    </table>
</div>
