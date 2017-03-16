import axios from 'axios';
import Dropzone from 'dropzone';
import Cropper from 'cropperjs';

window.axios = axios;
window.Dropzone = Dropzone;

axios.defaults.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken;
Dropzone.options.myAwesomeDropzone = {
    headers: { "X-CSRF-TOKEN": Laravel.csrfToken },
};

window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');