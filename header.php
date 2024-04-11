<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>하림펫푸드 PC버전 서브페이지</title>
  <!-- 파비콘 이미지 삽입하기 -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

  <!-- css초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">

  <!-- 로그인 서식 -->
  <link href="./css/login.css" rel="stylesheet" type="text/css">

  <!-- 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">

  <!-- 아이콘폰트 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" type="text/css">


  </script>
</head>
<body>
  <form name="top_nav" method="get/post" action="#">
    <!-- 상단헤더영역시작 -->
    <header>
      <div class="h_top">
        <h1>
          <a href="index.html" title="메인페이지로 바로가기">
            <img src="./images/logo2.png" alt="상단로고">
          </a>
        </h1>

        <nav class="top_lnb">
          <ul>
            <li><a href="login.html" title="로그인">로그인</a></li>
            <li><a href="join.html" title="회원가입">회원가입</a></li>
            <li><a href="order.html" title="주문조회">주문조회</a></li>
            <li><a href="cart.html" title="장바구니">장바구니</a></li>
          </ul>
        </nav>
        
        <fieldset id="search_box">
          <input type="search" id="search" placeholder="3월 마지막주 초특가 할인">
          <label for="search"><i class="fas fa-search"></i></label>
        </fieldset>
      </div>

      <!-- 헤더하단 (메인메뉴영역) -->
      <div class="h_bottom">
        <nav class="gnb">
          <ul>
            <li><a href="brand.html" title="브랜드">브랜드</a>
              <ul class="sub">
                <li><a href="brand.html" title="가장 맛있는 시간 30일">가장 맛있는시간30일</a></li>
                <li><a href="#" title="더리얼">더리얼</a></li>
                <li><a href="#" title="밥이보약">밥이보약</a></li>
              </ul>
            </li>
            <li><a href="deli.html" title="정기배송">정기배송</a>
              <ul class="sub">
                <li><a href="deli.html" title="정기배송">정기배송</a></li>
                <li><a href="#" title="빠른배송">빠른배송</a></li>
              </ul>
            </li>
            <li><a href="dog.html" title="DOG">dog</a>
              <ul class="sub">
                <li><a href="dog.html" title="오늘생산배송">오늘생산&middot;배송</a></li>
                <li><a href="#" title="브랜드별">브랜드별</a></li>
                <li><a href="#" title="연령별">연령별</a></li>
                <li><a href="#" title="유형별">유형별</a></li>
                <li><a href="#" title="샘플신청">샘플신청</a></li>
                <li><a href="#" title="상품후기">상품후기</a></li>
              </ul>
            </li>
            <li><a href="cat.html" title="CAT">cat</a>
              <ul class="sub">
                <li><a href="cat.html" title="오늘생산배송">오늘생산&middot;배송</a></li>
                <li><a href="#" title="브랜드별">브랜드별</a></li>
                <li><a href="#" title="연령별">연령별</a></li>
                <li><a href="#" title="유형별">유형별</a></li>
                <li><a href="#" title="샘플신청">샘플신청</a></li>
                <li><a href="#" title="상품후기">상품후기</a></li>
              </ul>
            </li>
            <li><a href="magiz.html" title="매거진">매거진</a></li>
            <li><a href="story.html" title="우리이야기">우리이야기</a>
              <ul class="sub">
                <li><a href="story.html" title="우리이야기">우리이야기</a></li>
                <li><a href="#" title="우리의 약속">우리의 약속</a></li>
                <li><a href="#" title="100%휴먼그레이드">100%휴먼그레이드</a></li>
                <li><a href="#" title="이노베이션">이노베이션</a></li>
                <li><a href="#" title="제조시설">제조시설</a></li>
                <li><a href="#" title="반려견동반">반려견동반</a></li>
              </ul>
            </li>
            <li><a href="tour.html" title="투어신청">투어신청</a></li>
          </ul>
        </nav>
      </div>
    </header>