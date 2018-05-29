<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      /*CSS Reset*/
button,
form,
fieldset,
input,
textarea {
  margin: 0;
  padding: 0;
  outline: 0;
  border: 0;
  background: transparent;
  vertical-align: baseline;
  font-size: 100%;
}
body {
  line-height: 1;
}
h1, h2, h3, h4, h5, h6 {
  font-weight: normal;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none;
}
/* remember to define focus styles! */
:focus {
  outline: 0;
}
/* remember to highlight inserts somehow! */
ins {
  text-decoration: none;
}
del {
  text-decoration: line-through;
}
/* tables still need 'cellspacing="0"' in the markup */
table {
  border-spacing: 0;
  border-collapse: collapse;
}
address, caption, cite, code, dfn, em, strong, var {
  font-weight: normal;
  font-style: normal;
}
caption, th {
  text-align: left;
  font-weight: normal;
  font-style: normal;
}
html {
  background-color: #3a3a3a;
}
body {
  min-height: 100%;
  height: 100%;
  background: url(http://subtlepatterns.subtlepatterns.netdna-cdn.com/patterns/navy_blue.png) repeat;
  font-weight: lighter;
  font-family: "HelveticaNeue-Light",
    "Helvetica Neue Light",
    "Helvetica Neue",
    Helvetica,
    Arial,
    "Lucida Grande",
    sans-serif;
  -webkit-font-smoothing: subpixel-antialiased;
}
a {
  color: #b1c;
  text-decoration: none;
}
p {
  display: block;
  width: 300px;
  margin-left: -180px;
  margin-top: -5px;
}
p a {
  color: #a4a4a4;
  font-size: 10px;
  text-decoration: none;
}
p a:hover {
  color: #be1dcc;
  border-bottom: 1px solid gray;
}
#warp {
  position: relative;
  margin: 50px auto 0;
  width: 400px;
  text-align: left;
  color: white;
}
form {
  display: block;
  width: 400px;
  height: 300px;
}
h1 {
  color: #b6b6b6;
  font-weight: bolder;
  font-size: 60px;
}
.admin {
  height: 250px;
  float: left;
  width: 200px;
  border-right: 1px solid #333333;
  text-align: left;
  left: 0;
  top: 0;
  transition: all 200ms ease-in 100ms;
}
.cms {
  height: 250px;
  top: 70px;
  left: -62px;
  float: right;
  width: 150px;
  text-align: right;
  transition: all 200ms ease-in 100ms;
}
.admin, .cms {
  position: relative;
  display: block;
  overflow: hidden;
  transform: rotate(25deg);
}
.cms h1 {
  margin-left: 0px;
  color: #838385;
}
.rota h1 {margin-left: 20px;}
.roti, .rota {
  position: relative;
  display: block;
  transform: rotate(-25deg);
}
.admin:hover h1, .cms:hover h1 {
  color: #be1dcc;
}
.rota {
  margin-top: 80px;
  margin-left: 35px;
}
.roti {
  margin-top: 80px;
  margin-right: 55px;
}
input, button {
  margin: 4px;
  padding: 8px 6px;
  width: 350px;
  background: white;
  color: black;
  font-size: 10px;
  transition: all 1s ease-out;
}
button {
  margin-left: -230px;
  background: #000;
  color: white;
  text-align: right;
  cursor: pointer;
  transition: all 1s ease-out;
}
button:hover {
  background: #be1dcc;
  transition: all 0.3s ease-in;
}
input:hover {
  box-shadow: inset 0 0 5px rgba(190, 29, 204, 0.6);
}
input:focus {
  background: gray;
  color: white;
}
.up {
  top: 100px;
  left: -60px;
}
.down {
  top: -100px;
  left: 60px;
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div id="warp">
  
  <?php
// Cetak jika ada notifikasi
  if($this->session->flashdata('sukses')) {
       echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  ?>


    <?php echo form_open('Login');?>
    <div class="admin">
      <div class="rota">
        <h1>LOGIN</h1>
        <input id="username" type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" /><br />

        <input id="password" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" />

      </div>
    </div>
    <div class="cms">
      <div class="roti">
        <h1>HTO</h1>
        <button id="valid" type="submit" name="btnSubmit" value="Login" >Valid</button><br />

      </div>
    </div>

  <?php echo form_close();?>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php base_url();?>assets/login/js/index.js"></script>




</body>

</html>
