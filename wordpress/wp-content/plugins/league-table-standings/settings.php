<div class="wrap">
    <?php    echo "<h1>" . __( 'League Table Standings - Settings', 'oscimp_trdom' ) . "</h1>"; ?>
     
 <p><small>NOTE: More league tables will be available soon.</small></p>
 <br />
<h3>Choose what league you would like to show: (Short Code Generator)</h3><p>
<body>
<form id="example" name="example">
        <select id="sensor" onchange="updateText('sensor')">
		  <option value="Choose a league first ...">Choose a league</option>
<option name="popular"> ====== Most Popular ====== </option>
          <option value="[soccerleagueengland]">ENGLAND - BARCLAYS</option>
          <option value="[soccerleaguefrance]">FRANCE - LIGUE 1</option>
		  <option value="[soccerleaguegermany]">GERMANY - BUNDESLIGA</option>
          <option value="[soccerleagueitaly]">ITALY - SERIE A</option>
		   <option value="[soccerleaguenetherlands]">NETHERLANDS - EREDIVISIE</option>
		  <option value="[soccerleaguespain]">SPAIN - LIGA BBVA</option>
		  <option value="[soccerleaguechampionsleague]">UEFA CHAMPIONS LEAGUE</option>
		   <option value="[soccerleagueeuropa]">UEFA EUROPA LEAGUE</option>
