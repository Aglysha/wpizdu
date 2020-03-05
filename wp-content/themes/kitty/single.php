<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kitty
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


            <section class="section" style="background-image: url('<?=get_template_directory_uri().'/img/bg-3.png';?>');">
                <div class="container" style="color: white">
                    <ul class="nav nav-fill" style="font-size: 14px;">
		                <? $cats = get_categories( [
			                'taxonomy'     => 'category',
			                'type'         => 'post',
		                ] );
		                foreach ( $cats as $cat ):?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/<?=$cat->slag?>" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
					                <?= $cat->name?>
                                </a>
				                <? $posts = get_posts(
					                [
						                'category' => $cat->cat_ID
					                ]
				                ); ?>
				                <? if ($posts):?>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						                <?foreach ( $posts as $post ) {?>
                                            <a class="dropdown-item" href="/<?=$post->post_name;?>"><?=$post->post_title;?></a>
						                <?}?>
                                    </div>
				                <?endif;?>
                            </li>
		                <?endforeach; ?>
                    </ul>
                    <div style="margin: 100px 0 350px;">
                        <p class="big_text mb-5" style="line-height: 48px;">Спецтехника <br>и самоходные машины</p>
                        <p class="small_text mb-5">
                            Является частью <br>
                            Корпоративно-Инвестиционного Бизнеса Группы <br>
                            ВТБ – лидера на рынке<br>
                            инвестиционно-банковских услуг в России.
                        </p>
                        <button class="btn-lg btn-primary btn" data-toggle="modal" data-target="#myModal">Получить консультацию</button>

                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <p class="big_text mb-5 text-center" style="line-height: 48px;">Спецтехника <br>и самоходные машины</p>
                    <div class="btn-group " style="font-size: 12px;">
                        <button type="button" class="btn btn-link bat" data-slide="1">Вилочный <br>автопогрузчик CPCD30</button>
                        <button type="button" class="btn btn-link bat" data-slide="2">Вилочный<br> автопогрузчик CPCD20</button>
                        <button type="button" class="btn btn-link bat" data-slide="3">Вилочный<br> автопогрузчик CPCD15</button>
                        <button type="button" class="btn btn-link bat" data-slide="4">Экскаватор<br> CLG920E</button>
                        <button type="button" class="btn btn-link bat"data-slide="5">Фронтальный<br> погрузчик CLG855N</button>
                        <button type="button" class="btn btn-link bat" data-slide="6">Фронтальный <br>погрузчик CLG836</button>
                    </div>
                    <div class="row align-items-center justify-content-between dat" data-slide="1" style="margin-top: 50px; display: flex;">
                        <div class="col-5" >
                            <p class="medium_text mb-5">Вилочный автопогрузчик CPCD30</p>
                            <p class="small_text mb-5">
                                Платеж от 53 553 ₽ в мес. <br>
                                Аванс 30%<br>
                                Срок 20 мес.<br>
                                20% НДС к возмещению 234 010 ₽<br>
                                Экономия по налогу на прибыль 234 010 ₽<br>
                            </p>
                            <button class="btn-lg btn-primary btn " data-toggle="modal" data-target="#myModal">Заказать</button>
                        </div>
                        <img src="<?=get_template_directory_uri().'/img/track.png'?>">
                    </div>
                    <div class="row align-items-center justify-content-between dat" data-slide="2" style="margin-top: 50px">
                        <div class="col-5" >
                            <p class="medium_text mb-5">Вилочный автопогрузчик CPCD20</p>
                            <p class="small_text mb-5">
                                Платеж от 53 553 ₽ в мес. <br>
                                Аванс 30%<br>
                                Срок 20 мес.<br>
                                20% НДС к возмещению 234 010 ₽<br>
                                Экономия по налогу на прибыль 234 010 ₽<br>
                            </p>
                            <button class="btn-lg btn-primary btn" data-toggle="modal" data-target="#myModal">Заказать</button>
                        </div>
                        <img src="<?=get_template_directory_uri().'/img/track2.png'?>">
                    </div>
                    <div class="row align-items-center justify-content-between dat" data-slide="3" style="margin-top: 50px">
                        <div class="col-5">
                            <p class="medium_text mb-5">Вилочный автопогрузчик CPCD15</p>
                            <p class="small_text mb-5">
                                Платеж от 53 553 ₽ в мес. <br>
                                Аванс 30%<br>
                                Срок 20 мес.<br>
                                20% НДС к возмещению 234 010 ₽<br>
                                Экономия по налогу на прибыль 234 010 ₽<br>
                            </p>
                            <button class="btn-lg btn-primary btn" data-toggle="modal" data-target="#myModal">Заказать</button>
                        </div>
                        <img src="<?=get_template_directory_uri().'/img/track3.png'?>">
                    </div>
                    <div class="row align-items-center justify-content-between dat" data-slide="4" style="margin-top: 50px">
                        <div class="col-5">
                            <p class="medium_text mb-5">Экскаватор CLG920E</p>
                            <p class="small_text mb-5">
                                Платеж от 53 553 ₽ в мес. <br>
                                Аванс 30%<br>
                                Срок 20 мес.<br>
                                20% НДС к возмещению 234 010 ₽<br>
                                Экономия по налогу на прибыль 234 010 ₽<br>
                            </p>
                            <button class="btn-lg btn-primary btn" data-toggle="modal" data-target="#myModal">Заказать</button>
                        </div>
                        <img src="<?=get_template_directory_uri().'/img/track4.png'?>">
                    </div>
                    <div class="row align-items-center justify-content-between dat" data-slide="5" style="margin-top: 50px">
                        <div class="col-5" >
                            <p class="medium_text mb-5">Фронтальный погрузчик CLG855N</p>
                            <p class="small_text mb-5">
                                Платеж от 53 553 ₽ в мес. <br>
                                Аванс 30%<br>
                                Срок 20 мес.<br>
                                20% НДС к возмещению 234 010 ₽<br>
                                Экономия по налогу на прибыль 234 010 ₽<br>
                            </p>
                            <button class="btn-lg btn-primary btn" data-toggle="modal" data-target="#myModal">Заказать</button>
                        </div>
                        <img src="<?=get_template_directory_uri().'/img/track5.png'?>">
                    </div>
                    <div class="row align-items-center justify-content-between dat" data-slide="6" style="margin-top: 50px">
                        <div class="col-5" >
                            <p class="medium_text mb-5">Фронтальный погрузчик CLG836</p>
                            <p class="small_text mb-5">
                                Платеж от 53 553 ₽ в мес. <br>
                                Аванс 30%<br>
                                Срок 20 мес.<br>
                                20% НДС к возмещению 234 010 ₽<br>
                                Экономия по налогу на прибыль 234 010 ₽<br>
                            </p>
                            <button class="btn-lg btn-primary btn" data-toggle="modal" data-target="#myModal">Заказать</button>
                        </div>
                        <img src="<?=get_template_directory_uri().'/img/track6.png'?>">
                    </div>
                </div>
            </section>

            <section class="section" style="background-color: #F2F2F2;">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="card text-center">
                                <div class="card-body card-body--flex">
                                    <img src="<?=get_template_directory_uri().'/img/badges/top'?>.png" width="82" height="100" alt="">
                                    <h5 class="card-title">Крупнейшая лизинговая<br> компания в России</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <div class="card-body card-body--flex">
                                    <img src="<?=get_template_directory_uri().'/img/badges/diamond'?>.png" width="82" height="100" alt="">
                                    <h5 class="card-title">По чистым инвестициям в лизинг</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <div class="card-body card-body--flex">
                                    <img src="<?=get_template_directory_uri().'/img/badges/leader'?>.png" width="82" height="100" alt="">
                                    <h5 class="card-title">Лидер</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-lg btn-primary btn" style="margin-top: 30px;" data-toggle="modal" data-target="#myModal">Получить консультацию</button>
                    </div>
                </div>
            </section>

            <section class="section section--last">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-4">
                            <svg width="170" height="36" viewBox="0 0 170 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M112.748 16.3728L112.851 14.7459C113.058 14.8474 113.367 14.8474 113.678 14.8474C115.124 14.8474 115.228 12.7121 115.228 6.61015H122.049V16.3728H119.982V8.23736H117.088C117.088 13.5257 116.882 16.4747 114.195 16.4747C113.678 16.5762 113.161 16.4747 112.748 16.3728ZM124.426 6.71195H126.389V10.2712C126.389 11.2882 126.286 13.1187 126.286 14.0338L130.523 6.71167H132.693V16.4747H130.73V12.9154C130.73 11.8984 130.833 10.0679 130.833 9.15277L126.596 16.4747H124.425V6.71195H124.426ZM134.346 16.271L134.553 14.5423C135.276 14.949 136.206 15.0508 137.033 15.0508C137.963 15.0508 139.1 14.8474 139.1 13.6269C139.1 12.3048 137.653 12.203 136.723 12.203C136.516 12.203 136.31 12.203 136 12.203V10.6776C136.206 10.6776 136.413 10.6776 136.516 10.6776C137.446 10.6776 138.996 10.4743 138.996 9.25372C138.996 8.23679 137.963 8.03346 137.136 8.03346C136.413 8.03346 135.379 8.23679 134.759 8.44012L134.553 6.91472C135.379 6.71139 136.516 6.50806 137.446 6.50806C139.41 6.50806 140.96 7.21985 140.96 9.05039C140.96 10.0673 140.237 10.8809 139.1 11.1858C140.34 11.3891 141.167 12.4063 141.167 13.5248C141.167 15.6605 139.513 16.4738 137.24 16.4738C136.207 16.678 135.173 16.4747 134.346 16.271ZM143.131 6.71195H145.094V10.2712C145.094 11.2882 144.991 13.1187 144.991 14.0338L149.228 6.71167H151.398V16.4747H149.435V12.9154C149.435 11.8984 149.538 10.0679 149.538 9.15277L145.301 16.4747H143.131V6.71195ZM153.878 6.71195H155.945V10.5764H159.872V6.71195H161.939V16.4747H159.872V12.2033H155.945V16.4747H153.878V6.71195H153.878ZM164.213 6.71195H170V8.33917H166.176V16.4747H164.11V6.71195H164.213ZM89.7018 31.1184H94.1456C95.7992 31.1184 96.8326 30.7118 97.556 29.7963C97.8658 29.3897 98.3828 28.5761 98.3828 27.0507C98.3828 25.5253 97.8661 24.5081 96.8326 23.6947C96.2125 23.2881 95.3857 22.9829 94.0422 22.9829H89.5984V31.1184H89.7018ZM83.8117 36.0001V6.71195H103.24L101.587 11.5933H89.7021V18.1016H94.5595C98.3831 18.1016 100.45 19.017 101.794 20.1355C102.827 21.0509 104.687 23.0845 104.687 27.051C104.687 31.0169 102.827 33.1526 101.174 34.2713C99.3133 35.4916 97.3499 35.8983 93.4226 35.8983H83.812V36.0001H83.8117ZM66.6564 36.0001V11.5933H58.0786V6.71195H82.0543L80.401 11.5933H72.7538V36.0001H66.6564ZM42.6807 18.4067H45.9876C47.0214 18.4067 47.5378 18.4067 48.0545 18.3052C49.398 17.8985 50.328 16.678 50.328 15.0511C50.328 13.119 49.398 12.2036 48.0545 11.7969C47.5378 11.5936 47.0211 11.4918 45.8842 11.4918H42.7839V18.407H42.6807V18.4067ZM42.7842 23.4917V31.2202H46.9179C48.1582 31.2202 49.2951 31.1187 50.1216 30.4066C50.9481 29.6945 51.2582 28.6779 51.2582 27.4576C51.2582 26.5425 50.9484 25.6274 50.5349 24.9153C49.7081 23.8981 48.5715 23.5932 46.7113 23.5932H42.7842V23.4917ZM52.2919 20.4409C53.4285 20.9491 54.4622 21.6611 55.0821 22.0678C56.8392 23.4917 57.5625 25.3219 57.5625 27.7628C57.5625 31.7287 55.3922 34.678 51.8784 35.5931C50.845 35.8982 49.7081 36.0001 47.5378 36.0001H36.7903V6.71195H46.298C48.2614 6.71195 49.6049 6.81376 50.7418 7.11861C54.1519 8.03403 56.4256 10.3728 56.4256 14.0338C56.4256 15.9659 55.7023 17.6949 54.5657 18.8137C54.1519 19.3219 53.4285 19.9321 52.2919 20.4409Z"
                                          fill="#263975"/>
                                    <path d="M30.6947 4.4744H5.47899L7.33921 0H32.5549L30.6947 4.4744ZM29.7647 6.71189H4.54903L2.6888 11.1863H27.9048L29.7647 6.71189ZM27.0777 13.322H1.86201L0.0020752 17.7964H25.2178L27.0777 13.322Z"
                                          fill="#263975"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="170" height="36" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="col-8">
                            <ul class="d-flex justify-content-between" style="list-style: none">
                                <li><a href="#">О компании</a></li>
                                <li><a href="#">Новости</a></li>
                                <li><a href="#">О группе ВТБ</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-3">
                            <svg class="mr-2" width="21" height="25" viewBox="0 0 21 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 0C5.07658 0 0.664307 4.41227 0.664307 9.83569C0.664307 11.6118 1.12262 13.4973 2.02647 15.4398C2.74015 16.9735 3.73263 18.5478 4.97635 20.1191C7.08478 22.7826 9.16351 24.4988 9.25101 24.5705C9.58868 24.8474 10.0322 25 10.5 25C10.9678 25 11.4113 24.8474 11.749 24.5704C11.8365 24.4986 13.9152 22.7826 16.0236 20.119C17.2674 18.5479 18.2598 16.9735 18.9735 15.4398C19.8774 13.4973 20.3357 11.6118 20.3357 9.83563C20.3357 4.41227 15.9234 0 10.5 0ZM15.151 19.3989C13.1173 21.9721 11.052 23.679 11.0316 23.6958C10.8976 23.8057 10.7038 23.8688 10.5 23.8688C10.2961 23.8688 10.1024 23.8057 9.96849 23.6958C9.88676 23.6288 1.79558 16.9091 1.79558 9.83569C1.79553 5.03603 5.70034 1.13122 10.5 1.13122C15.2997 1.13122 19.2045 5.03603 19.2045 9.83569C19.2045 13.5005 17.0001 17.059 15.151 19.3989Z"
                                      fill="#263975"/>
                                <path d="M10.5 4.6062C7.6165 4.6062 5.27057 6.95213 5.27057 9.83567C5.27057 12.7191 7.6165 15.0651 10.5 15.0651C13.3835 15.0651 15.7294 12.7191 15.7294 9.83567C15.7294 6.95213 13.3835 4.6062 10.5 4.6062ZM10.5 13.9339C8.2402 13.9339 6.40179 12.0954 6.40179 9.83567C6.40179 7.57588 8.2402 5.73742 10.5 5.73742C12.7598 5.73742 14.5982 7.57588 14.5982 9.83567C14.5982 12.0954 12.7598 13.9339 10.5 13.9339Z"
                                      fill="#263975"/>
                            </svg>
                            ул. Немцова, д. 22 <br>
                            Тюмень, Россия
                        </div>
                        <div class="col-3">
                            <a href="mailto:client@vtb-leasing.com">
                                <svg class="mr-2" width="20" height="16" viewBox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2422 0.382812H1.75781C0.789766 0.382812 0 1.17172 0 2.14062V13.8594C0 14.825 0.78625 15.6172 1.75781 15.6172H18.2422C19.2078 15.6172 20 14.8309 20 13.8594V2.14062C20 1.175 19.2138 0.382812 18.2422 0.382812ZM17.9995 1.55469L10.0373 9.51691L2.00621 1.55469H17.9995ZM1.17188 13.6167V2.3777L6.81559 7.97301L1.17188 13.6167ZM2.00051 14.4453L7.64777 8.79805L9.62656 10.7598C9.85563 10.987 10.2253 10.9862 10.4534 10.758L12.3828 8.82863L17.9995 14.4453H2.00051ZM18.8281 13.6167L13.2114 8L18.8281 2.38328V13.6167Z"
                                          fill="#263975"/>
                                </svg>
                                client@vtb-leasing.com</a>
                        </div>
                        <div class="col-3">
                            <a href="#login">
                                <svg class="mr-2" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00011 8C10.2093 8 12.0001 6.20914 12.0001 4C12.0001 1.79086 10.2093 0 8.00011 0C5.79098 0 4.00011 1.79086 4.00011 4C4.00011 6.20914 5.79098 8 8.00011 8Z"
                                          fill="#263975"/>
                                    <path d="M16 17V13C16 12.4 15.7 11.8 15.2 11.4C14.1 10.5 12.7 9.9 11.3 9.5C10.3 9.2 9.2 9 8 9C6.9 9 5.8 9.2 4.7 9.5C3.3 9.9 1.9 10.6 0.8 11.4C0.3 11.8 0 12.4 0 13V17H16Z"
                                          fill="#263975"/>
                                </svg>
                                Войти</a>
                        </div>
                        <div class="col-3">
                            <a href="tel:+790035547039">
                                <svg class="mr-2" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.2598 16.4603L15.0666 17.6534C14.8534 17.8654 14.2294 17.9995 14.2107 17.9995C10.4335 18.0313 6.79702 16.5483 4.12457 13.8753C1.44445 11.1958 -0.0403697 7.54518 0.000835263 3.75721C0.000835263 3.75499 0.137634 3.14859 0.350234 2.93765L1.54339 1.74346C1.98121 1.30623 2.81944 1.10847 3.40668 1.30401L3.65827 1.3886C4.24551 1.58414 4.85909 2.23231 5.02169 2.82884L5.62265 5.03373C5.78578 5.63138 5.5666 6.48167 5.12935 6.91891L4.33172 7.7165C5.11398 10.6157 7.3876 12.8887 10.2853 13.672L11.0829 12.8744C11.5202 12.4371 12.3728 12.2185 12.9705 12.3811L15.1755 12.9832C15.771 13.1447 16.4192 13.7577 16.6158 14.3454L16.6993 14.597C16.8947 15.1849 16.697 16.0231 16.2598 16.4603ZM10.1249 8.99973H11.2499C11.2499 7.75721 10.2425 6.74981 8.99987 6.74981V7.87477C9.62002 7.87477 10.1249 8.3801 10.1249 8.99973ZM14.625 8.99973C14.625 5.89288 12.1068 3.37489 8.99987 3.37489V4.49988C11.4817 4.49988 13.4999 6.51911 13.4999 8.99973H14.625ZM8.99987 0V1.12496C13.3417 1.12496 16.875 4.65805 16.875 8.99973H18C18 4.02967 13.9702 0 8.99987 0Z"
                                          fill="#263975"/>
                                </svg>
                                +7 900 355 47 039</a>
                        </div>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
