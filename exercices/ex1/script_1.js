// $('#content').css({
//     'background-color': grey;,
//     'color': 'black'

// $('h1, h2:not(.anecdote)').css({
//     'border-color': '#c33',
//     'color': '#c33'

$(function() {
    var $img = $('img');
    var $test = 'true';
    $img.on('click',function(event){
        if ($test == 'true'){
            $('#content').addClass('clicked');
            $test = 'false';
        }else{
            $('#content').removeClass('clicked')
            $test = 'true';
        }
    });
});
