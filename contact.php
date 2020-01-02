<?php



include("header.php");



?>

<div><div id="contact_content" class="right_column">

        <div class="content">

            <h3 class="title">Kontakt</h3>

            <div class="map">

               <iframe width="570" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=fiorel&amp;aq=&amp;sll=52.379853,17.441157&amp;sspn=4.802413,11.634521&amp;t=m&amp;ie=UTF8&amp;hq=fiorel&amp;hnear=&amp;cid=6394179636768558099&amp;ll=52.40577,16.887188&amp;spn=0.036654,0.098019&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><small><a href="http://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=fiorel&amp;aq=&amp;sll=52.379853,17.441157&amp;sspn=4.802413,11.634521&amp;t=m&amp;ie=UTF8&amp;hq=fiorel&amp;hnear=&amp;cid=6394179636768558099&amp;ll=52.40577,16.887188&amp;spn=0.036654,0.098019&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">Wyświetl większą mapę</a></small>

            </div>

            <div class="adress">

                <div class="left">

                    <h3 class="head small">Adres</h3>

                    <div>Fiorel s. c.</div>

                    <div>ul. Palacza 75</div>

                    <div>60-273 Poznań</div>

                    <div class="phone">tel. +48 502 480 149</div>

                    <div class="email"><a class="js_email" href="#">salonikmody [at] fiorel</a></div>

                </div>

                <div class="right">

                    <h3 class="head small">Godziny otwarcia</h3>

                    <div>Poniedziałek - Piątek</div>

                    <div>8:00 - 17:00</div>

                </div>

                <div class="clear"></div>

            </div>



            <div id="formularz">

                

                <div id="bcontact">

                  <div id="bcontact_form">

                      <h3 class="head">Formularz kontaktowy</h3>

                      <form method="post" action="">

                          <fieldset style="border: none; padding: 0px; margin: 0px;">    



                          <div class="row">

                              <input name="name" type="text" id="name" tabindex="1" value="Imię i nazwisko" onblur="onInputBlur(this);" onfocus="onInputFocus(this);" />     

                              <span id="name_error" class="error_message"></span>



                              <input name="subject" type="text" id="subject" tabindex="2" value="Temat" onblur="onInputBlur(this);" onfocus="onInputFocus(this);" />

                              <span id="subject_error" class="error_message"></span>

                          </div>

                          <div class="row"> 

                            <div class="email_box" style="float: left;"> 

                              <input name="email" type="text" id="email" tabindex="3" value="E-mail" onblur="onInputBlur(this);" onfocus="onInputFocus(this);" />

                              <span id="email_error" class="error_message"></span>

                            </div>

                              <input name="phone" type="text" id="phone" tabindex="4" value="Telefon" onblur="onInputBlur(this);" onfocus="onInputFocus(this);" />

                              <span id="phone_error" class="error_message"></span>

                          </div>

                          <div class="area">

                              <textarea name="message" id="message" cols="45" rows="5" tabindex="5" onclick='if (this.innerHTML == "Wiadomość") {this.value = "";}' onblur='if (this.value == "") {this.innerHTML = "Wiadomość";}' ></textarea>

                              <span id="message_error" class="error_message"></span>

                          </div>

                          <input name="send" type="submit" id="wyslij" tabindex="7" value="Wyślij" />

                    </fieldset>

                  </form>

            </div>

        </div>

        <div id="mask"></div>

        <div class="contact_form_success">

            <div id="bContact_send_email">

                      <h2>Wysyłanie wiadomości...</h2>

                      <p><img src="_img/loader.gif" alt="" /></p>

                </div>

                <!-- end of bContact sending -->

                <div id="bContact_email_sent">

                    <h2>Wiadomość została wysłana.</h2>

                    <p>Dziękujemy <strong id="sender_name"></strong>, odpowiemy tak szybko jak to możliwe.</p>

                    <input value="Powrót" />

                </div>

                <!-- stop form -->

            </div>

        </div>

    </div>

</div>

<script type="text/javascript" src="media/js/bcontact.js"></script>

<link type="text/css" href="_css/layout.css" rel="stylesheet" />

<script type="text/javascript">

        $(function(){

            var newHeight = $("body").height();

            $(".right_column").css("min-height", newHeight);
            $("#contact_content .js_email").attr('href', 'mailto:salonikmody@fiorel.pl').html('salonikmody@fiorel.pl');
        });             

    function onInputBlur(input) {

        if(input.value == '')

                input.value = input.defaultValue;

    }



    function onInputFocus(input) {

            if(input.value == '' || input.value == input.defaultValue) 

                    input.value = '';

    }

</script>

</div>

<?php



include("foot.php");



?>