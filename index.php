
<style type="text/css">
html {
background-image: url('b.jpg');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style>
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin-top: 0px;
  margin-left: 20px;
  margin-right: 50px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 3px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 3px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body>


<a href="Now.php">
<button class = "button button1" href = Now.php>พยากรณ์วันนี้</button>
</a>


<form action="TestHome.php">
  <label for="cars" margin-left= "200px" > พยากรณ์ย้อนหลัง:</h3></label>
  <form action="/action_page.php">
  <label for="birthday">เลือกวันที่ :</label>
  <input type="date" id="id" name="id" min="2021-02-01" max="2021-03-22">
  <input type="submit">

</form>

</body>
<?php

?>