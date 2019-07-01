// change nav bar color on scroll
window.onscroll = () => {
    const nav = document.getElementById("nav")
    if (this.scrollY <= 10) 
        nav.className = ''; 
    else 
        nav.className = 'scroll';
};

// rating system
function onStarClick(span) {

    // get all stars
    const stars = document.getElementsByClassName('span-star');

    // remove checked class
    for (const star of stars) {
        star.classList.remove('checked');
    }

    // get clicked star
    const c = span.childNodes;

    // add new checked star
    span.classList.add('checked');
}
