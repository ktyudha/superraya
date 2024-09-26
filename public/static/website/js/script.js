$(window).on("load", function () {
    let preloader = $(".preloader");
    if (preloader.length) {
        setTimeout(function () {
            preloader.fadeOut(300); // Animasi fade out dimulai setelah 3 detik
        }, 2000); // 3000 milidetik = 3 detik
    }

    // thmTinyInit();
    // thmOwlInit();
    // filterMasonaryLayout();
    // priceFilter();

    // let circleProgress = $(".circle-progress");
    // if (circleProgress.length) {
    //     circleProgress.appear(function () {
    //         let circleProgress = $(".circle-progress");
    //         circleProgress.each(function () {
    //             let progress = $(this);
    //             let progressOptions = progress.data("options");
    //             progress.circleProgress(progressOptions);
    //         });
    //     });
    // }
});

if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
) {
    document.documentElement.setAttribute("data-theme", "light");
}
// console.log(window.matchMedia("(prefers-color-scheme: dark)"));

$(document).ready(function () {
    // All sides
    var sides = ["left", "top", "right", "bottom"];
    $("h1 span.version").text($.fn.sidebar.version);

    // Initialize sidebars
    for (var i = 0; i < sides.length; ++i) {
        var cSide = sides[i];
        $(".sidebar." + cSide).sidebar({ side: cSide });
    }

    // Click handlers
    $(".btn[data-action]").on("click", function () {
        var $this = $(this);
        var action = $this.attr("data-action");
        var side = $this.attr("data-side");
        $(".sidebar." + side).trigger("sidebar:" + action);
        return false;
    });
});
