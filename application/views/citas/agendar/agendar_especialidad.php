<section class="content-header">
    <ol class="breadcrumb">
        <li><i class="fa fa-cogs"></i> Seleccione su especialidad.</li>
    </ol>
</section>
<section class="content">  
    <div class="col-md-6 col-md-push-3">
        <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            </div>        
        </div>
    </div>      
</section>
<section class="content">  
    <div class="row"> 
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header" style="text-align: center; padding-top: 10px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info disabled">Especialidad</button>
                        <button type="button" class="btn btn-info popover-msj" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Selecciona la especialidad de interés y la información se irá filtrando.">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>            
                    </div>
                </div>
                <div class="box-body no-padding">
                    <table id="table" class="table">
                        <tbody>
                            <?php  
                                if(isset($especialidades) && !empty($especialidades)){
                                    foreach ($especialidades as $key) {
                                        echo
                                        '<tr>
                                          <td>
                                            <a href="'.base_url().'citas/agendar/especialidad-'.base64_encode($key->id_tipo_especialidad).'">
                                                <span class="badge pull-right">'.$key->cantidad_doctores.'</span>
                                                '.mysql_to_utf8($key->nombre_especialidad, 'titulo').'
                                            </a>
                                          </td>                                                
                                        </tr>';
                                    }
                                } 
                            ?>                                                                  
                        </tbody>
                    </table>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item ">
                    Solo aparecerán resultados relacionado a doctores activos.
                </li>
            </ul>
        </div>
        <div class="col-md-8"> 
            <div class="box box-info" >
                <div class="box-header">
                    <div class="box-title" style="font-size: 14px;"><i class="fa fa-calendar"></i>&nbsp; Ultimos Horarios Publicados</div>
                </div>
                <div class="chat">
                    <?php  
                        if(isset($doctores) && !empty($doctores)){
                            foreach ($doctores as $key) {
                                echo
                                '<div class="box-footer item">                
                                    <img src="'.base_url().$key->url_imagen_perfil.'" alt="user image" class="online"/>
                                    <p class="message">
                                        <a href="'.base_url().'citas/perfil/doctor-'.base64_encode($key->id_usuario).'" class="name" style="margin-top: 10px;">
                                          '.mysql_to_utf8($key->nombre_doctor, 'titulo').'
                                        </a>
                                    </p>
                                </div>';
                            }
                        } 
                    ?>         
                </div>
            </div>
        </div>
    </div>  
</section>