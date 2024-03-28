<!DOCTYPE html>
<html>
<head>
  <title>Namma Karnataka</title>
  <link rel="stylesheet" type="text/css" href="newhome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
</head>
<body>
  <div class="wholepage">

    <div class="logcontainer">
      <img src="Map_karnataka_flag.png">
      <div class="logo">
      <h2 id="namma">ನಮ್ಮ</h2>
      </div>
        <h1 id="karnataka">ಕರ್ನಾಟಕ</h1>
      
  </div>

   


   <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a >WELCOME</a>
  <a> <?php session_start(); echo $_SESSION['name']; ?></a>
  <a href="first.html">Log Out</a>
 
</div>

<script>
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
</script>

<div class="navbar">

<button class="openbtn" onclick="openNav()">☰ </button> 

      <a href="#Home" id="current"><i class="fa fa-fw fa-home"></i> HOME</a>
      <a href="#Home">GALLERY</a>
          <div class="subnav">
           <button class="subnavbtn">DESTINATION <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
              <div>
                
                      <div class="dropdown" >
                <button class="dropbtn">WILD </button>
                  <div class="dropdown-content">
                      <div class="header">
                        <h2>Wild</h2>
                      </div>   
                      <div class="row">
                        <div class="column">
        
                            <a href="eg.php">Anshi National Park</a>
                            <a href="#">BRT Wildlife Sanctuary</a>
                            <a href="#">Ranibennur Blackbuck Sanctuary</a>
                            <a href="#">Adichunchanagiri Peacock Sanctuary</a>
                            <a href="#">Dubare Reserve Forest</a>
                            
                        </div>
                        
                        <div class="column">
                            <a href="#">Bhadra Wildlife Sanctuary</a>
                            <a href="#">Rajiv Gandhi National Park</a>
                            <a href="#">Ranganathittu Bird Sanctuary</a>
                            <a href="#">Kokkrebellur Pelicanry</a>
                            <a href="#">Bannerghatta National Park</a>
                            
                        </div>
                        
                        <div class="column">
                            <a href="#">Kudremukh National Park</a>
                            <a href="#">Dandeli Wildlife Sanctuary</a>
                            <a href="#">Bandipur National Park</a>
                            <a href="#">Cauvery Wildlife Sanctuary</a>
                            <a href="#">Someshwara Wildlife Sanctuary</a>
                        </div>
                        
                      </div>
                  </div>
              </div>



              </div>
              <div>
                
                      <div class="dropdown" >
                <button class="dropbtn">NATURE </button>
                  <div class="dropdown-content">
                      <div class="header">
                        <h2>Nature</h2>
                      </div>   
                      <div class="row">
                        <div class="column">
        
                            <a href="C:\Users\adars\Desktop\project\magod falls.html">Magod Falls</a>
                            <a href="#">Mulliyana Giri -Baba Budan Giri</a>
                            <a href="#">Onke Abbe</a>
                            <a href="#">Lalguli Falls</a>
                            <a href="#">Agumbe</a>
                            <a href="#">Chikmagalur</a>
                            <a href="#">Kalhatti Falls</a> 
                        </div>
                        <div class="column">
                            <a href="#">Kudremukh</a>
                            <a href="#">Nandi Hills</a>
                            <a href="#">Coorg</a>
                            <a href="#">Kundadri</a>
                            <a href="#">Kemmanagundi</a>
                            <a href="#">BR Hills</a>
                            <a href="#">Kodachadri</a>
                        </div>
                        <div class="column">
                            <a href="#">Abbey Falls</a>
                            <a href="#">Sathodi Falls</a>
                            <a href="#">Shivanasamudra Falls</a>
                            <a href="#">Hebbe Falls</a>
                            <a href="#">Jog Falls</a>
                            <a href="#">Gokak Falls</a>
                            <a href="#">Iruppu Falls</a>
                        </div>
                        
                      </div>
                  </div>
              </div>



              </div>
              <div>
                
                      <div class="dropdown" >
                <button class="dropbtn">BEACHES </button>
                  <div class="dropdown-content">
                      <div class="header">
                        <h2>Beaches</h2>
                      </div>   
                      <div class="row">
                        <div class="column">
        
                            <a href="#">Malpe</a>
                            <a href="#">Kaup</a>
                            <a href="#">Marawanthe</a>
                        </div>
                        <div class="column">
        
                            <a href="#">St. Mary's island</a>
                            <a href="#">Suratkal</a>
                            <a href="#">Gokarna</a>
                        </div>
                        <div class="column">
                            <a href="#">Karwar</a>
                            <a href="#">Murudeshwar</a>
                            <a href="#">Apsara konda</a>
                        </div>
                      </div>
                  </div>
              </div>



              </div>
              <div>
                
                      <div class="dropdown" >
                <button class="dropbtn">TEMPLES </button>
                  <div class="dropdown-content">
                      <div class="header">
                        <h2>Temples</h2>
                      </div>   
                      <div class="row">
                        <div class="column">
                            <a href="#">Talakad</a>
                            <a href="#">Infant Jesus Church, Bangalore</a>
                            <a href="#">kote anjaneya swamy temple</a>
                            <a href="#">Veeranarayana Temple, Belavadi</a>
                            <a href="#">Kudala Sangama</a>
                            <a href="#">Karkala</a>
                            <a href="#">Jumma Masjid</a>
                        </div>
                        <div class="column">
                            <a href="#">Banashankari</a>
                            <a href="#">Melkote</a>
                            <a href="C:\Users\adars\Desktop\project\gokarna.html">Gokarna</a>
                            <a href="#">Murudeshwara</a>
                            <a href="#">ISKCON Temple</a>
                            <a href="#">Bylekuppe</a>
                            <a href="#">Yellamma Temple</a>
                        </div>
                        <div class="column">
                            <a href="#">Shravanabelagola</a>
                            <a href="#">Sringeri</a>
                            <a href="#">Dharmasthala</a>
                            <a href="#">Gangadeshwara Temple</a>
                            <a href="#">Kukke Subrahmanya Temple</a>
                            <a href="#">Srikanteshwara Temple, Nanjangud</a>
                        </div>
                      </div>
                  </div>
              </div>



              </div>
              <div>
                
                      <div class="dropdown" >
                <button class="dropbtn">HERITAGE </button>
                  <div class="dropdown-content">
                      <div class="header">
                        <h2>Heritage</h2>
                      </div>   
                      <div class="row">
                        <div class="column">
        
                            <a href="#">Halebeedu</a>
                            <a href="#">Bangalore Palace</a>
                            <a href="#">Bijapur</a>
                            <a href="#">Mysore Palace</a>
                            <a href="#">Hampi</a>
                            <a href="#">Gulbarga</a>
                        </div>
                        <div class="column">
        
                            <a href="#">Somnathpur</a>
                            <a href="#">Kolar</a>
                            <a href="#">Badami</a>
                            <a href="#">Chitradurga</a>
                            <a href="#">Belur</a>
                            <a href="#">Srirangapatna</a>
                        </div>
                        <div class="column">
                            <a href="#">Pattadakal</a>
                            <a href="#">Bellary Fort</a>
                            <a href="#">Aihole</a>
                            <a href="#">Bangalore Fort and Tipu's Palace</a>
                        </div>
                      </div>
                  </div>
              </div>
              </div>
              <div>
                
                      <div class="dropdown" >
                <button class="dropbtn">ADVENTURE </button>
                  <div class="dropdown-content">
                      <div class="header">
                        <h2>Adventure</h2>
                      </div>   
                      <div class="row">
                        <div class="column">
        
                            <a href="#">White Water Rafting</a>
                            <a href="#">Trekking</a>
                            <a href="#">Other Water Sports</a>
                            <a href="#">Angling</a>
                        </div>
                        <div class="column">
                            <a href="#">Rock Climbing</a>
                            <a href="#">Bird Watching</a>
                            <a href="#">Aerosports</a>
                        </div>
                        <div class="column">
                        </div>
                      </div>
                  </div>
              </div>



              </div>
              </div>
          </div> 
      <a href="#Home">ABOUT US</a>
      <input type="text" placeholder="Search.." id="tbox"><button type="submit" id="btn"><i class="fa fa-search"></i></button>

    </div>

    <div>
      <div class="slider">
      <figure>
      <img src="s1.jpg">
      <img src="s2.jpg">
      <img src="s3.jpg">
      <img src="s4.jpg">
      <img src="s5.jpg">
      </figure>
    </div>
          <h1 style="text-align: center;">Namma Karnataka</h1>

    </div>
