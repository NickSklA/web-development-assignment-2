// change nav bar color on scroll
window.onscroll = () => {
    const nav = document.getElementById("nav")
    if (this.scrollY <= 10) 
        nav.className = ''; 
    else 
        nav.className = 'scroll';
};

// rating system
function onStarClick(span, loggedin) {

    if (loggedin == 'false') {
        alert('Login to rate this movie!');
        return;
    }

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

    // submit form
    if (confirm('Rate this movie for ' + c[0].value + ' stars?')) {
        document.getElementById('rating-form').submit();
    }
    else {
        // remove checked class
        for (const star of stars) {
            star.classList.remove('checked');
        }
    }
    
}
