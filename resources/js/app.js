document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('.msg');
    const toast = document.querySelector('.toast');
    const closeT = document.querySelector('.close');
    const progressT = document.querySelector('.progress');

    button.addEventListener('click', () => {
        try {
            toast.classList.add('active');
            progressT.style.width = '100%';

            setTimeout(() => {
                toast.classList.remove('active');
                progressT.style.width = '0';
            }, 5000);
        } catch (error) {
            console.error(error);
        }
    });

    closeT.addEventListener('click', () => {
        toast.classList.remove('active');
        progressT.style.width = '0';
    });
});

/* faq table */
// Sélectionnez tous les éléments avec la classe .faq
const faqs = document.querySelectorAll(".faqq");

// Parcourez chaque élément .faq et ajoutez un écouteur d'événements
faqs.forEach((faq) => {
  // Écoutez l'événement click sur chaque élément .faq
  faq.addEventListener("click", () => {
    // À l'intérieur de l'écouteur d'événements, utilisez "this" pour faire référence à l'élément .faq actuel
    faq.classList.toggle("active");
  });
});
