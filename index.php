<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="aa.css" rel="stylesheet">

    <title>aa.css Responsive CSS only framework</title>
    <meta name="description" content="Lightweight and Responsive CSS only framework built for web designers and web geeks.">
    <meta name="author" content="Alimemaj">
    <link rel="icon" type="image/png"  href="../favicon.ico">


  </head>
  <body>


    <style>
    .header {
      border-top: 2px solid #E1766D;
      text-align: center;
      padding-top: 30px; padding-bottom: 10px;
    }
    .header h1 {
      font-size: 54px;
      font-weight: bold;
      color: #6E6E6E;
    }
    .header h1 span {
      color: #E1766D;
    }
    .header i {
      font-size: 14px;
    }
    .header h3 {
      font-size: 28px;
      color: #515151;
    }
    .header button {
      padding: 15px;
      font-size: 19px;
    }
    .header button span{
      font-size: 15px;
      opacity: 0.8;
    }
    .row .wrapper h4 {
      padding-top: 20px;
    }
    .box {
      margin-top: 50px;
      border: 1px solid #DFDFDF;
      color: #DCDCDC;
      padding: 12px 25px 12px 25px;
      line-height: 20px;
      border: 1px solid rgba(0,0,0,0.1);
  box-shadow:
    inset 0 2px 3px rgba(255,255,255,0.3),
    inset 0 -2px 3px rgba(0,0,0,0.3),
    0 1px 1px rgba(255,255,255,0.9);
    }
    .box h3 {
      color: #6E6E6E;
      padding-left: 14px;
      padding-bottom: 5px;
    }
    .box p {
      color: #4F4F4F;
      padding-left: 14px;
    }
    .box .code {
      color: #494949;
    }
    .box .code {
      font-size: 13px;
    }
    .footer {
      text-align: center;
      padding-top: 80px;
      padding-bottom: 30px;
    }
    .footer img {
      max-width: 30px;
    }
    </style>

    <div class="header">
      <div class="wrapper">
        <h1><span>aa</span>.css <i>Beta 0.3</i></h1>
        <h3>A lightweight and responsive CSS only framework.</h3>
        <a href="aa.css" download><button class="btn-red btn-big">Download <span>4.8kb</span></button></a>
      </div>
    </div>

    <div class="row">
    <div class="wrapper">

    <div class="col-7">

    <h4>Navbar</h4>
    <nav>
      <div class="navbar">
         <div class="wrapper">

      <a href="index.html"><img class="nav-logo" src="logo.png"></a>

      <label for="menu-button" class="menu-button">Menu</label>
	    <input type="checkbox"  id="menu-button" role="button">

      <div class="mobile-menu">

        <div class="menu-left">
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
        </div>

        <div class="menu-right">

        </div>

        </div>

      </div>
     </div>
    </nav>
    <div class="box">
      <p>&lt;nav&gt;<br /> &lt;div class="navbar"&gt;<br /> &lt;div class="wrapper"&gt;</p>
<p>&lt;a href="index.html"&gt;&lt;img class="nav-logo" src="logo.png"&gt;&lt;/a&gt;</p>
<p>&lt;label for="menu-button" class="menu-button"&gt;Menu&lt;/label&gt;<br /> &lt;input type="checkbox" id="menu-button" role="button"&gt;</p>
<p>&lt;div class="mobile-menu"&gt;</p>
<p>&lt;div class="menu-left"&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="menu-right"&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/nav&gt;</p>
    </div>


    <h4>Navbar - <small>Right menu</small></h4>
    <nav>
      <div class="navbar">
         <div class="wrapper">

      <a href="index.html"><img class="nav-logo" src="logo.png"></a>

      <label for="menu-button" class="menu-button">Menu</label>
	    <input type="checkbox"  id="menu-button" role="button">

      <div class="mobile-menu">

        <div class="menu-left">
          <li><a href="#">Link</a></li>
        </div>

        <div class="menu-right">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </div>

        </div>

      </div>
     </div>
    </nav>

    <div class="box">
      <p>&lt;nav&gt;<br /> &lt;div class="navbar"&gt;<br /> &lt;div class="wrapper"&gt;</p>
