const fontAwesomeLink = document.createElement('link');
fontAwesomeLink.rel = 'stylesheet';
fontAwesomeLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css';
document.head.appendChild(fontAwesomeLink);

const cssStyles = `
.heart-icon {
position: absolute;
top: 10px;
right: 10px;
color: red;
cursor: pointer;
}

.heart-icon.unliked {
  color: gray;
}

.image-container {
  position: relative;
}

.card-image {
  display: none;
}

.card-image.active {
  display: block;
}
`;

const styleElement = document.createElement('style');
styleElement.innerHTML = cssStyles;
document.head.appendChild(styleElement);

const cardContainer = document.getElementById("generatedCards");

const generateRandomDate = (start, end) => {
  return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
};

const createCard = (images, title, description, date, index) => {
  return `
<div class="card bg-white p-4 shadow-md rounded-lg overflow-hidden flex items-center" style="max-width: full; position: relative;">
    <img class="card--image object-cover h-40 w-full cursor-pointer" src="${images[0]}" alt="Card ${index}" data-images='${JSON.stringify(images)}' style="height: 160px; max-width: 240px; object-fit: cover;">
    <div class="card--content p-4 inset-y-0 right-1 ms-4">
        <button class="card--fav-btn focus:outline-none" style="position: absolute; bottom: 8.4rem; right: 0.1rem;">
            <i class="fas fa-heart heart-icon"></i>
        </button>
        <h2 class="card--title text-lg font-medium mb-2">${title}</h2>
        <p class="card--description text-sm text-gray-600">${description}</p>
        <time class="card--date text-xs text-gray-500 mt-2">${date}</time>
    </div>
    <div style="position: absolute; top: 1rem; left: 15px; width: 80px; height: 160px;" data-sector="1"></div>
    <div style="position: absolute; top: 1rem; left: 95px; width: 80px; height: 160px;" data-sector="2"></div>
    <div style="position: absolute; top: 1rem; left: 175px; width: 80px; height: 160px;" data-sector="3"></div>
</div>`;
};

const generateCards = (numberOfCards) => {
  let cards = ``;
  for (let i = 1; i <= numberOfCards; i++) {
    const images = [
      `https://a.d-cd.net/1746d78s-960.jpg`,
      `https://a.d-cd.net/_qyYBSRtS8TmMgpsRLpK5x1YnNo-1920.jpg`,
      `https://a.d-cd.net/3g2406s-960.jpg`
    ];
    const title = `Сыч в естественной среде обитания ${i}`;
    const description = `гыгы гага )0)`;
    const date = generateRandomDate(new Date("2020-01-01"), new Date()).toLocaleDateString("ru-RU", {
      day: "numeric",
      month: "long",
      year: "numeric"
    });
    cards += createCard(images, title, description, date, i);
  }
  cardContainer.innerHTML = cards;

  const imagesArr = document.querySelectorAll(".card--image");
  imagesArr.forEach((img) => {
    img.addEventListener("mousemove", (event) => {
      const rect = img.getBoundingClientRect();
      if (
        event.clientX >= rect.left &&
        event.clientX <= rect.right &&
        event.clientY >= rect.top &&
        event.clientY <= rect.bottom
      ) {
        const mouseX = event.clientX - rect.left;
        const mouseY = event.clientY - rect.top;
        const widthRatio = img.clientWidth / 4;
        const heightRatio = img.clientHeight / 4;

        let sectorIndex;
        if (mouseY <= heightRatio * 2) {
          sectorIndex = mouseX <= widthRatio * 2 ? 0 : 1;
        } else {
          sectorIndex = mouseX <= widthRatio * 2 ? 2 : 3;
        }

        const images = JSON.parse(img.getAttribute("data-images"));

        if (sectorIndex === 0 || sectorIndex === 1) {
          img.src = images[0];
        } else {
          const displayIndex = sectorIndex % (images.length - 1) + 1;
          img.src = images[displayIndex];
        }
      }
    });

    img.addEventListener("mouseout", () => {
      const images = JSON.parse(img.getAttribute("data-images"));
      img.src = images[0];
    });
  });
};

generateCards(40);

const initiateSectors = () => {
  const sectors = document.querySelectorAll("div[data-sector]");
  sectors.forEach((sector) => {
    sector.addEventListener("mouseover", (event) => {
      const card = sector.closest(".card");
      const img = card.querySelector(".card--image");
      
      const images = JSON.parse(img.getAttribute("data-images"));
      const index = parseInt(event.target.getAttribute("data-sector")) - 1;
      img.src = images[index % images.length];
    });

    sector.addEventListener("mouseout", (event) => {
      const card = sector.closest(".card");
      const img = card.querySelector(".card--image");
      const images = JSON.parse(img.getAttribute("data-images"));
      img.src = images[0];
    });
  });
};

initiateSectors();

const heartIcons = document.querySelectorAll('.heart-icon');
const imageContainers = document.querySelectorAll('.image-container');
const cards = document.querySelectorAll('.card');

heartIcons.forEach((icon) => {
icon.addEventListener('click', function () {
this.classList.toggle('liked');
});
});

imageContainers.forEach((container) => {
container.addEventListener('mouseover', function () {
const images = this.querySelectorAll(".card-image");
images.forEach(img => img.classList.remove("active"));

  const hoveredImage = this.querySelector('[data-index="2"]');
  hoveredImage.classList.add('active');
});

container.addEventListener('mouseleave', function () {
  const images = this.querySelectorAll(".card-image");
  images.forEach(img => img.classList.remove("active"));

  const firstImage = this.querySelector('[data-index="1"]');
  firstImage.classList.add('active');
});
});
