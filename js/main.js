$("#form").change(function(event){
    event.preventDefault();
    var serializedData = $(this).serialize();
    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
            $('#price').html(a);

        }
    });

})

$('#amount_from').keypress(function (event) {
    if (event.which == '13') {
        event.preventDefault();
    }
})

$("#form").submit(function(event){
    event.preventDefault();
    var serializedData = $(this).serialize();

    request = $.ajax({
        url: "form-send.php",
        type: "post",
        data: serializedData,
        success(a){
            $('.hi').html('файл скачан');

        }
    });

})