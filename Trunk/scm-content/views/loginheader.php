<div class="modal-header">
    <span id="myModalLabel">Login Form</span>
</div>
<div class="modal-body">
    <form action="/demo42/index.php" method="post" id="login-form" class="form-horizontal">
        <fieldset class="userdata">

            <div class="control-group">
                <label class="control-label" for="modlgn-username">User Name</label>
                <div class="controls">
                    <input id="modlgn-username" name="username" placeholder="User Name" type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="modlgn-passwd">Password</label>
                <div class="controls">
                    <input id="modlgn-passwd" placeholder="Password" name="password" type="password">
                </div>
            </div>

            <div class="control-group">
                <div class="control-label">

                    <div class="btn-group">
                        <button class="button" type="submit" name="Submit">Log in</button>
                        <button class="button dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo42/index.php?option=com_users&amp;view=reset">
                                    Forgot your password?</a>
                            </li>
                            <li>
                                <a href="/demo42/index.php?option=com_users&amp;view=remind">
                                    Forgot your username?</a>
                            </li>
                            <li>
                                <a href="/demo42/index.php?option=com_users&amp;view=registration">
                                    Create an account</a>
                            </li>
                        </ul>
                    </div>


                </div>


                <div class="controls">
                    <label class="inline" for="modlgn-remember">

                        <input name="remember" class="checkbox" value="yes" id="modlgn-remember" type="checkbox">Remember Me
                    </label>
                </div>
            </div>



        </fieldset>
        <input name="option" value="com_users" type="hidden">
        <input name="task" value="user.login" type="hidden">
        <input name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZ2aWV3PWZlYXR1cmVkJkl0ZW1pZD00MzU=" type="hidden">
        <input name="53a518f0a45dd027c29e2c8e729674a7" value="1" type="hidden">
    </form>
</div>
<div class="modal-footer">
    <a class="button" data-dismiss="modal">Close</a>
</div>