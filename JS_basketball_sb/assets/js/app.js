var teams = JSON.parse(localStorage.getItem('teams')) || {}
var score = JSON.parse(localStorage.getItem('score')) || { home: 0, away:0}
var set = localStorage.getItem('set') || "1"

function load_data(){
    if(!!teams.home){
        $('.team-card .home_team').text(teams.home)
        $('#home_team_name').val(teams.home)
    }
    if(!!teams.away){
        $('.team-card .away_team').text(teams.away)
        $('#away_team_name').val(teams.away)
    }
    $('.set-card .display').text(set)
    $('#current_set').val(set).trigger('change')
    $('#home_score').text(score.home)
    $('#away_score').text(score.away)
}

$(document).ready(function(){
    load_data()
    
   $('#mgt_team').click(function(e){
        e.preventDefault()
        $('#teamMGTmodal').modal('show')

   })
   $('#team-form').submit(function(e){
        e.preventDefault()
        var away = $('#away_team_name').val()
        var home = $('#home_team_name').val()
        set = $('#current_set').val()
        teams = {'home' : home, 'away': away}
        localStorage.setItem('teams', JSON.stringify(teams))
        localStorage.setItem('set', set)
        alert("Teams has been updated.")
        $('#teamMGTmodal').modal('hide')
        load_data()
   })
   $('.point_button').click(function(){
        var team = $(this).attr('data-team')
        if(team == 'home'){
            switch ($(this).attr('data-value')){
                case '+1':
                    score.home += 1;
                    break;
                case '+2':
                    score.home += 2;
                    break;
                case '+3':
                    score.home += 3;
                    break;
                case '-1':
                    score.home -= 1;
                    break;
                case '-2':
                    score.home -= 2;
                    break;
                case '-3':
                    score.home -= 3;
                    break;
            }
            score.home = score.home > -1 ? score.home : 0;
        }
        if(team == 'away'){
            switch ($(this).attr('data-value')){
                case '+1':
                    score.away += 1;
                    break;
                case '+2':
                    score.away += 2;
                    break;
                case '+3':
                    score.away += 3;
                    break;
                case '-1':
                    score.away -= 1;
                    break;
                case '-2':
                    score.away -= 2;
                    break;
                case '-3':
                    score.away -= 3;
                    break;
            }
            score.away = score.away > -1 ? score.away : 0;
        }
        localStorage.setItem('score', JSON.stringify(score))
        load_data();
   })
   $('#end_game').click(function(){
    var winning_team, winning_score, winning_text, loseing_team, loseing_score, loseing_text;
            winning_text = "with the score of"
            loseing_text="with the score of"
        if(score.home > score.away){
            winning_team = teams.home 
            winning_score = score.home
            loseing_team = teams.away 
            loseing_score = score.away
        }else if(score.home < score.away){
            winning_team = teams.away 
            winning_score = score.away
            loseing_team = teams.home 
            loseing_score = score.home
        }else{
            winning_team = "Match Draw"
            winning_score = score.home
            winning_text = `Both Team (${teams.home} and ${teams.away}) has a total score of`
        }
        $('#winning_team').val(winning_team)
        $('#winning_score').val(winning_score)
        $('#winning_text').text(winning_text)
        $('#loseing_team').val(loseing_team)
        $('#loseing_score').val(loseing_score)
         $('#loseing_text').text(loseing_text)
         $(function() {
            $( "#date" ).datepicker();
          });
          
         $('#endGameModal').modal('show')
   })
   $('#reset-scoreboard').click(function(e){
    e.preventDefault()
    if(confirm(`Are you sure to reset Scoreboard? The game data can not be undone after this action.`) === true){
        teams = {}
        score = { home: 0, away:0}
        set = 0
        localStorage.removeItem('teams')
        localStorage.removeItem('score')
        localStorage.removeItem('set')
        load_data()
        $('#teamMGTmodal').modal('hide')

    }
   })
})