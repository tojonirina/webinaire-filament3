import './bootstrap';
import * as bootstrap from 'bootstrap'
import hljs from 'highlight.js';

document
    .querySelectorAll('pre')
    .forEach((block) => hljs.highlightElement(block));
