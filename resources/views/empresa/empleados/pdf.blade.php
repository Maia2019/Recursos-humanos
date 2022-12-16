<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        @page { margin: 100px; }
            
            #footer 
            { 
                position: fixed; 
                left: 0px;
                bottom: -180px; 
                right: 0px; 
                height: 50px; 
                background-color: #329fda; 
                color: #FFFFFF;

            }
            #footer .page:after
            { 
                content: counter(page, decimal); 
                float: right;
                background-color: #329fda; 
                color: #FFFFFF;
             
            }
            
          
           
           
 
  
    </style>

    

    <title>Document</title>
</head>
<body>
    
    <div id="content" class="container">
        
        
        <!--Tabla-->
        <table style="border:3px solid #329fda width:100%" class="table table-condensed table-hover">
            
            <!-- Cabecera del reporte -->
            <thead style="background-color:#329fda">
                <tr>
                    <th class="h2 text-center" colspan="12"style="color:#FFFFFF">Listado de empleados</th>
                </tr>
            </thead>
             <!-- Datos del reporte -->
            <thead style="background-color:#FFFFFF; border:0">
                <tr>
                    <th colspan="12">
                        <table width="100%">
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    <!-- Emision -->
                                    <p>FECHA EMISIÓN: <strong>{{Carbon\Carbon::parse(Carbon\Carbon::now('America/Argentina/Buenos_Aires'))->format('d/m/Y')}}</strong></p>
                                    <p>HORA EMISIÓN: <strong>{{Carbon\Carbon::parse(Carbon\Carbon::now('America/Argentina/Buenos_Aires'))->toTimeString()}}</strong></p>
                                   
                                </td>
                            </tr>
                        </table>
                    </th>
                </tr>
            </thead>
            <thead style="background-color:#329fda">
                    <tr>
                        <th width="20%" style="color:#FFFFFF" height="25px" ><p class="text-uppercase">Nombre</p></th>
                        <th width="20%" style="color:#FFFFFF" height="25px" ><p class="text-uppercase">Apellido</p></th>
                        <th width="20%" style="color:#FFFFFF" height="25px"><p class="text-uppercase">Dni</p></th>
                        <th width="40%" style="color:#FFFFFF" height="25px"><p class="text-uppercase">Puesto</p></th>
                        <!--th width="20%" style="color:#FFFFFF" height="25px"><p class="text-uppercase">Fecha</p></th-->
                        
                                    
                    </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $p)
                <tr>
                    <td style="border:1px solid grey"><p class="text-uppercase">{{$p->nombre }}</p></td>
                    <td style="border:1px solid grey"><p class="text-uppercase">{{$p->apellido }}</p></td>
                    <td style="border:1px solid grey"><p class="text-uppercase">{{$p->dni }}</p></td>
                    <td style="border:1px solid grey"><p class="text-uppercase">{{$p->puesto->nombre_puesto }}</p></td>
                    
                   
                    
                </tr>         
                @endforeach
            </tbody>

        </table>
        <div class="page-break"></div>

    </div>

    

 <script type="text/php">
    if ( isset($pdf) ) {
        $pdf->page_script('
            $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
            $pdf->text(270, 800, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
        ');
    }
</script>

</body>
</html>
