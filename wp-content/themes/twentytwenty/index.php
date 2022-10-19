<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<div class="container">
    <h1>Unicode To KrutiDev Converter</h1>
	  <hr>
	  <div class="row">
	    <div class="col-md-4 col-xs-hidden">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <p class="panel-title" style="color:#000;"><i class="fa fa-retweet" aria-hidden="true"></i> Useful Tools</p>
          </div>
          <div class="panel-body">
            <div class="list-group">
              <a href="#" class="list-group-item" style="color:#c7491d;">Unicode To KrutiDev</a>
              <a href="#" class="list-group-item" style="color:#c7491d;">KrutiDev To Unicode</a>
              <a href="#" class="list-group-item" style="color:#c7491d;">Preeti To Unicode</a>
              <a href="#" class="list-group-item" style="color:#c7491d;">Unicode To Preeti</a>
              <a href="#" class="list-group-item" style="color:#c7491d;">KrutiDev To Mangal</a>
              <a href="#" class="list-group-item" style="color:#c7491d;">Mangal To KrutiDev</a>
            </div>
          </div>
        </div>
        <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-7492029805058623"
          data-ad-slot="3239591333"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <br><br>
    	</div>
	    <div class="col-md-8 col-xs-12">
        <p>To Convert  Your Text from Unicode to Krutidev (Kruti Dev), paste your unicode content in the text box and then click on "Convert To Krutidev Text".  The Converted KrutiDev (Kruti Dev) Text Will Be Shown in the Krutidev Text Box. For Krutidev font to work, you need to download krutidev font. You Can Download The Font From Our Website By Clicking <a href="#">Here</a>. You can download the Word File of the Result or Copy it to your clipboard.</p>
	      <h2>Unicode Text: </h2>
        <textarea rows="4" class="form-control" placeholder="Enter Unicode Text" id="unicodetext" name="unicodetext" onkeyup="unicodekruti()" onpaste="unicodekruti()" onchange="unicodekruti()"></textarea>
        <br>
        <a href="javascript:unicodekruti();" class="btn btn-primary"><i class="fa fa-retweet" aria-hidden="true"></i> Convert To Krutidev</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:cleartext();" class="btn btn-success"><i class="fa fa-eraser" aria-hidden="true"></i>  Clear Text</a>
        
        <br>
        <h2>Krutidev Text:</h2>
          <textarea rows="4" class="form-control" placeholder="Converted Krutidev Text"  id="krutitext" name="krutitext"></textarea>
        <br>
        <a class="btn btn-success" href="javascript:sendtowhatsapp();" role="button"><i class="fa fa-whatsapp" aria-hidden="true"></i> &nbsp;&nbsp; Send to Whatsapp</a>&nbsp;&nbsp;
        <a class="btn btn-primary" href="javascript:sendtomail();" role="button"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp; Send via Gmail</a>&nbsp;&nbsp;
        <a class="btn btn-primary" href="javascript:exportHTML();" role="button"><i class="fa  fa-file-word-o" aria-hidden="true"></i> &nbsp;&nbsp; Download Word File</a>
        <a href="javascript:copyclipboard();" class="btn btn-primary pull-right" class="copy"><i class="fa fa-clipboard" aria-hidden="true"></i> Copy To Clipboard</a>
        <br><br>
        <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-7492029805058623"
          data-ad-slot="2347513196"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <h3>FAQ</h3>
        <Hr>
        <dl>
          <dt>1. How to convert Unicode to KrutiDev?</dt>
          <dd>You can use the Unicode To KrutiDev Converter Tool Above To Convert Your Unicode text to Krutidev Text. Simply enter text in Unicode Textbox and Click on Convert. Then You will find the converted text in the KrutiDev Text section.</dd>
        </dl>
        <dl>
          <dt>2. How To Use the Converted KrutiDev Text?</dt>
          <dd>You Will Need Kruti Dev Font To View The KrutiDev Text. After Downloading & Installing the Font, You Need to Copy the Text From KrutiDev Text Box and Paste it in your Word Application. After that, you need to select the text and choose the KrutiDev Font.</dd>
        </dl>
        <dl>
            <dt>3. Why Is the Converted KrutiDev Text Unreadable?</dt>
            <dd>The Krutidev Text Can Be Viewed In Your Word Application Only When You Copy and Paste the text in Word. After Which You have to Download and Use the Font as mentioned in Question #2 Answer.</dd>
        </dl>
      </div>
	  </div>
	</div><!-- ./row -->
	<br><br>
</div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" async defer/><script src="./assets/js/unikruti.js"></script>
  <script src="./assets/js/custom2.js"></script>

</main><!-- #site-content -->

