$(function() {
    const audio = new Audio('./music/happy_birthday.mp3');
    $('#1st').on('click',function(){
        $('#2nd').removeClass('shadow');
        $('#sp0').addClass('none');
        $('#sp1').removeClass('shadow');
    });

    $('#2nd').on('click',function(){
        $('#3rd').removeClass('shadow');
        $('#sp1').addClass('none');
        $('#sp2').removeClass('shadow');
    });

    $('#3rd').on('click',function(){
        $('#4th').removeClass('shadow');
        $('#sp2').addClass('none');
        $('#sp3').removeClass('shadow');
    });

    $('#4th').on('click',function(){
        alert('🎉 Happy birthday !! 🎉');
        $('#4th').removeClass('shadow');
        $('#sp3').addClass('none');
        $('#bdy').addClass('image');
        audio.play();

    });


});
