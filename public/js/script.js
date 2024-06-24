document.addEventListener("DOMContentLoaded", function () {
  //HEADER
  const lookUpIconBtn = document.querySelector(".cta .lookingUp a");
  const lookUpInput = document.querySelector(".cta .lookingUp input");
  lookUpIconBtn.addEventListener("click", (event) => {
    event.preventDefault();
    lookUpInput.style.opacity = 1;
    lookUpInput.style.visibility = "visible";
    lookUpInput.style.transition = "0.3s";
    setTimeout(() => {
      lookUpInput.focus();
    }, 300);
  });

  lookUpInput.addEventListener("blur", () => {
    lookUpInput.style.opacity = 0;
    lookUpInput.style.visibility = "hidden";
    lookUpInput.style.transition = "0.3s";
  });

  const bgHeader = document.querySelector("header");
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 90) {
      bgHeader.style.backgroundColor = "black";
      bgHeader.style.transition = "0.5s";
    } else {
      bgHeader.style.backgroundColor = "";
      bgHeader.style.transition = "0.3s";
    }
  });

  const bellNoti = document.querySelector(".cta .bellNoti a");
  bellNoti.addEventListener("click", (event) => {
    event.preventDefault();
    bellNoti.style.transition = "0.3s";
    bellNoti.classList.toggle("active");
  });
  bellNoti.addEventListener("mouseleave", (event) => {
    bellNoti.classList.remove("active");
    bellNoti.style.color = "white";
  });
  //END HEADER

  //SWIPER
  const configSwiper = document.querySelector(".swiper1");
  const configSwiperCategory = document.querySelector(".swiper_category");

  const swiper_1 = new Swiper(".swiper1", {
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 10,
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  const swiper_2 = new Swiper(".swiper_2", {
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 10,
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  const swiper_category = new Swiper(".swiper_category", {
    // Default parameters
    slidesPerView: 5,
    spaceBetween: 10,
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  const swiperCast = new Swiper(".swiper_cast", {
    // Default parameters
    slidesPerView: 5,
    spaceBetween: 20,
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  const stopAutoPlay = () => {
    console.log("Stop AutoPlay on Swiper");
  };

  const startAutoPlay = () => {
    console.log("Start AutoPlay on Swiper");
  };
  if (configSwiper) {
    configSwiper.addEventListener("mouseenter", (event) => {
      stopAutoPlay();
    });

    configSwiper.addEventListener("mouseleave", (event) => {
      startAutoPlay();
    });
    configSwiperCategory.addEventListener("mouseenter", (event) => {
      stopAutoPlay();
    });
    configSwiperCategory.addEventListener("mouseleave", (event) => {
      startAutoPlay();
    });
  }

  //END SWIPER

  // MODIFIER PHIMMOI
  const swiper = new Swiper(".swiper", {
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 3,
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },
    // autoplay: {
    //   delay: 2000,
    //   disableOnInteraction: false,
    //   pauseOnMouseEnter: true,
    // },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  function updateMoviePreviews(indexMovie) {
    const moviePreviews = document.querySelectorAll(
      ".favorite-movies.before-pb-180 .movie-preview"
    );
    moviePreviews.forEach((preview) => {
      preview.classList.remove("left", "right", "hovered");
    });

    moviePreviews.forEach((preview, index) => {
      if (indexMovie % 3 === 0) {
        preview.classList.add("left");
        // preview.style.transform = "translate(0%, -15%)";
      } else if (indexMovie % 3 === 2) {
        // preview.style.transform = "translate(0%, -15%)";
        preview.classList.add("right");
      } else {
        // preview.style.transform = "translate(-5%, -15%)";
      }

      // if (index === indexMovie) {
      //   preview.classList.add("hovered");
      // }
    });
  }

  document.querySelectorAll(".movie").forEach((movie, index) => {
    movie.addEventListener("mouseenter", () => {
      updateMoviePreviews(index);
    });

    movie.addEventListener("mouseleave", () => {
      updateMoviePreviews(-1);
    });
  });

  // END MODIFIER PHIMMOI

  //VIDEO
  const videoContainer = document.querySelector("#videoContainer");
  const videoElement = document.querySelector("#videoElement");
  let startTime;
  let totalWatchTime = 0;

  playButton.addEventListener("click", () => {
    videoContainer.style.display = "block";
    videoElement.play();
    playButton.style.display = "none";
  });

  videoElement.addEventListener("play", () => {
    startTime = Date.now();
  });

  videoElement.addEventListener("pause", () => {
    if (startTime) {
      const elapsedTime = (Date.now() - startTime) / 1000;
      totalWatchTime += elapsedTime;
      startTime = null;
      console.log("Bạn đã xem:", totalWatchTime, "seconds");
    }
  });

  videoElement.addEventListener("ended", () => {
    if (startTime) {
      const elapsedTime = (Date.now() - startTime) / 1000;
      totalWatchTime += elapsedTime;
      startTime = null;
      console.log("Tổng cộng thời gian:", totalWatchTime, "seconds");
    }
  });
  //END CONFIG VIDEO
});

