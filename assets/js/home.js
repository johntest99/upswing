$(document).ready(function(){
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
         if (!String.prototype.trim) {
             (function () {
                 // Make sure we trim BOM and NBSP
                 var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                 String.prototype.trim = function () {
                     return this.replace(rtrim, '');
                 };
             })();
         }

         [].slice.call(document.querySelectorAll('input.input__field, textarea.input__field')).forEach(function (inputEl) {
             // in case the input is already filled..
             if (inputEl.value.trim() !== '') {
                 classie.add(inputEl.parentNode, 'input--filled');
             }

             // events:
             inputEl.addEventListener('focus', onInputFocus);
             inputEl.addEventListener('blur', onInputBlur);
         });

         function onInputFocus(ev) {
             classie.add(ev.target.parentNode, 'input--filled');
         }

         function onInputBlur(ev) {
             if (ev.target.value.trim() === '') {
                 classie.remove(ev.target.parentNode, 'input--filled');
             }
         }

// iframes =======================================================================================================
         // add scrolling no attribute to typeform iframe
         function functionAddAttribute() {
             $('iframe').each(
                 function (index, elem) {
                     elem.setAttribute("scrolling", "no");
                 }
             );
         };

         window.onload = functionAddAttribute;

         //mouse enter and mouse leave functions for typeform
         $('.typeform-widget').mouseenter(function () {
             $('.typeform-widget iframe').each(
                 function (index, elem) {
                     elem.setAttribute("scrolling", "yes");
                 }
             )
         });

         $('.typeform-widget').mouseleave(function () {
            $('.typeform-widget iframe').each(
                function (index, elem) {
                    elem.setAttribute("scrolling", "no");
                }
            )
        });

        //mouse enter and mouse leave functions for birdeye
        $('.birdeye-container').mouseenter(function () {
            $('.birdeye-container iframe').each(
                function (index, elem) {
                    elem.setAttribute("scrolling", "yes");
                }
            )
        });

        $('.birdeye-container').mouseleave(function () {
           $('.birdeye-container iframe').each(
               function (index, elem) {
                   elem.setAttribute("scrolling", "no");
               }
           )
       });

         //================================= youtube iframe 

         
         $('.modalClose').on('click', function () {
             $('.modalYtFrame').empty();
         });

     });