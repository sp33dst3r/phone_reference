$( document ).ready(function() {
    $("#search").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            url: "/get_data",
            data: {
                name: $(this).find("input[name=name]").val(),
                number: $(this).find("input[name=number]").val(),
            },
            context: document.body
          }).done(function(result) {
            $("#workarea").html(result);
            window.history.replaceState({}, document.title, "/");
          });
    });
});
