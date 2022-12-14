<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Game Score Board</title>
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <script src="./assets/js/jquery-3.6.1.min.js"></script>
    <script src="./assets/fontawesome/js/all.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="style.css">
    <style>
        [class^="col"]{
            
            text-align: center;
           
        }
       
    </style>
    </head>
    
    <body class="bg-primary bg-gradient ">
        <div class="container px-4 py-3 col-lg-8 col-md-10 col-sm-12 rounded border border-light">
                    <div class="float-end pt-3">
                    <a href="javascript:void(0)" class="text-light text-decoration-none fw-bolder h4" id="mgt_team">
                        <i class="fa fa-cogs"></i>
                    </a>
                </div>
                <h1 class="text-center text-light px-5"><b>Basketball Game Scoreboard</b></h1>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 my-3">
        <div class="row mx-0 justify-content-center">
            <div class="col">
                <div class=" border border-light py-4 px-5 offset-3" style="width:300px">
                    <!-- <h4 class="text-center fw-bolder text-light">(team foul)</h4> -->
                    <div  class="d-flex justify-content-center" style="flex-direction: column;">
                        <div id="teamfoulhome"  class="text-center fw-bolder text-light fs-3">(team foul)</div>
                        <div id="teamfoul2home" class="foul fw-bolder">0</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="set-card border border-light py-4 px-5">
                    <h4 class="text-center fw-bolder text-light">(Quarter)</h4>
                    <div class="d-flex justify-content-center">
                        <div class="display bg-light text-dark fw-bolder border border-light text-center">0</div>
                    </div>
                </div>
            </div>
             <div class="col">
                <div class=" border border-light py-4 px-5 offset-3" style="width:300px">
                    <!-- <h4 class="text-center fw-bolder text-light">(team foul)</h4> -->
                    <div  class="d-flex justify-content-center" style="flex-direction: column;">
                        <div id="teamfoul"  class="text-center fw-bolder text-light fs-3">(team foul)</div>
                        <div id="teamfoul2" class="foul fw-bolder">0</div>
                </div>
        </div>
    </div>
        </div>     
        
        
        
        
        <div class="container-fluid my-3 col-sm-12">
            <div class="row">    
                <div id="dvcontent1" class="col-md col-sm">
                        <div class="team-card border border-light py-4">
                           <h2 class="text-center fw-bolder text-light home_team" >---------</h2>
                           <h4 class="text-center fw-bolder text-light">(HOME)</h4>
                           <div class="d-flex justify-content-center">
                           <div class="score-display bg-light text-dark fw-bolder border border-light text-center" id="home_score">0</div>
                           </div>
                       </div>
                </div>
                <div class="col-md col-sm col-sm-12 clock">
                    <div id="parent">
                        <div class="row">
                            <div id="minute" class="big col-3 fw-bolder bg-light text-dark">12</div>
                        <div id="second" class="big col-3 fw-bolder bg-light text-dark" >00</div>
                    </div>
                    <div class="shotclock">
                    <div id="second24" class="middle fw-bolder bg-light text-dark">24</div>
                    <div id="reset24" class="fw-bolder">24</div>
                    <div id="reset14" class="fw-bolder">14</div>
                    </div>
                    <div class="contain">
                     
                    <div id="reset12" class="small fw-bolder">Reset Clock</div>
                    <div id="start" class="small fw-bolder">START</div>
                    <div id="timeout" class="small fw-bolder">TIME OUT</div>
                    <div id="change" class="small fw-bolder">CHANGE</div>
                     <div id="spare" class="small fw-bolder">GO</div>
                    </div>
              </div>   
             </div>
                <div class="col-md col-sm col-sm-12">
                     <div class="team-card border border-light py-4">
                    <h2 class="text-center fw-bolder text-light away_team" >---------</h2>
                    <h4 class="text-center fw-bolder text-light">(AWAY)</h4>
                    <div class="d-flex justify-content-center">
                        <div class="score-display bg-light text-dark fw-bolder border border-light text-center" id="away_score">0</div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12 my-3">
        <div class="row mx-2">
            <div class="col-lg-6 col-md-6 col-sm-12 mx-0 border border-light py-2 d-flex justify-content-center align-items-center gx-4">
                <label for="" class="fw-bolder text-light mx-1">Home Points Ctrl: </label>
                <button class="btn btn-outline-info border-light rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="home" data-value="+1">+1</button>
                <button class="btn btn-outline-info border-light rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="home" data-value="+2">+2</button>
                <button class="btn btn-outline-info border-light rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="home" data-value="+3">+3</button>
                <button class="btn btn-outline-danger rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="home" data-value="-3">-3</button>
                <button class="btn btn-outline-danger rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="home" data-value="-2">-2</button>
                <button class="btn btn-outline-danger rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="home" data-value="-1">-1</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mx-0 border border-light py-2 d-flex justify-content-center align-items-center gx-4">
                <label for="" class="fw-bolder text-light mx-1">Away Points Ctrl: </label>
                <button class="btn btn-outline-info border-light rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="away" data-value="+1">+1</button>
                <button class="btn btn-outline-info border-light rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="away" data-value="+2">+2</button>
                <button class="btn btn-outline-info border-light rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="away" data-value="+3">+3</button>
                <button class="btn btn-outline-danger rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="away" data-value="-3">-3</button>
                <button class="btn btn-outline-danger rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="away" data-value="-2">-2</button>
                <button class="btn btn-outline-danger rounded-1 text-light fw-bolt point_button mx-1" type="button" data-team="away" data-value="-1">-1</button>
            </div>
        </div>
        <div class="row mx-2 justify-content-center mt-3">
            <div class="col-auto">
                <button name="bt1" class="btn btn-sm btn-outline-dark border-light text-light fw bolder" id="end_game">End Game</button>
            </div>
        </div>
    </div>
            
            
            
            
            
            
            
            
            
            
            <div class="modal fade" id="endGameModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog rounded-0 modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-0">
            <div class="modal-body rounded-0">
                <div class="container-fluid">
                    <div class="float-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="get" action="gameset.php" >
                        <input type="text" class="form-control" id="winning_team" name="winning_team"/><br>
                        <h4 class="text-center text-muted fw-bolder" id="winning_text"></h4>
                        <input type="text" class="form-control" id="winning_score" name="winning_score"/><br>
                        <input type="text" class="form-control" id="loseing_team" name="loseing_team"/><br>
                        <h4 class="text-center text-muted fw-bolder" id="loseing_text"></h4>
                        <input type="text" class="form-control" id="loseing_score" name="loseing_score"/><br>
                        <input type="date" class="form-control" id="date" name="Date"/><br>
                       
