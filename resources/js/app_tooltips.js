import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';
import 'tippy.js/animations/scale-subtle.css';

/* Aqui se aplican todos los tooltips del sitio */

// Header ClickMe


tippy('#header-icon-container', {
    placement: 'bottom',
    content: 'Click Me!',
    animation: 'scale-subtle',
    hideOnClick: false,
    delay: [100, 0]
})

// Focus Ring Links
tippy('#focus-lotr-link-trello', {
    placement: 'bottom',
    content: 'Trello',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-lorem', {
    placement: 'bottom',
    content: 'Lorem Ipsum',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-fonts', {
    placement: 'bottom',
    content: 'Google Fonts',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-svgpro', {
    placement: 'bottom',
    content: 'SVGs',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-icons', {
    placement: 'bottom',
    content: 'Icons',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-resize', {
    placement: 'bottom',
    content: 'Resize Image',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-random', {
    placement: 'bottom',
    content: 'Random Color',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-pallette', {
    placement: 'bottom',
    content: 'Color Pallette',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-wheel', {
    placement: 'bottom',
    content: 'Color Wheel',
    animation: 'scale-subtle',
    delay: [100, 0]
});
tippy('#focus-lotr-link-music', {
    placement: 'bottom',
    content: 'Music & Sounds',
    animation: 'scale-subtle',
    delay: [100, 0]
});

