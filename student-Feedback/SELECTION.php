
<html>
<head>
<title>login</title>
<style>
*, *:before, *:after {
	 box-sizing: border-box;
	 margin: 0;
	 padding: 0;
}
 body {
	 background: #bcf6b3;
	 font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}
 .buttons {
	 margin-top: 50px;
	 text-align: center;
	 border-radius: 30px;
}
 .blob-btn {
	 z-index: 1;
	 position: relative;
	 padding: 20px 46px;
	 margin-bottom: 30px;
	 text-align: center;
	 text-transform: uppercase;
	 color: #468629;;
	 font-size: 16px;
	 font-weight: bold;
	 background-color: transparent;
	 outline: none;
	 border: none;
	 transition: color 0.5s;
	 cursor: pointer;
	 border-radius: 30px;
}
 .blob-btn:before {
	 content: "";
	 z-index: 1;
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 border: 2px solid #ffffff;
	 border-radius: 30px;
}
 .blob-btn:after {
	 content: "";
	 z-index: -2;
	 position: absolute;
	 left: 3px;
	 top: 3px;
	 width: 100%;
	 height: 100%;
	 transition: all 0.3s 0.2s;
	 border-radius: 30px;
}
 .blob-btn:hover {
	 color: #fff;
	 border-radius: 30px;
}
 .blob-btn:hover:after {
	 transition: all 0.3s;
	 left: 0;
	 top: 0;
	 border-radius: 30px;
}
 .blob-btn__inner {
	 z-index: -1;
	 overflow: hidden;
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 border-radius: 30px;
	 background: #fff;
}
 .blob-btn__blobs {
	 position: relative;
	 display: block;
	 height: 100%;
	 filter: url('#goo');
}
 .blob-btn__blob {
	 position: absolute;
	 top: 2px;
	 width: 25%;
	 height: 100%;
	 background: #72be8e;
	 border-radius: 100%;
	 transform: translate3d(0, 150%, 0) scale(1.7);
	 transition: transform 0.45s;
}
 @supports (filter: url('#goo')) {
	 transform: translate3d(0, 150%, 0) scale(1.4);
}
 .blob-btn__blob:nth-child(1) {
	 left: 0%;
	 transition-delay: 0s;
}
 .blob-btn__blob:nth-child(2) {
	 left: 30%;
	 transition-delay: 0.08s;
}
 .blob-btn__blob:nth-child(3) {
	 left: 60%;
	 transition-delay: 0.16s;
}
 .blob-btn__blob:nth-child(4) {
	 left: 90%;
	 transition-delay: 0.24s;
}
 .blob-btn:hover .blob-btn__blob {
	 transform: translateZ(0) scale(1.7);
}
 @supports (filter: url('#goo')) {
	 transform: translateZ(0) scale(1.4);
}

a{
    text-decoration: none;

}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: none;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
</style>
</head>
<br><br>
<br><br><br><br>
<br><br><br><br>
<br>
<br>
<br><br>
<br>
<br>
<div align="middle">

    <div class="buttons">
        
          <a  class="blob-btn" href="lab_login.php">lab
          <span class="blob-btn__inner">
            <span class="blob-btn__blobs">
              <span class="blob-btn__blob"></span>
              <span class="blob-btn__blob"></span>
              <span class="blob-btn__blob"></span>
              <span class="blob-btn__blob"></span>
            </span>
          </span>
        </a>
        &nbsp&nbsp&nbsp&nbsp
           <a class="blob-btn" href="login.php">THEORY
            <span class="blob-btn__inner">
              <span class="blob-btn__blobs">
                <span class="blob-btn__blob"></span>
                <span class="blob-btn__blob"></span>
                <span class="blob-btn__blob"></span>
                <span class="blob-btn__blob"></span>
              </span>
            </span>
         </a>
        <br/>
      
	</form>
	</html>