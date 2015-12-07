$("#predictBtn").click(function() {
    $.ajax("/welcome/prediction/"+$("#teams option:selected").val()).done(function(data) {
        $("#result").html(data);

    })

});
