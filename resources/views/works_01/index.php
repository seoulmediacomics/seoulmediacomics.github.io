<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover" />

  <title>어둠의 실력자가 되고 싶어서!</title>

  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/works_01.css?<?=time()?>" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131448537-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-131448537-1');
    </script>
</head>
<body data-load="loading" class="">
<?php
try {
  $date1 = new DateTime();
  $date2 = new DateTime( '2019-09-25' );
  $interval = $date2->diff($date1);
  $dDay_no = $interval->days;
  if($dDay_no < 10) {
    $dDay_no = '0'.$dDay_no;
  }
  $dDay =  str_split($dDay_no);
  //echo $dDay[0]. ' - '.$dDay[1];
}catch (Exception $e){
  echo $e;
}
?>
<div class="loadingBox">
    <div class="ball01"></div><div class="ball02"></div>
</div><!-- .loadingBox -->

<div id="menuWrapper">
    <ul id="menu">
        <li class="is_current"><button type="button" data-menu="main">MAIN</button></li>
        <li><button type="button" data-menu="video">PV・구입처</button></li>
        <li><button type="button" data-menu="introduce">작품소개</button></li>
        <li><button type="button" data-menu="character">캐릭터</button></li>
        <li><button type="button" data-menu="wallpaper">월페이퍼</button></li>
    </ul>
</div><!-- #menuWrapper -->

