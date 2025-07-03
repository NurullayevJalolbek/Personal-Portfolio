document.addEventListener("DOMContentLoaded", () => {
  Promise.all(
    Array.from(document.images)
      .filter((img) => !img.complete)
      .map(
        (img) =>
          new Promise((resolve) => {
            img.onload = img.onerror = resolve;
          })
      )
  ).then(() => {
    var msnry = new Masonry("#grid", {
      itemSelector: "#grid .grid-item",
      gutter: 20,
      fitWidth: true,
    });
    msnry.layout();
  });
});
