<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>CodeRunner</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/coderuner.css">
    </head>
    
    <body>
        <div id="header">
            <div id="logo">CodeRunner</div>
            <div id="buttonContainer">
                <div class="toggle active" id="html"><span>HTML</span></div>
                <div class="toggle" id="css"><span>CSS</span></div>
                <div class="toggle" id="js"><span>JavaScript</span></div>
                <div class="toggle active" id="op"><span>Output</span></div>
            </div>
            <div class="lout" ><a href="logout.php"><strong>LogOut</strong></a></div>
            <div class="back" ><a href="welcome.php"><strong>Back</strong></a></div>
            
        </div>
        <div id="editorContainer">
            <textarea id="htmlPanel" class="panel" title="HTML"><p id="pp">Your HTML here</p></textarea>
            <textarea id="cssPanel" class="panel hidden" title="CSS"></textarea>
            <textarea id="jsPanel" class="panel hidden" title="JavaScript"></textarea>
            <iframe id="opPanel" class="panel"></iframe>
        </div>
        <script src="js/coderunner.js"></script>
    </body>
</html>