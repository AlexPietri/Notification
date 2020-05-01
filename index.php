<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.css" rel="stylesheet">
</head>

<body >
    <div class="text-center" >
      <div class="container">
          <div class="row">
          <div class="mx-auto p-4 col-md-7">
              <h1 class="mb-4">Notification CapaMove</h1>
          </div>
          </div>
          <form method="post" action="send.php">
          <div class="form-group ">
              <label class="control-label requiredField" for="titre">
              <span class="asteriskField">
              *
              </span>
              Titre
              
              </label>
              <br>
              <input class="form-control" id="titre" name="titre" placeholder="Entrez le titre de la notification" type="text"/>
          </div>
          <div class="form-group ">
              <label class="control-label requiredField" for="message">
              <span class="asteriskField">
              *
              </span>
              Message
              
              </label>
              <br>
              <textarea class="form-control emojionearea" cols="20" id="message" name="message" placeholder="Entrez le contenu du message" rows="3"></textarea>
          </div>
          <div class="form-group" id="div_question">
              <label class="control-label requiredField" for="question">
              <span class="asteriskField">
              *
              </span>
              Ajouter un lien vers un article ?
              
              </label>
              <div class="">
              <label class="radio-inline">
              <input name="question" type="radio" value="yes"/>
              yes
              </label>
              <label class="radio-inline">
              <input name="question" type="radio" value="no"/>
              no
              </label>
              </div>
          </div>
          <div class="form-group " id="divLien">
              <label class="control-label " for="lien">
              Lien article
              </label>
              <input class="form-control" id="lien" name="lien" placeholder="Entrez le lien de l'article" type="url"/>
          </div>
          <div class="form-group " id="divAction">
              <label class="control-label " for="selectVue">
              Choisir une vue sur laquelle ouvrir
              </label>
              <select class="select form-control" id="selectVue" name="selectVue">
              <option value="Traficolor">
              Traficolor
              </option>
              <option value="Transport">
              Transport
              </option>
              <option value="WebCam">
              WebCam
              </option>
              <option selected="selected" value="">
              </option>
              </select>
          </div>
          <div class="form-group">
              <div>
              <button class="btn btn-primary " name="submit" type="submit">
              Submit
              </button>
              </div>
          </div>
          </form>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.js"></script>
  <script>

      $(document).ready(function() {
          $("#divLien").hide();
      $("#divAction").hide();
      var select = document.getElementById('selectVue');
      select.disabled = true;
      $('input:radio[name="question"]').change(function(){ 
          if ($(this).val() == 'yes'){
          $("#divLien").show(); 
          $("#divAction").hide();  
          select.disabled = true;
          }else if ($(this).val() == 'no'){    
          $("#divLien").hide();
          $("#divAction").show();
          select.disabled = false;
          }
      })
      
          $(".emojionearea").emojioneArea({
          useInternalCDN: true
      });  
      }); 

  </script>
</body>

</html>
