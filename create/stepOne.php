<!DOCTYPE html>
<html lang="en">

<?PHP
$dir = "../";
$title = "Create";
include $dir."inc/header.php";
include $dir."inc/menu.php";

?>

<body>
        <div class="textbox">
            <h1>Create New Slide</h1><br>
                <form method="get" action="">
                    <img src="../images/2x2.jpg" class="gridImg">
                    <img src="../images/3x3.jpg" class="gridImg">
                    <img src="../images/3x1.jpg" class="gridImg">
                    <img src="../images/varied.jpg" class="gridImg">
                    <br>
                    <input class="gridRadio" style="margin-left:75px" type="radio">
                    <input class="gridRadio" style="margin-left:150px" disabled type="radio">
                    <input class="gridRadio" style="margin-left:150px" disabled type="radio">
                    <input class="gridRadio" style="margin-left:150px" disabled type="radio">
                </form>
        </div>
        </body>
    
<style>
    
    
.gridImg {
    width:150px;
    height:150px;
    margin-right:1%;
}

.gridRadio {
    width:20%;
    
}
    
</style>