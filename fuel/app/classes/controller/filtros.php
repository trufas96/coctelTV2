<?php
use Firebase\JWT\JWT;
class Controller_filtros extends Controller_Base
{
   
public function post_create()
{
    $authenticated = $this->authenticate();
    $arrayAuthenticated = json_decode($authenticated, true);
     if($arrayAuthenticated['authenticated'])
     {
      $decodedToken = $this->decodeToken();
      
          try 
          {          
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

                        $input = $_POST;
                        $newReceta = $this->newReceta($input);
                        $json = $this->saveReceta($newReceta);
          }

          catch (Exception $e)
          {
              $json = $this->response(array(
                      'code' => 500,
                      'message' => 'error de servidor',
                      'data' => '' 

              ));
              return $json;
              }
   
        
    }     
}


private function newReceta($input)
{
  $recetas = new Model_Recetas();
  $recetas->name = $input['name'];
  return $recetas;
}


private function saveReceta($recetas)
{
    $recetaExists = Model_Recetas::find('all');
    if(empty($recetaExists))
    {
        $recetaToSave = $receta;
        $recetaToSave->save();
        $arrayData = array();
        $arrayData['name'] = $recetas->name;
        return $this->respuesta(201, 'Receta creado', $arrayData);
    }
    else
    {
    return $this->respuesta(204, 'Receta ya creado', '');
    }
}


//update
public function get_show()
{

      $authenticated = $this->authenticate();
      $arrayAuthenticated = json_decode($authenticated, true);
      if($arrayAuthenticated['authenticated'])
      {
        $decodedToken = $this->decode($arrayAuthenticated['data']);
            

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
}
  


}
?>