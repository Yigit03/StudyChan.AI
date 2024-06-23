const enBtnLink = document.querySelector('.enBtn-link');
const trBtnLink = document.querySelector('.trBtn-link');
const wrapper = document.querySelector('.wrapper');

trBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
enBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});