<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
    .menu{
        display:block;
        
  background-color: lightblue;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
    }
    .hr{
        color:black;
    }
    .body{
        background-color:#2596BE;
    }
    .p{
        color:lightblue;
        font-family:lucida;
        text-align:center;
    }
    div.menu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}
div.header {
    display:block;
        
        background-color: lightblue;
        padding-top: 50px;
        padding-right: 30px;
        padding-bottom: 50px;
        padding-left: 80px;
        text-align:center;

}

div.menu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}

div.logout a {
  display: inline-block;
  color: white;
  text-align: left;
  padding: -50px;
  text-decoration: none;
}

.footer{
  display: inline-block;
  color: white;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}

div.menu a:hover {
  background-color: #777;
}
* {
  box-sizing: border-box;
}
div.logout a:hover {
  background-color: #777;
}
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 2000px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

    div {
  background-color:#063970;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 2s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 2s;
  background-color: #063970;
  box-shadow: 0px 0px;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}

/* Standard syntax */
@keyframes example {
  from {background-color: white;}
  to {background-color: yellow;}
}
</style>
</head>
<div>
    <body class="body">
    <left><div class="logout"><a href="index.php">Sign up</a></div></left>
<b>
<H1><marquee>WELCOME TO COSIS 2022</marquee></H1>
</b>
<hr class="hr">
<strong><p class="p">Now learn programming languages in simple way</p></strong>
<div class="menu">
  <a href="studenthome.php">HOME</a>
    <a href="">HTML</a>
    <a href="">CSS</a>
    <a href="">JAVASCRIPT</a>
    <a href="">PHP</a>
    <a href="">C++</a>
    <a href="">JAVA</a>
    <a href="">SQL</a>
    <a href="">PYTHON</a>
    <a href="">C</a>
    <a href="">C#</a>
    <a href="">PERL</a>
    <a href="">AJAX</a>
    <a href="">XML</a>
    <a href="">JQUERY</a>
    <a href="">BOOTSRAP</a>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>HTML SUMMARY</h2>
    <p>html explanation..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>CSS SUMMARY</h2>
    <p>css explanation here..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>PHP SUMMARY</h2>
    <p>php explanation..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>JAVASCRIPT SUMMARY</h2>
    <p>javascript explanation..</p>
  </div>
</div>
<div class="footer">
    <h3>This site brought to you by<a href="mailto:janastumainjohn@gmail.com">janastumainjohn@gmail.com!</a></h3>
</div>

</body>
</div>
</html>