<p>&lt;a href="index.html"&gt;&lt;img class="nav-logo" src="logo.png"&gt;&lt;/a&gt;</p>
<p>&lt;label for="menu-button" class="menu-button"&gt;Menu&lt;/label&gt;<br /> &lt;input type="checkbox" id="menu-button" role="button"&gt;</p>
<p>&lt;div class="mobile-menu"&gt;</p>
<p>&lt;div class="menu-left"&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="menu-right"&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/nav&gt;</p>
    </div>

    <h4>Navbar - <small>Dropdowns</small></h4>
    <nav>
      <div class="navbar">
         <div class="wrapper">

      <a href="index.html"><img class="nav-logo" src="logo.png"></a>

      <label for="menu-button" class="menu-button">Menu</label>
	    <input type="checkbox"  id="menu-button" role="button">

      <div class="mobile-menu">

        <div class="menu-left">
          <li class="dropdown"><a>Dropdown Menu</a>
             <ul class="dropdown-content">
               <li><a href="#">Menu 1</a></li>
               <li><a href="#">Menu long one</a></li>
               <li><a href="#">Menu 3</a></li>
             </ul>
          </li>
        </div>

        <div class="menu-right">
          <li class="dropdown"><a>Dropdown</a>
             <ul class="dropdown-content">
                  <p>put anything you wish here</p>
             </ul>
          </li>
        </div>

        </div>

      </div>
     </div>
    </nav>

    <div class="box">
      <p>&lt;nav&gt;<br /> &lt;div class="navbar"&gt;<br /> &lt;div class="wrapper"&gt;</p>
<p>&lt;a href="index.html"&gt;&lt;img class="nav-logo" src="logo.png"&gt;&lt;/a&gt;</p>
<p>&lt;label for="menu-button" class="menu-button"&gt;Menu&lt;/label&gt;<br /> &lt;input type="checkbox" id="menu-button" role="button"&gt;</p>
<p>&lt;div class="mobile-menu"&gt;</p>
<p>&lt;div class="menu-left"&gt;<br /> &lt;li class="dropdown"&gt;&lt;a&gt;Dropdown Menu&lt;/a&gt;<br /> &lt;ul class="dropdown-content"&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Menu long one&lt;/a&gt;&lt;/li&gt;<br /> &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;<br /> &lt;/ul&gt;<br /> &lt;/li&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="menu-right"&gt;<br /> &lt;li class="dropdown"&gt;&lt;a&gt;Dropdown&lt;/a&gt;<br /> &lt;ul class="dropdown-content"&gt;<br /> &lt;p&gt;put anything you wish here&lt;/p&gt;<br /> &lt;/ul&gt;<br /> &lt;/li&gt;<br /> &lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/nav&gt;</p>
    </div>

    <h4>Navbar - <small> Button & Disabled link</small></h4>
    <nav>
      <div class="navbar">
         <div class="wrapper">

      <a href="index.html"><img class="nav-logo" src="logo.png"></a>

      <label for="menu-button" class="menu-button">Menu</label>
	    <input type="checkbox"  id="menu-button" role="button">

      <div class="mobile-menu">

        <div class="menu-left">
          <li><a>Link</a></li>
          <li class="disabled"><a>Link</a></li>
        </div>

        <div class="menu-right">
          <button class="btn-red">Sign in</button>
        </div>

        </div>

      </div>
     </div>
    </nav>
    <div class="box">
      <p>&lt;nav&gt;<br /> &lt;div class="navbar"&gt;<br /> &lt;div class="wrapper"&gt;</p>
