<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kitty
 */

?>

	</div><!-- #content -->

<footer class="footer">

    <div class="container">
        <p class="text-secondary">АО ВТБ Лизинг (ИНН 7709378229), далее по тексту ВТБ Лизинг. <br>
            Обращаем ваше внимание, что информация, размещенная на сайте, носит информационный характер и не является
            публичной офертой, определяемой положениями статьи 437 Гражданского кодекса Российской Федерации. АО ВТБ
            Лизинг
            оставляет за собой право в одностороннем порядке в любое время без уведомления вносить изменения, удалять,
            исправлять, дополнять, либо иным способом обновлять информацию об условиях лизинговых программ. Конкретные
            условия договора лизинга будут определяться отдельно при его заключении. АО ВТБ Лизинг оставляет за собой
            право
            отказать в заключении договора лизинга в любых случаях по своему усмотрению, без объяснения причин отказа.
            Ни АО
            ВТБ Лизинг, ни его сотрудники не несут ответственности за убытки, возникшие в результате использования
            информации, содержащейся на сайте, в инвестиционных или в иных целях, а также за прямые или косвенные
            убытки,
            понесенные в результате неисправностей или перерывов в работе сайта.</p>
        <p class="text-secondary">АО ВТБ Лизинг 2020 © Все права защищены</p>
    </div>

</footer>
<div class="modal fade" id="myModal" style="color: black;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Заявка</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        <div class="form-group" style="margin-top: 20px; ">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" style="font-size: 12px;">Я согласен с условиями пользовательского соглашения</label>
                        </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn-lg btn-primary btn" data-dismiss="modal">Отправить</button>
            </div>

        </div>
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?=get_template_directory_uri().'/js/custom.js'?>"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
