// Create images for the HTML element with the id of "gallery"
const images = [
  {
    id: 1,
    src: "./images/event-about2.png",
  },
  {
    id: 2,
    src: "./images/event-about3.png",
  },
  {
    id: 3,
    src: "./images/event-about4.png",
  },
  {
    id: 4,
    src: "./images/event-about5.png",
  },
  {
    id: 5,
    src: "./images/event-about6.png",
  },
  {
    id: 6,
    src: "./images/event-about7.png",
  },
  {
    id: 7,
    src: "./images/event-about8.png",
  },
  {
    id: 8,
    src: "./images/event-about9.png",
  },
  {
    id: 9,
    src: "./images/event-about10.png",
  },
  {
    id: 10,
    src: "./images/event-about11.png",
  },
  {
    id: 11,
    src: "./images/event-about12.png",
  },
  {
    id: 12,
    src: "./images/event-about13.png",
  },
  {
    id: 13,
    src: "./images/event-about14.png",
  },
  {
    id: 14,
    src: "./images/event-about15.png",
  },
  {
    id: 15,
    src: "./images/event-about16.png",
  },
  {
    id: 16,
    src: "./images/event-about17.png",
  },
  {
    id: 17,
    src: "./images/event-about18.png",
  },
  {
    id: 18,
    src: "./images/event-about19.png",
  },
  {
    id: 19,
    src: "./images/event-about20.png",
  },
  {
    id: 20,
    src: "./images/event-about21.png",
  },
  {
    id: 21,
    src: "./images/event-about22.png",
  },
  {
    id: 22,
    src: "./images/event-about23.png",
  },
];

const gallery = document.querySelector("#gallery");

const divFirst = document.createElement("div");
divFirst.className = "column first";
const divSecond = document.createElement("div");
divSecond.className = "column second";
const divThird = document.createElement("div");
divThird.className = "column third";
const divPrelast = document.createElement("div");
divPrelast.className = "column prelast";
const divLast = document.createElement("div");
divLast.className = "column last";

for (let i = 0; i < images.length; i++) {
  if (i < 3) {
    const imgEl = document.createElement("img");
    imgEl.setAttribute("src", `${images[i].src}`);
    imgEl.setAttribute("data-image-id", `${i}`);
    divFirst.append(imgEl);
  } else if (i >= 3 && i < 8) {
    const imgEl = document.createElement("img");
    imgEl.setAttribute("src", `${images[i].src}`);
    imgEl.setAttribute("data-image-id", `${i}`);
    divSecond.append(imgEl);
  } else if (i >= 8 && i < 12) {
    const imgEl = document.createElement("img");
    imgEl.setAttribute("src", `${images[i].src}`);
    imgEl.setAttribute("data-image-id", `${i}`);
    divThird.append(imgEl);
  } else if (i >= 12 && i < 17) {
    const imgEl = document.createElement("img");
    imgEl.setAttribute("src", `${images[i].src}`);
    imgEl.setAttribute("data-image-id", `${i}`);
    divPrelast.append(imgEl);
  } else {
    const imgEl = document.createElement("img");
    imgEl.setAttribute("src", `${images[i].src}`);
    imgEl.setAttribute("data-image-id", `${i}`);
    divLast.append(imgEl);
  }
}

gallery.append(divFirst);
gallery.append(divSecond);
gallery.append(divThird);
gallery.append(divPrelast);
gallery.append(divLast);
