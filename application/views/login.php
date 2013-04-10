        <div id="container_body">
            <div id="body">
                <div id="maincolumn_full">
                    <table class="contentpaneopen">
                        <tr valign="top">
                            <div id="container_frontpage">
                                <center> <p align="center">
                                    <img src="images/content/investors_welcome.jpg" style="padding-bottom:10px;"/>
                                    <div id="search_subhead" style="padding-left:200px;padding-top:30px;">

                                        <h1>Login </h1>
                                        <?php echo form_open('user/login'); ?>
                                            <p>
                                                <label for="username">User Name</label><br>
                                                <input maxlength="32" size="32" name="username" type="text" value="<?php echo set_value('username'); ?>"/>
                                                <?php echo '<div style="color:red">'.form_error('username').'</div>'; ?>
                                            </p>
                                            <p>
                                                <label for="password">Password<br></label>
                                                <input maxlength="64" size="32" name="password" type="password" value="<?php echo set_value('password'); ?>"/>
                                                <?php echo '<div style="color:red">'.form_error('email').'</div>'; ?>
                                            </p>
                                            <p>
                                               <input value="Submit" name="Submit" type="submit" />
                                               <input value="Reset" name="Reset" type="reset" />
                                            </p>
                                        </form>

                                        <p><?php echo '<div style="color:red">'.validation_errors().'</div>'; ?></p>

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