<div id="wrapper_mobile" class="wrapper">

    <section class="mobileSection" id="mobile_section_01">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/m_01_2.png" alt="" /></div>
            <div class="dDayBox">
                <img src="/images/works_01/m_01_3.png" alt="" />
                <ol class="dDay_num">
                    <li class="dDay_1"><img src="/images/works_01/no_0<?=$dDay[0]?>.png"></li>
                    <li class="dDay_2"><img src="/images/works_01/no_0<?=$dDay[1]?>.png"></li>
                </ol>
            </div>
        </div><!-- .innerWrap -->
    </section><!-- #mobile_section_01 -->

    <section class="mobileSection" id="mobile_section_02">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/m_02_2.png" alt="PROMOTION VIDEO" /></div>
            <div class="prom_video">
                COMING SOON
            </div>
            <dl class="retailShop">
                <dt><img src="/images/works_01/m_02_3.png" alt="구입처" /></dt>
                <dd>
                    <ol class="shopList">
                        <li><a href="http://www.yes24.com/" target="_blank" class="yes24">예스24</a></li>
                        <li><a href="https://www.aladin.co.kr" target="_blank" class="aladin">알라딘</a></li>
                        <li><a href="http://www.kyobobook.co.kr" target="_blank" class="kyobo">교보문고</a></li>
                        <li><a href="http://book.interpark.com/bookPark" target="_blank" class="interpark">인터파크도서</a></li>
                    </ol>
                </dd>
            </dl>
            <div class="copyright"><img src="/images/works_01/m_02_6.png" alt="ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai" /></div>
        </div><!-- .innerWrap -->
    </section><!-- #mobile_section_02 -->

    <section class="mobileSection" id="mobile_section_03">
        <div class="innerWrap">
            <div class="title">작품소개</div>
            <dl class="description">
                <dt>
                    <div class="poster"><img src="/images/works_01/m_03_1.jpg" alt="" /></div>
                    <div class="sub">
                        최강 주인공<br />
                        <em>X</em><br />
                        이세계 전생<br />
                        <em>X</em><br />
                        착각시리어스<br />코미디!
                    </div>
                </dt>
                <dd>
                    <span>“내 이름은 섀도우. 어둠 속에 숨어서, 어둠을 사냥하는 자…….”</span><br />
                    <br />
                    <em>이런 중2병 설정 놀이를 하고 있었는데.<br />
                    어라? 설마 이게 현실이 된 건가?!</em><br />
                    <br />
                    평소에는 힘을 숨기고 일반인으로 살면서 암암리에 스토리에 개입하여 실력을 보여주는 『어둠의 실력자』를 동경하는 소년, 시드.<br />
                    이세계에서 전생한 그는 간절한 꿈이었던 『어둠의 실력자』 설정을 즐기기 위해, 망상으로 만들어낸
                    『어둠의 교단』을 유린하려고 암약하기 시작했다.<br />
                    그런데 진짜로 이 교단이 실재하는데……?<br />
                    별생각 없이 부하로 삼은 소녀들의 『착각』으로 인해, 시드는 자기도 모르는 사이에 진짜 『어둠의 실력자』가 되었다.<br />
                    그리고 『섀도우 가든』이란 조직은 점차 세상의 어둠을 멸한다────!!
                    <p>
                        ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai
                    </p>
                </dd>
            </dl>
        </div><!-- .innerWrap -->
    </section><!-- #mobile_section_03 --->

    <section class="mobileSection" id="mobile_section_04">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/m_04_title.png" alt="CHARACTER" /></div>
            <ul class="characterBox">
                <li class="isShow">
                    <button type="button" class="charShow">
                        CID KAGENOU<span>시드 카게노</span>
                    </button>
                    <div class="charDetail">
                        <div class="charTt">
                            <div class="charName">CID KAGENOU</div>
                            <div class="charData">
                                <p>・ 이름 : 시드 카게노</p>
                                <p>・ 성별 : 남성</p>
                                <p>・ 연령 : 15</p>
                            </div>
                            <div class="charImg"></div>
                            <div class="copyright">ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai</div>
                        </div>
                        <div class="charDesc">
                            <div class="charName">CID KAGENOU</div>
                            <div class="charData">
                                <p>・ 이름 : 시드 카게노</p>
                                <p>・ 성별 : 남성</p>
                                <p>・ 연령 : 15</p>
                            </div>
                            엑스트라에게는 엑스트라의 싸움이 있다.<br />
                            <br />
                            『어둠의 실력자』가 되기 위해 가혹한 수행을 쌓다가, 비극적인 사고를 당해 이세계에서 다시 태어난 소년.<br />
                            <br />
                            전생에 이루지 못했던 꿈을 이세계에서 실현하기 위해 분투 중.
                            어둠의 조직 ‘섀도우 가든’의 창설자인 섀도우의 정체……<br />
                            이지만, 사실 그는 그 조직을 만들어놓기만 했을 뿐이다.<br />
                            군림은 하되 통치하지 않는다.<br />
                            그저 섀도우로 변신해서 『어둠의 실력자』의 역할을 하는 것이 목적이다.
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="charShow">
                        ALPHA<span>알파</span>
                    </button>
                    <div class="charDetail">
                        <div class="charTt">
                            <div class="charName">ALPHA</div>
                            <div class="charData">
                                <p>・ 이름 : 알파</p>
                                <p>・ 성별 : 여성</p>
                                <p>・ 연령 : 15</p>
                            </div>
                            <div class="charImg"></div>
                            <div class="copyright">ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai</div>
                        </div>
                        <div class="charDesc">
                            <div class="charName">ALPHA</div>
                            <div class="charData">
                                <p>・ 이름 : 알파</p>
                                <p>・ 성별 : 여성</p>
                                <p>・ 연령 : 15</p>
                            </div>
                            당신이 원한다면, 이 목숨을 바칠게…….<br />
                            <br />
                            시드의 치료(실험)에 의해 썩은 고깃덩이 상태에서 부활한 엘프 소녀.<br />
                            자신을 구해준 시드에게 진심으로 고마워하고 그에게 심취하게 되었다.<br />
                            『섀도우 가든』의 기념비적인 첫 번째 멤버이며, 『일곱 그림자』의 서열 1위. 아무것도 안 하는 시드를 대신해서 실질적인 통치자 역할을 한다.
                            『섀도우 가든』이 급격히 성장한 것은 이 여성이 쓸데없이
                            너무 유능하기 때문이다.
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="charShow">
                        ALEXIA MIDGAR<span>알렉시아 미드갈</span>
                    </button>
                    <div class="charDetail">
                        <div class="charTt">
                            <div class="charName">ALEXIA MIDGAR</div>
                            <div class="charData">
                                <p>・ 이름 : 알렉시아 미드갈</p>
                                <p>・ 성별 : 여성</p>
                                <p>・ 연령 : 15</p>
                            </div>
                            <div class="charImg"></div>
                            <div class="copyright">ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai</div>
                        </div>
                        <div class="charDesc">
                            <div class="charName">ALEXIA MIDGAR</div>
                            <div class="charData">
                                <p>・ 이름 : 알렉시아 미드갈</p>
                                <p>・ 성별 : 여성</p>
                                <p>・ 연령 : 15</p>
                            </div>
                            옳지, 착하다. 멍멍이야, 자, 가서 물어 와!<br />
                            <br />
                            미드갈 왕국의 왕녀.<br />
                            시드와 마찬가지로 미드갈 마검사 학교에 다니는 동급생.<br />
                            친절한 왕녀님으로 알려져 있지만, 실은 시드를 애완동물 삼아
                            가지고 노는 사디스트 왕녀이다.<br />
                            어릴 때부터 우수한 언니와 비교되면서 자랐기 때문에 심한 콤플렉스를 느끼고 있다.<br />
                            시드에게 호감을 가지고 있지만,  그 마음을 솔직하게 표현하지 못한다.
                        </div>
                    </div>
                </li>
                <li>
                    <button type="button" class="charShow">
                        SHERRY BARNETT<span>셰리 바넷</span>
                    </button>
                    <div class="charDetail">
                        <div class="charTt">
                            <div class="charName">SHERRY BARNETT</div>
                            <div class="charData">
                                <p>・ 이름 : 셰리 바넷</p>
                                <p>・ 성별 : 여성</p>
                                <p>・ 연령 : 16</p>
                            </div>
                            <div class="charImg"></div>
                            <div class="copyright">ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai</div>
                        </div>
                        <div class="charDesc">
                            <div class="charName">SHERRY BARNETT</div>
                            <div class="charData">
                                <p>・ 이름 : 셰리 바넷</p>
                                <p>・ 성별 : 여성</p>
                                <p>・ 연령 : 16</p>
                            </div>
                            혹시 모든 일이 끝나면, 내 이야기를 들어줄래요?<br />
                            <br />
                            미드갈 학술 학교 학생. 학교 부교장의 양녀.<br />
                            어린 시절에 어머니가 살해되는 장면을 목격했고,
                            그 슬픔 때문에 아티팩트 연구에 몰두하게 되었다.<br />
                            국내에서는 아티팩트 연구의 제일인자로 알려져 있다.
                            그러나 학교에서는 친구도 잘 사귀지 못해서
                            양아버지가 걱정할 정도. 연구 이외의 일에는 서툴다.
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- .innerWrap -->
    </section><!-- #mobile_section_04 -->

    <section class="mobileSection" id="mobile_section_05">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/m_05_title.png" alt="WALLPAPER" /></div>
            <div class="wallpaperBox owl-carousel">
                <div class="wallItem">
                    <a href="/images/works_01/k1-wallpaper1.jpg" download="mobile_wallpaper_01"><img src="/images/works_01/k1-wallpaper1.jpg" alt="" /></a>
                </div>
                <!--
                <div class="wallItem">
                    <a href="/images/works_01/k1-wallpaper2.jpg" download="mobile_wallpaper_02"><img src="/images/works_01/k1-wallpaper2.jpg" alt="" /></a>
                </div>
                -->
            </div>
            <div class="copyright">
                ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai
            </div>
        </div><!-- .innerWrap -->
    </section><!-- #mobile_section_05 -->

    <footer>
        COPYRIGHT © SEOUL MEDIA COMICS. ALL RIGHTS RESERVED.
    </footer>
