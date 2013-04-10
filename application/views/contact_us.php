<div id="container_body">
    <div id="body">
        <div id="maincolumn_full">
            <table class="contentpaneopen">
                <tr valign="top">
                    <div id="container_frontpage">
                        <center> <p align="center">
                            <img src="images/content/contact_welcome.jpg" style="padding-bottom:10px;"/>
                            <div id="search_subhead">
                                <h1>Address details:</h1>
                                <strong>ACLOR INC. (HQ)</strong><br>
                                2619 SAN ISIDRO PKWY # 201, Laredo TX. 78045<br>
                                Office: (1-956) 795-1738<br>
                                Fax: (1-956) 795-1450<br><br>
                                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=2619+SAN+ISIDRO+PKWY+%23+201,+Laredo+TX.+78045&amp;ie=UTF8&amp;hq=&amp;hnear=2619+San+Isidro+Pkwy+%23201,+Laredo,+Webb,+Texas+78045&amp;t=m&amp;ll=27.60917,-99.469528&amp;spn=0.02662,0.036564&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br><br/>

                                <strong>GWC Servicios S.A. DE C.V.</strong><br>
                                Carretera Nacional Km. 8.5 Modulo Industrial de<br>
                                America C.P. 88295 Nuevo Laredo, Tamaulipas<br>
                                Tels. Tel. (52-867) 719 4624<br>
                                Fax (52-867) 719 4674<br><br>
                                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=27.421205,-99.531475&amp;num=1&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=27.423509,-99.534674&amp;spn=0.013332,0.018282&amp;z=15&amp;output=embed"></iframe><br/>
                                <br/><br/>

                                <h1>Any comment for us:</h1>
                                <?php echo form_open('mailus'); ?>
                                    <p>
                                        <label for="name">Name</label><br>
                                        <input maxlength="47" size="47" name="name" type="text" value="<?php echo set_value('name'); ?>"/>
                                        <?php echo '<div style="color:red">'.form_error('name').'</div>'; ?>
                                    </p>
                                    <p>
                                        <label for="email">Email<br></label>
                                        <input maxlength="47" size="47" name="email" type="text" value="<?php echo set_value('email'); ?>"/>
                                        <?php echo '<div style="color:red">'.form_error('email').'</div>'; ?>
                                    </p>
                                    <p>
                                        <label for="company">Company (optional)<br></label>
                                        <input maxlength="47" size="47" name="company" type="text" value="<?php echo set_value('company'); ?>" />
                                        <?php echo form_error('company'); ?>
                                        <?php echo '<div style="color:red">'.form_error('company').'</div>'; ?>
                                    </p>
                                    <p>
                                        <label for="subject">Subject<br></label>
                                        <input maxlength="47" size="47" name="subject" type="text" value="<?php echo set_value('subject'); ?>"/>
                                        <?php echo '<div style="color:red">'.form_error('subject').'</div>'; ?>
                                    </p>
                                    <p>
                                        <label for="comments">Comments<br></label>
                                        <textarea rows="6" cols="47" name="comments" type="text" value="<?php echo set_value('comments'); ?>"></textarea>
                                        <?php echo '<div style="color:red">'.form_error('comments').'</div>'; ?>
                                    </p>

                                    <p>
                                        <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
                                        <?php if (!$captchaSolved) { ?>
                                            <div>
                                                <?php echo $captchaHtml; ?>
                                                <?php echo form_input(
                                                    array(
                                                    'name'        => 'captcha',
                                                    'id'          => 'captcha',
                                                    'value'       => '',
                                                    'maxlength'   => '100',
                                                    'size'        => '50'
                                                    )
                                                );?>
                                            </div>
                                            <?php echo '<div style="color:red">'.form_error('captcha').'</div>'; ?>
                                        <?php }; ?>
                                    </p>

                                    <p>
                                       <input value="Submit" name="Submit" type="submit" />
                                       <input value="Reset" name="Reset" type="reset" />
                                    </p>
                                </form>
                            </div>
                        </p> </center>
                    </div>
                    <div id="container_circles">
                        <div id="circles_left"><img height="416" width="260" src="images/background_circles_left.jpg" /></div>
                        <div id="circles_right"><img height="392" width="248" src="images/background_circles_right.jpg" /></div>
                    </div>
                </tr>
            </table>
            <span class="article_separator">&nbsp;</span>
        </div>
    </div>
</div>