<div class="content">
      <div class="leftcontent">
      <div class="holder">
          <h1>Mysore Palace</h1>
          <img src="mysore-palace.jpg">
          <p>Ambavilas Palace (Kannada: ಅಂಬಾ ವಿಲಾಸ್ ಅರಮನೆ), otherwise known as the Mysore Palace (Kannada: ಮೈಸೂರು ಅರಮನೆ), is a historical palace and a royal residence at Mysore in the Indian State of Karnataka. It is the official residence of the Wadiyar dynasty and the seat of the Kingdom of Mysore. The palace is in the centre of Mysore, and faces the Chamundi Hills eastward. Mysore is commonly described as the 'City of Palaces', and there are seven palaces including this one; however, 'Mysore Palace' refers specifically to this one within the Old Fort.</p>
         
        </div>
 

        <div class="holder">
          <h1>Murudeshwar Temple</h1>
          <img src="murudeshwar.jpg">
          <p>
            Murdeshwar is a town in Bhatkal Taluk of Uttara Kannada district in the state of Karnataka, India. Murdeshwar is another name of the Hindu god Shiva. Famous for the world's second tallest Shiva statue, the town lies on the coast of the Arabian Sea and is also famous for the Murdeshwar Temple.
          </p>
        </div>


        <div class="holder">
          <h1>Bandipur National Park</h1>
          <img src="bandipura.jpg">
          <p>
          Bandipur National Park established in 1974 as a tiger reserve under Project Tiger, is a national park located in the south Indian state of Karnataka, which is the state with the highest tiger population in India. It is one of the premier Tiger Reserves in the country along with the adjoining Nagarhole national park.
          </p>
        </div>
        <div class="holder">
          <h1>Bandipur National Park</h1>
          <img src="bandipura.jpg">
          <p>
          Bandipur National Park established in 1974 as a tiger reserve under Project Tiger, is a national park located in the south Indian state of Karnataka, which is the state with the highest tiger population in India. It is one of the premier Tiger Reserves in the country along with the adjoining Nagarhole national park.
          </p>
        </div>
      </div>
      <div class="rightcontent">
          <h2 style="color:white;">Hotels</h2>

  <div class="sidenav">
  <button class="dropdown-btn">Belagavi Division 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <a href="https://www.google.co.in/travel/hotels/Bagalkot?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20bagalkot&rp=OAFAAA&ictx=1&ved=0ahUKEwikt57pnsTeAhWGrY8KHbDUDPkQjGoIXg&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEKEghCYWdhbGtvdKIBFQoJL20vMDk4NTZqEghCYWdhbGtvdJIBAiAB&tcfs=Ei8KCS9tLzA5ODU2ahIIQmFnYWxrb3QaGAoKMjAxOC0xMS0yNxIKMjAxOC0xMS0yOFIA" target='_blank'>Bagalkot</a>
    <a href="https://www.google.co.in/travel/hotels/Belgaum?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20belgaum&rp=OAFAAA&ictx=1&ved=0ahUKEwjQ2_yKn8TeAhUIlpAKHcsoBowQjGoIVg&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEJEgdCZWxnYXVtogEUCgkvbS8wMzV6NHASB0JlbGdhdW2SAQIgAQ&tcfs=Ei4KCS9tLzAzNXo0cBIHQmVsZ2F1bRoYCgoyMDE4LTExLTI3EgoyMDE4LTExLTI4UgA">Belagavi</a>
    <a href="https://www.google.co.in/travel/hotels/Vijayapura?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20bijapur&rp=OAFAAA&ictx=1&ved=0ahUKEwiMwOWin8TeAhUFH5AKHWdwBX4QjGoIUw&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEJEgdCaWphcHVyogEUCgkvbS8wM2trdnoSB0JpamFwdXKSAQIgAQ&tcfs=Ei4KCS9tLzAza2t2ehIHQmlqYXB1choYCgoyMDE4LTExLTI3EgoyMDE4LTExLTI4UgA">Vijayapura</a>
    <a href="https://www.google.co.in/travel/hotels/Dharwad?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20dharwad&rp=OAFAAA&ictx=1&ved=0ahUKEwis4Ju8n8TeAhVIvo8KHVTlCHkQjGoIVw&hrf=CgUI1BYQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEJEgdEaGFyd2FkogEUCgkvbS8wNHdkM3oSB0RoYXJ3YWSSAQIgAQ&tcfs=Ei4KCS9tLzA0d2QzehIHRGhhcndhZBoYCgoyMDE4LTExLTI3EgoyMDE4LTExLTI4UgA">Dharwad</a>
    <a href="https://www.google.co.in/travel/hotels/Gadag?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20gadag&rp=OAFAAA&ictx=1&ved=0ahUKEwi30PvQn8TeAhWDiJAKHRCgCSIQjGoIUg&hrf=CgUI1BYQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEQEg5HYWRhZy1CZXRhZ2VyaaIBGwoJL20vMGYxZ3l3Eg5HYWRhZy1CZXRhZ2VyaZIBAiAB&tcfs=EjUKCS9tLzBmMWd5dxIOR2FkYWctQmV0YWdlcmkaGAoKMjAxOC0xMS0yNxIKMjAxOC0xMS0yOFIA">Gadag</a>
    <a href="https://www.google.co.in/travel/hotels/Haveri?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20haveri%20karnataka&rp=OAFAAA&ictx=1&ved=0ahUKEwjn3faQncTeAhUHuI8KHbWrAdsQjGoIZw&hrf=CgUI1BYQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEIEgZIYXZlcmmiARMKCS9tLzBjbTF5dhIGSGF2ZXJpkgECIAE&tcfs=Ei0KCS9tLzBjbTF5dhIGSGF2ZXJpGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Haveri</a>
    <a href="https://www.google.co.in/travel/hotels/%E0%B2%89%E0%B2%A4%E0%B3%8D%E0%B2%A4%E0%B2%B0%20%E0%B2%95%E0%B2%A8%E0%B3%8D%E0%B2%A8%E0%B2%A1?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20uttara%20kannada&rp=OAFAAA&ictx=1&ved=0ahUKEwjs5vKensTeAhWKOo8KHaEADLgQjGoIXA&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASgAmgEhEh_gsongsqTgs43gsqTgsrAg4LKV4LKo4LON4LKo4LKhogEsCgkvbS8wMXMxMzISH-CyieCypOCzjeCypOCysCDgspXgsqjgs43gsqjgsqGSAQIgAQ&tcfs=EkYKCS9tLzAxczEzMhIf4LKJ4LKk4LON4LKk4LKwIOCyleCyqOCzjeCyqOCyoRoYCgoyMDE4LTExLTI3EgoyMDE4LTExLTI4UgA">Uttara Kannada</a>

  </div>