</div><!-- #wrapper_mobile -->


<div id="wrapper_desktop" class="wrapper">

    <section class="pcSection" id="pc_section_01">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/w_01_2.png" alt="" /></div>
            <div class="dDayBox">
                <img src="/images/works_01/m_01_3.png" alt="" />
                <ol class="dDay_num">
                    <li class="dDay_1"><img src="/images/works_01/no_0<?=$dDay[0]?>.png"></li>
                    <li class="dDay_2"><img src="/images/works_01/no_0<?=$dDay[1]?>.png"></li>
                </ol>
            </div>
        </div><!-- .innerWrap -->
    </section><!-- #pc_section_01 -->


    <section class="pcSection" id="pc_section_02">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/m_02_2.png" alt="PROMOTION VIDEO" /></div>
            <div class="prom_video">
                COMING SOON
            </div>
            <ol class="shopList">
                <li><a href="http://www.yes24.com/" target="_blank" class="yes24">예스24</a></li>
                <li><a href="https://www.aladin.co.kr" target="_blank" class="aladin">알라딘</a></li>
                <li><a href="http://www.kyobobook.co.kr" target="_blank" class="kyobo">교보문고</a></li>
                <li><a href="http://book.interpark.com/bookPark" target="_blank" class="interpark">인터파크도서</a></li>
            </ol>
            <div class="copyright"><img src="/images/works_01/m_02_6.png" alt="ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai" /></div>
        </div><!-- .innerWrap -->
    </section><!-- #pc_section_02 -->


    <section class="pcSection" id="pc_section_03">
        <div class="innerWrap">
            <div class="description">
                <div class="title">작품소개</div>
                <div class="subWrap">
                    <div class="sub">
                        <img src="/images/works_01/w_03_desc.png" alt="최강 주인공 x 이세계 전생 x 착각시리어스 코미디!" />
                    </div>
                    <span>“내 이름은 섀도우. 어둠 속에 숨어서, 어둠을 사냥하는 자…….”</span><br />
                    <br />
                    <em>이런 중2병 설정 놀이를 하고 있었는데. 어라? 설마 이게 현실이 된 건가?!</em><br />
                    <br />
                    평소에는 힘을 숨기고 일반인으로 살면서 암암리에 스토리에 개입하여 실력을 보여주는 『어둠의 실력자』를 동경하는 소년, 시드.<br />
                    이세계에서 전생한 그는 간절한 꿈이었던 『어둠의 실력자』 설정을 즐기기 위해, 망상으로 만들어낸
                    『어둠의 교단』을 유린하려고 암약하기 시작했다.<br />
                    그런데 진짜로 이 교단이 실재하는데……?<br />
                    별생각 없이 부하로 삼은 소녀들의 『착각』으로 인해, 시드는 자기도 모르는 사이에 진짜 『어둠의 실력자』가 되었다.<br />
                    그리고 『섀도우 가든』이란 조직은 점차 세상의 어둠을 멸한다────!!
                    <p>
                        ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai
                    </p>
                </div>
            </div>
            <div class="poster"><img src="/images/works_01/w_03_1.jpg" alt="" /></div>
        </div><!-- .innerWrap -->
    </section><!-- #pc_section_03 --->

    <section class="pcSection" id="pc_section_04" data-show="1">
        <div class="left"></div><div class="right"></div>
        <div class="innerWrap">
            <div class="characterBox">
                <div class="charList">
                    <div class="title"><img src="/images/works_01/m_04_title.png" alt="CHARACTER" /></div>
                    <ol class="charListShow">
                        <li>
                            <button type="button" class="charShow">
                                CID KAGENOU<span>시드 카게노</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="charShow">
                                ALPHA<span>알파</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="charShow">
                                ALEXIA MIDGAR<span>알렉시아 미드갈</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="charShow">
                                SHERRY BARNETT<span>셰리 바넷</span>
                            </button>
                        </li>
                    </ol>
                </div><!-- .charList -->
                <div class="charIntro">
                    <ol class="charIntroShow">
                        <li>
                            <div class="charImg"><img src="/images/works_01/m_04_2_1.png" alt="" /></div>
                            <div class="charName"><img src="/images/works_01/w_04_1_1.png" alt="" /></div>
                            <div class="charDesc">
                                <div class="charData">
                                    <p>・성별 : 남성</p>
                                    <p>・연령 : 15</p>
                                </div>
                                엑스트라에게는 엑스트라의 싸움이 있다.<br />
                                <br />
                                『어둠의 실력자』가 되기 위해 가혹한 수행을 쌓다가,<br />
                                비극적인 사고를 당해 이세계에서 다시 태어난 소년.<br />
                                전생에 이루지 못했던 꿈을 이세계에서 실현하기 위해 분투 중.
                                어둠의 조직 ‘섀도우 가든’의 창설자인 섀도우의 정체……이지만,<br />
                                사실 그는 그 조직을 만들어놓기만 했을 뿐이다.<br />
                                군림은 하되 통치하지 않는다.<br />
                                그저 섀도우로 변신해서 『어둠의 실력자』의 역할을 하는 것이 목적이다.
                            </div>
                        </li>
                        <li>
                            <div class="charImg"><img src="/images/works_01/m_04_2_3.png" alt="" /></div>
                            <div class="charName"><img src="/images/works_01/w_04_1_2.png" alt="" /></div>
                            <div class="charDesc">
                                <div class="charData">
                                    <p>・성별 : 여성</p>
                                    <p>・연령 : 15</p>
                                </div>
                                당신이 원한다면, 이 목숨을 바칠게…….<br />
                                <br />
                                시드의 치료(실험)에 의해 썩은 고깃덩이 상태에서 부활한 엘프 소녀.<br />
                                자신을 구해준 시드에게 진심으로 고마워하고 그에게 심취하게 되었다.<br />
                                『섀도우 가든』의 기념비적인 첫 번째 멤버이며, 『일곱 그림자』의 서열 1위. 아무것도 안 하는 시드를 대신해서 실질적인 통치자 역할을 한다.
                                『섀도우 가든』이 급격히 성장한 것은 이 여성이 쓸데없이 너무 유능하기 때문이다.
                            </div>
                        </li>
                        <li>
                            <div class="charImg"><img src="/images/works_01/m_04_2_5.png" alt="" /></div>
                            <div class="charName"><img src="/images/works_01/w_04_1_3.png" alt="" /></div>
                            <div class="charDesc">
                                <div class="charData">
                                    <p>・성별 : 여성</p>
                                    <p>・연령 : 15</p>
                                </div>
                                옳지, 착하다. 멍멍이야, 자, 가서 물어 와!<br />
                                <br />
                                미드갈 왕국의 왕녀.<br />
                                시드와 마찬가지로 미드갈 마검사 학교에 다니는 동급생.<br />
                                친절한 왕녀님으로 알려져 있지만, 실은 시드를 애완동물 삼아 가지고 노는 사디스트 왕녀이다.<br />
                                어릴 때부터 우수한 언니와 비교되면서 자랐기 때문에 심한 콤플렉스를 느끼고 있다.<br />
                                시드에게 호감을 가지고 있지만, 그 마음을 솔직하게 표현하지 못한다.
                            </div>
                        </li>
                        <li>
                            <div class="charImg"><img src="/images/works_01/m_04_2_7.png" alt="" /></div>
                            <div class="charName"><img src="/images/works_01/w_04_1_4.png" alt="" /></div>
                            <div class="charDesc">
                                <div class="charData">
                                    <p>・성별 : 여성</p>
                                    <p>・연령 : 16</p>
                                </div>
                                혹시 모든 일이 끝나면, 내 이야기를 들어줄래요?<br />
                                <br />
                                미드갈 학술 학교 학생. 학교 부교장의 양녀.<br />
                                어린 시절에 어머니가 살해되는 장면을 목격했고, 그 슬픔 때문에 아티팩트 연구에 몰두하게 되었다.<br />
                                국내에서는 아티팩트 연구의 제일인자로 알려져 있다.
                                그러나 학교에서는 친구도 잘 사귀지 못해서 양아버지가 걱정할 정도. 연구 이외의 일에는 서툴다.
                            </div>
                        </li>
                    </ol>
                </div><!-- .charIntro -->
            </div><!-- .characterBox -->
        </div><!-- .innerWrap -->
    </section><!-- #pc_section_04 -->

    <section class="pcSection" id="pc_section_05">
        <div class="innerWrap">
            <div class="title"><img src="/images/works_01/m_05_title.png" alt="WALLPAPER" /></div>
            <div class="wallpaperBoxWrap">
                <div class="wallpaperBox owl-carousel">
                    <div class="wallItem">
                        <span><img src="/images/works_01/k1-wallpaper3.jpg" alt="" /></span>
                        <a href="/images/works_01/k1-wallpaper3.jpg" download="wallpaper01" class="wallpaper_download">DOWNLOAD▽</a>
                    </div>
                    <!--
                    <div class="wallItem">
                        <span><img src="/images/works_01/k1-wallpaper4.jpg" alt="" /></span>
                        <a href="/images/works_01/k1-wallpaper4.jpg" download="wallpaper02" class="wallpaper_download">DOWNLOAD▽</a>
                    </div>
                    -->
                </div>
            </div><!-- .wallpaperBoxWrap -->
            <div class="copyright">
                ⓒDaisuke Aizawa 2018 / KADOKAWA CORPORATION Illustration: Touzai
            </div>
        </div><!-- .innerWrap -->
    </section><!-- #mobile_section_05 -->

    <footer>
        COPYRIGHT © SEOUL MEDIA COMICS. ALL RIGHTS RESERVED.
    </footer>
</div><!-- #wrapper_desktop -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/works_01.js?<?=time()?>"></script>
</body>
</html>