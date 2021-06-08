$(function (){
    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })
});

$(document).ready(function () {
    $('.cart_button').click(function (event) {
        event.preventDefault()
        addToBasket()
    })
})

function addToBasket() {
    /*let id = $('.details_name').data('id')
    let qty = parseInt($('#quantity_input').val())

    let total_qty = parseInt($('.cart-qty').text())
    total_qty += qty
    $('.cart-qty').text(total_qty)*/

    $.ajax({
        url: "{{route('addToBasket')}}",
        type: "POST",
        data: {
            id: 'хааааай',
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            console.log(data)
        }
    });
}

