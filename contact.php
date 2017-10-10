<?php include('header.php'); ?>
<!-- header code is in header.php -->
<!-- Begin Main -->
<main class="main">
<div class="tom"></div>
<div class="connection">
    <div class="row">
      <div class="col-md-4"><div class="collum" style="background-color: #52B588;"><i class="fa fa-map-marker fa-5x"></i><br><br>
        <div class "textinfo"><span>ADRESSE</span><br><br>
      <a target="_blank" href="https://www.google.dk/maps/place/K%C3%B8gevej+7,+4000+Roskilde/@55.6365911,12.0886617,17z/data=!3m1!4b1!4m2!3m1!1s0x46525fc416486b67:0x75c00eff2466b26f" style="color: #fff;font-size: 14px;">Holbækvej 260<br> 
      4440 Mørkøv</a><br><br><br></div>
	     </div>
    </div>
<div class="col-md-4"><div class="collum" style="background-color:#36454A;"><i class="fa fa-envelope-o fa-5x"></i><br><br>
       <div class "textinfo"><span>E-MAIL</span><br><br> <div style="color:#efefef">Kunnika Bryrup
      <br> E-mail: yuisupergirl@gmail.com<br><br><br></div></div>
</div></div>
      
      <div class="col-md-4"><div class="collum" style="background-color:#96a0ac;"><i class="fa fa-mobile fa-5x"></i><br><br>
     <div class "textinfo"><span>TELEFON</span><br><br>
       <div style="color:#efefef;">Tlf: 30 28 25 22<br><br><br><br></div></div>
</div></div>

<div class="col-sm-12 col-md-8"><div class="collum" style="">

            
             
            <div class="well well-sm">
                <form class="form-horizontal" action="kontakt_send.php" method="post">
                    <fieldset>
                       <legend class="text-center header">Kontakt mig</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon" style="color: #666;"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"  style="color: #666;"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="E-mail" class="form-control">
                            </div>
                        </div>                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil bigicon" style="color: #666;"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Write here..." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-lg" style="background-color: #52B588; color:#efefef;">Send</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>         
</div>
    </div>
    <div class="col-md-4" style="padding-left: 10px;"> <a href="index.php"> <img style="padding: 20px 0 20px 0;" src="images/kunnika1.png"/> </a><h1 style="color: #666;">Kunnika Bryrup</h1><h4 style="color:#52B588 ;">Digital concept developer</h4><h4 style="padding-bottom: 20px; color: #666;">Kreativ Positiv Fleksibel</h4></div>
 
</main>
<!-- End Main -->
<!-- Footer code is in footer.php -->
<?php include('footer.php'); ?>
