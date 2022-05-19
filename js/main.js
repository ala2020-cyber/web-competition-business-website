const leftArrow = document.querySelector(".fa-arrow-left-long");

const rightArrow = document.querySelector(".fa-arrow-right");

const knowImage = document.querySelector(".knowus-image");

leftArrow.addEventListener("click", function () {
  const imagedisplayNumber = parseInt(knowImage.getAttribute("src")[15]);
  if (imagedisplayNumber !== 1) {
    const currentNumberDisplay = imagedisplayNumber - 1;
    const newSource = "./images/knowus" + currentNumberDisplay + ".jpg";
    knowImage.setAttribute("src", newSource);
  }
});

rightArrow.addEventListener("click", function () {
  const imagedisplayNumber = parseInt(knowImage.getAttribute("src")[15]);
  if (imagedisplayNumber !== 6) {
    const currentNumberDisplay = imagedisplayNumber + 1;
    const newSource = "./images/knowus" + currentNumberDisplay + ".jpg";
    knowImage.setAttribute("src", newSource);
  }
});
