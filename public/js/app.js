$(document).ready(function(){

    $("#f3").validate(
    {
        ignore: [],
      debug: false,
        rules: {

            cktext:{
                 required: function()
                {
                 CKEDITOR.instances.cktext.updateElement();
                },

                 minlength:10
            }
        },
        messages:
            {

            cktext:{
                required:"Please enter Text",
                minlength:"Please enter 10 characters"


            }
        }
    });
});
