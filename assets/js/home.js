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

        [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
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

// add scrolling no attribute to typeform iframe
    function functionAddAttribute(){
        $("iframe").each(
            function(index, elem) {
                elem.setAttribute("scrolling","no");
            }
        );
   };
   
   window.onload = functionAddAttribute;


// youtube iframe
// on preview show iframe
$('#ytTrigger').on('click', function (e) {
    var idVideo = $('#modalYtFrame').data('videoid');
    $('#modalYtFrame').html('<iframe width="90%" height="315px" src="https://www.youtube.com/embed/' + idVideo + '?autoplay=true" frameborder="0" allowfullscreen></iframe>');
  });
  //on close remove
  $('#modalClose').on('click', function () {
     $('#modalYtFrame').empty();
  });
   