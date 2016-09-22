$(function() {
    $("form").submit(function(event) {
        var $form = $(this);
        var $button = $form.find(":submit");
        event.preventDefault();
        $.ajax({
            type: "post",
            url: "insert.php",
            data: $form.serialize(),
            beforeSend: function(xhr, settings) {
                $button.attr("disabled", true); //二重送信を防止
            },
        }).done(function(json) {
            //成功したときの処理
        }).fail(function(data, textStatus, errorThrown){
            //失敗したときの処理
        }).always(function(xhr, textStatus) {
            $button.attr("disabled", false); //二重送信を防止
        });
    });
});