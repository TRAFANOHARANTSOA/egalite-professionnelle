<?php
/**
 * 
* Plugin Name: form-feedback Plugin
* Plugin URI: http://wordpress.org/plugins/feedback-form/
* Description: Feedback Plugin
* Author: Celia BELLOD
*/

add_action('wp_footer', 'form');
add_shortcode('feedback', 'feedback_shortcode');


function feedback_creer_tables() {
   global $wpdb;
   $nom_table = $wpdb->prefix . 'feedback';
   $sql = "CREATE TABLE IF NOT EXISTS $nom_table (
      feedback_id bigint(20) unsigned NOT NULL auto_increment,
      feedback_reaction varchar(20) NOT NULL,
      feedback_page varchar(150) NOT NULL,
      feedback_remarks varchar(255) NOT NULL,
      PRIMARY KEY  (feedback_id)
   );";
   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   dbDelta( $sql );
}
register_activation_hook( __FILE__, 'feedback_creer_tables');


if(isset($_POST['delete']) && !empty($_POST['delete'])){
  delete_feedback($_POST['delete']);
}

/*
* Init form html
* @return void
*/
function form(){

  if(!empty($_POST['input-reaction'])){
    $reaction = $_POST['input-reaction'];
  } else {
    $reaction = $_POST['reaction'];
  }

  if(isset($reaction) && !empty($reaction) && isset($_POST['url']) && !empty($_POST['url'])){
    
    if(isset($_POST['remarks'])){
      $remarks = "";
      foreach($_POST['remarks'] as $remark){
        $remarks .= $remark . ' - ';
      }
    } else {
      $remarks = '';
    }

    insert_feedback($reaction,$_POST['url'], $remarks);
  }
  $action = substr($_SERVER['REQUEST_URI'], 0, -6);
  echo  "<div class='position-absolute mr-5 form' id='form'>
          <div class='row px-5 py-2'>
              <div class='d-flex justify-content-end ml-4 mt-3'>
                  <img src='". plugins_url('form-feedback/img/close.png') . "' class='close-form' onclick='closeForm()'>
                </div>
              <div class='col-lg-12 col-md-12 d-flex justify-content-center align-items-center flex-column'>
                  <h2>Votre avis nous intéresse.</h2>
                  <form action='".$action."' method='POST'>
                    <div class='d-flex justify-content-center align-items-center' id='button-group'>
                        <input type='hidden' name='url' value='".$_SERVER['REQUEST_URI']."'>
                        <button type='submit' class='btn btn-circle btn-info btn-xl' name='reaction' value='good'><img src='". plugins_url('form-feedback/img/smile.png') . "'></button>
                        <button type='button' class='btn btn-circle btn-warning btn-xl mx-5' id='btn-middle' name='reaction' value='middle' onclick='openNewFormMiddle()'><img src='". plugins_url('form-feedback/img/smiley-neutre.png') . "'></button>
                        <button type='button' class='btn btn-circle btn-danger btn-xl' id='btn-bad' name='reaction' value='bad' onclick='openNewFormBad()'><img src='". plugins_url('form-feedback/img/sad.png') . "'></button>
                    </div>
                    <div id='form-extension'>
                      <div class='mt-5 d-flex justify-content-center flex-column align-items-center'>
                        <p>Qu'est ce que vous n'avez pas apprécié ?</p>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='checkbox' id='police' name='remarks[]' value='police'>
                            <label class='form-check-label' for='police'>Les polices</label>
                        </div>
                        <div class='form-check form-check-inline'>
                          <input class='form-check-input' type='checkbox' id='contenu' name='remarks[]' value='contenu'>
                          <label class='form-check-label' for='contenu'>Le contenu</label>
                        </div>
                        <div class='form-check form-check-inline'>
                          <input class='form-check-input' type='checkbox' id='colors' name='remarks[]' value='colors'>
                          <label class='form-check-label' for='colors'>Les couleurs</label>
                        </div>
                        <div class='form-check form-check-inline'>
                          <input class='form-check-input' type='checkbox' id='animation' name='remarks[]' value='animation'>
                          <label class='form-check-label' for='animation'>Les animations</label>
                        </div>
                        <input type='hidden' name='input-reaction' value='' id='input-reaction'>
                      </div>
                      <div class='d-flex justify-content-center'>
                        <button type='submit' class='btn btn-celia my-3'>Soumettre</button>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
        </div>";


}

