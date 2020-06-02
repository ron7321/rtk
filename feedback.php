<?php
include_once "connect.php";
include_once "header.php";
?>
<main>
	<h1 class="mb-5">Отзывы</h1>
	<hr class="liner">
	<style>
.m-b-20 {margin-bottom: 20px}
.quote {position: relative;}
.quote blockquote {
  padding: 0px;
  border: 0;
  margin: 0;
  font-size: 14px;
  font-style: italic;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  -ms-border-radius: 8px;
  border-radius: 8px;
}
.quote blockquote p {
  color: #fff;
  padding-top: 25px;
  padding-bottom: 45px;
  padding-left: 30px;
  padding-right: 30px;
}
.quote blockquote:before {
  content: "";
  position: absolute;
  top: 100%;
  left: 90px;
  width: 0;
  height: 0;
  border-top: 0.83333em solid #ccc;
  border-right: 0.86667em solid transparent;
}
.quote.green blockquote {
  background-color: #32c5d2;
}
.quote.green blockquote:before {
  border-top-color: #32c5d2;
}
.quote.dark blockquote {
  background-color: #555;
}
.quote.dark blockquote:before {
  border-top-color: #555;
}
.quote-footer {
  margin: 10px 0;
}
.quote-footer .quote-author-img img {
  float: left;
  max-width: 90px;
  width: 90px;
  height: 90px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  margin-left: -5px;
  margin-top: -40px;
  position: relative;
  z-index: 1;
  padding: 5px;
  background-color: #fff;
}
.quote-footer h4 {
  font-size: 14px;
  margin-bottom: 4px;
}
.quote-footer p {
  font-weight: 400;
  font-style: italic;
  font-size: 14px;
}
</style>
	<section class="container">
      <div class="row">
        <div class="col-md-4 m-b-20">
          <div class="quote dark">
            <blockquote>
              <p>Я оставляю хороший отзыв мне всё понравилось, надеюсь в дальнейшем качество не изменится!
              </p>
            </blockquote>                        
          </div>
          <div class="quote-footer text-right">
            <div class="quote-author-img">
              <img src="http://bootstraptema.ru/snippets/icons/2016/mia/6.png" alt="Аватар пользователя">
            </div>
            <h4>Дмитрий
            </h4>
            <p>
              <strong>Предприниматель
              </strong>
            </p>
          </div>
        </div>
        <!--Отзыв 1-->
        <div class="col-md-4 m-b-20">
          <div class="quote green">
            <blockquote>
              <p>Согласна! Качество на высоте как и доступность в общем виде!
              </p>
            </blockquote>                        
          </div>
          <div class="quote-footer text-right">
            <div class="quote-author-img">
              <img src="http://bootstraptema.ru/snippets/icons/2016/mia/7.png" alt="Аватар пользователя">
            </div>
            <h4>Надя
            </h4>
            <p>
              <strong>Финансист
              </strong>
            </p>
          </div>
        </div>
        <!--Отзыв 2-->
        <div class="col-md-4 m-b-20">
          <div class="quote dark">
            <blockquote>
              <p>И мне помогли от души! Респект за уважение к своей работе и тем кто её использует в своих целях!
              </p>
            </blockquote>                        
          </div>
          <div class="quote-footer text-right">
            <div class="quote-author-img">
              <img src="http://bootstraptema.ru/snippets/icons/2016/mia/8.png" alt="Аватар пользователя">
            </div>
            <h4>Елена
            </h4>
            <p>
              <strong>Менеджер
              </strong>
            </p>
          </div>
        </div>
        <!--Отзыв 3-->
      </div>
      <!--первая секция row-->
      <div class="row">
        <div class="col-md-4 m-b-20">
          <div class="quote dark">
            <blockquote>
              <p>Так держать! Всё на высшем уровне!!!
              </p>
            </blockquote>                        
          </div>
          <div class="quote-footer text-right">
            <div class="quote-author-img">
              <img src="http://bootstraptema.ru/snippets/icons/2016/mia/9.png" alt="">
            </div>
            <h4>Нина
            </h4>
            <p>
              <strong>Коммерческий директор
              </strong>
            </p>
          </div>
        </div>
        <!--Отзыв 4-->
        <div class="col-md-8 m-b-20">
          <div class="quote green">
            <blockquote>
              <p>Долго искала организацию предоставляющую подобные услуги. Мне всё понравилось, думаю в дальнейшем стану постоянным клиентом.
              </p>
            </blockquote>                        
          </div>
          <div class="quote-footer text-right">
            <div class="quote-author-img">
              <img src="http://bootstraptema.ru/snippets/icons/2016/mia/10.png" alt="">
            </div>
            <h4>Малика
            </h4>
            <p>
              <strong>Пиар технолог
              </strong>
            </p>
          </div>
        </div>
        <!--Отзыв 5-->
      </div>
      <!--вторая секция row-->
    </section>
</main>
<?php
include_once "footer.php";
?>