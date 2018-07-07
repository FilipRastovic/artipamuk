$(document).ready(function(){(function(){

    var cardOnePath = 'vehicle-wraps';
    var cardTwoPath = 'banners-and-displays';
    var cardThreePath = 'graphics';
    
    if(document.getElementById('learnMore1') !== null ) {
        document.getElementById('learnMore1').addEventListener('click', learnMore);
        document.getElementById('learnMore2').addEventListener('click', learnMore);
    }

    function learnMore() {
        document.getElementById("cardsSection").scrollIntoView({behavior: "smooth"});
    }

    if(document.getElementById('card-1') !== null && 
       document.getElementById('card-2') !== null && 
       document.getElementById('card-3') !== null) {

        document.getElementById('card-1').addEventListener('click', cards);
        document.getElementById('card-2').addEventListener('click', cards);
        document.getElementById('card-3').addEventListener('click', cards);
        
    }

    if (document.getElementById('card-1') !== null && 
        document.getElementById('card-2') !== null) {
            document.getElementById('card-1').addEventListener('click', cards);
            document.getElementById('card-2').addEventListener('click', cards);
        }

    function cards() {
        if(this.id == 'card-1') {
            window.location = cardOnePath;
        } else if (this.id == 'card-2') {
            window.location = cardTwoPath;
        } else if (this.id == 'card-3') {
            window.location = cardThreePath;
        }
    }

    if(document.getElementById('fileSubmit') !== null) {
        document.getElementById('fileSubmit').addEventListener('click', fileSubmitHandler);
    }

    function fileSubmitHandler() {
        window.location = 'submit-a-file';
    }

    if(document.getElementById('galleryBtn') !== null) {
        document.getElementById('galleryBtn').addEventListener('click', galleryBtn);
    }

    function galleryBtn() {
        window.location = 'gallery';
    }

})();
window.onscroll = function() {scrollFunction();};

function scrollFunction() {
    if ( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

var scrollTopBtn = document.getElementById("myBtn");

scrollTopBtn.onclick = function() {
    $('html, body').animate({scrollTop:0}, 'slow');
    console.log("Im here");
};
(function() {
    var pos = 0;
    if($("#sidenavTrigger") !== null) {
        $("#sidenavTrigger").on('click', function() {
            if ( pos == 0 ) {
                document.getElementById("sidenav").style.width = "280px";
                document.documentElement.style.overflow = 'hidden';
                document.body.scroll = "no"; 
                setTimeout(function() {
                    $('.sidenav a').css('opacity',0).animate({opacity:1}, 500);
                }, 100);
                $('#sidenavTrigger .fa').removeClass("fa-bars").addClass("fa-close");

                pos = 1; }
            else if ( pos == 1 ) {
                $('.sidenav a').css('opacity', 0).animate({opacity: 0}, 100);
                setTimeout(function(){
                    document.getElementById("sidenav").style.width = "0";
                    document.documentElement.style.overflow = 'auto';  
                    document.body.scroll = "yes";
                    $('#sidenavTrigger .fa').removeClass("fa-close").addClass("fa-bars"); 
                }, 200 );
                pos = 0;
            }
        });
    }
})();
(function(){
    if ($('fullNameInline') !== null) {
        $('[data-toggle="fullNameInline"]').tooltip(); 
        $('[data-toggle="emailInline"]').tooltip(); 
        $('[data-toggle="subjectInline"]').tooltip(); 
        $('[data-toggle="messageInline"]').tooltip(); 
    }
})();
console.log('Welcome to Gulp-Frontend!');
});