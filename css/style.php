<style type="text/css">
  body
      {
          background-color:aqua;
      }
  
 
    html{
        scroll-behavior:smooth;
    }
  
   *{margin: 0; padding: 0; box-sizing:border-box;font-family: 'Muli', sans-serif; }
   .navbar-light
      {
          background-color: #a29bfe!important;
         
         
      }
      .navbar-light a {color:white;font-size:20px;font-weight:bold;}


      /* /////////////////////Header class styling*/

      .header
          {
              height:450px;
              width:100%;
              background-color:#1D70B7;
              
          }

       .right h1{font-size: 2rem;font-weight:bold;font-family: 'Muli', sans-serif;color:#FB8D02;}

       .corona_root img{
                   height:50px;
                   width:50px;
                   border-radius:50%;
                  animation: gocorona 5s linear infinite;
            }
        @keyframes gocorona
                  {
                      0%{transform: rotate(0);}
                      100%{transform: rotate(360deg);}

                  }
            .left img{
                
                animation: indiaFights 10s linear infinite;
                border-radius:50%;
            }  
            @keyframes indiaFights
                  {
                      0%{transform: scale(.75);}
                      20%{transform: scale(1);}
                      40%{transform: scale(.75);}
                      60%{transform: scale(1);}
                      80%{transform: scale(.75);}
                      100%{transform: scale(1);}

                  }
/***************update section styling*******************/
           .update
             {
                margin:0 0 30px 0;
             }
            .update h3{font-weight:bold;font-family: 'Kalam', cursive;color:#FB8D02;} 
/*************About Section Styling*********************/
   .sub_section
         {background-color:#fbfafd;text-align:justify;color:blue;}
/*  World Update Link Styling */
    .blinks
        {
            background-color:red;
            animation: world 10s linear infinite; 
        }
        @keyframes world
                  {
                      0%{transform: scale(.75);}
                      20%{transform: scale(1);}
                      40%{transform: scale(.75);}
                      60%{transform: scale(1);}
                      80%{transform: scale(.75);}
                      100%{transform: scale(1);}

                  }
    /******************** Footer Section*******************************/
    .footer_style
        {
            background-color:#a29bfe;
        }
        .footer_style p{ 
            margin-bottom:0!important;
            animation: footer 10s linear infinite;
        }
        @keyframes footer
                  {
                      0%{transform: scale(.75);}
                      20%{transform: scale(1);}
                      40%{transform: scale(.75);}
                      60%{transform: scale(1);}
                      80%{transform: scale(.75);}
                      100%{transform: scale(1);}

                  }
        /***********************Top Scroll Styling***************************/
        #myBtn
        {
            display:none;/*It will remain hide in default*/
            position:fixed;/*Fixed sticky position */
            bottom:30px;/*Button will be displayed at the bottom of the page */
            right:40px;/*Place the button 30px from the right */
            z-index:99;/*make sure it doesnot overlap */
            border:none;/*no border surronded */
            outline:none;/*no outline */
            background-color:#00A8FF;/*Sets a background color */
            color:white;/*Text Color */
            cursor:pointer;/*Add mouse pointer on hover */
            padding:10px;/*it will give some padding */
            border-radius:10px;/* Provide some round corners*/
        }
        #myBtn:hover{
            background:#606060;
        }
</style>