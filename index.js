const buttonNavbar = document.getElementById("button_navbar");
const navbarLinks = document.getElementById("links");
const footer = document.getElementById("footer")

const displayNav = () => {
  navbarLinks.classList.toggle("navbar_links-mostrar");
};

buttonNavbar.addEventListener("click", displayNav);

let actualYear = new Date().getFullYear()

let footerText = document.createElement('p')
footerText.textContent = `© ${actualYear} Software Factory - Follow us on social media!`

footer.appendChild(footerText)