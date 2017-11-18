<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <SCRIPT>

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }


        function Sign() {
            var username = getCookie("zalogin");
            alert();
            console.log("iz sign fje"+username);
            putCookie("zalogin", username);
        }

        cookie_name = "zalogin";
        var YouEntered;


        function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        function putCookie() {


            if(document.cookie != document.cookie)
            {index = document.cookie.indexOf(cookie_name);}
            else
            { index = -1;}

            if (index == -1)
            {
                YourUser=document.poc.mail.value;
                YourPass=document.poc.password.value;
                console.log(YourUser);
                console.log(YourPass);
                document.cookie=cookie_name+"="+YourUser+":"+YourPass+";"
            }

        }
    </SCRIPT>

</head>

<body  >

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Login to <b>YaelsEverythingStore.com</b></h4> or go back to our <a href="./index.jsp">main site</a>.
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-6">
                    <div class="well">
                        <form id="loginForm" method="POST">
                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="" required="" title="Unesite username" placeholder="username">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password" value="" required="" title="Unesite password">
                                <span class="help-block"></span>
                            </div>
                            <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember"> Remember login
                                </label>
                                <p class="help-block">(if this is a private computer)</p>
                            </div>
                            <button type="submit" value="login" name="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-6">
                    <p class="lead">Register now for <span class="text-success">FREE</span></p>
                    <ul class="list-unstyled" style="line-height: 2">
                        <li><span class="fa fa-check text-success"></span> See all your orders</li>
                        <li><span class="fa fa-check text-success"></span> Shipping is always free</li>
                        <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                        <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                        <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                        <li><span class="fa fa-check text-success"></span>Holiday discounts up to 30% off</li>
                    </ul>
                    <p><a href="registracija.php" class="btn btn-info btn-block">Yes please, register now!</a></p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>