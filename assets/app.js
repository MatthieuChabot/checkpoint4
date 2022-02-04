/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

require('bootstrap');

const project = document.getElementById("project");
const project_more = document.getElementById("project_more");

const profile = document.getElementById("profile");
const profile_more = document.getElementById("profile_more");

project.addEventListener("click", function () {
    if (project_more.className === 'd-none') {
        project_more.className = 'd-flex';
    } else {
        project_more.className = 'd-none';
    }
});

profile.addEventListener("click", function () {
    if (profile_more.className === 'd-none') {
        profile_more.className = 'd-flex';
    } else {
        profile_more.className = 'd-none';
    }
});
