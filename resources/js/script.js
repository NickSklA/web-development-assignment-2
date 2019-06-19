// change nav bar color on scroll
window.onscroll = () => {
    const nav = document.getElementById("nav")
    if (this.scrollY <= 10) 
        nav.className = ''; 
    else 
        nav.className = 'scroll';
};