function feedback_plugin_menu() {
  add_menu_page("feedback_plugin_menu", "Avis utilisateur", 0, "Avis utilisateur", "select_feedback", "dashicons-cover-image");
}
add_action( 'admin_menu', 'feedback_plugin_menu' );



/*
* Show all the message in the bdd
* @return void
*/
function select_feedback() {

  echo "<h1 style='text-align:center; padding-top:1rem; font-size: 2rem;'>Voici les avis </h1></br>
          <div style='display:flex; justify-content:center; flex-direction:column; align-items:center;'>";

   global $wpdb;
   $nom_table = $wpdb->prefix . 'feedback';
   $requete = "SELECT * FROM  $nom_table";
   $resultat = $wpdb->get_results( $requete );



   foreach( $resultat as $result ) {
    if($result->feedback_reaction == 'good'){
      $image = plugins_url('form-feedback/img/smile-back.png');
    } else if ($result->feedback_reaction == 'middle'){
      $image = plugins_url('form-feedback/img/smiley-neutre-back.png');
    }else if ($result->feedback_reaction == 'bad'){
      $image = plugins_url('form-feedback/img/sad-back.png');
    }



    if($result->feedback_page == 'Célia'){
      $celia[] = [
        'image' => $image,
        'remark' => $result->feedback_remarks,
        'id' => $result->feedback_id
      ];
 
    } else if ($result->feedback_page == 'Sergio'){
      $sergio[] = [
        'image' => $image,
        'remark' => $result->feedback_remarks,
        'id' => $result->feedback_id
      ];
    } else if ($result->feedback_page == 'Tsiry'){
      $tsiry[] = [
        'image' => $image,
        'remark' => $result->feedback_remarks,
        'id' => $result->feedback_id
      ];
    }

  }

  echo "<h2 style='text-align:center;'>Page de Célia</h2>
        <div style='display:flex; justify-content:center;'>";

  if(!empty($celia)){
    echo "<div style='display:flex; justify-content:center; width:100%; flex-wrap: wrap;'>";
    foreach($celia as $celia_data){
      echo "<div style='display:flex;flex-direction:column; align-items:center; margin-top:2rem;' >
              <form method='POST'>
                <input type='hidden' name='delete' value='". $celia_data['id']."'>
                <button type='submit' style=' margin-left: 5rem;
                                      cursor:pointer;
                                      background-color:transparent;
                                      border:0px;'
                                width='15vh'><img src='". plugins_url('form-feedback/img/close.png') . "'alt='img-contact' style='padding:10px' width='15vh'></button>
              </form>
              <img width='80vw' src='". $celia_data['image']  . "'>
              <p class='margin-left:1rem;'>".$celia_data['remark'] ."</p>
            </div>";    
      }

      echo "</div></div>";

  } else {
    echo "<div style='display:flex; justify-content:center; flex-direction:column; align-items:center; margin-top:1rem;' >
    <p class='margin-left:1rem;'>Aucuns avis</p></div></div>";
  }


    echo " <h2 style='text-align:center;' >Page de Sergio</h2>
            <div style='display:flex; justify-content:center;'>";

    if(!empty($sergio)){
      echo "<div style='display:flex;justify-content:center;flex-wrap: wrap;'>";
      foreach($sergio as $sergio_data){
        echo "<div style='display:flex;flex-direction:column; align-items:center; margin-top:2rem;' >
                <form method='POST'>
                  <input type='hidden' name='delete' value='". $sergio_data['id']."'>
                  <button type='submit' style=' margin-left: 5rem;
                                        cursor:pointer;
                                        background-color:transparent;
                                        border:0px;'
                                  width='15vh'><img src='". plugins_url('form-feedback/img/close.png') . "'alt='img-contact' style='padding:10px' width='15vh'></button>
                </form>
                <img width='80vw' src='". $sergio_data['image']  . "'>
                <p class='margin-left:1rem;'>".$sergio_data['remark'] ."</p>
              </div>";    
        }
      echo "</div></div>";
    } else {
      echo "<div style='display:flex; justify-content:center; flex-direction:column; align-items:center; margin-top:1rem;' >
      <p class='margin-left:1rem;'>Aucuns avis</p></div></div>";
    }


    echo "<h2 style='text-align:center;'>Page de Tsiry</h2>
          <div style='display:flex; justify-content:center;'>";
      if(!empty($tsiry)){
        echo "<div style='display:flex; justify-content:center;flex-wrap: wrap;'>";
        foreach($tsiry as $tsiry_data){
          echo "<div style='display:flex; justify-content:center; flex-direction:column; align-items:center; margin-top:2rem;flex-wrap: wrap;' >
                  <form method='POST'>
                    <input type='hidden' name='delete' value='". $tsiry_data['id']."'>
                    <button type='submit' style=' margin-left: 5rem;
                                          cursor:pointer;
                                          background-color:transparent;
                                          border:0px;'
                                    width='15vh'><img src='". plugins_url('form-feedback/img/close.png') . "'alt='img-contact' style='padding:10px' width='15vh'></button>
                  </form>
                  <img width='80vw' src='". $tsiry_data['image']  . "'>
                  <p class='margin-left:1rem;'>".$tsiry_data['remark'] ."</p>
                </div>";    
          }
      echo "</div></div>";
      } else {
        echo "<div style='display:flex; justify-content:center; flex-direction:column; align-items:center; margin-top:1rem;' >
        <p class='margin-left:1rem;'>Aucuns avis</p></div></div>";
      }


  echo "</div>
    </div>
  </div>";

}



