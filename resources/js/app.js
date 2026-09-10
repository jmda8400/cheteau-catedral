const header = document.querySelector('[data-header]');
const menuButton = document.querySelector('.menu-toggle');
const nav = document.querySelector('#main-nav');

menuButton?.addEventListener('click', () => {
    const open = !header.classList.contains('open');
    header.classList.toggle('open', open);
    menuButton.setAttribute('aria-expanded', String(open));
});
nav?.addEventListener('click', (event) => {
    if (event.target.closest('a')) {
        header.classList.remove('open');
        menuButton?.setAttribute('aria-expanded', 'false');
    }
});

const languageScrollKey = 'chateau-language-scroll';
document.querySelectorAll('[data-language-link]').forEach((link) => {
    link.addEventListener('click', () => sessionStorage.setItem(languageScrollKey, String(window.scrollY)));
});
const savedLanguageScroll = sessionStorage.getItem(languageScrollKey);
if (savedLanguageScroll !== null) {
    sessionStorage.removeItem(languageScrollKey);
    requestAnimationFrame(() => requestAnimationFrame(() => window.scrollTo(0, Number(savedLanguageScroll))));
}

document.querySelector('[data-year]').textContent = new Date().getFullYear();

const lightbox = document.querySelector('[data-lightbox]');
const galleryButtons = [...document.querySelectorAll('[data-gallery-index]')];
if (lightbox && galleryButtons.length) {
    const photos = JSON.parse(document.querySelector('#gallery-data').textContent);
    const imageArea = lightbox.querySelector('[data-lightbox-image]');
    const closeButton = lightbox.querySelector('.lightbox-close');
    let current = 0;
    let previousFocus;

    const render = () => {
        const photo = photos[current];
        const thumbnail = galleryButtons[current].querySelector('img');
        imageArea.replaceChildren();
        if (thumbnail) {
            const image = thumbnail.cloneNode();
            image.removeAttribute('loading');
            imageArea.append(image);
        } else {
            const placeholder = document.createElement('div');
            placeholder.className = 'image-placeholder';
            placeholder.setAttribute('role', 'img');
            placeholder.setAttribute('aria-label', photo.alt);
            placeholder.innerHTML = '<span>Chateau Catedral</span><small>Fotografía próximamente</small>';
            imageArea.append(placeholder);
        }
    };
    const open = (index) => {
        current = index; previousFocus = document.activeElement; render();
        lightbox.hidden = false; lightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('no-scroll'); closeButton.focus();
    };
    const close = () => {
        lightbox.hidden = true; lightbox.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('no-scroll'); previousFocus?.focus();
    };
    const move = (amount) => { current = (current + amount + photos.length) % photos.length; render(); };
    galleryButtons.forEach((button, index) => button.addEventListener('click', () => open(index)));
    lightbox.querySelectorAll('[data-close]').forEach(button => button.addEventListener('click', close));
    lightbox.querySelector('[data-prev]').addEventListener('click', () => move(-1));
    lightbox.querySelector('[data-next]').addEventListener('click', () => move(1));
    document.addEventListener('keydown', (event) => {
        if (lightbox.hidden) return;
        if (event.key === 'Escape') close();
        if (event.key === 'ArrowLeft') move(-1);
        if (event.key === 'ArrowRight') move(1);
        if (event.key === 'Tab') {
            const controls = [...lightbox.querySelectorAll('button')];
            const first = controls[0], last = controls.at(-1);
            if (event.shiftKey && document.activeElement === first) { event.preventDefault(); last.focus(); }
            else if (!event.shiftKey && document.activeElement === last) { event.preventDefault(); first.focus(); }
        }
    });
}
