<link href="./css/upload2.css" rel="stylesheet">
<link href="./css/upload1.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="modal-body">
    <form action="./account-page/uploading.php" method="post" enctype="multipart/form-data">
    <div class="profileEdit profileEdit-desktop">
        <div class="profileEdit-main">
            <div class="profileEdit-bar">
                <div class="profileEdit-bar-title"><span>계정 정보</span></div>
                <div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>소환사명</span></span>
                        <div class="undefined Text-container">
                            <!-- SUMMONER'S NAME -->
                            <input name="summonerName" type="text" class="text-common undefined undefined" placeholder="소환사명" dec="0" style="width: 200px;" />
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <div class="profileInfo-checkbox">
                            <label class="i-checkbox-wrapper primary">
                                <span class="i-checkbox">
                                    <!-- HIDE SUMMONER'S NAME -->
                                    <input name="isPrivate" value="Yes" type="checkbox" class="i-checkbox-input" />
                                    <span class="i-checkbox-inner"></span></span>
                                <span>
                                    <div class="agePermission"><span>소환사명 비공개</span></div>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>티어</span></span>
                        <div class="TeacherApply-birthday-wrapper">
                            <div>
                                <select class="menu-title select-style" name="soloRank" id="">
                                    <option value="default">개인랭크</option>
                                    <option value="unranked">언랭</option>
                                    <option value="i4">아이언 4</option>
                                    <option value="i3">아이언 3</option>
                                    <option value="i2">아이언 2</option>
                                    <option value="i1">아이언 1</option>

                                    <option value="b4">브론즈 4</option>
                                    <option value="b3">브론즈 3</option>
                                    <option value="b2">브론즈 2</option>
                                    <option value="b1">브론즈 1</option>

                                    <option value="s4">실버 4</option>
                                    <option value="s3">실버 3</option>
                                    <option value="s2">실버 2</option>
                                    <option value="s1">실버 1</option>

                                    <option value="g4">골드 4</option>
                                    <option value="g3">골드 3</option>
                                    <option value="g2">골드 2</option>
                                    <option value="g1">골드 1</option>

                                    <option value="p4">플래티넘 4</option>
                                    <option value="p3">플래티넘 3</option>
                                    <option value="p2">플래티넘 2</option>
                                    <option value="p1">플래티넘 1</option>

                                    <option value="d4">다이아몬드 4</option>
                                    <option value="d3">다이아몬드 3</option>
                                    <option value="d2">다이아몬드 2</option>
                                    <option value="d1">다이아몬드 1</option>

                                    <option value="m1">MASTER 1</option>
                                    <option value="gm1">GRANDMASTER 1</option>
                                    <option value="c1">CHALLENGER 1</option>
                                </select>
                            </div>
                            <div>
                                <input style="width: 80px; height: 42px;" type="number" class="number-count" name="sWins" step="1" placeholder="승리">
                                <input style="width: 80px; height: 42px;" type="number" class="number-count" name="sLoses" step="1" placeholder="패배">
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span></span></span>
                        <div class="TeacherApply-birthday-wrapper">
                            <div>
                                <select class="menu-title select-style" name="flexRank" id="">
                                    <option value="default">자유랭크</option>
                                    <option value="unranked">언랭</option>
                                    <option value="i4">아이언 4</option>
                                    <option value="i3">아이언 3</option>
                                    <option value="i2">아이언 2</option>
                                    <option value="i1">아이언 1</option>

                                    <option value="b4">브론즈 4</option>
                                    <option value="b3">브론즈 3</option>
                                    <option value="b2">브론즈 2</option>
                                    <option value="b1">브론즈 1</option>

                                    <option value="s4">실버 4</option>
                                    <option value="s3">실버 3</option>
                                    <option value="s2">실버 2</option>
                                    <option value="s1">실버 1</option>

                                    <option value="g4">골드 4</option>
                                    <option value="g3">골드 3</option>
                                    <option value="g2">골드 2</option>
                                    <option value="g1">골드 1</option>

                                    <option value="p4">플래티넘 4</option>
                                    <option value="p3">플래티넘 3</option>
                                    <option value="p2">플래티넘 2</option>
                                    <option value="p1">플래티넘 1</option>

                                    <option value="d4">다이아몬드 4</option>
                                    <option value="d3">다이아몬드 3</option>
                                    <option value="d2">다이아몬드 2</option>
                                    <option value="d1">다이아몬드 1</option>

                                    <option value="m1">MASTER 1</option>
                                    <option value="gm1">GRANDMASTER 1</option>
                                    <option value="c1">CHALLENGER 1</option>
                                </select>
                            </div>
                            <div>
                            <input style="width: 80px; height: 42px;" type="number" class="number-count" name="fWins" step="1" placeholder="승리">
                                <input style="width: 80px; height: 42px;" type="number" class="number-count" name="fLoses" step="1" placeholder="패배">
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>명의</span></span>
                        <select class="menu-title select-style" name="owner" id="">
                            <option value="first">1대 본주(본인명의)</option>
                            <option value="second">2대 본주(타인명의)</option>
                            <option value="third">3대 본주(타인명의)</option>
                        </select>
                        <input style="width: 80px; height: 42px;" type="number" class="number-count" name="level" step="1" placeholder="레벨">
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>컬렉션</span></span>
                        <div>
                            <div class="cityMenu">
                                <select class="menu-title select-style" name="numOfChams" id="">
                                    <option value="default">챔피언 개수</option>
                                    <option value="5">5+</option>
                                    <option value="10">10+</option>
                                    <option value="15">15+</option>
                                    <option value="20">20+</option>
                                    <option value="25">25+</option>
                                    <option value="30">30+</option>
                                    <option value="35">35+</option>
                                    <option value="40">40+</option>
                                    <option value="45">45+</option>
                                    <option value="50">50+</option>
                                    <option value="55">55+</option>
                                    <option value="60">60+</option>
                                    <option value="65">65+</option>
                                    <option value="70">70+</option>
                                    <option value="75">75+</option>
                                    <option value="80">80+</option>
                                    <option value="85">85+</option>
                                    <option value="90">90+</option>
                                    <option value="95">95+</option>
                                    <option value="100">100+</option>
                                    <option value="105">105+</option>
                                    <option value="110">110+</option>
                                    <option value="115">115+</option>
                                    <option value="120">120+</option>
                                    <option value="125">125+</option>
                                    <option value="130">130+</option>
                                    <option value="135">135+</option>
                                    <option value="140">140+</option>
                                    <option value="145">145+</option>
                                    <option value="150">150+</option>
                                </select>
                                <select class="menu-title select-style" name="numOfSkins" id="">
                                    <option value="default">스킨 개수</option>
                                    <option value="5">5+</option>
                                    <option value="10">10+</option>
                                    <option value="15">15+</option>
                                    <option value="20">20+</option>
                                    <option value="25">25+</option>
                                    <option value="30">30+</option>
                                    <option value="35">35+</option>
                                    <option value="40">40+</option>
                                    <option value="45">45+</option>
                                    <option value="50">50+</option>
                                    <option value="55">55+</option>
                                    <option value="60">60+</option>
                                    <option value="65">65+</option>
                                    <option value="70">70+</option>
                                    <option value="75">75+</option>
                                    <option value="80">80+</option>
                                    <option value="85">85+</option>
                                    <option value="90">90+</option>
                                    <option value="95">95+</option>
                                    <option value="100">100+</option>
                                    <option value="105">105+</option>
                                    <option value="110">110+</option>
                                    <option value="115">115+</option>
                                    <option value="120">120+</option>
                                    <option value="125">125+</option>
                                    <option value="130">130+</option>
                                    <option value="135">135+</option>
                                    <option value="140">140+</option>
                                    <option value="145">145+</option>
                                    <option value="150">150+</option>
                                    <option value="200">200+</option>
                                    <option value="250">250+</option>
                                    <option value="300">300+</option>
                                </select>
                                <div class="undefined Text-container"><input style="width: 120px; height: 42px;" type="number" class="number-count" name="blueEssence" step="1" placeholder="파랑정수"></div>
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>전 시즌(개인)</span></span>
                        <div>
                            <div class="cityMenu">
                                <select class="menu-title select-style" name="season7" id="">
                                    <option value="default">시즌 7</option>
                                    <option value="unranked">언랭/랭크없음</option>
                                    <option value="i4">아이언 4</option>
                                    <option value="i3">아이언 3</option>
                                    <option value="i2">아이언 2</option>
                                    <option value="i1">아이언 1</option>

                                    <option value="b4">브론즈 4</option>
                                    <option value="b3">브론즈 3</option>
                                    <option value="b2">브론즈 2</option>
                                    <option value="b1">브론즈 1</option>

                                    <option value="g4">골드 4</option>
                                    <option value="g3">골드 3</option>
                                    <option value="g2">골드 2</option>
                                    <option value="g1">골드 1</option>

                                    <option value="p4">플래티넘 4</option>
                                    <option value="p3">플래티넘 3</option>
                                    <option value="p2">플래티넘 2</option>
                                    <option value="p1">플래티넘 1</option>

                                    <option value="d4">다이아몬드 4</option>
                                    <option value="d3">다이아몬드 3</option>
                                    <option value="d2">다이아몬드 2</option>
                                    <option value="d1">다이아몬드 1</option>

                                    <option value="m1">MASTER 1</option>
                                    <option value="gm1">GRANDMASTER 1</option>
                                    <option value="c1">CHALLENGER 1</option>
                                </select>
                                <select class="menu-title select-style" name="season8" id="">
                                    <option value="default">시즌 8</option>
                                    <option value="unranked">언랭/랭크없음</option>
                                    <option value="i4">아이언 4</option>
                                    <option value="i3">아이언 3</option>
                                    <option value="i2">아이언 2</option>
                                    <option value="i1">아이언 1</option>

                                    <option value="b4">브론즈 4</option>
                                    <option value="b3">브론즈 3</option>
                                    <option value="b2">브론즈 2</option>
                                    <option value="b1">브론즈 1</option>

                                    <option value="g4">골드 4</option>
                                    <option value="g3">골드 3</option>
                                    <option value="g2">골드 2</option>
                                    <option value="g1">골드 1</option>

                                    <option value="p4">플래티넘 4</option>
                                    <option value="p3">플래티넘 3</option>
                                    <option value="p2">플래티넘 2</option>
                                    <option value="p1">플래티넘 1</option>

                                    <option value="d4">다이아몬드 4</option>
                                    <option value="d3">다이아몬드 3</option>
                                    <option value="d2">다이아몬드 2</option>
                                    <option value="d1">다이아몬드 1</option>

                                    <option value="m1">MASTER 1</option>
                                    <option value="gm1">GRANDMASTER 1</option>
                                    <option value="c1">CHALLENGER 1</option>
                                </select>
                                <select class="menu-title select-style" name="season9" id="">
                                    <option value="default">시즌 9</option>
                                    <option value="unranked">언랭/랭크없음</option>
                                    <option value="i4">아이언 4</option>
                                    <option value="i3">아이언 3</option>
                                    <option value="i2">아이언 2</option>
                                    <option value="i1">아이언 1</option>

                                    <option value="b4">브론즈 4</option>
                                    <option value="b3">브론즈 3</option>
                                    <option value="b2">브론즈 2</option>
                                    <option value="b1">브론즈 1</option>

                                    <option value="g4">골드 4</option>
                                    <option value="g3">골드 3</option>
                                    <option value="g2">골드 2</option>
                                    <option value="g1">골드 1</option>

                                    <option value="p4">플래티넘 4</option>
                                    <option value="p3">플래티넘 3</option>
                                    <option value="p2">플래티넘 2</option>
                                    <option value="p1">플래티넘 1</option>

                                    <option value="d4">다이아몬드 4</option>
                                    <option value="d3">다이아몬드 3</option>
                                    <option value="d2">다이아몬드 2</option>
                                    <option value="d1">다이아몬드 1</option>

                                    <option value="m1">MASTER 1</option>
                                    <option value="gm1">GRANDMASTER 1</option>
                                    <option value="c1">CHALLENGER 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>서버</span></span>
                        <select class="menu-title select-style" name="serverLocation">
                            <option value="KR">KR</option>
                            <option value="PBE">PBE</option>
                            <option value="NA">NA</option>
                            <option value="JP">JP</option>
                            <option value="CN">CN</option>
                            <option value="EUW">EUW</option>
                            <option value="EUNE">EUNE</option>
                            <option value="OCE">OCE</option>
                            <option value="SEA">SEA</option> 
                            <option value="TR">TR</option>
                            <option value="RU">RU</option>
                            <option value="LAS">LAS</option>
                            <option value="LAN">LAN</option>
                            <option value="BR">BR</option>
                        </select>
                        <span class="profileInfo-time"></span>
                    </div>
                </div>
            </div>
            <div class="profileEdit-bar">
                <div class="profileEdit-bar-title"><span>챔피언</span></div>
                <div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>모스트 1</span></span>
                        <div>
                            <div class="native-language-row" id="language-menu-0">
                                <select class="menu-title select-style" name="mostPlayed1" id="">
                                    <option value="default">선택</option>
                                    <option value="Garen">가렌</option>
                                    <option value="Galio">갈리오</option>
                                    <option value="Gangplank">갱플랭크</option>
                                    <option value="Gragas">그라가스</option>
                                    <option value="Graves">그레이브즈</option>
                                    <option value="Gnar">나르</option>
                                    <option value="Nami">나미</option>
                                    <option value="Nasus">나서스</option>
                                    <option value="Nautilus">노틸러스</option>
                                    <option value="Nocturne">녹턴</option>
                                    <option value="Nunu">누누와 윌럼프</option>
                                    <option value="Nidalee">니달리</option>
                                    <option value="Neeko">니코</option>
                                    <option value="Darius">다리우스</option>
                                    <option value="Diana">다이애나</option>
                                    <option value="Draven">드레이븐</option>
                                    <option value="Ryze">라이즈</option>
                                    <option value="Rakan">라칸</option>
                                    <option value="Rammus">람머스</option>
                                    <option value="Lux">럭스</option>
                                    <option value="Rumble">럼블</option>
                                    <option value="Renekton">레넥톤</option>
                                    <option value="Leona">레오나</option>
                                    <option value="RekSai">렉사이</option>
                                    <option value="Rengar">렝가</option>
                                    <option value="Lucian">루시안</option>
                                    <option value="Lulu">룰루</option>
                                    <option value="Leblanc">르블랑</option>
                                    <option value="LeeSin">리신</option>
                                    <option value="Riven">리븐</option>
                                    <option value="Lissandra">리산드라</option>
                                    <option value="MasterYi">마스터 이</option>
                                    <option value="Maokai">마오카이</option>
                                    <option value="Malzahar">말자하</option>
                                    <option value="Malphite">말파이트</option>
                                    <option value="Mordekaiser">모데카이저</option>
                                    <option value="Morgana">모르가나</option>
                                    <option value="DrMundo">문도 박사</option>
                                    <option value="MissFortune">미스 포츈</option>
                                    <option value="Bard">바드</option>
                                    <option value="Varus">바루스</option>
                                    <option value="Vi">바이</option>
                                    <option value="Veigar">베이가</option>
                                    <option value="Vayne">베인</option>
                                    <option value="Velkoz">벨코즈</option>
                                    <option value="Volibear">볼리베어</option>
                                    <option value="Braum">브라움</option>
                                    <option value="Brand">브랜드</option>
                                    <option value="Vladimir">블라디미르</option>
                                    <option value="Blitzcrank">블리츠크랭크</option>
                                    <option value="Viktor">빅토르</option>
                                    <option value="Poppy">뽀삐</option>
                                    <option value="Sion">사이온</option>
                                    <option value="Sylas">사일러스</option>
                                    <option value="Shaco">샤코</option>
                                    <option value="Senna">세나</option>
                                    <option value="Sejuani">세주아니</option>
                                    <option value="Sett">세트</option>
                                    <option value="Sona">소나</option>
                                    <option value="Soraka">소라카</option>
                                    <option value="Shen">쉔</option>
                                    <option value="Shyvana">쉬바나</option>
                                    <option value="Swain">스웨인</option>
                                    <option value="Skarner">스카너</option>
                                    <option value="Sivir">시비르</option>
                                    <option value="XinZhao">신짜오</option>
                                    <option value="Syndra">신드라</option>
                                    <option value="Singed">신지드</option>
                                    <option value="Thresh">쓰레쉬</option>
                                    <option value="Ahri">아리</option>
                                    <option value="Amumu">아무무</option>
                                    <option value="AurelionSol">아우렐리온 솔</option>
                                    <option value="Ivern">아이번</option>
                                    <option value="Azir">아지르</option>
                                    <option value="Akali">아칼리</option>
                                    <option value="Aatrox">아트록스</option>
                                    <option value="Aphelios">아펠리오스</option>
                                    <option value="Alistar">알리스타</option>
                                    <option value="Annie">애니</option>
                                    <option value="Anivia">애니비아</option>
                                    <option value="Ashe">애쉬</option>
                                    <option value="Yasuo">야스오</option>
                                    <option value="Ekko">에코</option>
                                    <option value="Elise">엘리스</option>
                                    <option value="Wukong">오공</option>
                                    <option value="Ornn">오른</option>
                                    <option value="Orianna">오리아나</option>
                                    <option value="Olaf">올라프</option>
                                    <option value="Yorick">요릭</option>
                                    <option value="Udyr">우디르</option>
                                    <option value="Urgot">우르곳</option>
                                    <option value="Warwick">워웍</option>
                                    <option value="Yuumi">유미</option>
                                    <option value="Irelia">이렐리아</option>
                                    <option value="Evelynn">이블린</option>
                                    <option value="Ezreal">이즈리얼</option>
                                    <option value="Illaoi">일라오이</option>
                                    <option value="JarvanIV">자르반 4세</option>
                                    <option value="Xayah">자야</option>
                                    <option value="Zyra">자이라</option>
                                    <option value="Zac">자크</option>
                                    <option value="Janna">잔나</option>
                                    <option value="Jax">잭스</option>
                                    <option value="Zed">제드</option>
                                    <option value="Xerath">제라스</option>
                                    <option value="Jayce">제이스</option>
                                    <option value="Zoe">조이</option>
                                    <option value="Ziggs">직스</option>
                                    <option value="Jhin">진</option>
                                    <option value="Zilean">질리언</option>
                                    <option value="Jinx">징크스</option>
                                    <option value="Chogath">초가스</option>
                                    <option value="Karma">카르마</option>
                                    <option value="Camille">카밀</option>
                                    <option value="Kassadin">카사딘</option>
                                    <option value="Karthus">카서스</option>
                                    <option value="Cassiopeia">카시오페아</option>
                                    <option value="Kaisa">카이사</option>
                                    <option value="Khazix">카직스</option>
                                    <option value="Katarina">카타리나</option>
                                    <option value="Kalista">칼리스타</option>
                                    <option value="Kennen">케넨</option>
                                    <option value="Caitlyn">케이틀린</option>
                                    <option value="Kayn">케인</option>
                                    <option value="Kayle">케일</option>
                                    <option value="KogMaw">코그모</option>
                                    <option value="Corki">코르키</option>
                                    <option value="Quinn">퀸</option>
                                    <option value="Kled">클레드</option>
                                    <option value="Qiyana">키이나</option>
                                    <option value="Kindred">킨드레드</option>
                                    <option value="Taric">타릭</option>
                                    <option value="Talon">탈론</option>
                                    <option value="Taliyah">탈리야</option>
                                    <option value="TahmKench">탐 켄치</option>
                                    <option value="Trundle">트런들</option>
                                    <option value="Tristana">트리스타나</option>
                                    <option value="Tryndamere">트린다미어</option>
                                    <option value="TwistedFate">트위스티드 페이트</option>
                                    <option value="Twitch">트위치</option>
                                    <option value="Teemo">티모</option>
                                    <option value="Pyke">파이크</option>
                                    <option value="Pantheon">판테온</option>
                                    <option value="Fiddlesticks">피들스틱</option>
                                    <option value="Fiora">피오라</option>
                                    <option value="Fizz">피즈</option>
                                    <option value="Heimerdinger">하이머딩거</option>
                                    <option value="Hecarim">헤카림</option>
                                </select>
                                <input style="width: 60px; height: 42px;" type="number" class="number-count" name="numOfPlayed1" step="1" placeholder="판수">
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>모스트 2</span></span>
                        <div>
                            <div>
                                <div class="language-skills-row">
                                    <select class="menu-title select-style" name="mostPlayed2" id="">
                                        <option value="default">선택</option>
                                        <option value="Garen">가렌</option>
                                        <option value="Galio">갈리오</option>
                                        <option value="Gangplank">갱플랭크</option>
                                        <option value="Gragas">그라가스</option>
                                        <option value="Graves">그레이브즈</option>
                                        <option value="Gnar">나르</option>
                                        <option value="Nami">나미</option>
                                        <option value="Nasus">나서스</option>
                                        <option value="Nautilus">노틸러스</option>
                                        <option value="Nocturne">녹턴</option>
                                        <option value="Nunu">누누와 윌럼프</option>
                                        <option value="Nidalee">니달리</option>
                                        <option value="Neeko">니코</option>
                                        <option value="Darius">다리우스</option>
                                        <option value="Diana">다이애나</option>
                                        <option value="Draven">드레이븐</option>
                                        <option value="Ryze">라이즈</option>
                                        <option value="Rakan">라칸</option>
                                        <option value="Rammus">람머스</option>
                                        <option value="Lux">럭스</option>
                                        <option value="Rumble">럼블</option>
                                        <option value="Renekton">레넥톤</option>
                                        <option value="Leona">레오나</option>
                                        <option value="RekSai">렉사이</option>
                                        <option value="Rengar">렝가</option>
                                        <option value="Lucian">루시안</option>
                                        <option value="Lulu">룰루</option>
                                        <option value="Leblanc">르블랑</option>
                                        <option value="LeeSin">리신</option>
                                        <option value="Riven">리븐</option>
                                        <option value="Lissandra">리산드라</option>
                                        <option value="MasterYi">마스터 이</option>
                                        <option value="Maokai">마오카이</option>
                                        <option value="Malzahar">말자하</option>
                                        <option value="Malphite">말파이트</option>
                                        <option value="Mordekaiser">모데카이저</option>
                                        <option value="Morgana">모르가나</option>
                                        <option value="DrMundo">문도 박사</option>
                                        <option value="MissFortune">미스 포츈</option>
                                        <option value="Bard">바드</option>
                                        <option value="Varus">바루스</option>
                                        <option value="Vi">바이</option>
                                        <option value="Veigar">베이가</option>
                                        <option value="Vayne">베인</option>
                                        <option value="Velkoz">벨코즈</option>
                                        <option value="Volibear">볼리베어</option>
                                        <option value="Braum">브라움</option>
                                        <option value="Brand">브랜드</option>
                                        <option value="Vladimir">블라디미르</option>
                                        <option value="Blitzcrank">블리츠크랭크</option>
                                        <option value="Viktor">빅토르</option>
                                        <option value="Poppy">뽀삐</option>
                                        <option value="Sion">사이온</option>
                                        <option value="Sylas">사일러스</option>
                                        <option value="Shaco">샤코</option>
                                        <option value="Senna">세나</option>
                                        <option value="Sejuani">세주아니</option>
                                        <option value="Sett">세트</option>
                                        <option value="Sona">소나</option>
                                        <option value="Soraka">소라카</option>
                                        <option value="Shen">쉔</option>
                                        <option value="Shyvana">쉬바나</option>
                                        <option value="Swain">스웨인</option>
                                        <option value="Skarner">스카너</option>
                                        <option value="Sivir">시비르</option>
                                        <option value="XinZhao">신짜오</option>
                                        <option value="Syndra">신드라</option>
                                        <option value="Singed">신지드</option>
                                        <option value="Thresh">쓰레쉬</option>
                                        <option value="Ahri">아리</option>
                                        <option value="Amumu">아무무</option>
                                        <option value="AurelionSol">아우렐리온 솔</option>
                                        <option value="Ivern">아이번</option>
                                        <option value="Azir">아지르</option>
                                        <option value="Akali">아칼리</option>
                                        <option value="Aatrox">아트록스</option>
                                        <option value="Aphelios">아펠리오스</option>
                                        <option value="Alistar">알리스타</option>
                                        <option value="Annie">애니</option>
                                        <option value="Anivia">애니비아</option>
                                        <option value="Ashe">애쉬</option>
                                        <option value="Yasuo">야스오</option>
                                        <option value="Ekko">에코</option>
                                        <option value="Elise">엘리스</option>
                                        <option value="Wukong">오공</option>
                                        <option value="Ornn">오른</option>
                                        <option value="Orianna">오리아나</option>
                                        <option value="Olaf">올라프</option>
                                        <option value="Yorick">요릭</option>
                                        <option value="Udyr">우디르</option>
                                        <option value="Urgot">우르곳</option>
                                        <option value="Warwick">워웍</option>
                                        <option value="Yuumi">유미</option>
                                        <option value="Irelia">이렐리아</option>
                                        <option value="Evelynn">이블린</option>
                                        <option value="Ezreal">이즈리얼</option>
                                        <option value="Illaoi">일라오이</option>
                                        <option value="JarvanIV">자르반 4세</option>
                                        <option value="Xayah">자야</option>
                                        <option value="Zyra">자이라</option>
                                        <option value="Zac">자크</option>
                                        <option value="Janna">잔나</option>
                                        <option value="Jax">잭스</option>
                                        <option value="Zed">제드</option>
                                        <option value="Xerath">제라스</option>
                                        <option value="Jayce">제이스</option>
                                        <option value="Zoe">조이</option>
                                        <option value="Ziggs">직스</option>
                                        <option value="Jhin">진</option>
                                        <option value="Zilean">질리언</option>
                                        <option value="Jinx">징크스</option>
                                        <option value="Chogath">초가스</option>
                                        <option value="Karma">카르마</option>
                                        <option value="Camille">카밀</option>
                                        <option value="Kassadin">카사딘</option>
                                        <option value="Karthus">카서스</option>
                                        <option value="Cassiopeia">카시오페아</option>
                                        <option value="Kaisa">카이사</option>
                                        <option value="Khazix">카직스</option>
                                        <option value="Katarina">카타리나</option>
                                        <option value="Kalista">칼리스타</option>
                                        <option value="Kennen">케넨</option>
                                        <option value="Caitlyn">케이틀린</option>
                                        <option value="Kayn">케인</option>
                                        <option value="Kayle">케일</option>
                                        <option value="KogMaw">코그모</option>
                                        <option value="Corki">코르키</option>
                                        <option value="Quinn">퀸</option>
                                        <option value="Kled">클레드</option>
                                        <option value="Qiyana">키이나</option>
                                        <option value="Kindred">킨드레드</option>
                                        <option value="Taric">타릭</option>
                                        <option value="Talon">탈론</option>
                                        <option value="Taliyah">탈리야</option>
                                        <option value="TahmKench">탐 켄치</option>
                                        <option value="Trundle">트런들</option>
                                        <option value="Tristana">트리스타나</option>
                                        <option value="Tryndamere">트린다미어</option>
                                        <option value="TwistedFate">트위스티드 페이트</option>
                                        <option value="Twitch">트위치</option>
                                        <option value="Teemo">티모</option>
                                        <option value="Pyke">파이크</option>
                                        <option value="Pantheon">판테온</option>
                                        <option value="Fiddlesticks">피들스틱</option>
                                        <option value="Fiora">피오라</option>
                                        <option value="Fizz">피즈</option>
                                        <option value="Heimerdinger">하이머딩거</option>
                                        <option value="Hecarim">헤카림</option>
                                    </select>
                                    <input style="width: 60px; height: 42px;" type="number" class="number-count" name="numOfPlayed2" step="1" placeholder="판수">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>모스트 3</span></span>
                        <div>
                            <div>
                                <div class="language-skills-row">
                                    <select class="menu-title select-style" name="mostPlayed3" id="">
                                        <option value="default">선택</option>
                                        <option value="Garen">가렌</option>
                                        <option value="Galio">갈리오</option>
                                        <option value="Gangplank">갱플랭크</option>
                                        <option value="Gragas">그라가스</option>
                                        <option value="Graves">그레이브즈</option>
                                        <option value="Gnar">나르</option>
                                        <option value="Nami">나미</option>
                                        <option value="Nasus">나서스</option>
                                        <option value="Nautilus">노틸러스</option>
                                        <option value="Nocturne">녹턴</option>
                                        <option value="Nunu">누누와 윌럼프</option>
                                        <option value="Nidalee">니달리</option>
                                        <option value="Neeko">니코</option>
                                        <option value="Darius">다리우스</option>
                                        <option value="Diana">다이애나</option>
                                        <option value="Draven">드레이븐</option>
                                        <option value="Ryze">라이즈</option>
                                        <option value="Rakan">라칸</option>
                                        <option value="Rammus">람머스</option>
                                        <option value="Lux">럭스</option>
                                        <option value="Rumble">럼블</option>
                                        <option value="Renekton">레넥톤</option>
                                        <option value="Leona">레오나</option>
                                        <option value="RekSai">렉사이</option>
                                        <option value="Rengar">렝가</option>
                                        <option value="Lucian">루시안</option>
                                        <option value="Lulu">룰루</option>
                                        <option value="Leblanc">르블랑</option>
                                        <option value="LeeSin">리신</option>
                                        <option value="Riven">리븐</option>
                                        <option value="Lissandra">리산드라</option>
                                        <option value="MasterYi">마스터 이</option>
                                        <option value="Maokai">마오카이</option>
                                        <option value="Malzahar">말자하</option>
                                        <option value="Malphite">말파이트</option>
                                        <option value="Mordekaiser">모데카이저</option>
                                        <option value="Morgana">모르가나</option>
                                        <option value="DrMundo">문도 박사</option>
                                        <option value="MissFortune">미스 포츈</option>
                                        <option value="Bard">바드</option>
                                        <option value="Varus">바루스</option>
                                        <option value="Vi">바이</option>
                                        <option value="Veigar">베이가</option>
                                        <option value="Vayne">베인</option>
                                        <option value="Velkoz">벨코즈</option>
                                        <option value="Volibear">볼리베어</option>
                                        <option value="Braum">브라움</option>
                                        <option value="Brand">브랜드</option>
                                        <option value="Vladimir">블라디미르</option>
                                        <option value="Blitzcrank">블리츠크랭크</option>
                                        <option value="Viktor">빅토르</option>
                                        <option value="Poppy">뽀삐</option>
                                        <option value="Sion">사이온</option>
                                        <option value="Sylas">사일러스</option>
                                        <option value="Shaco">샤코</option>
                                        <option value="Senna">세나</option>
                                        <option value="Sejuani">세주아니</option>
                                        <option value="Sett">세트</option>
                                        <option value="Sona">소나</option>
                                        <option value="Soraka">소라카</option>
                                        <option value="Shen">쉔</option>
                                        <option value="Shyvana">쉬바나</option>
                                        <option value="Swain">스웨인</option>
                                        <option value="Skarner">스카너</option>
                                        <option value="Sivir">시비르</option>
                                        <option value="XinZhao">신짜오</option>
                                        <option value="Syndra">신드라</option>
                                        <option value="Singed">신지드</option>
                                        <option value="Thresh">쓰레쉬</option>
                                        <option value="Ahri">아리</option>
                                        <option value="Amumu">아무무</option>
                                        <option value="AurelionSol">아우렐리온 솔</option>
                                        <option value="Ivern">아이번</option>
                                        <option value="Azir">아지르</option>
                                        <option value="Akali">아칼리</option>
                                        <option value="Aatrox">아트록스</option>
                                        <option value="Aphelios">아펠리오스</option>
                                        <option value="Alistar">알리스타</option>
                                        <option value="Annie">애니</option>
                                        <option value="Anivia">애니비아</option>
                                        <option value="Ashe">애쉬</option>
                                        <option value="Yasuo">야스오</option>
                                        <option value="Ekko">에코</option>
                                        <option value="Elise">엘리스</option>
                                        <option value="Wukong">오공</option>
                                        <option value="Ornn">오른</option>
                                        <option value="Orianna">오리아나</option>
                                        <option value="Olaf">올라프</option>
                                        <option value="Yorick">요릭</option>
                                        <option value="Udyr">우디르</option>
                                        <option value="Urgot">우르곳</option>
                                        <option value="Warwick">워웍</option>
                                        <option value="Yuumi">유미</option>
                                        <option value="Irelia">이렐리아</option>
                                        <option value="Evelynn">이블린</option>
                                        <option value="Ezreal">이즈리얼</option>
                                        <option value="Illaoi">일라오이</option>
                                        <option value="JarvanIV">자르반 4세</option>
                                        <option value="Xayah">자야</option>
                                        <option value="Zyra">자이라</option>
                                        <option value="Zac">자크</option>
                                        <option value="Janna">잔나</option>
                                        <option value="Jax">잭스</option>
                                        <option value="Zed">제드</option>
                                        <option value="Xerath">제라스</option>
                                        <option value="Jayce">제이스</option>
                                        <option value="Zoe">조이</option>
                                        <option value="Ziggs">직스</option>
                                        <option value="Jhin">진</option>
                                        <option value="Zilean">질리언</option>
                                        <option value="Jinx">징크스</option>
                                        <option value="Chogath">초가스</option>
                                        <option value="Karma">카르마</option>
                                        <option value="Camille">카밀</option>
                                        <option value="Kassadin">카사딘</option>
                                        <option value="Karthus">카서스</option>
                                        <option value="Cassiopeia">카시오페아</option>
                                        <option value="Kaisa">카이사</option>
                                        <option value="Khazix">카직스</option>
                                        <option value="Katarina">카타리나</option>
                                        <option value="Kalista">칼리스타</option>
                                        <option value="Kennen">케넨</option>
                                        <option value="Caitlyn">케이틀린</option>
                                        <option value="Kayn">케인</option>
                                        <option value="Kayle">케일</option>
                                        <option value="KogMaw">코그모</option>
                                        <option value="Corki">코르키</option>
                                        <option value="Quinn">퀸</option>
                                        <option value="Kled">클레드</option>
                                        <option value="Qiyana">키이나</option>
                                        <option value="Kindred">킨드레드</option>
                                        <option value="Taric">타릭</option>
                                        <option value="Talon">탈론</option>
                                        <option value="Taliyah">탈리야</option>
                                        <option value="TahmKench">탐 켄치</option>
                                        <option value="Trundle">트런들</option>
                                        <option value="Tristana">트리스타나</option>
                                        <option value="Tryndamere">트린다미어</option>
                                        <option value="TwistedFate">트위스티드 페이트</option>
                                        <option value="Twitch">트위치</option>
                                        <option value="Teemo">티모</option>
                                        <option value="Pyke">파이크</option>
                                        <option value="Pantheon">판테온</option>
                                        <option value="Fiddlesticks">피들스틱</option>
                                        <option value="Fiora">피오라</option>
                                        <option value="Fizz">피즈</option>
                                        <option value="Heimerdinger">하이머딩거</option>
                                        <option value="Hecarim">헤카림</option>
                                    </select>
                                    <input style="width: 60px; height: 42px;" type="number" class="number-count" name="numOfPlayed3" step="1" placeholder="판수">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profileEdit-bar">
                <div class="profileEdit-bar-title"><span>거래방식 종류</span></div>
                <div>
                    <div class="profileInfo-bar">
                        <div class="native-language-row-wrapper">
                        <div class="container">
                            <div class="native-language-row">
                                <select class="menu-title select-style" name="meansOfTrade1" id="">
                                    <option value="default">선택</option>
                                    <option value="pay">계좌거래</option>
                                    <option value="direct">안전거래</option>
                                    <option value="safe">직거래</option>
                                </select>
                            </div>
                        </div>
                            
                            <div class="add-lan-click">+ <span>추가하기</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profileEdit-bar">
                <div class="profileEdit-bar-title"><span>판매</span></div>
                <div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>제목</span></span>
                        <div class="profile-introduction-input">
                            <div class="textarea_left">
                                <div class="wrapbox">
                                    <textarea class="textarea_common textarea_limited" name="title" maxlength="1000" minlength="4" placeholder="" cols="40" lineheight="21" rows="5" style="width: 600px; height: 43px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>가격</span></span>
                        <div class="profile-introduction-input">
                            <div class="textarea_left">
                                <div class="wrapbox">
                                    <input name="price" type="text" class="text-common undefined undefined" placeholder="가격" dec="0" style="width: 250px; height: 43px;" />
                                </div>
                            </div>
                        </div>
                        <span class="profileInfo-label-sec"><span>연락처</span></span>
                        <div class="profile-introduction-input">
                            <div class="textarea_left">
                                <div class="wrapbox">
                                    <input name="tel" type="text" class="text-common undefined undefined" placeholder="010-1234-5678" dec="0" style="width: 250px; height: 43px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profileInfo-bar">
                        <span class="profileInfo-label"><span>계정 소개</span></span>
                        <div class="profile-introduction-input">
                            <div class="textarea_left">
                                <div class="wrapbox">
                                    <textarea placeholder="허위사실로 계정정보 기재 시 통보없이 게시글이 삭제될 수 있습니다." class="textarea_common textarea_limited" name="intro" maxlength="1000" minlength="10" placeholder="" cols="40" lineheight="21" rows="5" style="width: 600px; height: 130px;"></textarea>
                                    <span class="wrapcount"><span class="number">0</span>/1000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profileEdit-bar-title"><span>사진</span></div>
                    <div class="profilePhoto-note"><span>클라이언트 내 정보 페이지 캡처(PNG, JPG, JPEG, PDF 확장자만 가능)</span></div>
                    <label class="upload-btn"><input type="file" onchange='preview(event)' name='file'/><span>업로드</span></label>
                    <div style="margin: 10px 0;">
                        <img style="width: 500px;" src="./resources/img/samplePage.png" id="img" alt="">
                    </div> 
                </div>
            </div>
        </div>
        <div class="modal-footer profile-setting-modal-footer">
            <div class="profileSetting-modal-footer-inner">
                <button name="submit" type="submit" class="btn btn-standard btn-main"><span>판매 글 올리기</span></button>
            </div>
        </div>
    </div>
    </form>
</div>

<script src="./js/upload.js"></script>
</body>