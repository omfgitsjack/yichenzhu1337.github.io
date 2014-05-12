<!-- saved from url=(0043)http://getbootstrap.com/examples/jumbotron/ -->
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">
  
  <title>justPlay</title>

  <!-- Core CSS - Include with every page -->
  <link href="bootstrap-3.1.0/dist/css/bootstrap.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">  

  <link href="css/playground.css" rel="stylesheet">  
      <!-- Core Scripts - Include with every page -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="bootstrap-3.1.0/dist/js/bootstrap.min.js"></script>
  <script src="js/metisMenu/jquery.metisMenu.js"></script>
  
  <script src="jQuery-Knob-master/js/jquery.knob.js"></script>

  <!-- x-editable -->
  <link rel="stylesheet" href="x-editable/bootstrap3-editable/css/bootstrap-editable.css">
  <script src="x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
  
  <!-- Date picker -->
  <script type="text/javascript" src="bootstrap-daterangepicker-master/moment.js"></script>
  <script type="text/javascript" src="bootstrap-daterangepicker-master/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="bootstrap-daterangepicker-master/daterangepicker-bs3.css" />

  <!-- justPlay JS -->
  <script src="js/playground.js"></script>
  <script src="js/popovers.js"></script>
  <script src="js/x-editable.js"></script>

  
  </head>

  <body>
    <!-- Popover (hidden) form -->
	<?php include 'views/hidden-forms/activity-form.php' ?>

      <!-- Notification Form -->
        <div id="notification-form-title" class="hide">
          <span class="text-info">Get Notified</span>
          <button type="button" id="close" class="close" onclick="$('#get-notified').popover('hide');">
            <icon class="glyphicon glyphicon-remove"></icon>
          </button>
        </div>
        <div id="notification-form" class="hide">
          <form role="form">
            <div class="form-group">
              <div class="divider"></div>
              <div class="input-group">
                <input type="text" class="form-control" id="NinputActivity" placeholder="Activities">
                <span class="input-group-addon"><icon class="glyphicon glyphicon-heart-empty"></icon></span>            
              </div>
              <div class="divider"></div>
              <div class="input-group">
                <input type="text" class="form-control" id="NinputSkill" placeholder="Skill Range">
                <span class="input-group-addon"><icon class="glyphicon glyphicon-star-empty"></icon></span>
              </div>
              <div class="divider"></div>
              <div class="input-group">
                <input type="datetime" class="form-control" id="NinputDate" placeholder="Date/Time">
                <span class="input-group-addon"><icon class="glyphicon glyphicon-calendar"></icon></span>
              </div>
              <div class="divider"></div>
              <div class="input-group">
                <input type="text" class="form-control" id="NinputLocation" placeholder="Location (Optional)">
                <span class="input-group-addon"><icon class="glyphicon glyphicon-map-marker"></icon></span>
              </div>
              <div class="divider"></div>
              <div class="input-group">
                <input type="text" class="form-control" id="NinputSMS" placeholder="Notify (Phone Number)">
                <span class="input-group-addon">
                  <input id="NradioSMS" name="inputWalls" id="inputWalls" type="radio">
                </span>            
              </div>
              <div class="divider"></div>
              <div class="input-group">
                <input type="text" class="form-control" id="NinputEmail" placeholder="Notify (Email)">
                <span class="input-group-addon">
                  <input id="NradioEmail" name="inputWalls" id="inputWalls"  type="radio">
                </span>            
              </div>
              <div class="divider"></div>       
              <button type="button" class="btn btn-success fill" onclick="$('#get-notified').popover('hide');">Suggest</button>
              </div>
          </form>
        </div>
      <!-- Notification Form -->
        
      <!-- Date-Pick -->
        <div id="date-pick-title" class="hide">
          <span class="text-info">Day</span>
          <button type="button" id="close" class="close" onclick="$('.date-day-of-week').popover('hide');">
            <icon class="glyphicon glyphicon-remove"></icon>
          </button>
        </div>
        <div id="date-pick">
          
        </div>
      <!-- Date-Pick -->
    <!-- Popover (hidden) form -->

    <!-- Expanded Card -->
      <div class="modal fade" id="expanded-card" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
          <div class="row">
            <div class="col-md-4">
              <div class="card-wrap expanded side friends">
                <div class="card-header-wrapper friends">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                      <a href="#"><span class="side badge">3</span><span class="hidden text">d</span>Participants</a>
                    </li>
                    <li>
                      <a href="#"><span class="side badge">1</span><span class="hidden text">d</span>Friends</a>
                    </li>
                  </ul>
                </div>
                <div class="card-content-wrapper friends">
                  <div class="list-group scroll friends">
                    <a href="#" class="list-group-item">
                      Yi Chen Zhu
                    </a>
                    <a href="#" class="list-group-item">Jack Yiu
                      <icon class="glyphicon glyphicon-plus pull-right"></icon>
                    </a>
                    <a href="#" class="list-group-item">Suzanne Lim<icon class="glyphicon glyphicon-plus pull-right"></icon></a>
                    <a href="#" class="list-group-item">Roger Ganesh<icon class="glyphicon glyphicon-plus pull-right"></icon></a>
                    <a href="#" class="list-group-item">Jason Zheng<icon class="glyphicon glyphicon-plus pull-right"></icon></a>
                    <a href="#" class="list-group-item">Someone<icon class="glyphicon glyphicon-plus pull-right"></icon></a>
                    <a href="#" class="list-group-item">Someone Else<icon class="glyphicon glyphicon-plus pull-right"></icon></a>
                  </div>
                  <!--ul class="list-group scroll">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul-->
                </div>
              </div>      
            </div> 
            <div class="col-md-4">
              <div class="card-wrap expanded">
                <div class="card-left pull-left">
                  <div class="card-activity expanded">
                      Basketball
                  </div>
                  <div class="card">
                    <div class="card-star-wrapper star-mouseover" data-toggle="tooltip" data-original-title="Novice">
                      <icon class="glyphicon glyphicon-star card-rating-stars"></icon><icon class="glyphicon glyphicon-star card-rating-stars"></icon><icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                    </div>
                    <div class="card-header-wrapper">
                      <div class="description-text">
                        THIS WEDNESDAY
                      </div>
                      <div class="card-number">
                        09:00-12:00
                      </div>
                      <div class="description-text">
                        7th March 2014
                      </div>
                    </div>
                    <div class="card-content-wrapper">
                      <div class="card-info-wrapper">
                        <div class="card-info-title"> Location</div>
                        <div class="text-center card-info ">UTSC Gymnasium (Back Courts)</div>
                      </div>
                      <div class="card-info-wrapper">
                        <div class="card-info-title">Description</div>
                        <div class="card-info description text-center">Bring your own racquets, looking for people that knows all the basic shots. </div>
                      </div>
                      <div class="card-metrics">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="content-auto-wrap active" id ="friend-toggle">
                              <a href="javascript:">
                                <div class="card-number expand-friend">
                                  <icon class="glyphicon glyphicon-chevron-left pull-left friend-trigger"></icon> 3
                                </div>
                                <div class="description-text">
                                  Friends
                                </div>                                    
                              </a>
                            </div>
                          </div>                            
                          <div class="col-md-4">
                            <div class="content-auto-wrap">
                              <div class="card-number">
                                $2
                              </div>
                              <div class="description-text">
                                Fee
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="content-auto-wrap active" id="comment-toggle">
                              <a href="javascript:">
                                <div class="card-number expand-comment">
                                  5 <icon class="glyphicon glyphicon-chevron-right pull-right comment-trigger"></icon>
                                </div>
                                <div class="description-text">
                                  Comments
                                </div>                                   
                              </a>
                            </div>
                          </div>
                        </div>                            
                      </div>
                    </div>
                    <div class="join-wrapper">
                     <button type="button" class="btn btn-danger fill">Play!</button>                          
                    </div>
                  </div>
                </div>
                <div class="card-right expanded pull-right">
                  <div class="expand-wrapper" id="minimize-card">
                    <a href="#"><icon class="glyphicon glyphicon-resize-small card-expand-icon"></icon></a>
                  </div>
                </div>
              </div>                      
            </div>
            <div class="col-md-4">
              <div class="card-wrap expanded side comments">
                <div class="card-header-wrapper comments">
                  <span class="side badge">13</span><span class="hidden text">d</span>Comments <span class="label label-success pull-right new-badge">NEW</span>
                </div>
                <div class="card-content-wrapper comments">
                  <ul class="list-group scroll comments">
                    <div class="name">
                      <a href="#" class="name">Jack Yiu</a>
                    </div>
                    <li class="list-group-item">hey wanna play basketball tonight?</li>
                    <div class="name">
                      <a href="#" class="name">Jack Yiu</a>
                    </div>
                    <li class="list-group-item">I think I can get 3 more guys to join us tonight</li>
                    <div class="name">
                      <a href="#" class="name">Eddie Zhou Yiu</a>
                    </div>       
                    <li class="list-group-item">whos coming again?
                    </li>
                    <div class="name">
                      <a href="#" class="name">Jack Yiu</a>
                    </div>
                    <li class="list-group-item">um check on the participant list</li>
                  </ul>
                </div>

                <div class="insert-comment-wrapper">
                  <div class="insert-comment-box">
                                        <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">
                      <icon class="glyphicon glyphicon-comment"></icon>
                    </button>
                  </span>
                </div>
                  </div>
                </div>
              </div>      
            </div> 
          </div>     
        </div>
      </div>
    <!-- Expanded Card -->

    <div class="super-wrapper">
      <!-- Top Nav bar -->
        <div class="navbar navbar-inverse navbar-fixed-top" id="navbar-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a class="brand" href="index.html"></a></li>
              </ul>
              
              <ul class="nav navbar-nav navbar-left">
                <div id="activity-search-bar" class="input-group header-search">
                  <div class="dropdown">
                    <input type="text" data-toggle="dropdown" class="form-control" placeholder="Click to view activities">
                    <div class="dropdown-menu" id='activity-menu'>

                      <div class="list-group">
                        <div class="header">
                          Racquet Sports
                        </div>
                        <a href="#" class="list-group-item">
                          Badminton
                        </a>
                        <a href="#" class="list-group-item">Tennis</a>
                        <a href="#" class="list-group-item">Squash</a>
                        <a href="#" class="list-group-item">Table Tennis</a>
                      </div>

                      <div class="list-group">
                        <div class="header">
                          Other Team Sports
                        </div>
                        <a href="#" class="list-group-item">Basketball</a>
                        <a href="#" class="list-group-item">Volleyball</a>
                        <a href="#" class="list-group-item">Ultimate Frisbee</a>
                        <a href="#" class="list-group-item">Soccer</a>
                        <a href="#" class="list-group-item">Football</a>
                      </div>

                      <div class="list-group last">
                        <a href="#" class="list-group-item">Ice Hockey</a>
                        <a href="#" class="list-group-item">Lacrosse</a>
                        <a href="#" class="list-group-item">Quidditch</a>
                        <a href="#" class="list-group-item">Rugby</a>
                      </div>
                    </div> 
                  </div>
                  <span class="input-group-btn">
                    <button  class="btn btn-primary" type="button">Search</button>
                  </span>
                </div> 
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="nav-tooltip" data-toggle="tooltip" data-html="true" data-original-title="Explore"><i class="glyphicon glyphicon-search side-icon"></i></a>
                </li>
                <li id="suggest-activity"><a href="#" class="nav-tooltip" data-toggle="tooltip" data-html="true" data-original-title="Suggest"><i class="glyphicon glyphicon-plus side-icon"></i></a></li>
								<li id="get-notified"><a href="#" class="nav-tooltip" data-toggle="tooltip" data-html="true" data-original-title="Get Notified"><i class="glyphicon glyphicon-eye-open side-icon"></i></a></li>
                <li class="dropdown" id="nav-user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Jack Yiu</a>
                  <ul class="dropdown-menu" role="menu">
										<li><a href="#"><i class="glyphicon glyphicon-saved"></i><span class="hidden text">a</span> Joined Sports</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i><span class="hidden text">a</span> Your Profile</a></li>
                    <li><a href="#"><span class="hidden text">laal</span>Friends</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog secondary-icon"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Profile settings</a></li>
                    <li><a href="#">Notification settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Privacy settings</a></li>
                    <li><a href="#">Account settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.navbar-collapse -->
          </div>


        </div>
      <!-- Top Nav Bar -->

      <div class="navbar-wrapper">
        <!-- Header -->
          <div class="header-bg">
            <div class="header-wrapper float-right">
              <div class="header-content-wrapper">
                <div class="activity-chooser-wrapper pull-left">
     
                </div>
                <div class="sort-filter-wrapper pull-right">
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle sort-button" data-toggle="dropdown">
                      Sort By <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Earliest</a></li>
                      <li><a href="#">Latest</a></li>
                       <li class="divider"></li>
                      <li><a href="#">Most Players</a></li>
                      <li><a href="#">Least Players</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Most Friends</a></li>
                      <li><a href="#">Least Friends</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- Header -->

        <div class="page-container">
          <div class="content-wrapper">
            <!-- Main Content Area -->
              <div class="date-wrapper">
                <div class="date-day-of-week">
                  <a href="#" id="date-choose-button">TODAY, MAR 7</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card-wrap">
                    <div class="card-left pull-left">
                      <div class="card-activity">
                          Badminton
                      </div>
                      <div class="card">
                          <div class="card-star-wrapper star-mouseover" data-toggle="tooltip" data-original-title="Amateur">
                            <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                            <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                          </div>
                          <div class="card-header-wrapper">
                            <div class="description-text">
                              WEDNESDAY, MAR 7
                            </div>
                            <div class="card-number">
                              09:00-12:00
                            </div>
                            <div class="description-text">
                              THE GYM
                            </div>
                          </div>
                          <div class="card-content-wrapper">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="friend-mouseover" data-toggle="tooltip" data-html="true" data-original-title="Jack  <br> Alex <br> Jason">
                                  <div class="card-number">
                                    3
                                  </div>
                                  <div class="description-text">
                                    FRIENDS
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card-number">
                                  2/4
                                </div>
                                <div class="description-text">
                                  PEOPLE
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card-number">
                                  2
                                </div>
                                  <div class="description-text">
                                    SLOTS FREE
                                  </div>
                              </div>                              
                            </div>
                          </div>
                          <div class="progress-wrapper">
                            <div class="progress progress-active">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="card-right pull-right">
                      <div class="expand-wrapper">
                        <a href="#" data-toggle="modal" data-target="#expanded-card"><icon class="glyphicon glyphicon-resize-full card-expand-icon"></icon></a>
                      </div>
                    </div>
                  </div>                 
                </div>
                <div class="col-md-4">
                  <div class="card-wrap">
                    <div class="card-left pull-left">
                      <div class="card-activity">
                          Badminton
                      </div>
                      <div class="card">
                          <div class="card-star-wrapper star-mouseover" data-toggle="tooltip" data-original-title="Amateur">
                            <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                            <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                          </div>
                          <div class="card-header-wrapper">
                            <div class="description-text">
                              WEDNESDAY, MAR 7
                            </div>
                            <div class="card-number">
                              09:00-12:00
                            </div>
                            <div class="description-text">
                              THE GYM
                            </div>
                          </div>
                          <div class="card-content-wrapper">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="friend-mouseover" data-toggle="tooltip" data-html="true" data-original-title="Jack  <br> Alex <br> Jason">
                                  <div class="card-number">
                                    3
                                  </div>
                                  <div class="description-text">
                                    FRIENDS
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card-number">
                                  2/4
                                </div>
                                <div class="description-text">
                                  PEOPLE
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card-number">
                                  2
                                </div>
                                  <div class="description-text">
                                    SLOTS FREE
                                  </div>
                              </div>                              
                            </div>
                          </div>
                          <div class="progress-wrapper">
                            <div class="progress progress-active">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="card-right pull-right">
                      <div class="expand-wrapper">
                        <a href="#" data-toggle="modal" data-target="#expanded-card"><icon class="glyphicon glyphicon-resize-full card-expand-icon"></icon></a>
                      </div>
                    </div>
                  </div>                 
                </div>
                <div class="col-md-4">
                  <div class="card-wrap">
                    <div class="card-left pull-left">
                      <div class="card-activity">
                          Tennis
                      </div>
                      <div class="card">
                        <div class="card-star-wrapper star-mouseover" data-toggle="tooltip" data-original-title="Adept">
                          <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                          <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                          <icon class="glyphicon glyphicon-star card-rating-stars"></icon>
                        </div>
                        <div class="card-header-wrapper">
                          <div class="description-text">
                            WEDNESDAY, MAR 7
                          </div>
                          <div class="card-number">
                            09:00-12:00
                          </div>
                          <div class="description-text">
                            THE KEY
                          </div>
                        </div>
                        <div class="card-content-wrapper">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="friend-mouseover" data-toggle="tooltip" data-html="true" data-original-title="Jack  <br> Alex <br> Jason">
                                <div class="card-number">
                                  3
                                </div>
                                <div class="description-text">
                                  FRIENDS
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card-number">
                                1/4
                              </div>
                              <div class="description-text">
                                PEOPLE
                              </div>
                              
                            </div>
                            <div class="col-md-4">
                              <div class="card-number">
                                2
                              </div>
                                <div class="description-text">
                                  SLOTS FREE
                                </div>
                            </div>                              
                          </div>
                        </div>
                        <div class="progress-wrapper">
                          <div class="progress progress-active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-right pull-right">
                      <div class="expand-wrapper">
                        <a href="#"  data-toggle="modal" data-target="#expanded-card"><icon class="glyphicon glyphicon-resize-full card-expand-icon"></icon></a>
                      </div>
                    </div>
                  </div>                    
                </div>      
              </div>
            <!-- Main Content Area -->
          </div>
        </div>
      </div>
    </div>
    <footer>
        hi
    </footer>    
  </body>
</html>