/*
* Insert message in the bdd via form in index.php
* @return void
*/
function insert_feedback($reaction, $url, $remarks) {
    $reaction = $reaction;
    $url = $url;
    $remarks = $remarks;
    global $wpdb;
    if(stripos($url, 'celia') == true){
      $page = 'Célia';
    } else if(stripos($url, 'sergio') == true){
      $page = 'Sergio';
    }else if(stripos($url, 'tsiry') == true){
      $page = 'Tsiry';
    }else {
      $page = '';
    };

     $nom_table = $wpdb->prefix . 'feedback';
     $data = array('feedback_reaction' => $reaction, 'feedback_page' => $page, 'feedback_remarks' => $remarks);

     $resultat = $wpdb->insert($nom_table, $data);

  }


/*
* Delete the message in the bdd
* @param id int
* @return void
*/
function delete_feedback($id) {
  global $wpdb;
   $nom_table = $wpdb->prefix . 'feedback';
   $data = array('feedback_id' => $id);

   $resultat = $wpdb->delete($nom_table, $data);

    if ( ! ( $resultat === FALSE ) ) {
      echo  "<p style='text-align:center;
                      padding-left:15vw;
                      padding-top:1vh;
                      padding-bottom:1vh;
                      margin:auto;
                      background-color: #B0F2B6;
                      width: auto;
                      font-weight:bold;
                      height: 5vh;'>Cet avis à bien été supprimé !</p>";
    } else {
      echo "<p style='text-align:center;
                      padding-left:15vw;
                      padding-top:1vh;
                      padding-bottom:1vh;
                      margin:auto;
                      background-color:	#d9534f;
                      color: white;
                      width: auto;
                      font-weight:bold;
                      height: 5vh;'>Un problème est survenu ! Merci de recommencer.</p>";
    }
}

/*
* Register css style for form plugin
*/
function feedback_register_assets() {
    wp_enqueue_style('css', plugins_url('form-feedback/style.css'));
    wp_enqueue_script('js', plugin_dir_url(__FILE__).'main.js', false, true);

}
add_action('wp_enqueue_scripts', 'feedback_register_assets' ,15);
