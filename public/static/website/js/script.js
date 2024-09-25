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

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > 20) {
        navbar.classList.add("bg-white");
        navbar.classList.add("text-slate-900");
        navbar.classList.remove("text-white");
        navbar.classList.remove("bg-transparent");
    } else {
        navbar.classList.remove("bg-white");
        navbar.classList.remove("text-slate-900");
        navbar.classList.add("bg-transparent");
        navbar.classList.add("text-white");
    }
}

document.documentElement.setAttribute("data-theme", "light");
// console.log(window.matchMedia("(prefers-color-scheme: dark)"));
