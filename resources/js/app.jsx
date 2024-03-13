import './bootstrap';
import Saludo from './Pages/Saludo.jsx';
import Numero from './Pages/Numero.jsx';
import {createRoot} from 'react-dom/client';

import Swal from 'sweetalert2';

import Alpine from 'alpinejs';
import {document} from "postcss";

window.Alpine = Alpine;

window.Swal = Swal;

Alpine.start();

const react_numero = document.getElementById("react-numero");
const react_saludo = document.getElementById('react-saludo');

if(react_numero) {
    createRoot(react_numero).render(<Numero/>)
}

if(react_saludo) {
    createRoot(react_saludo).render(<Saludo/>)
}

