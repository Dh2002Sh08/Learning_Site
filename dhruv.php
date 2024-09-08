<?php
header("refresh:10; url=login.php")
?> 
<html>
    <head>
        <title>AIO eWEB</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn..bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <style>
            .navbar{
                background-color:rgb(58, 57, 57);
                border-radius:30px;
            }
            .navbar li{
                list-style:none;
                float:left;
               margin-right:20px;
            }
            .navbar ul{
                overflow:auto;
            }
            .navbar li a{
                padding:2px 2px;
                text-decoration:none;
                color:white;
                display:inline-block;
                margin:0 5px;
                line-height:63px;
                font-size:20px;
            }
            .navbar a:hover{
                color:rgb(109, 245, 166);
            }      
            html {
                scroll-behavior:smooth;
            }
            .navbar input{
                border:2px solid rgb(9, 7, 116);
                padding:5px 12px;
                border-radius:14px;
               width:200px;
               cursor:pointer;
               margin-top:3px;

            }
            .logo{
                font-style:bold;
                font-size: 35px;
                line-height:62px;
                padding:4px 50px;
                color:rgb(177, 241, 209);
                text-align:center;
            }
            .search{
                padding:3px 16px;
                border:1px solid rgb(2, 2, 41);
                border-radius:30px;
                background-color:rgb(95, 88, 99);
               float:right;
               margin:12px;   
            }               
            .search::after{
                content:"";
                clear:both;
                display:table;
            }
            h3{
            text-align:center;
            }
            *{
                box-sizing:border-box;
            }
            .row::after{
                content:"";
                clear:both;
                display:table;
            }
            /*For Mobile Phones*/
            [class*="col-"]{
                width:100%;
            }
            @media only screen and (min-width:600px)
             /*For Tablets*/
            {
                .col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
             }
             @media only screen and (min-width:768px)
            {
                /*For Desktop*/
                .col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
            }
            .menu li {
                padding:8px;
                margin-bottom:7px;
                background-color:rgba(156, 152, 151, 0.795);
                color:rgb(15, 15, 14);
                box-shadow:rgb(223, 197, 68);
                border-radius:20px;
                text-align:center;
            }
            .row ul{
                list-style-type:none;
                margin:5px;
                padding:5px;
                box-shadow:rgb(240, 209, 143);
            }
            .row li:hover{
                background-color:rgb(252, 124, 107);
            }
            .header{
                background-color:rgb(243, 237, 237);
                color:rgb(8, 6, 6);
                padding:3px 11px;
                border-radius:30px;
                font-size:20px;
            }
            .row li a{
                text-decoration:none;
                font-size:19px;
                color:black;
            }
            .navbar .search button:hover{
                background-color:azure;
            }
            .row li button{
                border-radius:12px;
                padding:1px 68px;
                background-color:rgb(245, 240, 228);
                border:1px rgb(15, 11, 0);
                color:white;
            }
            .login li a{
                text-decoration:none;
                font-size:50px;
                margin-left: 540px;
                color:black;
                text-align: center;
              }
              .login li a:hover{
                  background-color: rgb(231, 34, 34);
                  color:rgb(250, 249, 245);
                  border-radius: 5PX;
              }
             </style>

            </head>
            <body style="background-color:rgb(107, 134, 143);">
                    <header">
                    <nav class="navbar">              
                        <ul>
                            <label class="logo"><span style="color:rgb(177, 241, 209);">*~`</span>eWEB<span style="color:rgb(177, 241, 209);">`~*</span></label>
                            <li><a href="define.php" >HTML</a></li>
                            <li><a href="python.php">PYTHON</a> </li>
                            <li><a href="KJI.php">JAVA</a></li>
                            <li><a href="gbk.php">PHP</a></li>
                            <div class="search">
                                <form>
                                <input type="search" name=b1 value=""  placeholder="search"></form></div>
                            </ul>
                      </nav>
                </header>
                <div class="header">
                    <h3>HTML</h3>
                </div><br>
                <iframe align="right" src="define.html" width="845px" height="343px" name="img"
                          style="border-radius:15px; margin-left:5px; padding:5px 2px; background-color:rgb(234, 246, 250);"></iframe>
                                 <div class="row">
                    <div class="col-3 col-s-3 menu">
                        <ul>
                            <li><button><a href="define.html" target="img">BASIC</a></button></li>
                            <li><button><a href="design.html" target="img">Design</a></button></li>
                            <li><button><a href="li.html" target="img">Favicon,<br>Table</a></button> </li>
                            <li><button><a href="https://www.w3schools.com/html/default.asp" target="_blank">Want more<br>Examples</a></button></li>
                        </ul>
                         </div>
                         </div>
                         <br>
                         <br>
                         <div class="header">
                            <h3>Python</h3>
                        </div><br>
                        <iframe align="right" src="python.html" width="845px" height="343px" name="python" alltransparency="true"
                          style="border-radius:15px; margin-left:5px; padding:5px 2px; background-color:rgb(234, 246, 250);" ></iframe>
                                         <div class="row">
                            <div class="col-3 col-s-3 menu">
                                <ul>
                                    <li><button><a href="python.html" target="python">BASIC</a></button></li>
                                    <li><button><a href="hyu.html" target="python">Syntax</a></button></li>
                                    <li><button><a href="py.html" target="python">IF,Else<br>Condition</a></button> </li>
                                    <li><button><a href="https://www.w3schools.com/python/default.asp" target="_blank">Want more<br>Examples</a></button></li>
                                </ul>
                                 </div>
                                 </div>
                                 <br>
                                 <br>
                                 <div class="header">
                                    <h3>JAVA</h3>
                                </div><br>
                                <iframe align="right" src="KJI.HTML" width="845px" height="343px" name="java"
                          style="border-radius:15px; margin-left:5px; padding:5px 2px; background-color:rgb(234, 246, 250);"></iframe>
                               <div class="row">
                                    <div class="col-3 col-s-3 menu">
                                        <ul>
                                            <li><button><a href="KJI.HTML" target="java">BASIC</a></button></li>
                                            <li><button><a href="ghi.html" target="java">Integer<br>While Loop</a></button></li>                                         
                                            <li><button><a href="okg.html" target="java">Break and<br>Continue</a></button></li>                                         
                                            <li><button><a href="https://www.w3schools.com/java/default.asp" target="_blank">Want more<br>Examples</a></button></li>
                                        </ul>
                                         </div>
                                         </div>
                                         <br>
                                         <br>
                                         <div class="header">
                                            <h3>PHP</h3>
                                        </div><br>
                                         <iframe align="right" src="gbk.HTML" width="845px" height="343px" name="PHP"
                          style="border-radius:15px; margin-left:5px; padding:5px 2px; background-color:rgb(234, 246, 250);"></iframe>
                               <div class="row">
                                    <div class="col-3 col-s-3 menu">
                                        <ul>
                                            <li><button><a href="gbk.HTML" target="PHP"> Intro and<br>BASIC</a></button></li>
                                            <li><button><a href="lkj.html" target="PHP">Syntax</a></button></li>                                         
                                            <li><button><a href="mnb.html" target="PHP">Maths and<br>If else<br>condition</a></button></li>                                         
                                            <li><button><a href="https://www.w3schools.com/php/default.asp" target="_blank">Want more<br>Examples</a></button></li>
                                        </ul>
                                         </div>
                                         </div>
                                         <br>
                                         <br>
                                         <hr>
                                         <div class="login">
                                        <li><a href="login.php" target="_blank">LOG OUT</a></li>
                                        
                                        </div>
                        </body>
                </html>