import $ from 'jquery';
import { 
    createIcons, 
    User, 
    Settings,
} from 'lucide';

document.addEventListener('DOMContentLoaded', () => {
    createIcons({
      icons: {
        User,
        Settings,
      }
    });
});

$(function () {
    //
});
