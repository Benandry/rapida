/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// You can specify which plugins you need
import { Tooltip, Toast, Popover } from 'bootstrap';

// start the Stimulus application
import './bootstrap';
import $ from 'jquery';
/*
import './DataTables/DataTables-1.12.1/js/jquery.dataTables.min';
import './DataTables/DataTables-1.12.1/css/jquery.dataTables.min.css';
import './DataTables/Buttons-2.2.3/js/buttons.bootstrap5.min.js';
import './DataTables/Buttons-2.2.3/js/dataTables.buttons.min.js';
import jsZip from './DataTables/JSZip-2.5.0/jszip-3.1.3.min.js';
import './DataTables/Buttons-2.2.3/js/buttons.colVis.js';
import './DataTables/pdfmake-0.1.36/pdfmake.min';
import './DataTables/Buttons-2.2.3/js/buttons.print.js';
import './DataTables/Buttons-2.2.3/js/buttons.html5.min';
*/

import jsZip from 'jszip';
import 'pdfmake';
import 'datatables.net-dt';
import 'datatables.net-buttons-dt';
import 'datatables.net-buttons/js/buttons.html5';
import 'datatables.net-buttons/js/buttons.print';
import 'datatables.net-bs5';
window.JSZip = jsZip;


$(document).ready(function () {
   var table = $('#myTable').DataTable({
        dom: 'Blfrtip',
        buttons: [
            'print','copyHtml5','excel'
        ],
        language :{
            search : "Rechercher&nbsp",
            lengthMenu: " Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
            infoEmpty: "Affichage de 0 à 0 sur 0 entrées",
            paginate: {
                first: "Première",
                last: "Dernière",
                next: "Suivante",
                previous: "Précédente"
            },
        },
   });
   table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
});
