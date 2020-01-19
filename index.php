<!DOCTYPE html>
<html>
    
  <head>
    <title>Pipe Tune Generator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="js.js"></script>
    <script src="https://kit.fontawesome.com/c4e9bbec73.js" crossorigin="anonymous"></script>	

  </head>
    
  <body>
    <header>
	  <div class="dropdown">
		  <span>About</span>
	   	<div class="dropdown-content">
          <p>Bagpiping requires a high degree of memorization. To practice, random memory practice is the best way to train the mind to quickly recall tunes. The select category below allows one to choose certain areas a person is working on.  If “you are feeling lucky”, the generator will select a random tune from any category.</p>
        </div>
	  </div>
		  <a class="nav" href="mailto:crod1234@gmail.com?Subject=Pipe%20Generator">Email</a>  
	
      <div id="headerLeft">
        <h1>
          Tune Generator
        </h1>
	  </div>
	  <div id="headerRight">
	    <img id="bagpipe" src="bagpipe.jpg" alt="A Bagpipe">
      </div>	  
     </header>
   <section id="gGen">
    <div class="gen">
    <form id="pickTune">
      <h2>Select<br> Category</h2>
      <p id="sel">   
	
        <select id="dropTunes" onchange="beba();">
              <option value="choon">Choose Category</option>
              <option value="any"> I'm Feeling Lucky <span>&#9752;</span></option>
              <!<option value="9/8"> 9/8 </option>>
              <option value="2/4"> 2/4 March </option>
              <option value="3/4"> 3/4 March </option>
              <option value="4/4"> 4/4 March</option>
			  <option value="6/8" name="six"> 6/8 March </option>
			  <option value="exercises"> Exercises </option>
			  <option value="grade5Comp"> Grade 5 Band</option>
			  <option value="grade4Comp"> Grade 4 Band</option>
			  <option value="grade3Comp"> Grade 3 Band</option>
			  <option value="grade2SoloCris"> Grade 2 Solo Cris</option>
              <option value="funeral"> Funeral Tunes </option>
              <option value="hornpipe"> Hornpipes </option>
              <option value="jig"> Jigs </option>
              <option value="peripheal"> Peripheal Sets </option>
              <option value="piobaireachd"> Piobaireachd </option>
              <option value="reel"> Reels </option>
              <option value="slowAir"> Slow Airs </option>
              <option value="strathspey"> Strathspeys </option>
              <option value="sR"> Strathspey/Reel </option>
         </select>
        </p>
      </form>
      <input class="button" id="buttonAgain" type="button" value="More Tunes" onclick="beba();"
      </div>
    </section>
     
    <div class="response">
      <p id="tuneParagraph">
          The Tune Generator Chooses:
      </p>
      <p id="tune">Pick a Choon.</p>
       
      <a href="tunes/Book03%2018a.pdf" target="_blank" download>
        <button class="button"><i class="fas fa-file-pdf"></i>     Download This Tune</button>
	  </a>
		  
	  <a href="tunes/Book03%2018a.pdf" target="_blank">
		   <button class="button">Display Tune</button>
	  <br>
		  
	  <audio controls>
        <source src="horse.ogg" type="audio/ogg">
        <source src="horse.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
		  
    </div> 
    
  </body>
      
</html>
