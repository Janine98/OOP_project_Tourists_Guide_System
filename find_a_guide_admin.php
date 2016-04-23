<?php

	require_once("session.php");
	
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$id_user = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE id_user=:id_user");
	$stmt->execute(array(":id_user"=>$id_user));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
<head>

    <title>J.U.M.| Tourist's Guides</title>
    <?php include ("header.php");?>
</head>

    <body background="images/back3.jpg">
        <?php include ("navigation_for_home_for_admin.php");?>
        
        <!--PAGE CONTENT-->
        <div class="container body animated bounceInDown">
        <center>
        <img src="images/banner1.png" class="img-responsive">
        </center>
        </div>
        
        
        
        <!-------------------TABLE------------------>
        <div class="container body animated bounceInUp">  
        <table class="table">
            <tr>
                <td align="center">
                    <br><img src="images/adele.jpg" class="img-responsive">
                    <p class="dest_text_down"><br><i>Email: <br></i> adele_tourist@gmail.com</p>
                    <p class="dest_text_down"><i>Contact No. <br></i> +639237659120</p>
                    <abbr title="Do you want to fire this tourist guide?">
                        <a class="btn btn-danger">Fire</a>
                    </abbr>
                </td>
                <td align="center">
                    <p class="dest_text"><b>Adele</b></p>
                    <p class="dest_text_down" align="left"><i>"Hello, it's me."</i><br>A graduate of Bachelor of Arts in Mass Communication. <br>My                        interest in History, foreign culture and photography <br>led me to a Tourguide training. I can speak Japanese <br>Language                          fluently. I have led large company group <br>tours and specialized tours for vip's, couples, students, <br>retirees, and                            families . Book your tailor made holidays <br>with me and spell the difference. Best prices! Best Holidays! <br>It's more fun                        in the Philippines. I am a traveller myself and <br>always like to explore new places, getting to know them <br>inside out.                          Not only will I show you what Cebu has to offer <br>in terms of culture, history, fashion, food and nightlife, <br>but I will                        also show you what's brewing and let you <br>experience the city as if you were living there yourself. <br>See you! </p>
                    <p class="dest_text_down" align="left">Languages: English, Japanese</p>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <br><img src="images/chuck.jpg" class="img-responsive">
                    <p class="dest_text_down"><br><i>Email: <br></i> chuck_tourist@gmail.com</p>
                    <p class="dest_text_down"><i>Contact No. <br></i> +639873409127</p>
                    <abbr title="Do you want to fire this tourist guide?">
                        <a class="btn btn-danger">Fire</a>
                    </abbr>
                </td>
                <td align="center">
                    <p class="dest_text"><b>Chuck</b></p>
                    <p class="dest_text_down" align="left"><i>"You will be safe in my tour."</i><br>If you wanna experience some nightlife, visit                          clubs, <br>nice pubs and artspaces, join me! I will for sure show you <br>that sightseeing can be extremely interesting! For                        those <br>who like streetart I can arrange a tour through abandoned <br>beautiful temples of graffiti and tags. Feel welcome!                        There <br>is never a dull tour of the City of Cebu  with me as your Guide. <br>See their unique beauty, history, monuments,                          museums and <br>hot spots for your day, I adeptly know them all. Make your <br>vacation a wonderful memorable event with me.                        Detailed <br>and customized descriptions of tours for individuals, couples <br>and groups will be offered. Additional                                information and specialty <br>tours can be arranged just for you. See and experience the <br>Philippines at reasonable rates                        and with an experienced and <br>expert Guide.</p>
                    <p class="dest_text_down" align="left">Languages: English, French</p>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <br><img src="images/ellen.jpg" class="img-responsive">>
                    <p class="dest_text_down"><br><i>Email: <br></i> ellen_tourist@gmail.com</p>
                    <p class="dest_text_down"><i>Contact No. <br></i> +639981234509</p>
                    <abbr title="Do you want to fire this tourist guide?">
                        <a class="btn btn-danger">Fire</a>
                    </abbr>
                </td>
                <td align="center">
                    <p class="dest_text"><b>Ellen</b></p>
                    <p class="dest_text_down" align="left"><i>"Hi!"</i><br>I love my country very much, hence why I love my job <br>as a tour guide,                        which gives me the opportunity to introduce <br>true Philippines to the world. I'm very accustomed to <br>Japanese and Korean                        tourists, but  have also toured <br>Russians and Americans. I speak English and Japanese <br>fluently; can also understand a                        bit of Korean. I was born <br>and raised in Cebu, and can assure you that Cebu is <br>truly a tourist destination. I'm                              attached to Cebu Licensed <br>Tour Guides Association!</p>
                    <p class="dest_text_down" align="left">Languages: English, Japanese, Korean</p>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <br><img src="images/nicholas.jpg" class="img-responsive">
                    <p class="dest_text_down"><br><i>Email: <br></i> nicholas_tourist@gmail.com</p>
                    <p class="dest_text_down"><i>Contact No. <br></i> +639120934986</p>
                    <abbr title="Do you want to fire this tourist guide?">
                        <a class="btn btn-danger">Fire</a>
                    </abbr>
                <td align="center">
                    <p class="dest_text"><b>Nicholas</b></p>
                    <p class="dest_text_down" align="left"><i>"Mabuhay!"</i><br> I am your Tour Guide, who have the knowledge and <br>understanding                         of my country's natural beauty and <br>uniqueness. Graduated from one of the most <br>prestigious schools in the country who                         knows <br>the tourism industry which will make your visit <br>memorable that you will treasure for a lifetime. <br>I come to                         you as an experienced guide of over <br>ten years, with sound, business management and <br>a desire to be sure you have the                         fullest experience <br>during your stay here in the Philippines. You will be <br>safe and delighted with my tours as I offer                         you a <br>personalized and group experience to the most <br>beautiful places in my country. I can also advise <br>you of the                         most popular night clubs, best hotels <br>and finest dining or, a traditional colorful healthy <br>robust Philippine meal,                           entertainment and cultural <br>activities. Additionally, as your guide I can advise <br>or make arrangements for your day                           and evening <br>activities at a reasonable rate or book your hotels <br>in advance, within your price range. I do also                               flight <br>bookings and reservations for local tours.</p>
                    <p class="dest_text_down" align="left">Languages: English, French</p>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <br><img src="images/oprah1.jpg" class="img-responsive">
                    <p class="dest_text_down"><br><i>Email: <br></i> oprah_tourist@gmail.com</p>
                    <p class="dest_text_down"><i>Contact No. <br></i> +639448812963</p>
                    <abbr title="Do you want to fire this tourist guide?">
                        <a class="btn btn-danger">Fire</a>
                    </abbr>
                </td>
                <td align="center">
                    <p class="dest_text"><b>Oprah</b></p>
                    <p class="dest_text_down" align="left"><i>"You get a guide, you get a guide, everybody gets a guide!"</i><br>Travelling is fun                          and exciting things to do, places <br>to see and itineraries for places all over the world. <br>All travelers are strangers                          in a foreign land but please <br>don't be afraid to travel on your own. Of course, as this <br>will be your first "real"                            travel experience let me help you <br>exploring the Philippines and some fascinating islands <br>and beautiful scenery in                            hassle free and affordable fee.</p>
                    <p class="dest_text_down" align="left">Languages: English</p>
                </td> 
            </tr>
            
            <tr>
                <td align="center">
                    <br><img src="images/robert.jpg" class="img-responsive">
                    <p class="dest_text_down"><br><i>Email: <br></i> robert_tourist@gmail.com</p>
                    <p class="dest_text_down"><i>Contact No. <br></i> +6392187590084</p>
                    <abbr title="Do you want to fire this tourist guide?">
                        <a class="btn btn-danger">Fire</a>
                    </abbr>
                </td>
                <td align="center">
                    <p class="dest_text"><b>Robert</b></p>
                    <p class="dest_text_down" align="left"><i>"I'm, like, the perfect guide!"</i><br>I am actually studying tourism, and this is                            because I love <br>getting to know people from all over the world. Don't you <br>think it is kind of magic? My favorite thing                        to do in Cebu is <br>wander around the old city and discover new streets, meet <br>new people and enjoy the Queen City of the                        South.  I love <br>to travel and adventure. Travel is the only thing in life that <br>makes you richer. I've been to a lot of                        places, and this time <br> I want to share those beautiful scenery with you guys. <br>Lets travel , enjoy and have fun. Lets                        explore the beauty <br>of Cebu and its neighboring provinces.</p>
                    <p class="dest_text_down" align="left">Languages: English, French</p>
                </td> 
            </tr>
            
             
            
        </table>
        </div>
        
        
</body>
</html>