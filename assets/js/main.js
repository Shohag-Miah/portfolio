$(document).ready(function(){
    var mixer = mixitup('.portfolio-item-container');
    
    $(".js--section-about").waypoint(function (t) {
        "down" == t ? $("header").addClass("sticky") : $("header").removeClass("sticky")
    });
    
     $(".menu-bar ul li a").click(function () {
        $(".menu-bar ul li a").removeClass("active"), $(this).addClass("active")
    });
    $(window).on("scroll", function () {
        $(".progress").each(function (t, e) {
            var o = $(e).find(".progress-bar"),
                a = parseInt($(o).attr("data-progress"));
            $(window).scrollTop() > $(e).offset().top - 800 && $(o).css("width", a + "%").text(a + "%")
        })
    });
    var progressbar = document.getElementById("progressbar");
    var percent = document.getElementById("percent");
    var totalheight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function(){
        var progress = (window.pageYOffset / totalheight)* 100;
        progressbar.style.height = progress + "%";
    }
    var typed = new Typed('.animate', {
        strings: ["E-Commerce Website","Blog Website","Landing Website", "Portfolio Website"],
        typeSpeed:60,
        backSpeed:50,
        loop:true
    });
    $(window).scroll(function(){
    if($(this).scrollTop() > 200){
        $('.back-top').fadeIn();
    }else{
        $('.back-top').fadeOut();
    }
    });

    //  Scroll Top
    $('.back-top').click(function(){
    $('html,body').animate({scrollTop:0},1000);
    });

    $('.mobile-menu-toggle').click(function(){
        document.getElementById('mymobile-nav').style.width = '50%';
    });
    $('.closeNav').click(function(){
        document.getElementById('mymobile-nav').style.width = '0%';
    })
    AOS.init();
    
})
 