</div>

<div class="sidenav">
  <button class="dropdown-btn">Bengaluru Division 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a  href="https://www.google.co.in/travel/hotels/Bengaluru?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20banglore%20urban&rp=OAFAAA&ictx=1&ved=0ahUKEwjU97uV3sbeAhVBo48KHU2tBoEQjGoIYA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgELEglCZW5nYWx1cnWiARUKCC9tLzA5YzE3EglCZW5nYWx1cnWSAQIgAQ&tcfs=Ei8KCC9tLzA5YzE3EglCZW5nYWx1cnUaGAoKMjAxOC0xMS0yNxIKMjAxOC0xMS0yOFIA">Bengaluru Urban</a>
    <a href="https://www.google.co.in/travel/hotels/Bengaluru?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20banglore%20rural&rp=OAFAAA&ictx=1&ved=0ahUKEwjv2KOu3sbeAhXEvI8KHaYVAUcQjGoIVw&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEREg9CYW5nYWxvcmUgUnVyYWyiARwKCS9tLzA4Z3J6NxIPQmFuZ2Fsb3JlIFJ1cmFskgECIAE&tcfs=EjYKCS9tLzA4Z3J6NxIPQmFuZ2Fsb3JlIFJ1cmFsGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Bengaluru Rural</a>
    <a href="https://www.google.co.in/travel/hotels/Ramanagara?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20ramanagara&rp=OAFAAA&ictx=1&ved=0ahUKEwjOst_m3sbeAhUMQY8KHR7VDVcQjGoIVw&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEMEgpSYW1hbmFnYXJhogEXCgkvbS8wM3d5enISClJhbWFuYWdhcmGSAQIgAQ&tcfs=EjEKCS9tLzAzd3l6chIKUmFtYW5hZ2FyYRoYCgoyMDE4LTExLTI3EgoyMDE4LTExLTI4UgA">Ramanagara</a>
    <a href="https://www.google.co.in/travel/hotels/Chikkaballapura?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20chikkaballapur&rp=OAFAAA&ictx=1&ved=0ahUKEwj0_t373sbeAhUP4o8KHcp6C2oQjGoIVA&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEQEg5DaGlra2FiYWxsYXB1cqIBGwoJL20vMDloMTFrEg5DaGlra2FiYWxsYXB1cpIBAiAB&tcfs=EjUKCS9tLzA5aDExaxIOQ2hpa2thYmFsbGFwdXIaGAoKMjAxOC0xMS0yNxIKMjAxOC0xMS0yOFIA">Chikkaballapur</a>
    <a href="https://www.google.co.in/travel/hotels/Chitradurga?g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&q=hotels%20in%20chitradurga&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgENEgtDaGl0cmFkdXJnYaIBGQoKL20vMDJwOGs2eBILQ2hpdHJhZHVyZ2GSAQIgAQ&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Chitradurga</a>
    <a href="https://www.google.co.in/travel/hotels/Davangere?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEyEglEYXZhbmdlcmUaJTB4M2JiYTI1NzI2YTYyMjJlNToweDRhMTIwZGUxNDdjNmQ0NzKiARQKCS9tLzAyNWJjZxIHU2hpbW9nYQ&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Davanagere</a>
    <a href="https://www.google.co.in/travel/hotels/Kolar?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEuEgVLb2xhcholMHgzYmFkZjA4Yjk1OTVhY2NkOjB4NDNlZjkzNTQyN2ZkZjNkMKIBFwoJL20vMDN0dmNfEgpEYXZhbmFnZXJl&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Kolar</a>
    <a href="https://www.google.co.in/travel/hotels/Shimoga?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEwEgdTaGltb2dhGiUweDNiYmJhOGQwZWM2MjA0OTU6MHg1NTg5ZDczM2MyNzYxYTE3ogEZCgovbS8wMnA4azZ4EgtDaGl0cmFkdXJnYQ&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Shivamogga</a>
    <a href="https://www.google.co.in/travel/hotels/Tumkur?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEvEgZUdW1rdXIaJTB4M2JiMDJjM2I2MzJlMjNiOToweGUxNWZiMjM5ZTlkNzM3YmKiARIKCS9tLzBjbTJmahIFS29sYXI&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Tumakuru</a>
  </div>
