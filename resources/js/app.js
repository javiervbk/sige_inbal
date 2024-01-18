import './bootstrap';

import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';

Exporting(Highcharts);

import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.Highcharts = Highcharts;
Alpine.start();
