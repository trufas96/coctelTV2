<?php
class Controller_recetas extends Controller_Base
{
   
public function post_create()
{
    $authenticated = $this->authenticate();
    $arrayAuthenticated = json_decode($authenticated, true);
     if($arrayAuthenticated['authenticated'])
     {
      $decodedToken = $this->decode($arrayAuthenticated['data']);
      
          try 
          {
             //photo
            /* if (!isset($_FILES['profilePReceta']) || empty($_FILES['profilePReceta'])) 
             {
                        $arrayData = array();
                        $arrayData['files'] = $_FILES;
                        $arrayData['post'] = $_POST; 
                           $json = $this->response(array(
                               'code' => 400,
                               'message' => 'La profilPReceta esta vacia',
                               'data' =>  $arrayData
                           ));
                           return $json;
              }*/

              //name
              if(!isset($_POST['name']) || empty($_POST['name']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'El nombre esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }

              //ingredientes
              if(!isset($_POST['ingrediente1']) || empty($_POST['ingrediente1']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente1 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente2']) || empty($_POST['ingrediente2']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente2 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente2']) || empty($_POST['ingrediente2']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente3 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente3']) || empty($_POST['ingrediente3']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente3 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente4']) || empty($_POST['ingrediente4']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente4 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente5']) || empty($_POST['ingrediente5']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente5 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente6']) || empty($_POST['ingrediente6']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente6 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }
              //ingredientes
              if(!isset($_POST['ingrediente7']) || empty($_POST['ingrediente7']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente7 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }

              //ingredientes
              if(!isset($_POST['ingrediente8']) || empty($_POST['ingrediente8']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente9 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }

              //ingredientes
              if(!isset($_POST['ingrediente9']) || empty($_POST['ingrediente9']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente10 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }

              //ingredientes
              if(!isset($_POST['ingrediente10']) || empty($_POST['ingrediente10']))
              {
                        $json = $this->response(array(
                               'code' => 400,
                               'message' => 'algun ingrediente10 esta vacio',
                               'data' => '' 
                           ));
                           return $json;
              }


              /*$config = array(
                  'path' => DOCROOT . 'assets/img',
                  'randomize' => true,
                  'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
              );

              Upload::process($config);
              $photoToSave = $profilPReceta;
              if (Upload::is_valid())
              {
                  Upload::save();
                  foreach(Upload::get_files() as $file)
                  {
                    $photoToSave = 'http://'.$_SERVER['SERVER_NAME'].'/coctelTV/public/assets/img/'.$file['saved_as'];
                  }
              }

              foreach (Upload::get_errors() as $file)
              {
                  return $this->response(array(
                      'code' => 500,
                      'message' => 'Error en el servidor',
                      'data' => $file 
                  ));
              }*/
                  
                         $newReceta = $this->newReceta($_POST, /*$photoToSave,*/ $decodedToken);
                         $json = $this->saveReceta($newReceta);
                         return $json;
          }

          catch (Exception $e)
          {
              $json = $this->response(array(
                      'code' => 500,
                      'message' => "TRYCATCH ::: ".$e->getMessage(),
                      'data' => $file 

              ));
              return $json;
              }
   
        
    }     
}


private function newReceta($input)
{
  $receta = Model_Recetas();
  $receta->name = $input['name'];
  $receta->ingrediente1 = $input['ingrediente1'];
  $receta->ingrediente2 = $input['ingrediente2'];
  $receta->ingrediente3 = $input['ingrediente3'];
  $receta->ingrediente4 = $input['ingrediente4'];
  $receta->ingrediente5 = $input['ingrediente5'];
  $receta->ingrediente6 = $input['ingrediente6'];
  $receta->ingrediente7 = $input['ingrediente7'];
  $receta->ingrediente8 = $input['ingrediente8'];
  $receta->ingrediente9 = $input['ingrediente9'];
  $receta->ingrediente10 = $input['ingrediente10'];
  $receta->profilPReceta = "";
  return $receta;
}


private function saveReceta($receta)
{
    $recetaExists = Model_Recetas::find('all', 
            array('where' => array(
                 array('name', '=', $receta->name),
                  )
             )
           );
    if(empty($recetaExists))
    {
        $recetaToSave = $receta;
        $recetaToSave->save();
        $arrayData = array();
        $arrayData['name'] = $receta->name;
        return $this->respuesta(201, 'Receta creado', $arrayData);
    }
    else
    {
    return $this->respuesta(204, 'Receta ya creado', '');
    }
}


//update
public function get_download()
{

      $authenticated = $this->authenticate();
      $arrayAuthenticated = json_decode($authenticated, true);
      if($arrayAuthenticated['authenticated'])
      {
        $decodedToken = $this->decode($arrayAuthenticated['data']);
            if ($decodedToken->id != 1)
            {

              $recetas = Model_Recetas::find('all');
                if(!empty($recetas))
                {
                  foreach ($recetas as $key => $receta) 
                  {
                    $arrayreceta[] = $receta;
                  }
                  $json = $this->response(array(
                    'code' => 200,
                    'message' => 'mostrando lista de recetas del usuario', 
                    'data' => $arrayreceta
                    )); 
                    return $json; 
                }
                else
                {
                  $json = $this->response(array(
                    'code' => 202,
                    'message' => 'Aun no tienes ningun receta',
                    'data' => ''
                  ));
                return $json;
                }
            }
            else
            {
              return $this->respuesta(400, 'Eres el admin', '');
            }
      }
}  


}
?>