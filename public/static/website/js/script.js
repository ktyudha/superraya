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
