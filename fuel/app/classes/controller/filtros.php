<?php
use Firebase\JWT\JWT;
class Controller_filtros extends Controller_Base
{
   
public function post_create()
{
    /*$authenticated = $this->authenticate();
    $arrayAuthenticated = json_decode($authenticated, true);
     if($arrayAuthenticated['authenticated'])
     {
      $decodedToken = $this->decodeToken();
      */
          /*try 
          { */         
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
                        $newFiltros = $this->newFiltros($input);
                        $json = $this->saveFiltros($newFiltros);
          /*}
          catch (Exception $e)
          {
              $json = $this->response(array(
                      'code' => 500,
                      'message' => 'error de servidor',
                      'data' => '' 

              ));
              return $json;
          }
   
        
    /*}     */
}


private function newFiltros($input)
{
  $filtros = new Model_Filtros();
  $filtros->name = $input['name'];
  return $filtros;
}


private function saveFiltros($filtros)
{
    $filtroExists = Model_Filtros::find('all');
    if(empty($filtroExists))
    {
        $filtrosToSave = $filtro;
        $filtrosToSave->save();
        $arrayData = array();
        $arrayData['name'] = $filtros->name;
        return $this->respuesta(201, 'filtro creado', $arrayData);
    }
    else
    {
    return $this->respuesta(204, 'filtro ya creado', '');
    }
}


//update
public function get_show()
{

      /*$authenticated = $this->authenticate();
      $arrayAuthenticated = json_decode($authenticated, true);
      if($arrayAuthenticated['authenticated'])
      {
        $decodedToken = $this->decode($arrayAuthenticated['data']);*/
            

              $filtros = Model_Filtros::find('all');
              if(!empty($filtros))
              {
                  foreach ($filtros as $key => $filtro) 
                  {
                    $arrayfiltro[] = $filtro;
                  }
                  $json = $this->response(array(
                    'code' => 200,
                    'message' => 'mostrando lista de filtros del usuario', 
                    'data' => $arrayfiltro
                    )); 
                    return $json; 
            }
            else
            {
                  $json = $this->response(array(
                    'code' => 202,
                    'message' => 'Aun no tienes ningun filtro',
                    'data' => ''
                  ));
                return $json;
            }     
      //}
}
  


}
?>