<option name="popular"> ====== EUROPE Leagues ====== </option> 
		   <option value="[soccerleaguealbania]">ALBANIA: KATEGORIA SUPERIORE</option>
		   <option value="[soccerleaguearmenia]">ARMENIA: PREMIER LEAGUE</option>
		   <option value="[soccerleagueaustria]">AUSTRIA: TIPICO BUNDESLIGA</option>
		   <option value="[soccerleaguebelarus]">BELARUS: VYSSHAYA LEAGUE</option>
		   <option value="[soccerleaguebelgium]">BELGIUM: JUPILER PRO LEAGUE</option>
		   <option value="[soccerleaguebosnia]">BOSNIA AND HERZEGOVINA: PREMIER LIGA</option>
		   <option value="[soccerleaguebulgaria]">BULGARIA: A GRUPA</option>
		   <option value="[soccerleaguecroatia]">CROATIA: 1. HNL</option>
		   <option value="[soccerleaguecyprus]">CYPRUS: 1ST DIVISION</option>
		   <option value="[soccerleagueczech]">CZECH REPUBLIC: SYNOT LIGA</option>
		   <option value="[soccerleaguedenmark]">DENMARK: SUPERLIGAEN</option>
		   <option value="[soccerleagueengland]">ENGLAND: PREMIER LEAGUE</option>
		   <option value="[soccerleagueestonia]">ESTONIA: MEISTRILIIGA</option>
		   <option value="[soccerleaguefaroeislands]">FAROE ISLANDS: EFFODEILDIN</option>
		   <option value="[soccerleaguefinland]">FINLAND: VEIKKAUSLIIGA</option>
		   <option value="[soccerleaguefrance]">FRANCE: LIGUE 1</option>
		   <option value="[soccerleaguegeorgia]">GEORGIA: UMAGLESI LIGA</option>
		   <option value="[soccerleaguegermany]">GERMANY: BUNDESLIGA</option>
		   <option value="[soccerleaguegreece]">GREECE: SUPER LEAGUE</option>
		   <option value="[soccerleaguehungary]">HUNGARY: OTP BANK LIGA</option>
		   <option value="[soccerleagueiceland]">ICELAND: URVALSDEILD</option>
		   <option value="[soccerleagueireland]">IRELAND: PREMIER LEAGUE</option>
		   <option value="[soccerleagueitaly]">ITALY: SERIE A</option>
		   <option value="[soccerleaguelatvia]">LATVIA: VIRSLĪGA</option>
		   <option value="[soccerleaguelithuania]">LITHUANIA: A LYGA</option>
		   <option value="[soccerleagueluxembourg]">LUXEMBOURG: DIVISION NATIONALE</option>
		   <option value="[soccerleaguemacedonia]">MACEDONIA: PRVA LIGA</option>
		   <option value="[soccerleaguemalta]">MALTA: PREMIER DIVISION</option>
		   <option value="[soccerleaguemoldova]">MOLDOVA: DIVIZIA NATIONALA</option>
		   <option value="[soccerleaguemontenegro]">MONTENEGRO: PRVA CRNOGORSKA LIGA</option>
		   <option value="[soccerleaguenetherlands]">NETHERLANDS: EREDIVISIE</option>
		   <option value="[soccerleaguenorthernireland]">NORTHERN IRELAND: PREMIERSHIP</option>
		   <option value="[soccerleaguenorway]">NORWAY: TIPPELIGAEN</option>
		   <option value="[soccerleaguepoland]">POLAND: EKSTRAKLASA</option>
		   <option value="[soccerleagueportugal]">PORTUGAL: PRIMEIRA LIGA</option>
		   <option value="[soccerleagueromania]">ROMANIA: LIGA I</option>
		   <option value="[soccerleaguerussia]">RUSSIA: PREMIER LEAGUE</option>
		   <option value="[soccerleaguesanmarino]">SAN MARINO: CAMP. SAMMARINESE</option>
		   <option value="[soccerleaguescotland]">SCOTLAND: PREMIERSHIP</option>
		   <option value="[soccerleagueserbia]">SERBIA: SUPER LIGA</option>
		   <option value="[soccerleagueslovakia]">SLOVAKIA: FORTUNA LIGA</option>
		   <option value="[soccerleagueslovenia]">SLOVENIA: PRVALIGA</option>
		   <option value="[soccerleaguespain]">SPAIN: LIGA BBVA</option>
		   <option value="[soccerleaguesweden]">SWEDEN: ALLSVENSKAN</option>
		   <option value="[soccerleagueswitzerland]">SWITZERLAND: SUPER LEAGUE</option>
		   <option value="[soccerleagueturkey]">TURKEY: SÜPER LIG</option>
		   <option value="[soccerleagueukraine]">UKRAINE: PREMIER LEAGUE</option>
		   <option value="[soccerleaguewales]">WALES: PREMIER LEAGUE</option>
		   <option name=""> ====== ASIA ====== </option>
		   <option value="[soccerleagueazerbaijan]">AZERBAIJAN: TOPAZ PREMYER LIQASI LEAGUE</option>
		   <option value="[soccerleaguebahrain]">BAHRAIN: PREMIER LEAGUE</option>
		   <option value="[soccerleaguechina]">CHINA: SUPER LEAGUE</option>
		   <option value="[soccerleaguehongkong]">HONGKONG: FIRST DIVISION LEAGUE</option>
		   <option value="[soccerleagueindia]">INDIA: SUPER LEAGUE</option>
		   <option value="[soccerleagueindonesia]">INDONESIA: LIGA PRIMA LEAGUE</option>
		   <option value="[soccerleagueiran]">IRAN: PERSIAN GULF PRO LEAGUE</option>
		   <option value="[soccerleagueisrael]">ISRAEL: LIGAT HAAL LEAGUE</option>
		   <option value="[soccerleaguejapan]">JAPAN: J. LEAGUE 1</option>
		   <option value="[soccerleaguejemen]">JEMEN: YEMENI LEAGUE</option>
		   <option value="[soccerleaguejordan]">JORDAN: PREMIER LEAGUE</option>
		   <option value="[soccerleaguekazakhstan]">KAZAKHSTAN: PREMIER LEAGUE</option>
		   <option value="[soccerleaguekuwait]">KUWAIT: PREMIER LEAGUE</option>
		   <option value="[soccerleaguemalaysia]">MALAYSIA: LIGA SUPER LEAGUE</option>
		   <option value="[soccerleagueoman]">OMAN: OMANTEL PROFESSIONAL LEAGUE</option>
		   <option value="[soccerleaguepakistan]">PAKISTAN: PREMIER LEAGUE</option>
		   <option value="[soccerleaguephilippines]">PHILIPPINES: UFL LEAGUE</option>
		   <option value="[soccerleagueqatar]">QATAR: QATAR STARS LEAGUE</option>
		   <option value="[soccerleaguesaudiarabia]">SAUDI ARABIA: PROFESSIONAL LEAGUE</option>
		   <option value="[soccerleaguesingapore]">SINGAPORE: S.LEAGUE</option>
		   <option value="[soccerleaguesouthkorea]">SOUTH KOREA: K CLASSIC LEAGUE</option>
		   <option value="[soccerleaguethailand]">THAILAND: THAI PREMIER LEAGUE</option>
		   <option value="[soccerleagueuae]">UAE ARABIAN GULF LEAGUE</option>
		   <option value="[soccerleagueuzbekistan]">UZBEKISTAN: PFL LEAGUE</option>
		   <option value="[soccerleaguevietnam]">VIETNAM: V-LEAGUE</option>
		   <option name=""> ====== AFRICA ====== </option>
		   <option value="[soccerleaguealgeria]">Algeria: Ligue 1 Table</option>
		   <option value="[soccerleagueangola]">Angola: Girabola League Table</option>
		   <option value="[soccerleaguecameroon]">Cameroon: Elite One League Table</option>
		   <option value="[soccerleagueegypt]">Egypt: Premier League Table</option>
		   <option value="[soccerleagueghana]">Ghana: Premier League Table</option>
		   <option value="[soccerleaguekenya]">Kenya: Premier League Table</option>
		   <option value="[soccerleaguemorocco]">Morocco: Botola League Table</option>
		   <option value="[soccerleaguesouthafrica]">South Africa: Premier League Table</option>
		   <option value="[soccerleaguetunisia]">Tunisia: Ligue 1 League Table</option>
		   <option value="[soccerleagueuganda]">Uganda: Azam Premier League Table</option>
		   <option name=""> ====== NORTH AMERICA ====== </option>
		   <option value="[soccerleaguecostarica]">Costa Rica: Primera Division league table</option>
		   <option value="[soccerleagueelsalvador]">El Salvador: Primera Division League Table</option>
		   <option value="[soccerleagueguatemala]">Guatemala: Liga Nacional League Table</option>
		   <option value="[soccerleaguehonduras]">Honduras: Liga Nacional League Table</option>
		   <option value="[soccerleaguejamaica]">Jamaica: Premier League Table</option>
		   <option value="[soccerleaguemexico]">Mexico: Supercopa MX League Table</option>
		   <option value="[soccerleaguepanama]">Panama: Liga Panamena De Futbol League Table</option>
		   <option value="[soccerleagueusa]">USA: Major Soccer League Table</option>
		   <option name=""> ====== SOUTH AMERICA ====== </option>
		   <option value="[soccerleagueargentina]">Argentina: Primera Division League Table</option>
		   <option value="[soccerleaguebolivia]">Bolivia: Liga Del Futbol Profesional Boliviano League Table</option>
		   <option value="[soccerleaguebrazil]">Brazil: Paulista Serie A1 League Table</option>
		   <option value="[soccerleaguechile]">Chile: Primera Division League Table</option>
		   <option value="[soccerleaguecolombia]">Colombia: Liga Aguila League Table</option>
		   <option value="[soccerleagueecuador]">Ecuador: Serie A League Table</option>
		   <option value="[soccerleagueparaguay]">Paraguay: Division Profesional League Table</option>
		   <option value="[soccerleagueperu]">Peru: rimera Division League Table</option>
		   <option value="[soccerleagueuruguay]">Uruguay: Primera Division League Table</option>
		   <option value="[soccerleaguevenezuela]">Venezuela: Primera Division League Table</option>
		   <option name=""> ====== AUSTRALIA ====== </option>
		   <option value="[soccerleagueaustralia]">Australia: A-League Table</option>
		   <option value="[soccerleaguenewzealand]">New Zealand: Premiership League Table</option>

    </select>

    <br /><hr />
    Short Code: <input type="text" value="Nothing to show" id="sensorText" onclick="this.focus();this.select()" />
</form>

<script type="text/javascript">

function updateText(type) { 
 var id = type+'Text';
 document.getElementById(id).value = document.getElementById(type).value;
}
</script><br />
</body>To display the league table simply copy and paste the shortcode in a page/post or as <strong>a widget</strong> ( U need to drag a text widget in your sidebar and embed the shortcode for widget display ).</p>
<br /><hr />
<center>Please <a href="http://livescores.website/contact-us/" target="_blank">contact us</a> to ask questions, report bugs, suggest new features or give us a suggestion.</center>
<hr />


<h3>Support the plugin - Help keep it free!</h3>
    <div class="form-group">
        <label class="col-sm-1 control-label"></label>
        <div class="col-sm-11">
            <label style="width: 100%;">

                <input type="checkbox" onclick="ltswp_click_credit_link();" id="ltswp_author_linking" <?php echo ltswp_Main::$settings['ltswp_author_linking'] == 1? 'checked':'';?>>
                Activate Author Credit Link.
            </label>
        </div>
    </div>
<p>Thank you for using our League Table Standings plugin.</p>
</div>