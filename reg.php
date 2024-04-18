<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Tool</title>
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
    <div class="form-box" id="signup" style="display: none">
    <h1 class="title">Sign Up</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <div class="input-field">
            <i class="fa-solid fa-user-tie"></i>
            <input type="text" name="name" id="name" placeholder="Name" required>
            
            </div><!--endinput-field-->
           
            <div class="input-field">
            <i class="fa-solid fa-at"></i>
            <input type="email" name="email" id="email"  placeholder="Email" required>
       
            </div><!--endinput-field-->    
                
            <div class="input-field">
            <i class="fa-solid fa-key"></i>
            <input type="password" type="password" placeholder="Password" required>
            
            </div><!--endinput-field-->
        </div><!--endinput-group-->
        <div class="button-field">
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </div><!--endbutton-field-->
    </form>

    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>

    <div class="links">
        <p>Already have an account?</p>
        <button id="signInButton">Sign In</button>
    </div>
    </div><!--endformbox-->
    
    </div><!--endcontainer-->

    <div class="container">
        <div class="form-box" id="signin">
        <h1 class="title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                
                <div class="input-field">
                <i class="fa-solid fa-at"></i>
                <input type="email" name="email" id="email"  placeholder="Email" required>
                </div><!--endinput-field-->    
                    
                <div class="input-field">
                <i class="fa-solid fa-key"></i>
                <input type="password" type="password" placeholder="Password" required>
                
                </div><!--endinput-field-->
                <p class="recover">
                    <a href="#"> Recover password</a>
                </p>
            </div><!--endinput-group-->
            
            <div class="button-field">
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </div><!--endbutton-field-->
        </form>
    
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
    
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
        </div><!--endformbox-->

    </div><!--endcontainer-->

    <div class="quote-container">
        <p class="quote" id="quote"></p>
        <p class="source" id="source"></p>
    </div>
    
    <script src="reg.js"></script>
</body>
</html>