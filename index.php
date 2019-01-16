<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>

<div class="container-fluid" style="padding:0 ; margin:0;" >

     <nav class="navbar fixed-top navbar-light bg-primary" style="height:80px;">
         <div class="navbar-brand">
            <span><i class="fas fa-arrow-left"></i></span>
         </div>

         <div class="form-inline my-2 my-lg-0">
             <button type="button" class="btn  mybutton" style="background-color:#000; color:#fff">senden</button>
            <span><i class="fas fa-ellipsis-v"></i></span> 
        </div>
     </nav>

     <div class="container " style="margin-top:100px; ">

     <div class="myGrid">
        <form action="">
       <div class="center">
        <h1>
                 <input type="text" name="title" class="bigger_width" placeholder="Unbetitelte Form">
        </h1>
        <h4>
             <input type="text" class="bigger_width" name="subtitle"
                                   placeholder="Worum geht es ? ">
        </h4>

        <div class="question_container">
            <span id="button_toggleAddQuestionPopup" onclick="toggleAddQuestionPopup(); return false;">
                <i class="fas fa-plus-circle"></i> Fragen Hinzufuegen
           </span>
        </div>

        
        
        <div id="addQuestionPopup" class="question_button">
            <div>
                <span onclick="addSatzfrage(); return false;">Satzfrage</span>
                <span onclick="addBinaerfrage(); return false;">Binäre Frage</span>
                <span onclick="adddatumfrage(); return false;">datumfrage</span>
                <span onclick="addkurzantwort(); return false;">kurzantwort</span>
            </div>
        </div>

        <div id="insert_questions_before_me"></div>

    </div>
</form>
     </div>
     </div>

</div>





    <?php 
        
          

    ?>
</body>
</html>