</div>
  <div class="sidenav">
  <button class="dropdown-btn">Kalaburagi Division 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="https://www.google.co.in/travel/hotels/Bellary?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEwEgdCZWxsYXJ5GiUweDNiYjcxMTVmZjMxZWJjOTU6MHgyNzVkMTk1MzdhM2FkYmQ2ogETCgkvbS8wY20yaGwSBlR1bWt1cg&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Ballari</a>
    <a href="https://www.google.co.in/travel/hotels/Bidar?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEuEgVCaWRhcholMHgzYmNlYzcyMmQ2OTA4Y2U1OjB4YjlhNzFiNmUwMGFkZmY2Y6IBFAoJL20vMDRoZjZ4EgdCZWxsYXJ5&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Bidar</a>
    <a href="https://www.google.co.in/travel/hotels/Kalaburagi?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIhhcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEzEgpLYWxhYnVyYWdpGiUweDNiYzhjNzQ1NWI4MjRlNTc6MHg0NGNiZTMzNjY5NTdlZDlmogESCgkvbS8wM3BmdmsSBUJpZGFy&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Kalaburagi</a>
    <a href="https://www.google.co.in/travel/hotels/Koppal?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEvEgZLb3BwYWwaJTB4M2JiOWNiMzkxYTJhZmY0NzoweGIwNjQ0ZjdjNjQ4NWQyMTaiARUKCS9tLzAxNGdzdxIIR3VsYmFyZ2E&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Koppal</a>
    <a href="https://www.google.co.in/travel/hotels/Raichur?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEvEgdSYWljaHVyGiQweDNiYzlkNzBjYTcyOTQzNjE6MHg2ZTlmNTBkNzkyMTY5ZWWiARwKCS9tLzA1bjU5NBIPS29wcGFsIERpc3RyaWN0&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Raichur</a>
    <a href="https://www.google.co.in/travel/hotels/Yadgir?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEvEgZZYWRnaXIaJTB4M2JjODUzYTI1NjMwZDVlZjoweDMwMTkwOWQ0Mzk3NzYzZWSiARUKCi9tLzAyNXQ3MG0SB1JhaWNodXI&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Yadgiri</a>
  </div>
