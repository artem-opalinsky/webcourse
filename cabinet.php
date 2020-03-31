<?php
    //var_dump($_COOKIE);
    if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) ==''){
        header("Location: index.html");
        exit; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User cabinet</title>
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col l12 center-align">
                <h1 class="user-cabinet-header">User cabinet</h1>
            </div>
            <div class="col l12 center-align">
                <button id="logout" class="waves-effect waves-light btn blue lighten-2"><i class="material-icons right">exit_to_app</i>LogOUT</button>  
            </div>
        </div>
        <div class="row">
            <div class="col l8">
                <form>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="signup-name" name="name" type="text" class="validate">
                            <label class="active" for="signup-name">Name</label>
                        </div>   
                        <div class="input-field col s6">
                            <input id="signup-pass" name="pass" type="text" class="validate">
                            <label class="active" for="signup-pass">Password</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="signup-birthday" name="birthday" type="text" class="datepicker">
                            <label class="active" for="signup-birthday">Birthday</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l12">
                            Gender:
                            <p>
                                <label>
                                    <input class="with-gap sex" name="sex" type="radio" value="male"/>
                                    <span>Male</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap sex" name="sex" type="radio" value="female"/>
                                    <span>Female</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap sex" name="sex" type="radio" value="other"/>
                                    <span>Other</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="col l12 right-align">
                        <button class="btn waves-effect waves-light" type="submit" value="update" id="signup-submit">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    
                    <!-- <input type="submit" value="update" id="signup-submit"> -->
                </form>
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="script/ajax.js"></script>
    <script src="script/get_user_data.js"></script>
    <script src="script/logout.js"></script>
</body>

</html>