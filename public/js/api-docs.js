$(() => {
    $(".custom-tab-button").on("click", function (e) {
        e.preventDefault();
        const target = $(this).attr("href");
        const title = $(this).text();
        $(".custom-tab-item").each(function () {
            if (!$(this).hasClass("d-none")) {
                $(this).addClass("d-none");
            }
        });
        $(target).removeClass("d-none");
        $(this).parent().siblings(".dropdown-toggle").text(title);
    });
});