</div>
  <div class="sidenav">
  <button class="dropdown-btn">Mysuru Division
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="https://www.google.co.in/travel/hotels/Chamrajnagar?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgE1EgxDaGFtcmFqbmFnYXIaJTB4M2JhZjMwZTYzZDQ4MzM1ZDoweGJiMzdkYTc5ZWY2ZWYyYjOiARUKCS9tLzBjeWNkNxIIWWFkYWdpcmk&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Chamarajanagar</a>
    <a href="https://www.google.co.in/travel/hotels/Chikkamagaluru?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgE3Eg5DaGlra2FtYWdhbHVydRolMHgzYmJhZDc0MjdmODM5OGFmOjB4ZGZhN2RkYmY2MDdiNDcwNaIBJAoJL20vMDF4YnlzEhdDaGFtYXJhamFuYWdhciBEaXN0cmljdA&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Chikkamagaluru</a>
    <a href="https://www.google.co.in/travel/hotels/Dakshina%20Kannada?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgE5EhBEYWtzaGluYSBLYW5uYWRhGiUweDNiYTM1YTRkMmJmZDE2YmY6MHgyZjhkZDAwYjI0MmJmYjVjogEhCgkvbS8wNTkyeXASFENoaWttYWdhbHVyIERpc3RyaWN0&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Dakshina Kannada</a>
    <a href="https://www.google.co.in/travel/hotels/Hassan?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUIiCcQACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEvEgZIYXNzYW4aJTB4M2JhNTQ4MjMwYmE0Mjc0NzoweGIwZGI0ZmI2YjdhMWY1M2aiAR0KCS9tLzAzbGpzbhIQRGFrc2hpbmEgS2FubmFkYQ&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Hassan</a>
    <a href="https://www.google.co.in/travel/hotels/Kodagu?ap=MABoAA&g2lb=4181926%2C4208993%2C4207631%2C4216158&hl=en&gl=in&un=0&rp=OAFAAA&ictx=1&ved=0ahUKEwiS4t-V38beAhWMro8KHa-zCjYQjGoIVA&hrf=CgUI8C4QACIDSU5SKhYKBwjiDxALGBsSBwjiDxALGBwYASACmgEvEgZLb2RhZ3UaJTB4M2JhNWFhYTIzZTBiZTE2YjoweDUwZmQxZjgyMzU5ZWEzNzCiAR4KCS9tLzA3ZDBsaBIRSGFzc2FuLCBLYXJuYXRha2E&tcfs=EjMKCi9tLzAycDhrNngSC0NoaXRyYWR1cmdhGhgKCjIwMTgtMTEtMjcSCjIwMTgtMTEtMjhSAA">Kodagu</a>
    <a href="#">Mandya</a>
    <a href="#">Mysuru</a>
    <a href="#">Udupi</a>

  </div>
