import './styles/app.css';

// Stimulus
import { startStimulusApp } from '@symfony/stimulus-bridge';
import Chart from 'chart.js/auto';

export const app = startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.[jt]sx?$/
));

// Collection form handling pour les visiteurs
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des collections de formulaires (visiteurs dans visite)
    const addButtons = document.querySelectorAll('.add-collection-widget');

    addButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            const list = document.querySelector(this.dataset.listSelector);
            const counter = list.dataset.widgetCounter || list.children.length;

            let newWidget = list.dataset.prototype;
            newWidget = newWidget.replace(/__name__/g, counter);

            const wrapper = document.createElement('div');
            wrapper.innerHTML = newWidget;

            list.appendChild(wrapper.firstElementChild);
            list.dataset.widgetCounter = parseInt(counter) + 1;
        });
    });

    // Suppression d'éléments de collection
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-collection-widget')) {
            e.preventDefault();
            e.target.closest('.collection-item').remove();
        }
    });
});
