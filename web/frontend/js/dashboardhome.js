$(".responsive").slick({

    // normal options...
    infinite: true,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth:true,
    touchMove:true,
    draggable: false,


    // the magic
    responsive: [{

        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1

        }

    }, {

        breakpoint: 600,
        settings: {
            slidesToShow: 2

        }

    }, {

        breakpoint: 300,
        settings: {
            mobileFirst :true,
            slidesToShow: 2,
            slidesToScroll: 1


        }

    }]
});

$(function(){
  if (checkOverflow(document.getElementById('rdesc')))
  {$('#more').show();}
});
$('#more').click(function () {
   alert('test');
    $('#review-card-id').addClass('expandreview');
    $('#rdesc').addClass('expandescription');
    $('#more').hide();
    $('#less').show();


});
$('#less').click(function () {
   alert('test');
    $('#review-card-id').removeClass('expandreview');
    $('#rdesc').removeClass('expandescription');
    $('#less').hide();
    $('#more').show();


});

function checkOverflow(el)
{
    var curOverflow = el.style.overflow;

    if ( !curOverflow || curOverflow === "visible" )
       // el.style.overflow = "hidden";


    var isOverflowing = el.clientWidth < el.scrollWidth
        || el.clientHeight < el.scrollHeight;

    el.style.overflow = curOverflow;

    return isOverflowing;
}
