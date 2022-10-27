export default function Loading({ urlImg }) {
  $("body").append("<div class='loading'></div>");
  $(".loading").css({
    content: "",
    position: "absolute",
    top: 0,
    right: 0,
    bottom: 0,
    left: 0,
    "z-index": 1000,
    "background-color": "rgba(0, 0, 0, 0.6)",
    "background-image": `url(${urlImg})`,
    "background-repeat": "no-repeat",
    "background-position": "center",
    "background-size": "300px",
  });
}
