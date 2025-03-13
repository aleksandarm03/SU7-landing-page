const gallerySlide = document.querySelector('.gallery-slide');
    const images = gallerySlide.querySelectorAll('img');
    images.forEach(img => {
        const clone = img.cloneNode(true);
        gallerySlide.appendChild(clone);
    });