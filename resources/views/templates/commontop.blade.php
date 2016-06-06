<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    
      <!--<div class=" pull-right">
      <div class="btn-group alignment-buttons">
        <button type="button" class="btn btn-primary" data-class="show-left">Left</button>
        <button type="button" class="btn btn-default" data-class="show-original">Original</button>
        <button type="button" class="btn btn-default" data-class="show-right">Right</button>
      </div>
      </div> -->

  <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">MirrorSelfie</a>
      </div>


      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li ><a href="/">Most Recent</a></li>
          <li ><a href="{{ route('random') }}">Random</a></li>
          <li ><a href="{{ route('picks') }}">Editor's Picks</a></li>
        </ul>
       
      </div>
      <!-- /.navbar-collapse -->



  </div>
</nav>