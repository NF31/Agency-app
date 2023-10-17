/* Swipper js */
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez les boutons "next" et "prev" par leur ID
    const corleButton = document.getElementById("corle");
    const mazButton = document.getElementById("maz");

     // Lorsque le bouton "next" est cliqué
     corleButton.addEventListener('click', function () {
         // Sélectionne tous les éléments avec la classe ".item-home"
         let lists = document.querySelectorAll(".item-home");

         // Ajoute le premier élément à la fin de la liste
         document.querySelector(".slide-home").appendChild(lists[0]);
     });

     // Lorsque le bouton "prev" est cliqué
     mazButton.addEventListener('click', function () {
         // Sélectionne tous les éléments avec la classe ".item-home"
         var lists = document.querySelectorAll(".item-home");

         // Ajoute le dernier élément au début de la liste
         document.querySelector(".slide-home").prepend(lists[lists.length - 1]);
     });


     const houseM = document.querySelector(".house-m");
     if (houseM) {
       houseM.classList.add("fade-in");
     }




    // Sélectionnez toutes les éléments .slide
    const slides = document.querySelectorAll('.slider-track .slide');

    // Parcourez chaque élément .slide
    slides.forEach((slide) => {
        // Ajoutez un gestionnaire d'événement pour le survol
        slide.addEventListener('mouseenter', () => {
            // Ajoutez la classe .stop-scrolling pour arrêter l'animation de défilement
            document.querySelector('.slider-track').classList.add('stop-scrolling');
        });

        // Ajoutez un gestionnaire d'événement pour lorsque le survol est terminé
        slide.addEventListener('mouseleave', () => {
            // Supprimez la classe .stop-scrolling pour reprendre l'animation de défilement
            document.querySelector('.slider-track').classList.remove('stop-scrolling');
        });
    });


        // Gestionnaire pour la galerie restaurant
        const restaurantGallery = document.querySelectorAll(".gallery .image");
        const restaurantPreviewBox = document.querySelector('.preview-box');
        const restaurantPreviewImg = restaurantPreviewBox.querySelector('.dress');
        const restaurantCloseBox = restaurantPreviewBox.querySelector('.icon');
        const restaurantCurrentImg = restaurantPreviewBox.querySelector('.current-img');
        const restaurantTotalImg = restaurantPreviewBox.querySelector('.total-img');

        let restaurantCurrentIndex = 0;

        // Définissez la fonction de prévisualisation à l'extérieur de la boucle
        function restaurantPreview() {
            restaurantCurrentImg.textContent = restaurantCurrentIndex + 1;
            let restaurantSelectUrlImg = restaurantGallery[restaurantCurrentIndex].querySelector("img").src;
            restaurantPreviewImg.src = restaurantSelectUrlImg;
        }

        for (let i = 0; i < restaurantGallery.length; i++) {
            restaurantTotalImg.textContent = restaurantGallery.length;
            restaurantGallery[i].onclick = () => {
                restaurantCurrentIndex = i;

                // Appelez la fonction de prévisualisation ici
                restaurantPreview();

                const restaurantPrevBtn = document.querySelector('.svg');
                const restaurantNextBtn = document.querySelector('.lakd');

                restaurantPrevBtn.onclick = () => {
                    restaurantCurrentIndex = (restaurantCurrentIndex - 1 + restaurantGallery.length) % restaurantGallery.length;
                    restaurantPreview();
                }

                restaurantNextBtn.onclick = () => {
                    restaurantCurrentIndex = (restaurantCurrentIndex + 1) % restaurantGallery.length;
                    restaurantPreview();
                }

                restaurantPreviewBox.classList.add("show");

                restaurantCloseBox.onclick = () => {
                    restaurantPreviewBox.classList.remove("show");
                }
            }
        };




        // Gestionnaire pour la galerie de mariage
        const weddingGallery = document.querySelectorAll(".wedding-gallery .wedding-image");
        const weddingPreviewBox = document.querySelector('.wedding-box');
        const weddingPreviewImg = weddingPreviewBox.querySelector('.ring');
        const weddingCloseBox = weddingPreviewBox.querySelector('.wedding-icon');
        const weddingCurrentImg = weddingPreviewBox.querySelector('.wedding-current-img');
        const weddingTotalImg = weddingPreviewBox.querySelector('.wedding-total-img');

        let weddingCurrentIndex = 0;

        for (let i = 0; i < weddingGallery.length; i++) {
            // Mettez à jour le nombre total d'images
            weddingTotalImg.textContent = weddingGallery.length;

            // Associez un gestionnaire de clic à chaque élément de la galerie
            weddingGallery[i].onclick = () => {
                weddingCurrentIndex = i;

                // Fonction pour afficher l'image sélectionnée
                function weddingPreview() {
                    // Mettez à jour le numéro de l'image actuelle
                    weddingCurrentImg.textContent = weddingCurrentIndex + 1;

                    // Obtenez l'URL de l'image sélectionnée
                    let weddingSelectUrlImg = weddingGallery[weddingCurrentIndex].querySelector("img").src;

                    // Mettez à jour l'URL de l'image principale
                    weddingPreviewImg.src = weddingSelectUrlImg;
                }

                // Sélectionnez les boutons précédent et suivant
                const weddingPrevBtn = weddingPreviewBox.querySelector('.prev');
                const weddingNextBtn = weddingPreviewBox.querySelector('.next');

                // Associez des gestionnaires de clic aux boutons précédent et suivant
                weddingPrevBtn.onclick = () => {
                    weddingCurrentIndex = (weddingCurrentIndex - 1 + weddingGallery.length) % weddingGallery.length;
                    weddingPreview();
                }

                weddingNextBtn.onclick = () => {
                    weddingCurrentIndex = (weddingCurrentIndex + 1) % weddingGallery.length;
                    weddingPreview();
                }

                // Affichez la boîte de prévisualisation
                weddingPreviewBox.classList.add("show");

                // Associez un gestionnaire de clic au bouton de fermeture
                weddingCloseBox.onclick = () => {
                    weddingPreviewBox.classList.remove("show");
                }

                // Affichez l'image sélectionnée
                weddingPreview();
            }
        };



 // Fonction pour charger davantage d'images
 function loadMoreImages() {
    // Simulez une requête asynchrone pour charger plus d'images
    setTimeout(function () {
        var privateGallery = document.querySelector('.private-images');
        var loadingMessage = document.querySelector('.loading-message');

        // Charger 10 images supplémentaires
        for (var i = 11; i <= 20; i++) {
            var imageDiv = document.createElement('div');
            imageDiv.classList.add('beach-image');
            var image = document.createElement('img');
            image.src = "{{ asset('images/a') }}" + i + ".jpg";
            image.alt = "Image " + i;
            imageDiv.appendChild(image);
            privateGallery.appendChild(imageDiv);
        }

        // Masquer le message de chargement
        loadingMessage.style.display = 'none';
    }, 1000); // Simule une attente de 1 seconde pour charger les images (à remplacer par une vraie requête AJAX)
}

// Gestionnaire d'événement de défilement
window.addEventListener('scroll', function () {
    var privateGallery = document.querySelector('.private-images');
    var loadingMessage = document.querySelector('.loading-message');

    // Vérifiez si l'utilisateur a atteint le bas de la page
    if (window.innerHeight + window.scrollY >= privateGallery.offsetHeight) {
        // Affichez le message de chargement et chargez plus d'images
        loadingMessage.style.display = 'block';
        loadMoreImages();
    }
});

// Chargez initialement plus d'images lorsque la page se charge
loadMoreImages();

});
