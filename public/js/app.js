(function () {
    // $(window).on('load', function () {
    //     $.blockUI({
    //         message:
    //             '<div class="sk-wave mx-auto"><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div></div>',
    //         timeout: 1000,
    //         css: {
    //             backgroundColor: 'transparent',
    //             border: '0'
    //         },
    //         overlayCSS: {
    //             opacity: 0.5
    //         }
    //     });
    // });

    // if ("serviceWorker" in navigator) {
    //     navigator.serviceWorker
    //         .register("/firebase-messaging-sw.js")
    //         .then((registration) => {
    //             console.log("Service Worker registered:", registration);
    //         })
    //         .catch((error) => {
    //             console.error("Service Worker registration failed:", error);
    //         });
    // }
    // if ('Notification' in window) {
    //     // Foydalanuvchidan ruxsat so‘rash
    //     Notification.requestPermission().then(permission => {
    //       if (permission === 'granted') {
    //         console.log('Notification uchun ruxsat berildi.');
    //         // Bu yerda xabarnoma yuborishingiz mumkin
    //         new Notification('Salom!', {
    //           body: 'Xabarnomalar uchun ruxsat berganingiz uchun rahmat!',
    //           icon: '/favicon.ico' // Ixtiyoriy ikonka
    //         });
    //       } else if (permission === 'denied') {
    //         console.log('Notification uchun ruxsat berilmadi.');
    //       } else {
    //         console.log('Notification uchun ruxsat berilmagan.');
    //       }
    //     });
    //   } else {
    //     console.log('Brauzer Notification API ni qo‘llab-quvvatlamaydi.');
    //   }
})();

$(document).ready(function () {
    const logo = $("img#themeLogo"),
        domain = window.location.origin,
        favicon = `${domain}/favicon.ico`;

    // if (window.isDarkStyle) {
    //     logo.attr('src', ($('html').data('dark-logo') ?? favicon));
    // } else {
    //     logo.attr('src', ($('html').data('light-logo') ?? favicon));
    // }

    $("img").on("error", function (e) {
        const image = `${domain}/img/not_found.png`;

        fetch(image).then(function (response) {
            if (response.ok) {
                e.target.src = image;
            }
        });
    });

    $("img[src='']")?.attr("src", function () {
        const image = `${domain}/img/not_found.png`;

        fetch(image)
            .then(function (response) {
                if (!response.ok) {
                    image = null;
                }
            })
            .catch(function (result) {
                image = null;
            });

        return image;
    });
    searchSidebar();
});

function searchSidebar() {
    var searchInput = $(".search-input"),
        searchData = [];
    if (searchInput.length) {
        $("li.menu-item").each(function () {
            let icon =
                $(this)
                    .find("a")
                    .find("i")
                    .attr("class")
                    ?.match(/\bbx(s?)(\-\w+)+/g) ??
                $(this)
                    .closest("ul")
                    .closest("li")
                    .find("a")
                    .find("i")
                    .attr("class")
                    ?.match(/\bbx(s?)(\-\w+)+/g);

            if (!$(this).find("ul").length) {
                searchData.push({
                    name: $(this).find("a").find("div").text(),
                    icon: icon,
                    url: $(this).find("a").attr("href"),
                });
            }
        });

        var filterConfig = function (data) {
            return function findMatches(q, cb) {
                let matches;
                matches = [];
                data.filter(function (i) {
                    if (i.name.toLowerCase().startsWith(q.toLowerCase())) {
                        matches.push(i);
                    } else if (
                        !i.name.toLowerCase().startsWith(q.toLowerCase()) &&
                        i.name.toLowerCase().includes(q.toLowerCase())
                    ) {
                        matches.push(i);
                        matches.sort(function (a, b) {
                            return b.name < a.name ? 1 : -1;
                        });
                    } else {
                        return [];
                    }
                });
                cb(matches);
            };
        };

        searchInput.each(function () {
            var $this = $(this);
            searchInput
                .typeahead(
                    {
                        hint: false,
                        classNames: {
                            menu: "tt-menu navbar-search-suggestion",
                            cursor: "active",
                            suggestion:
                                "suggestion d-flex justify-content-between px-3 py-2 w-100",
                        },
                    },
                    // ? Add/Update blocks as per need
                    // Pages
                    {
                        name: "pages",
                        display: "name",
                        limit: 5,
                        source: filterConfig(searchData),
                        templates: {
                            // header: '<h6 class="suggestions-header text-primary mb-0 mx-3 mt-3 pb-2">Pages</h6>',
                            suggestion: function ({ url, icon, name }) {
                                return (
                                    '<a href="' +
                                    url +
                                    '">' +
                                    "<div>" +
                                    '<i class="bx ' +
                                    icon +
                                    ' me-2"></i>' +
                                    '<span class="align-middle">' +
                                    name +
                                    "</span>" +
                                    "</div>" +
                                    "</a>"
                                );
                            },
                            notFound: "",
                            // '<div class="not-found px-3 py-2">' +
                            // // '<h6 class="suggestions-header text-primary mb-2">Pages</h6>' +
                            // '<p class="py-2 mb-0"><i class="bx bx-error-circle bx-xs me-2"></i></p>' +
                            // "</div>",
                        },
                    }
                )
                //On typeahead result render.
                .bind("typeahead:render", function () {
                    // Show content backdrop,
                    contentBackdrop.addClass("show").removeClass("fade");
                })
                // On typeahead select
                .bind("typeahead:select", function (ev, suggestion) {
                    // Open selected page
                    if (suggestion.url) {
                        window.location = suggestion.url;
                    }
                })
                // On typeahead close
                .bind("typeahead:close", function () {
                    // Clear search
                    searchInput.val("");
                    $this.typeahead("val", "");
                    // Hide search input wrapper
                    searchInputWrapper.addClass("d-none");
                    // Fade content backdrop
                    contentBackdrop.addClass("fade").removeClass("show");
                });

            // On searchInput keyup, Fade content backdrop if search input is blank
            searchInput.on("keyup", function () {
                if (searchInput.val() == "") {
                    contentBackdrop.addClass("fade").removeClass("show");
                }
            });
        });
    }
}

function resetImg(id, imgId = null, oldImg = null) {
    imgId = imgId ?? `${id}View`;
    const image = $(`img#${imgId}`),
        input = $(`#${id}`);
    if (input.val()) {
        input.val(null);
        image.attr("src", oldImg ?? image.attr("src"));
    }
}