<p>&lt;a href="index.html"&gt;&lt;img class="nav-logo" src="logo.png"&gt;&lt;/a&gt;</p>
<p>&lt;label for="menu-button" class="menu-button"&gt;Menu&lt;/label&gt;<br /> &lt;input type="checkbox" id="menu-button" role="button"&gt;</p>
<p>&lt;div class="mobile-menu"&gt;</p>
<p>&lt;div class="menu-left"&gt;<br /> &lt;li&gt;&lt;a&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;li class="disabled"&gt;&lt;a&gt;Link&lt;/a&gt;&lt;/li&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="menu-right"&gt;<br /> &lt;button class="btn-red"&gt;Sign in&lt;/button&gt;<br /> &lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/nav&gt;</p>
    </div>

    <h4>Buttons</h4>
    <button>Default</button> <button class="btn-red">Red</button>
    <button class="btn-orange">Orange</button> <button class="btn-green">Green</button>
    <button class="btn-blue">Blue</button> <button class="btn-liblue">Light Blue</button>
    <button class="btn-yellow">Yellow</button>
    <div class="box">
      <p>&lt;button&gt;Default&lt;/button&gt; </br> &lt;button class="btn-red"&gt;Red&lt;/button&gt;<br /> &lt;button class="btn-orange"&gt;Orange&lt;/button&gt; </br>
         &lt;button class="btn-green"&gt;Green&lt;/button&gt;<br /> &lt;button class="btn-blue"&gt;Blue&lt;/button&gt; </br> &lt;button class="btn-liblue"&gt;Light Blue&lt;/button&gt;<br /> &lt;button class="btn-yellow"&gt;Yellow&lt;/button&gt;</p>
    </div>

    <h4>Buttons Sizes</h4>
    <button class="btn-mini">Mini</button> <button>Normal</button>
    <button class="btn-green btn-big">Big</button> <button class="btn-orange btn-large">Large</button>
    <div class="box">
      <p>&lt;button class="btn-mini"&gt;Mini&lt;/button&gt; </br> &lt;button&gt;Normal&lt;/button&gt;<br /> &lt;button class="btn-green btn-big"&gt;Big&lt;/button&gt; </br> &lt;button class="btn-orange btn-large"&gt;Large&lt;/button&gt;</p>
    </div>

    <h4>Typography</h4>
    <h1>h1. Hello!</h1>
    <h3>h3. Let me get your attention..</h3>
    <p>Lorem ipsum dolor sit amet, <a href="#">and a link</a> consectetur adipiscing elit. Donec ultricies lectus sit amet elit gravida sollicitudin. Nulla interdum hendrerit erat a porttitor. Quisque volutpat tristique dui at scelerisque. Vestibulum in nulla dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti.</p>

    <h4>Inputs</h4>
    <form action="#">
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br><br>
    <input class="btn-red disabled" type="submit">
    </form>
    <div class="box">
      <p>&lt;form action="#"&gt;<br /> First name:&lt;br&gt;<br /> &lt;input type="text" name="firstname"&gt;<br /> &lt;br&gt;<br /> Last name:&lt;br&gt;<br /> &lt;input type="text" name="lastname"&gt;<br /> &lt;br&gt;&lt;br&gt;<br /> &lt;input class="btn-red disabled" type="submit"&gt;<br /> &lt;/form&gt;</p>
    </div>

    <h4>Responsive Grid</h4>
    <p>On devices with smaller width then 981px every column becomes 100%.</p> 1 column is 8.33%.</p>
    <br>
    <div class="row">
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
      <div class="col-1">col-1</div>
    </div>

    <div class="row">
      <div class="col-3">col-3</div>
      <div class="col-3">col-3</div>
      <div class="col-3">col-3</div>
      <div class="col-2">col-2</div>
      <div class="col-1">col-1</div>
    </div>

    <div class="row">
      <div class="col-4">col-4</div>
      <div class="col-4">col-4</div>
      <div class="col-4">col-4</div>
    </div>

    <div class="row">
      <div class="col-4">col-5</div>
      <div class="col-4">col-5</div>
    </div>

    <div class="row">
      <div class="col-8">col-8</div>
      <div class="col-4">col-4</div>
    </div>

    <div class="box">
      <p>&lt;div class="row"&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="row"&gt;<br /> &lt;div class="col-3"&gt;col-3&lt;/div&gt;<br /> &lt;div class="col-3"&gt;col-3&lt;/div&gt;<br /> &lt;div class="col-3"&gt;col-3&lt;/div&gt;<br /> &lt;div class="col-2"&gt;col-2&lt;/div&gt;<br /> &lt;div class="col-1"&gt;col-1&lt;/div&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="row"&gt;<br /> &lt;div class="col-4"&gt;col-4&lt;/div&gt;<br /> &lt;div class="col-4"&gt;col-4&lt;/div&gt;<br /> &lt;div class="col-4"&gt;col-4&lt;/div&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="row"&gt;<br /> &lt;div class="col-4"&gt;col-5&lt;/div&gt;<br /> &lt;div class="col-4"&gt;col-5&lt;/div&gt;<br /> &lt;/div&gt;</p>
<p>&lt;div class="row"&gt;<br /> &lt;div class="col-8"&gt;col-8&lt;/div&gt;<br /> &lt;div class="col-4"&gt;col-4&lt;/div&gt;<br /> &lt;/div&gt;</p>
    </div>



  </div>

  <div class="col-5">
    <div class="box">
      <h3>About</h3>
      <p><b>aa.css</b> is a very small css framework created for web beginners and front end developers. It contains
      navbar, buttons, inputs, responsive grid and lots of other changes to the standard html5.</p>

      <h3>Getting started</h3>
      <p>Using aa.css is pretty simple. Just download it and link it to your html file.</p>
      <p>Here's an example.</p>
      <hr>
      <p class="code">
        &lt;!DOCTYPE html&gt;<br />
&lt;html lang="en"&gt;<br />
  &lt;head&gt;<br />
<br />
    &lt;meta charset="utf-8"&gt;<br />
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;<br />
<br />
    <b>&lt;link href="aa.css" rel="stylesheet"&gt;</b><br />
<br />
  &lt;/head&gt;<br />
  &lt;body&gt;<br />
   <br />
     Your content goes here<br />
   <br />
  &lt;/body&gt;<br />
&lt;/html&gt;
      </p>
      <hr>

      <h3>License</h3>
      <p>aa.css is released under <a target="_blank" href="https://opensource.org/licenses/MIT">MIT License</a>.</p>

    </div>
  </div>


</div>
  </div>


   <div class="footer">
     <div class="container">
       <p>Maintained by </p><a target="_blank" href="https://alimemaj.com"><img src="https://alimemaj.com/symbol.png"></a></p>
     </div>
   </div>



  </body>
</html>
