<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIMS</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <!-- Let browser know website is optimized for mobile --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Scripts -->        
    <script>
        window.SIMS = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
    </script>
    <script src="js/jquery.min.js"> </script>
    <script src="js/custom.js"> </script>

    </head>
    <body>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                  <a href="#" class="brand-logo">Logo</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><span class="material-icons dp48 icon-header">email</span> Support@sims.com</li>
                    <li><span class="material-icons dp48 icon-header custom">phone</span> 021-9213392</li>
                  </ul>
                </div>
            </div>  
        </nav>


    
    <div class="container">
        <!-- <div class="row custom-header">
            <div class="col s1">
                <div class="logo">
                    Sims
                </div>
            </div>

            <div class="col s4 custom-header-1">
                <div class="icon-preview col s6 m9">
                    <div class="col s3">
                        <i class="material-icons dp48 icon-header">email</i>
                    </div>
                    <div class="col s3 icon-description custom">
                        Support@sims.com
                    </div>
                </div>
            </div>

            <div class="col s4 custom-header-2">
                <div class="icon-preview col s6 m9">
                    <div class="col s3">
                        <i class="material-icons dp48 icon-header custom">phone</i>
                    </div>
                    <div class="col s7 icon-description custom">
                        021-9213392
                    </div>
                </div>
            </div>

        </div> -->
        <div class="row custom-layout">

            <div class="col s1">
                <p>
                    <input type="radio" checked="" id="slide-radio-1" name="slide-name" />
                    <label for="slide-radio-1"> </label>
                </p>
                <p>
                    <input type="radio" id="slide-radio-2" name="slide-name" />
                    <label for="slide-radio-2"> </label>
                </p>
                <p>
                    <input type="radio" id="slide-radio-3" name="slide-name" />
                    <label for="slide-radio-3"> </label>
                </p>
            </div>

            <div id="slide-div-1">
                
                <div class="col s7">
                    <div class="content-text-1">
                        Lorem Ipsum is simply dummy text of the <br />
                        printing and typesetting industry
                    </div>

                    <div class="content-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, tempor incididunt ut labore et dolore magna aliqua. Ut enim tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    </div>

                </div>

            </div>

            <div id="slide-div-2">
                
                <div class="col s7">
                    <div class="content-text-1">
                        Lorem Ipsum is simply dummy text of the 
                    </div>

                    <div class="content-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. 
                    </div>

                </div>

            </div>

            <div id="slide-div-3">
                
                <div class="col s7">
                    <div class="content-text-1">
                        Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry text of the
                    </div>

                    <div class="content-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    </div>

                </div>

            </div>

            <div class="col s4">
                <div class="card-panel">

                    <div class="input-field col s12">
                        <input id="last_name" type="text">
                        <label for="last_name" class="">NIS</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="last_name" type="password">
                        <label for="last_name" class="">Password</label>
                    </div>
                    
                    <div class="custom-login-filled">
                        <input type="checkbox" class="filled-in" id="filled-in-box">
                        <label for="filled-in-box">Ingatkan login lain kali</label>
                    </div>
                    <button class="btn waves-effect waves-light custom-button-login" type="submit" name="action"> Masuk 
                    </button>
                    
                </div>
            </div>

        </div>
        
    </div>





    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
</html>