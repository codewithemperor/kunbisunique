AOS.init();
window.onscroll = function() {
    const element = document.querySelector('.navbar');
    const scrollPosition = window.scrollY; // Get the scroll position on the Y-axis

    if (scrollPosition > 100) { // Adjust 100px to the point where you want to trigger the class
        element.classList.remove('position-absolute');
        element.classList.add('fixed-top');

    } else {
        element.classList.remove('fixed-top');
    }
};


var swiper = new Swiper(".bannerSwipper", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
  });



// Index Swipper Our Service
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    height: 100,
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 350,
      modifier: 1,
      slideShadows: true,
    },
  });

//   About Us Swipper - Our Services
var swiper = new Swiper(".aboutUs", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 15,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

  var swiper = new Swiper(".destination-area", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 15,
    
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

//   Tour
var swiper = new Swiper(".tour-area", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 15,
    
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

  var swiper = new Swiper(".flyers", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: true,
      },
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  

  const allCountries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
    "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan",
    "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria",
    "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada",
    "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros",
    "Congo, Democratic Republic of the", "Congo, Republic of the", "Costa Rica", "Croatia",
    "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
    "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia",
    "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia",
    "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau",
    "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran",
    "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan",
    "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
    "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
    "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
    "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova",
    "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia",
    "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria",
    "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama",
    "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar",
    "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
    "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
    "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore",
    "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan",
    "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria",
    "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga",
    "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda",
    "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay",
    "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia",
    "Zimbabwe"
];

// Function to populate countries using plain JavaScript
function populateCountries() {
    const countrySelects = document.querySelectorAll('.all-countries');
    countrySelects.forEach(selectElement => {
        allCountries.forEach(country => {
            const option = document.createElement('option');
            option.value = country;
            option.textContent = country;
            selectElement.appendChild(option);
        });
    });
}

// Function to generate months from the current month to the next 5 years
function populateMonths() {
    const select = document.getElementById('select-destination');
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth(); // 0 = January, 11 = December
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    for (let year = currentYear; year <= currentYear + 5; year++) {
        for (let month = 0; month < 12; month++) {
            if (year === currentYear && month < currentMonth) continue;

            const option = document.createElement('option');
            option.value = `${months[month]} ${year}`;
            option.textContent = `${months[month]} ${year}`;
            select.appendChild(option);

            if (year === currentYear + 5 && month === currentMonth - 1) break;
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Populate dropdowns after the data is loaded
    populateCountries();
    populateMonths();
});
