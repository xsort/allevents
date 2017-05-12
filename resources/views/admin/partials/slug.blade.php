<script>
    var FORM_ID    = '{{ $form_id or ''}}';
    if (FORM_ID != "") FORM_ID = "#" + FORM_ID + " ";
    var INPUT_NAME = '{{ $input_name }}';
    $(document).ready(function(){
        if ($(FORM_ID + "input[name=slug]").val() == "") {
            //Если с английского на русский, то передаём вторым параметром true.
            transliterate = (function () {
                        var rus = "щ   ш  ч  ц  ю  я  ё  ж  ъ  ы  э  а б в г д е з и й к л м н о п р с т у ф х ь".split(/ +/g),
                                eng = "shh sh ch cz yu ya yo zh i  y  e  a b v g d e z i j k l m n o p r s t u f x i".split(/ +/g)
                                ;

                        return function (text, engToRus) {
                            var x;
                            for (x = 0; x < rus.length; x++) {
                                text = text.split(engToRus ? eng[x] : rus[x]).join(engToRus ? rus[x] : eng[x]);
                                text = text.split(engToRus ? eng[x].toUpperCase() : rus[x].toUpperCase()).join(engToRus ? rus[x].toUpperCase() : eng[x].toUpperCase());
                            }
                            text = text.toLowerCase().replace(/[^a-zA-Z ]/g, "").split(' ').join('-');
                            return text;
                        }
                    })();


            $(FORM_ID + 'input[name="' + INPUT_NAME + '"]').keyup(function () {
                var a = $(this).val();
                var b = transliterate(a);
                $(FORM_ID + "input[name=slug]").val(b);
            });
        }
    });
</script>