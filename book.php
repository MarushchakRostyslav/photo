<?php

include 'header.php'

?>


<body>
    

    <div class="reg_success">
        <div class="success">
            
        </div>
    </div>
    <div class="container">
    <div class="callback">
            <div class="callback_left">
                <div class="left_item">
                    <p class="item_title">забронювати</p>
                    <p class="item_textb">Будь ласка, заповніть форму бронювання і найближчим часом з Вами зв’яжеться адміністратор для підтвердження бронювання</p>
                    <p class="item_texts">Забронювати студію можна за телефоном</p>
                    <div class="phone"><a href="tel:+38(097)7777777">+38 (097) 777 77 77</a></div>
                    <p class="item_text">Або за допомогою форми бронювання</p>
                    <p class="item_textm">Бронюючи студію Ви погоджуєтесь з правилами оренди студії!
                       <br><span class="ytext item_textb">Важливо!</span> Закінченням оренди студії вважається час, коли орендар <span class="item_textb">залишає студію, а не закінчує зйомку!</span> 
                       <br>Будь ласка, розраховуйте час заздалегідь! 
                       <br>Мінімальний час оренди студії – 2 години!</p>
                </div>
            </div>
            <div class="callback_right">
                <div class="forms">
                    <div id="contact-wrapper">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
                            <div class="form">
                                <label for="surname"><strong>Прізвище:</strong></label>
                                <input type="text" class="required" size="50" name="surname" id="surname" value="" />
                            </div>
                            <div class="form">
                                <label for="contactname"><strong>Ім'я:</strong></label>
                                <input type="text" class="required" size="50" name="contactname" id="contactname" value="" />
                            </div>
                            <div class="form">
                                <label for="phone"><strong>Телефон:</strong></label>
                                <input type="text" class="required" size="50" name="phone" id="phone" value="" />
                            </div>
                            <div class="form">
                                <label for="message"><strong>Коментар:</strong></label>
                                <textarea rows="5" cols="50" name="message" id="message"></textarea>
                            </div>

                            <input class="submit" type="submit" value="Забронювати" name="submit" />
                        </form>
                    </div>                       
                </div>
            </div>
        </div>
    </div>

</body>




<?php

include 'footer.php';

// connect DataBAse
include 'DB.php';




if (isset($_POST["submit"]) && 
    isset($_POST["surname"]) && 
    $_POST["surname"]>2 &&
    isset($_POST["contactname"]) &&
    $_POST["contactname"]>2 &&
    isset($_POST["phone"]) &&
    $_POST["phone"]>=10
    )
    {
        $sql = "INSERT INTO books (surname, name, phone, comment)
        VALUES ('".$_POST['surname']."', '".$_POST['contactname']."', '".$_POST['phone']."', '".$_POST['message']."')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Вас зареєстровано";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }



?>