</div>

 <div class="news">
          
        <h3 style="color: white;">News</h3>
        <ul>
          <li>
             <a href="https://starofmysore.com/promoting-karnataka-tourism-in-london/">Promoting Karnataka Tourism in London</a>
          </li>
          <li>
            <a href="https://travel.manoramaonline.com/travel/travel-news/2018/10/24/karnataka-plans-blueprint-to-make-dussehra-tourist-centric.html">Karnataka plans blueprint to make Dussehra tourist-centric</a>
          </li>
          <li>
             <a href="https://www.deccanherald.com/state/tourism-ktaka-behind-other-695025.html">Tourism: Karnataka is behind in use of central funds</a>
        
          </li>
          <li><a href="https://swarajyamag.com/insta/mysuru-creates-history-in-tourist-footfall-for-dasara-celebrations">'Jumbo' Mysuru Dasara: City Records Highest Ever Tourist Numbers ...</a></li>
          <li><a href="https://www.thehindu.com/news/national/karnataka/india-can-be-second-cheapest-tourist-destination-in-the-world/article25138185.ece">'India can be second cheapest tourist destination in the world'</a></li>
        </ul>
        
       </div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
      </div>
</div>
<div>
    <footer style="text-align: center;height: 100px; background-color: white;line-height: 100px; font-size: 20px;">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
</footer>
  
</div>

</div>
</body>