<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>SubBox</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script>
    	$(document).ready(function(){
    		$('.materialboxed').materialbox();
  		});
    </script>

    <style>
        body{
            background-color: black;
            color:white;
        }
    </style>


</head>
<body>

    

    


    <!-- background1 div -->

   

    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col s2">
        
                <img src="img/zeroref.png" width="100%"/>
            </div>
            <div class="col 4">
                <h1 style="font-weight:bolder; color:orange";>Add a course<small style="color:silver">FALL</small></h1>
            </div>
            
        </div>
     

        <div class="row">
            <div class="col s3"><br/>
                <fieldset>
                    <form>
                        Name: <input type="text" name="course_name">
                        Description: <textarea id="textarea1" class="materialize-textarea" name="course_description"></textarea>
                    </form>
                </fieldset>
            </div>

            <div class="col m9">
                <table>
                    <thead>
                        <tr>
                            <th data-field="course">Class</th>
                            <th data-field="teacher">Instructor</th>
                            <th data-field="Schedule">Schedule</th>
                            <th data-field="delete">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                            <td>$0.87</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- /.row -->

        
<script src="js/bootstrap.min.js"></script>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>