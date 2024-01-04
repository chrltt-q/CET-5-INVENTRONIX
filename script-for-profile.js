const aLeft = document.querySelector('.a-left');
const aRight = document.querySelector('.a-right');
const content = document.querySelector('.content');
const bg3 = document.querySelector('.side-img');
const featuredIcon = document.querySelector('.featured-icon');

let id = 1;

aRight.addEventListener('click', () => {
    id++;
    if (id > 3) {
        id = 1;
    }
    changeBackground(id);
});

aLeft.addEventListener('click', () => {
    id--;
    if (id < 1) {
        id = 3;
    }
    changeBackground(id);
});

function changeBackground(id) {
    bg3.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(./img/img-sm${id}.JPG)`;
    bg3.style.backgroundRepeat = 'no-repeat';
    bg3.style.backgroundPosition = 'center';
    bg3.style.backgroundAttachment = 'fixed';
    bg3.style.backgroundSize = 'cover';
    bg3.style.transition = '0.3s';
    content.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(./img/img-lg${id}.JPG)`;
    featuredIcon.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(./img/img-lg${id}.JPG)`;
    content.style.backgroundRepeat = 'no-repeat';
    content.style.backgroundPosition = 'center';
    content.style.backgroundAttachment = 'fixed';
    content.style.backgroundSize = 'cover';
    content.style.transition = '0.3s';
}
