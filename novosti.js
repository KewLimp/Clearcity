$('.minus-btn').click(function() {
    // let value = $("#kolichestvo").val();
    let $input = $(this).parent().find('input');
    let count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});

$('.plus-btn').click(function() {
    // let value = $("#kolichestvo").val();
    let $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});

// $('.plus-btn').on('click', function(e) {
//     e.preventDefault();
//     var $this = $(this);
//     var $input = $this.closest('div').find('input');
//     var value = parseInt($input.val());
 
//     if (value = '') {
//         value = value + 1;
//     } else {
//         value = 100;
//     }
 
//     $input.val(value);
// });