<!--                    <h1 class="text-center fw-bolder" id="winning_team"></h1>
-->                    <!--
                    <h1 class="text-center fw-bolder" id="winning_score"></h1>
                    <h1 class="text-center fw-bolder" id="loseing_team"></h1>
-->                    <!--
                    <h1 class="text-center fw-bolder" id="loseing_score"></h1>-->
<input type="submit" class="btn btn-outline-primary" value="SEND" id="bt2" name="bt2">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="teamMGTmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog rounded-0 modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-0">
            <div class="modal-header rounded-0">
                <h1 class="modal-title fs-5">Game Settings</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
                <div class="container-fluid">
                    <form action="" id="team-form" method="POST">
                        <input type="hidden" name="id" value="">
                        <div class="mb-3">
                            <label for="home_team_name" class="control-label">Team Name (HOME)</label>
                            <input type="text" class="form-control rounded-0" id="home_team_name" name="home_team_name" value="" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="away_team_name" class="control-label">Team Name (Away)</label>
                            <input type="text" class="form-control rounded-0" id="away_team_name" name="away_team_name" value="" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="current_set" class="control-label">Current Quarter/Set</label>
                            <select name="current_set" id="current_set" class="form-select rounded-0" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>OT</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default border rounded-0" id="reset-scoreboard">Reset Scoreboard</button>
                <button class="btn btn-sm btn-primary rounded-0" form="team-form">Save</button>
                <button type="button" class="btn btn-sm btn-secondary rounded-0" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
            <div class="container fw-bolder d-flex justify-content-center">
            <div id="dv1" class="row"><a href="https://youtu.be/ejU0v6-Na8w" target="_blank" class="link-dark text-decoration-none">Mamba Mentality</a></div>
        </div>
      </div>
        <script src="./assets/js/app.js"></script>
         <script src="index.js"></script>
    </body>
</html>
