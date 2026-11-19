
document.addEventListener('DOMContentLoaded', function () {

    const readMoreBtn = document.getElementById('read-more-button');
    const backgroundExtra = document.getElementById('background-extra');

    if (readMoreBtn && backgroundExtra) {

        readMoreBtn.addEventListener('click', function () {

            const isExpanded =
                readMoreBtn.getAttribute('aria-expanded') === 'true';

            backgroundExtra.hidden = isExpanded;

            readMoreBtn.setAttribute(
                'aria-expanded',
                String(!isExpanded)
            );

            readMoreBtn.innerHTML = isExpanded
                ? 'Read Our Story <span>↓</span>'
                : 'Read Less <span>↑</span>';

        });
    }

});
